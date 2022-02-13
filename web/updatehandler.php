<?php
include_once __DIR__."/functions.php";
include_once __DIR__."/query_bulider/query.php";
$name=post('name');
$email=post('email');
$id = post('id');

$query = new Query();
if($query->update('app22',[
    "name"=> $name,
    "email"=> $email,
])->where('id',$id)->commit())
{
  header("location:".url('show.php?status=record updated'));
}else{
     echo "update Error.......";
}
?>