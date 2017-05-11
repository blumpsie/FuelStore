<?php
/*
 * Author: Mark Erickson
 */

class Controller_User extends Controller_Base {
    
    public function before() {
        parent::before();
        if (is_null(Session::get('login')))
        {
            return Response::redirect('/authenticate/login');
        }
        
        $login = Session::get('login');
        $this->user = Model_User::find($login->id);
    }
    
    public function action_myOrders()
    {
        $user = $this->user;
        // get all the users orders
        $orders = Model_Order::find('all', [
           "where" => [['user_id', $user->id]], 
        ]);
        
        $data = [
            'user' => $user,
            'orders' => $orders,
        ];
        
        $view = View::forge("user/myOrders.tpl", $data);
        return $view;
    }
    
    public function action_placeOrder()
    {
        // get the currently logged in user
        $user = $this->user;
        
        //get the cart
        $theCart = Session::get('cart');
        
        // Store the order in the database
        $order = Model_Order::forge();
        $order->user_id = $user->id;
        $order->created_at = date("Y-m-d G:i:s", time());
        $order->save();
       
        // Store the selections
        foreach ($theCart as $key => $value)
        {
            $selection = Model_Selection::forge();
            $selection->order_id = $order->id;
            $selection->product_id = $key;
            $selection->quantity = $value;
            $selection->save();
        }
        
        Session::set('cart', []);
        
        return Response::redirect("user/myOrders");
    }
}