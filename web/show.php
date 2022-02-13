
<?php include_once __DIR__.'/query_bulider/query.php';
include_once __DIR__.'/functions.php';
$query = new Query();
$records = $query->select('*')->table('app22')->allRecords();
?>
<!DOCTYPE html>
<head>
    <title>Document</title>
    <style>
        p{
            font-size: 50px;
            color:pink;
            background:red;
            border: 20px solid purple; 
        }
        th{
            color:red;
        }
        a{
            color:red;
            background:pink;
            font-size:20px;
        }
    </style>
</head>
<body>
   
    <table style="width: 1000px;"  rules="all" border="2">
    <p>Welcome to Database Connectivity</p>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>Edit 1</th>
        <th>Edit 2</th>
        <th>Delete 1</th>
        <th>Delete 2</th>
     </tr>
     <?php foreach($records as $row):?>
     <tr>
        <td><?php echo $row->id;?></td>
        <td><?php echo $row->name;?></td>
        <td><?php echo $row->email;?></td>
        <td><a href="<?php echo url("edit.php?id={$row->id};")?>">edit 1</a></td>
        <td><a href="<?php echo url("edit2.php?id={$row->id};")?>">edit 2</a></td>
        <td><a href="<?php echo url("delete1.php?id={$row->id};")?>">delete 1</a></td>
        <td><a href="javascript:confirmdelete('<?php echo $row->id ?>');">delete 2</a></td>
     </tr>
     <?php  endforeach; ?>
</table>
    <script>
     function confirmdelete(id){
         if(window.confirm("are you sure to delete ?")){
             window.location.href="<?php echo url('delete2.php?id=')?>"+id;
         }
     }
    </script>
</body>
</html>