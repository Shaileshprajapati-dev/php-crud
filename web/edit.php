<?php

include_once __DIR__.'/functions.php';
include_once __DIR__.'/query_bulider/query.php';

$id = get('id');
if(!empty($id))
{
    $query = new Query();
    $record = $query->select('*')->table('app22')->where('id',$id)->first();
    echo PHP_EOL;
    #print_r($record);
}
?>
<!DOCTYPE html>
<head>
</head>
<body>
    <form action="<?php echo url("updatehandler.php"); ?>" method="post">
      name: <input type="text" name="name" value="<?php echo $record->name;?>" ></br></br>
      <input type="hidden" name="name" value="<?php echo $record->id;?>" >

       email:<input type="text" name="email" value=" <?php echo $record->email;?>"/></br></br>
        <input type="submit" name="email" value="update"/>
    </form>
</body>
</html>