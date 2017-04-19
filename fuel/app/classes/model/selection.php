<?php

class Model_Selection extends \Orm\Model {
  
  protected static $_table_name = 'selection';
  
  protected static $_properties = [
      'id',
      'order_id',
      'product_id',
      'quantity',
  ];

  // use $selection->product to get the product that owns this selection
  // use $selection->order to get the order that owns this selection
  protected static $_belongs_to = [
    'product' => [
        'model_to' => 'Model_Product',
    ],
    'order' => [
        'model_to' => 'Model_Order',
    ]
  ];

}
