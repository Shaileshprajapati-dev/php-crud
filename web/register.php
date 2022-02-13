<?php  include_once __DIR__ ."/functions.php";?>
<!DOCTYPE html>
<head>
</head>
<body>
    <form action="<?php echo url("registerhandler.php"); ?>" method="post">
      name: <input type="text" name="name"/></br></br>
       email:<input type="text" name="email"/></br></br>
        <input type="submit" value="Register" name="save"/>
    </form>
</body>
</html>