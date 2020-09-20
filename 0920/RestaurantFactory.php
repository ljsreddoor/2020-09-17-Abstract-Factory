<?php

abstract class RestaurantFactory
{
    //主菜
    abstract public function createMainCourse();
    //點心
    abstract public function createDessert();
}

//中國餐廳
class ChineseRestaurantFactory extends RestaurantFactory
{
    //主菜
    public function createMainCourse()
    {
        return new Rice();
    }

    //點心
    public function createDessert()
    {
        return new BeanCurd();
    }
}

//義大利餐廳
class ItalyRestaurantFactory extends RestaurantFactory
{
    //主菜
    public function createMainCourse()
    {
        return new Pasta();
    }

    //點心
    public function createDessert()
    {
        return new IceCream();
    }
}

interface Food{

    public function getFood();
}

//米飯
class Rice implements Food{

    public function getFood(){
        echo '米飯';
    }
}

//豆腐
class BeanCurd implements Food{

    public function getFood(){
        echo '豆腐';
    }
}

//義大利麵
class Pasta implements Food{

    public function getFood(){
        echo '義大利麵';
    }
}

//冰淇淋
class IceCream implements Food{

    public function getFood(){
        echo '冰淇淋';
    }
}

//中國餐廳
$ChineseRestaurant = new ChineseRestaurantFactory();
$MainCourse = $ChineseRestaurant->createMainCourse();
$Dessert = $ChineseRestaurant->createDessert();
$MainCourse->getFood();
echo '<br>';
$Dessert->getFood();
echo '<br>';
//義大利餐廳
$ItalyRestaurant = new ItalyRestaurantFactory();
$MainCourse = $ItalyRestaurant->createMainCourse();
$Dessert = $ItalyRestaurant->createDessert();
$MainCourse->getFood();
echo '<br>';
$Dessert->getFood();