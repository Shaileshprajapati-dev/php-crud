<?php
include_once __DIR__.'/query_bulider/query.php';
include_once __DIR__.'/functions.php';
$id = get('id');
if(!empty($id)){
    $query = new Query();
   if($query->delete('app22')->where('id',$id)->commit()){
       header("Location:".url('show.php?status=record-delete'));
   }else{
       exit('cannot Delete the Record');
   }
}
?>