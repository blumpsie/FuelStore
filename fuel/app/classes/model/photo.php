<?php

class Model_Photo extends \Orm\Model {
  
  protected static $_table_name = 'photo';
  
  protected static $_properties = [
      'id',
      'name',
  ];
    
  // use $photo->products to get the products with this category
  protected static $_has_many = [
    'products' => [
        'model_to' => 'Model_Product',
    ]
  ];  
}
