<?php
# array :key 可以是 integer 或者 string。value 可以是任意类型。
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// 自 PHP 5.4 起
$array = [
    "foo" => "bar",
    "bar" => "foo",
];


/*
包含有合法整型值的字符串会被转换为整型。例如键名 "8" 实际会被储存为 8。但是 "08" 则不会强制转换，因为其不是一个合法的十进制数值。
浮点数也会被转换为整型，意味着其小数部分会被舍去。例如键名 8.7 实际会被储存为 8。
布尔值也会被转换成整型。即键名 true 实际会被储存为 1 而键名 false 会被储存为 0。
Null 会被转换为空字符串，即键名 null 实际会被储存为 ""。
数组和对象不能被用为键名。坚持这么做会导致警告：Illegal offset type。
*/
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
// array {1=>1}
var_dump($array);

# no key:如果未指定，PHP 将自动使用之前用过的最大 integer 键名加上 1 作为新的键名。
$array = array("foo", "bar", "hallo", "world");
// {0=>foo, 1=>bar...}
var_dump($array);

$array = array(1,2,3,4,5);
print_r($array);
foreach ($array as $key => $value) {
	unset($array[$key]);
}
print_r($array);
$array[]=6;
/*
Array
(
    [5] => 6
)
*/
print_r($array);
//unset() 函数允许删除数组中的某个键。但要注意数组将不会重建索引。如果需要删除后重建索引，可以用 array_values() 函数。
$array =array_values($array);
$array[] = 7;
/*
Array
(
    [0] => 6
    [1] => 7
)*/
print_r($array);
?>