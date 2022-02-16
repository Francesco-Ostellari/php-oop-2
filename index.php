<?php  
  require_once __DIR__ . "/classes/Shop.php";
  require_once __DIR__ . "/classes/Product.php";
  require_once __DIR__ . "/classes/User.php";

  $user = new User ("Francesco", "Ostellari", "Via Roma RM", "123456789", new Card("Francesco", "Ostellari", "1111 1111 2222 3333", "123", "01/23"));

  $product = new Product ("iPhone", "1089", "apple");

  var_dump($user, $product);
?>