<?php

abstract class DrinkFactory
{
    //設定原料
    abstract public function setRawMaterial();
    //設定容器
    abstract public function setContainer();
}

//瓶裝水
class BottledWaterFactory extends DrinkFactory
{
    //設定原料
    public function setRawMaterial()
    {
        return new Water();
    }

    //設定容器
    public function setContainer()
    {
        return new Bottle();
    }
}

//果汁工廠
class JuiceFactory extends DrinkFactory
{
    //設定原料
    public function setRawMaterial()
    {
        return new OrangeJuice();
    }

    //設定容器
    public function setContainer()
    {
        return new AluminumCan();
    }
}

//原料
interface RawMaterial{

    public function getRawMaterial();
}

//水
class Water implements RawMaterial{

    public function getRawMaterial(){
        echo '取得水';
    }
}

//柳橙
class OrangeJuice implements RawMaterial{

    public function getRawMaterial(){
        echo '取得柳橙';
    }
}

//容器
interface Container{

    public function getContainer();
}

//瓶子
class Bottle implements Container{

    public function getContainer(){
        echo '取得瓶子';
    }
}

//鋁罐
class AluminumCan implements Container{

    public function getContainer(){
        echo '取得鋁罐';
    }
}

//瓶裝水
$ChineseRestaurant = new BottledWaterFactory();
$MainCourse = $ChineseRestaurant->setRawMaterial();
$Dessert = $ChineseRestaurant->setContainer();
$MainCourse->getRawMaterial();
echo '<br>';
$Dessert->getContainer();
echo '<br>';
//果汁工廠
$Juice = new JuiceFactory();
$MainCourse = $Juice->setRawMaterial();
$Dessert = $Juice->setContainer();
$MainCourse->getRawMaterial();
echo '<br>';
$Dessert->getContainer();