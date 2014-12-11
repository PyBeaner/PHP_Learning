<?php
$a = 1234;
$a = -123;
$a = 0123;
$a = 0x1A;
var_dump(01090); //8

$large_number = PHP_INT_MAX;
var_dump($large_number);//int
$large_number+=1;
var_dump($large_number);//float

var_dump(25/7);
var_dump((int) (25/7));
var_dump(round(25/7));

echo (int) ( (0.1+0.7) * 10 );//7...  (avoid this)
echo (0.1+0.7) * 10 ;//8
?>