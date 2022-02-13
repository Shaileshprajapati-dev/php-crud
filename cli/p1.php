<?php

// wap in php to show foreach array

$data=[
[
'id'=>'1',
'name'=>'shailesh',
'class'=>'diploma',
],
[
'id'=>'2',
'name'=>'manish',
'class'=>'diploma',
],
[
'id'=>'3',
'name'=>'satayam',
'class'=>'diploma',
],


];
foreach($data as $user){
	echo "************************ \n";
	echo "user id={$user['id']} \n";
	echo "name={$user['name']} \n";
	echo "class={$user['class']} \n";
	echo "************************ \n";
}

?>