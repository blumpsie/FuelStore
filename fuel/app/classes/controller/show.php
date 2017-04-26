<?php

/*
 * Author: Mark Erickson  
 */

class Controller_Show extends Controller_Base {
    
    public function action_order($order_id) {
        
        // get the order
        $order = Model_Order::find($order_id);
        
        // get all the selections for the order
        $selections = Model_Selection::find('all', [
            "where" => [['order_id', $order_id]],
        ]);
        
        
        $total = 0;
        
        //calculate subtotals and the total
        foreach ($selections as $selection)
        {
            $subtotal[$selection->id] = $selection->product->price * $selection->quantity;
            $total += $subtotal[$selection->id];
        }
        
       $data = [
           'selections' => $selections,
           'subtotal' => $subtotal,
           'total' => $total,
           'order' => $order,
       ];
       
       $view = View::forge("home/showOrder.tpl", $data);
       return $view;
    }
}