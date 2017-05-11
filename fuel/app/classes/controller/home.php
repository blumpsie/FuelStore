<?php

class Controller_Home extends Controller_Base {

  public function before() {
    parent::before();
    if (is_null(Session::get('order'))) {
      Session::set('order', 'name');
      Session::set('category_id', 0);
    }
  }
  
  public function action_index() {
    $categories[0] = "-- ALL --";
    foreach (Model_Category::find('all') as $category) {
      $categories[$category->id] = $category->name;
    }
    
   if (Session::get('category_id') == 0)
   {
        $products = Model_Product::find('all', [
           "order_by" => [Session::get('order')],
        ]);
   }
   else
   {
       $products = Model_Product::find('all', [
               "where" => [['category_id',Session::get('category_id')]],
               "order_by" => [Session::get('order')], 
        ]);
       
  }
   
    $data = [
        'products' => $products,
        'categories' => $categories,
        'category' => Session::get('category_id'),
    ];
    return View::forge('home/index.tpl', $data);
  }
  
  public function action_setProductOrder($field)
  {
      Session::set('order', $field);
      return Response::redirect("/");
  }

  public function action_setCategory()
  {
      $field = Input::get('category');
      Session::set('category_id', $field);
      return Response::redirect("/");
  }
}
