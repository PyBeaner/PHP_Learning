<?php
class foo{
	public $foo = "foo";
}
$obj = new foo();
$bar = $obj->foo;
echo "$bar";


$obj = (object) 'ciao';
# scalar
echo $obj->scalar;  // outputs 'ciao'
?>