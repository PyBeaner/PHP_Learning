<?php
// single '
echo 'this is a simple string';
echo 'You can also hava embedded newlines in
strings this way as it is
okay to do';

echo 'Arnold oncde said:"I\'ll be back"';

echo 'You deleted C:\\*.*?';
echo 'You deleted C:\*.*?';
echo 'This will not expand:\n a newline';
echo 'Variables do not $expand $either';



// double "


// Heredoc : <<<"some_name"
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

class foo
{
    var $foo;
    var $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;

// Nowdoc: <<<'some_name'
// no escape
class foo2
{
    var $foo;
    var $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo2();

echo <<<'EOT'
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;


// {}
error_reporting(E_ALL);
$great ='fantastic';
//invalid
echo "this is { $great}";
//valid
echo "this is {$great}";
echo "This square is {$square->width}00 centimeters broad."; 
$arr = array();
echo "This works: {$arr['key']}";
echo "This works: {$arr[4][3]}";
// invalid foo
echo "This is wrong: {$arr[foo][3]}"; 


class foo3{
    var $bar = 'I am bar.';
}

$foo = new foo3();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->$bar}\n";
echo "{$foo->$baz[1]}\n";


class beers {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}
$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';
// 有效，输出： I'd like an A & W
echo "I'd like an {${beers::softdrink}}\n";
// 也有效，输出： I'd like an Alexander Keith's
echo "I'd like an {${beers::$ale}}\n";



$str = 'abc';

var_dump($str['1']);
var_dump(isset($str['1']));

var_dump($str['1.0']);
var_dump(isset($str['1.0']));

var_dump($str['x']);
var_dump(isset($str['x']));

var_dump($str['1x']);
var_dump(isset($str['1x']));

$foo = "10.0 pigs";
echo "\$fwoo==$foo; type is " . gettype ($foo) . "<br />\n";
?>