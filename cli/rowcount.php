<?php

#step1 : make connection

include __DIR__.'/dbconect.php';
require __DIR__.'/vendor/autoload.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
     ->addHeader('Sr no.')
     ->addHeader('id')
     ->addHeader('name')
     ->addHeader('email');

$sql= "SELECT * FROM emp";

$result_set = mysqli_query($count,$sql);

if(mysqli_num_rows($result_set)>0){
	
	$i=1;
	while($row=mysqli_fetch_assoc($result_set)){
		 
		 $table->addrow()
		 ->addColumn($i)
		 ->addColumn($row['id'])
		 ->addColumn($row['name'])
		 ->addColumn($row['email']);
		 $i++;
	}
	$table->display();
}else if(mysqli_num_rows($result_set)==0){
	echo 'No recound found';
	
}else{
	 echo 'Inserted Error'.mysqli_error($conn);
}

?>