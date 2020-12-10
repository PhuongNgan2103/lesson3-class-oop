<?php
include_once "class-lib.php";

$quadratic = new QuadraticEquation(1.0,3,1);
$discriminant = $quadratic->getDiscriminant();

if ($discriminant > 0){
    echo $quadratic->getRoot1() . "</br>";
    echo $quadratic->getRoot2();
}elseif ($discriminant == 0){
    echo $quadratic->getRoot1();
}else{
    echo "The equation has no real roots";
}