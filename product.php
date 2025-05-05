<?php

class product
{
    public $name;
    public $price;
    public $brand;
    public $image;
    public $description;
    public $tax;

    function get_name()
    {
        return $this->name;
    }
    function price_after_discount($discount)
    {
        return $this->price - ($this->price * $discount / 100);
    }
    function final_price()
    {
        return $this->price + ($this->price * $this->tax / 100);
    }
}

;
$product1 = new product();
$product1->name = "iphone 16";
$product1->price = 800;
$product1->brand = "apple";
$product1->image = "image/iphone 16.jpg";
$product1->description = "iphone 16 description";
$product1->tax = 15;

$product2 = new product();
$product2->name = "redmi note 13 pro";
$product2->price = 270;
$product2->brand = "xiaomi";
$product2->image = "image/redmi note 13 pro.jpg";
$product2->description = "re3dmi note 13 pro description";
$product2->tax = 5;

$product3 = new product();
$product3->name = "samsung s24 Ultra";
$product3->price = 1000;
$product3->brand = "samsung";
$product3->image = "image/samsung s24 Ultra.jpg";
$product3->description = "samsung s24 Ultra description";
$product3->tax = 12;

$products = [$product1, $product2, $product3];
