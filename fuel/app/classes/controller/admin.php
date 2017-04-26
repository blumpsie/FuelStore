<?php

/* 
 * Author: Mark Erickson
 */

class Controller_Admin extends Controller_Base {
    

    public function before() {
        parent::before();
        if (is_null(Session::get('login')))
        {
            return Response::redirect('/authenticate/login');
        }
        if (!Session::get('login')->is_admin)
        {
            return Response::redirect('/authenticate/noAccess');
        }
    }
    
    // Gets all the categories
    public function getCategories()
    {
        foreach (Model_Category::find('all') as $category)
        {
            $categories[$category->id] = $category->name;
        }
        return $categories;
    }
    
    // Gets all the photos
    public function getPhotos()
    {
        foreach (Model_Photo::find('all') as $photo)
        {
            $photos[$photo->id] = $photo->name;
        }
        return $photos;
    }
    
    // initial add category function
    public function action_addCategory()
    {
        $validator = Validation::forge();
        $data = [
            'categories' => $this->getCategories(),
            'reentrantUrl' => "admin/addCategoryReentrant",
            'page_title' => 'Add a Category',
        ];
        
        $view = View::forge("admin/addCategory.tpl", $data);
        $view->set_safe('validator', $validator);
        return $view;
    }
    
    // returning add category function
    public function action_addCategoryReentrant()
    {
        $cancel = Input::post('cancel');
        if(!is_null($cancel))
        {
            return Response::redirect("/");
        }
        
        $validator = Validators::addCategoryValidator();
        
        $message = "";
        try
        {
            $validated = $validator->run(Input::post());
            if(!$validated)
            {
                throw new Exception();
            }
            $validData = $validator->validated();
            
            $category = Model_Category::forge();
            $category->name = $validData['name'];
            $category->save();
            
            return Response::redirect("/admin/addCategory");
        } catch (Exception $ex) {
            $message = $ex->getMessage();
        }
        
        $data = [
            'categories' => $this->getCategories(),
            'name' => Input::post('name'),
            'message' => $message,
        ];
        
        $view = View::forge("admin/addCategory.tpl", $data);
        $view->set_safe('validator', $validator);
        return $view;
    }
    
    // Initial add product
    public function action_addProduct()
    {
        $validator = Validation::forge();
        
        $data = [
            'categories' => $this->getCategories(),
            'photos' => $this->getPhotos(),
            'reentrantUrl' => "admin/addProductReentrant",
            'page_title' => "Add Product"
        ];
        
        $view = View::forge("admin/addProduct.tpl", $data);
        $view->set_safe('validator', $validator);
        return $view;
    }
    
    // Returning add product
    public function action_addProductReentrant()
    {
        $cancel = Input::post('cancel');
        if (!is_null($cancel))
        {
            return Response::redirect("/");
        }
        
        $validator = Validators::addProductValidator();
        
        $message = "";
        try
        {
            $validated = $validator->run(Input::post());
            if (!$validated)
            {
                throw new Exception();
            }
            $validData = $validator->validated();
            
            $product = Model_Product::forge();
            $product->name = $validData['name'];
            $product->category_id = $validData['category_id'];
            $product->price = $validData['price'];
            $product->description = $validData['description'];
            $product->photo_id = $validData['photo_id'];
            $product->save();
            
            return Response::redirect("/cart/show/$product->id");
        } catch (Exception $ex) {
            $message = $ex->getMessage();
        }
        
        $data = [
            'categories' => $this->getCategories(),
            'photos' => $this->getPhotos(),
            'name' => Input::post('name'),
            'category' => Input::post('category'),
            'price' => Input::post('price'),
            'description' => Input::post('description'),
            'photo' => Input::post('photo'),
            'message' => $message,
        ];
        
        $view = View::forge("admin/addProduct.tpl", $data);
        $view->set_safe('validator', $validator);
        return $view;
    }
    
    public function action_allOrders()
    {
        $orders = Model_Order::find('all');
        
        $data = [
            'orders' => $orders,
        ];
        
        $view = View::forge("admin/allOrders.tpl", $data);
        return $view;
    }
    
    public function action_removeOrder($order_id)
    {
        $order = Model_Order::find($order_id);
        $selections = Model_Selection::find('all', [
            "where" => [['order_id', $order->id]],
        ]);
        $confirm = Input::param('confirm');
        
        if(!$confirm)
        {
            Session::set_flash('confirm', 1);
            Session::set_flash('message', 'Are you sure?');
            Session::set_flash('button_title', "Confirm Remove");
            return Response::redirect("/show/order/$order_id");
        }
        
        foreach($selections as $selection)
        {
            $selection->delete();
        }
        
        $order->delete();
        
        return Response::redirect('/');
    }
}

