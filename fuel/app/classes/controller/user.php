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
}