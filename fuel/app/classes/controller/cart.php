<?php
class Controller_Cart extends Controller_Base {

  public function before() {
    parent::before();
    if (is_null(Session::get('cart'))) {
      Session::set('cart', []);
    }
  }

  public function action_show($product_id) {
    $product = Model_Product::find($product_id);
    $quantities = range(0,10);
    $data = [
        'product' => $product,
        'quantities' => $quantities,
    ];
    $view = View::forge('home/productSelect.tpl', $data);
    $view->set_safe('description', $product->description);
    return $view;
  }
  
  public function action_index() {
    $cart = Session::get('cart');
    $itemsInCart = true;
    
    // logic for deleting from the cart
    if (!is_null($product) && $quantity == 0)
    {
        Session::delete($product_id);
        if(is_null(Session::get('cart')))
        {
            $itemsInCart = false;
        }
    }
    
    // logic for adding to the cart
    if (!is_null($product_id) && $quantity != 0)
    {
        $cart[$product_id] = $quantity;
        Session::set('cart', $cart);
    }
    
    // creating the cart
    $cart_info = [];
    foreach (Session::get('cart') as $key => $value)
    {
        $product = R::load('product', $key);
        $cart_info[$key]= [ 
                'name' => $product->name, 
                'price' => $product->price, 
                'quantity' => $value,
                'subtotal' => $product->price * $value,
        ];
    }
    
    // getting the total price
    $total_price = 0;
    foreach ($cart_info as $key => $value)
    {
        $total += $value['subtotal'];
    }
    $data = [
        'cart_info' => $cart_info,
        'total_price' => $total_price,
        'itemsinCart' => $ItemsinCart,
    ];

    return View::forge('cart/index.tpl', $data);
  }
}
