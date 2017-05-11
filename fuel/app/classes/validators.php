<?php

class Validators {

  public static function addCategoryValidator() {
    $isUnique = function($name) {
      $categoryWithName = Model_Category::find('first', [
              'where' => [
                  ['name', $name]
              ]
      ]);
      return is_null($categoryWithName);
    };
    $validator = Validation::forge();
    $validator->add('name', 'name')
        ->add_rule('trim')
        ->add_rule('required')
        ->add_rule(['unique' => $isUnique])
        ->add_rule('min_length', 3)
        ->add_rule('match_pattern', '/^[a-zA-Z]+$/')
    ;
    $validator
        ->set_message('required', ':label cannot be empty')
        ->set_message('unique', 'a duplicate exists')
        ->set_message('min_length', 'at least 3 chars')
        ->set_message('match_pattern', 'must be only letters')
    ;

    return $validator;
  }

  public static function addProductValidator() {
    $isUnique = function($name) {
      $productWithName = Model_Product::find('first', [
              'where' => [
                  ['name', $name]
              ]
      ]);
      return is_null($productWithName);
    };

    $validator = Validation::forge();

    $validator->add('name', 'name')
        ->add_rule('trim')
        ->add_rule('required')
        ->add_rule('min_length', 3)
        ->add_rule('valid_string', ['alpha', 'spaces'])
        ->add_rule(['unique' => $isUnique])
    ;
    $validator->add('price', 'price')
        ->add_rule('trim')
        ->add_rule('required')
        ->add_rule('match_pattern', '/^\d+(\.\d{2})?$/')
    ;
    $validator->add('description', 'description');

    $validator->add('category_id', 'category')
        ->add_rule('numeric_min', 1)
    ;

    $validator->add('photo_id', 'category')
    ;

    // modify error messages
    $validator
        ->set_message('required', ':label cannot be empty')
        ->set_message('min_length', 'at least :param:1 char(s)')
        ->set_message('image_file_exists', 'image file does not exist')
        ->set_message('unique', 'a duplicate exists')
    ;
    $validator->field('price')
        ->set_error_message('match_pattern', 'invalid price format')
    ;
    $validator->field('category_id')
        ->set_error_message('numeric_min', 'must choose something')
    ;
    return $validator;
  }

  public static function modifyProductValidator($product_id) {
    $isUnique = function($name, $product_id) {
      $productWithName = Model_Product::find('first', [
              'where' => [
                  ['name', $name]
              ]
      ]);
      return is_null($productWithName) || $productWithName->id == $product_id;
    };

    $validator = Validation::forge();

    $validator->add('name', 'name')
        ->add_rule('trim')
        ->add_rule('required')
        ->add_rule('min_length', 3)
        ->add_rule('valid_string', ['alpha', 'spaces'])
        ->add_rule(['unique' => $isUnique], $product_id)
    ;
    $validator->add('price', 'price')
        ->add_rule('trim')
        ->add_rule('required')
        ->add_rule('match_pattern', '/^\d+(\.\d{2})?$/')
    ;
    $validator->add('description', 'description');

    $validator->add('category_id', 'category')
    ;

    $validator->add('photo_id', 'category')
    ;

    // modify error messages
    $validator
        ->set_message('required', ':label cannot be empty')
        ->set_message('min_length', 'at least :param:1 char(s)')
        ->set_message('image_file_exists', 'image file does not exist')
        ->set_message('unique', 'a duplicate exists')
    ;
    $validator->field('price')
        ->set_error_message('match_pattern', 'invalid price format')
    ;
    return $validator;
  }
  
  public static function createLoginValidator()
  {
      $isUnique = function($name) {
      $userWithName = Model_User::find('first', [
              'where' => [
                  ['name', $name]
              ]
      ]);
      return is_null($userWithName);
    };
    
    $validator = Validation::forge();

    $validator->add('name', 'name')
        ->add_rule('trim')
        ->add_rule('required')
        ->add_rule('min_length', 3)
        ->add_rule(['unique' => $isUnique])
    ;
    
    $validator->add('email', 'email')
        ->add_rule('trim')
        ->add_rule('required')
        ->add_rule('valid_email')
    ;
    
    $validator->add('password', 'password')
        ->add_rule('trim')
        ->add_rule('required')
        ->add_rule('min_length', 3)
    ;
    
    $validator->add('password_confirm', 'password_confirm')
        ->add_rule('trim')
        ->add_rule('required')
        ->add_rule('match_field', 'password')
    ;
    
    $validator
        ->set_message('required', ':label cannot be empty')
        ->set_message('min_length', 'at least :param:1 char(s)')
        ->set_message('image_file_exists', 'image file does not exist')
        ->set_message('unique', 'a duplicate exists')
        ->set_message('match_field', 'passwords don\'t match')
    ;
    return $validator;
  }
}
