<?php

class Controller_Home extends Controller_Base {

  public function before() {
    parent::before();
    if (is_null(Session::get('order'))) {
      Session::set('order', 'name');
    }
  }

  public function action_index() {
    $categories[0] = "-- ALL --";
    foreach (Model_Category::find('all') as $category) {
      $categories[$category->id] = $category->name;
    }
    
    $products = Model_Product::find('all', [
            "order_by" => [Session::get('order')],
    ]);

    $data = [
        'products' => $products,
        'categories' => $categories,
    ];
    return View::forge('home/index.tpl', $data);
  }

}
