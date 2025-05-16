<?php

class Product
{
    public $name;
    public $price;
    public $brand;
    public $image;
    public $description;
    public $tax;
    public $discount;


    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }


    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }


    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function getBrand()
    {
        return $this->brand;
    }


    public function setImage($image)
    {
        $this->image = $image;
    }
    public function getImage()
    {
        return $this->image;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }


    public function setTax($tax)
    {
        $this->tax = $tax;
    }
    public function getTax()
    {
        return $this->tax;
    }


    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    public function getDiscount()
    {
        return $this->discount;
    }


    public function getPriceAfterDiscount()
    {
        return $this->price - ($this->price * $this->discount / 100);
    }


    public function getFinalPrice()
    {
        $priceAfterDiscount = $this->getPriceAfterDiscount();
        return $priceAfterDiscount + ($priceAfterDiscount * $this->tax / 100);
    }
}

$product1 = new Product();
$product1->setName("iphone 16");
$product1->setPrice(800);
$product1->setBrand("apple");
$product1->setImage("image/iphone 16.jpg");
$product1->setDescription("iphone 16 description");
$product1->setTax(15);
$product1->setDiscount(10);

$product2 = new Product();
$product2->setName("redmi note 13 pro");
$product2->setPrice(270);
$product2->setBrand("xiaomi");
$product2->setImage("image/redmi note 13 pro.jpg");
$product2->setDescription("redmi note 13 pro description");
$product2->setTax(5);
$product2->setDiscount(8);

$product3 = new Product();
$product3->setName("samsung s24 Ultra");
$product3->setPrice(1000);
$product3->setBrand("samsung");
$product3->setImage("image/samsung s24 Ultra.jpg");
$product3->setDescription("samsung s24 Ultra description");
$product3->setTax(12);
$product3->setDiscount(15);

$products = [$product1, $product2, $product3];
