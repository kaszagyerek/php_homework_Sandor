<?php

require_once "Product.php";
require_once "Cart.php";
require_once "CartItem.php";

$product1 = new Product(1, "iPhone 11", 2500, 10);
$product2 = new Product(2, "M2 SSD", 400, 10);
$product3 = new Product(3, "Samsung Galaxy S20", 3200, 10);

echo $product1 . "<br>";
echo $product2 . "<br>";
echo $product3 . "<br>";
$cart = new Cart();
$cartItem1 = $cart->addProduct($product1, 1);
$cartItem2 = $product2->addToCart($cart, 1);
echo "Number of items in cart: ".PHP_EOL ;
echo $cart->getTotalQuantity().PHP_EOL. "<br>"; // This must print 2
echo "Total price of items in cart: ".PHP_EOL ;
echo $cart->getTotalSum().PHP_EOL. "<br>"; // This must print 2900

$cartItem2->increaseQuantity();
$cartItem2->increaseQuantity();

echo "Number of items in cart: ".PHP_EOL ;
echo $cart->getTotalQuantity().PHP_EOL. "<br>"; // This must print 4

echo "Total price of items in cart: ".PHP_EOL ;
echo $cart->getTotalSum().PHP_EOL. "<br>"; // This must print 3700

echo "Number of items in cart: ".PHP_EOL ;
echo $cart->getTotalQuantity().PHP_EOL. "<br>"; // This must print 4

echo "Total price of items in cart: ".PHP_EOL ;
echo $cart->getTotalSum().PHP_EOL. "<br>"; // This must print 3700

/*   Eredmény :

id 1 eszköz neve iPhone 11ára2500Hány darab van belőle10
id 2 eszköz neve M2 SSDára400Hány darab van belőle10
id 3 eszköz neve Samsung Galaxy S20ára3200Hány darab van belőle10
Number of items in cart: 2
Total price of items in cart: 2900
Number of items in cart: 4
Total price of items in cart: 3700
Number of items in cart: 4
Total price of items in cart: 3700 */