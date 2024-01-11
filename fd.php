<?php
   include 'conn.php'; 
   $nm=$_POST['name'];
   $em=$_POST['eml'];
   $phn=$_POST['phone'];
   $txt=$_POST['feed'];
   $sql="INSERT INTO feedback(Name,email,phone,text) VALUES('$nm','$em',' $phn','$txt')";
   $rs=pg_query($db,$sql);
   if($rs){
    echo"Insert data";
   }
   else
   {
      echo $rs=pg_last_error($db);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>insert</title>
</head>
<body>
   
</body>
</html>
