<?php
include_once __DIR__."/functions.php";
include_once __DIR__."/query_bulider/query.php";
$name=post('name');
$email=post('email');
//echo $name;
//echo $email;

$query = new Query();
if($query->insert('app22',[
    "name"=> $name,
    "email"=> $email,
]))
{
  echo "data inserted with pk =".$query->getId();
}
else{
    echo "Inserted Error.......";
}
?>