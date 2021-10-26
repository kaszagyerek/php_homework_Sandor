<?php

namespace CartNamespace {
    include "loader.php";
    use CartItemNamespace\CartItem;
    use ProductNamespace\Product;

    class Cart
    {

        private array $items = [];

        public function getItems(): array
        {
            return $this->items;
        }

        public function setItems(array $items): void
        {
            $this->items = $items;
        }


        public function addProduct(Product $product, int $quantity): CartItem
        {
            foreach ($this->items as $t) {
                if ($t->getProduct() === $product) {

                    $t->setQuantity($t->getQuantity() + $quantity);

                    return $t;
                }
            }
            $val = new CartItem($product, $quantity);

            array_push($this->items, $val);

            return $val;
        }


        public function getTotalQuantity(): int
        {
            $n = 0;
            foreach ($this->items as $t) {
                $n = $n + $t->getQuantity();
            }
            return $n;

        }


        public function getTotalSum(): float

        {
            $s = 0;
            foreach ($this->items as $t) {
                $s = $s + ($t->getProduct()->getPrice() * $t->getQuantity());
            }
            return $s;
        }

    }
}