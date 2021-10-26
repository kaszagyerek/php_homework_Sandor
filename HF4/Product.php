<?php



namespace ProductNamespace {
    include "loader.php";
    use CartNamespace\Cart;
    use CartItemNamespace\CartItem;
    class Product
    {


        private int $id;
        private string $title;
        private float $price;
        private int $availableQuantity;


        public function getId(): int
        {
            return $this->id;
        }

        public function setId(int $id): void
        {
            $this->id = $id;
        }

        public function getTitle(): string
        {
            return $this->title;
        }

        public function setTitle(string $title): void
        {
            $this->title = $title;
        }

        public function getPrice(): float
        {
            return $this->price;
        }


        public function setPrice(float $price): void
        {
            $this->price = $price;
        }


        public function getAvailableQuantity(): int
        {
            return $this->availableQuantity;
        }


        public function setAvailableQuantity(int $availableQuantity): void
        {
            $this->availableQuantity = $availableQuantity;
        }


        public function __construct(int $id, string $title, float $price, int $availableQuantity)
        {
            $this->id = $id;
            $this->title = $title;
            $this->price = $price;
            $this->availableQuantity = $availableQuantity;
        }

        public function addToCart(Cart $cart, int $quantity): CartItem
        {
            foreach ($cart->getItems() as $t) {
                if ($t === $this) {
                    $t->increaseQuantity();
                }
            }

            return $cart->addProduct($this, $quantity);
        }

        public function __toString()
        {
            return "id " . $this->getId() . " eszköz neve " . $this->getTitle() . "ára" . $this->getPrice() . "Hány darab van belőle" . $this->getAvailableQuantity();
        }


    }
}