<?php

namespace Fuel\Tasks;

use Model_Category;
use Model_Order;
use Model_Photo;
use Model_User;
use Model_Selection;
use Model_Product;

class PopulateTables {

  public static function run() {    
    
    echo "\n---- users\n";

    $user_data = [
        ["john", "arachnid@oracle.com", "john"],
        ["kirsten", "buffalo@go.com", "kirsten"],
        ["bill", "digger@gmail.com", "bill"],
        ["mary", "elephant@wcupa.edu", "mary"],
        ["joan", "kangaroo@upenn.edu", "joan"],
        ["alice", "feline@yahoo.com", "alice"],
        ["carla", "badger@esu.edu", "carla"],
        ["dave", "warthog@temple.edu", "dave"],
    ];

    foreach ($user_data as $data) {
      list($name, $email, $password) = $data;
      $user = Model_User::forge();
      $user->name = $name;
      $user->email = $email;
      $user->password = hash('sha256', $password);
      $user->save();
      echo "user $user->id: $name\n";
    }

    echo "\n---- admins\n";
    
    foreach (['dave', 'carla'] as $name) {
      $user = Model_User::find('first', [
              'where' => ['name' => $name],
      ]);
      $user->is_admin = true;
      $user->save();
      echo "admin: $name\n";
    }
    
    echo "\n---- categories\n";

    foreach ([
    'video-audio',
    'copy-scan',
    'storage',
    'voice',
    'computer',
    'network',
    'calculator',
    'printer',
    'camera',
    # 'accessory',
    ]
    as $name) {
      $category = Model_Category::forge();
      $category->name = $name;
      $category->save();
      echo "$category->id: $name\n";
    }
    
    echo "\n---- photos\n\n";

    $photos_dir =  DOCROOT . "public/assets/img/products/";
    
    echo $photos_dir,"\n";

    // get all files in $photos_dir minus the UNIX "." and ".."
    $imageFiles = array_diff(scandir($photos_dir), [".", ".."]);
    foreach ($imageFiles as $file) {
      $photo = Model_Photo::forge();
      $photo->name = $file;
      $photo->save();
      echo "$photo->id: $file\n";
    }

    echo "\n---- products\n\n";

    $products_file = __DIR__ . "/products.txt";
    $descriptions_dir = __DIR__ . "/descriptions";
    if (!file_exists($products_file)) {
      die("missing file $products_file\n");
    }
    if (!is_dir($descriptions_dir)) {
      die("missing directory $descriptions_dir\n");
    }
    $product_details = file($products_file);

    define("MAX_PRODUCTS", 30);

    $products = [];

    $num = 0;
    foreach ($product_details as $str) {
      $info = trim($str);
      if (empty($info)) {
        continue;
      }
      if (substr($info, 0, 1) == "#") {
        continue;
      }
      if (++$num > MAX_PRODUCTS) {
        break;
      }
      list($category_name, $name, $price, $image_file) = array_map('trim', explode("|", $info));

      $category = Model_Category::find('first', [
          'where' => [['name', $category_name]],          
      ]);
      
      if (is_null($category)) {
        throw new Exception("missing category: $category_name");
      }

      $photo = Model_Photo::find('first',[
          'where' => [['name', $image_file]],          
      ]);
          
      if (is_null($photo)) {
        throw new Exception("missing photo: $image_file");
      }

      // extract the portion without extension:
      preg_match("/(.*)\.\S+$/", $image_file, $match);
      $base = $match[1];

      // description file uses the base + ".html" extension
      // if it exists, read the contents into the description
      $description_file = "$descriptions_dir/$base.html";
      if (file_exists($description_file)) {
        $description = file_get_contents($description_file);
      }
      else {
        echo "--- missing description file : $base\n";
        $description = "";
      }

      $product = Model_Product::forge();
      $product->name = $name;
      $product->category_id = $category->id;
      $product->price = $price;
      $product->photo_id = $photo->id;
      $product->description = $description;

      $product->save();

      $products[$product->id] = $product;

      echo "#$product->id: $name | $category->name | $price | $image_file\n";
    }
    
    echo "\n---- orders\n";

    define("SECONDS_PER_DAY", 3600 * 24);

    function randTimeNdaysPast($days) {
      $timestamp = time() - $days * SECONDS_PER_DAY + rand(0, SECONDS_PER_DAY);
      return date("Y-m-d H:i:s", $timestamp);
    }

    function makeOrder($user, $ndays, $prodQuant) {
      $order = Model_Order::forge();
      $order->user_id = $user->id;
      $order->created_at = randTimeNdaysPast($ndays);
      $order->save();
      echo "\nby $user->name on $order->created_at\n";
      foreach ($prodQuant as $arr) {
        list($prod, $quant) = $arr;
        echo " #$prod->id: $prod->name ($quant)\n";
        $selection = Model_Selection::forge();
        $selection->order = $order;
        $selection->product = $prod;
        $selection->quantity = $quant;
        $selection->save();
      }
    }
    
    $alice = Model_User::find('first', [
        'where' => [['name', 'alice']],
    ]);
    $john = Model_User::find('first', [
        'where' => [['name', 'john']],
    ]);
    $bill = Model_User::find('first', [
        'where' => [['name', 'bill']],
    ]);

    $ndays = 7;

    makeOrder($alice, $ndays--, [
        [$products[1], 2],
        [$products[5], 3],
    ]);

    makeOrder($alice, $ndays--, [
        [$products[13], 3],
        [$products[22], 1],
    ]);

    makeOrder($bill, $ndays--, [
        [$products[22], 1],
        [$products[26], 2],
    ]);

    makeOrder($alice, $ndays--, [
        [$products[3], 4],
        [$products[21], 1],
    ]);

    makeOrder($bill, $ndays--, [
        [$products[1], 1],
        [$products[3], 3],
        [$products[5], 1],
        [$products[6], 2],
    ]);
  }

}
