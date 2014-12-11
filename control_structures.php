<?php
if(isset($var)){
	echo "variable<var> is set";
}else{
	echo "variable<var> is unset";
}
echo "\n";
$i = 1;
while($i<=10){
	echo $i++;
}
echo "\n";
$i = 1;
while($i<=10):
	print $i;
	$i++;
endwhile;
echo "\n";
$i = 10;
do{
	echo "$i";
	$i--;
}while ($i>0);

echo "\n";
for ($i=0; $i < 10; $i++) { 
	echo $i;
}
echo "\n";
for ($i=0; ; $i++) { 
	if($i>=10){
		break;
	}
	echo $i;
}

// foreach ($variable as $key => $value) {
// 	# code...
// }
// while (list($key,$value)=each($arr)) {
	# code...
// }
// while(list(,$value)=each($arr)){
	// 
// }
// foreach ($variable as $value) {
// 	# code...
// }

//修改数组的元素
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
	$value += 2;
}
unset($value); // 最后取消掉引用
print_r($arr);
?>