<?php 
  require_once __DIR__ . "/classes/Product.php";
  require_once __DIR__ . "/classes/User.php";

  
try {
  
  $user = new User('Francesco', 'Ostellari', 'via roma RM', 123456789, "francesco@mail.it", new Card('Francesco', 'Ostellari', 1111222233334444, 123, '01/23'));
  $product = new Product('iPhone ', 1000, ' Apple ');
  var_dump($user, $product);
  
  echo $product->getName();
  echo $product->getPrice(true, 10);
  echo $product->getBrand();

} catch (Exception $error) {
  echo $error->getMessage();
}
?>