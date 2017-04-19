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
    $data = [
        'product' => $product,
    ];
    $view = View::forge('home/productSelect.tpl', $data);
    $view->set_safe('description', $product->description);
    return $view;
  }
  
  public function action_index() {
    $cart = Session::get('cart');
    $cart_info = [];
    $total_price = 0;
    $data = [
        'cart_info' => $cart_info,
        'total_price' => $total_price,
    ];

    return View::forge('cart/index.tpl', $data);
  }
}
