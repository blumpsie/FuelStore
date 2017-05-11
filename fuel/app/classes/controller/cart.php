<?php
class Controller_Cart extends Controller_Base {

  public function before() {
    parent::before();
    if (is_null(Session::get('cart'))) {
      Session::set('cart', []);
      $itemsInCart = false;
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
    $itemsInCart = true; // Need otherwise PHP throws a hissy fit about 
                         // undefined variable
    
    $product_id = Input::get('product_id');
    $quantity = Input::get('quantity');
    
    if(Session::get('cart') == [])
    {
        $itemsInCart = false;
    }
    // logic for adding to the cart
    if(isset($product_id))
    {
        $cart[$product_id] = $quantity;
        Session::set('cart', $cart);
        $itemsInCart = true;
    }
    
    // logic for deleting from the cart
    if (!is_null($product_id) && $quantity == 0)
    {
        unset($cart[$product_id]);
        Session::set('cart', $cart);
        if(Session::get('cart') == [])
        {
            $itemsInCart = false;
        }
    }
    
    // creating the cart
    $cart_info = [];

    foreach (Session::get('cart') as $key => $value)
    {
         
        $product = Model_Product::find($key);
       
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
        $total_price += $value['subtotal'];
    }
    $data = [
        'cart_info' => $cart_info,
        'total_price' => $total_price,
        'itemsInCart' => $itemsInCart,
        'cart' => Session::get('cart'),
        'product_id' => $product_id,
        'quantity' => $quantity,
    ];

    return View::forge('cart/index.tpl', $data);
  }
}
