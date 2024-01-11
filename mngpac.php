<?php
    include 'conn.php';
    include 'bootstrap.php';
    include 'seq.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage package</title>
</head>
<body>
    <table class="table">
        <tr>
            <th>1 Year</th><th>6 Month</th><th>1 Month</th>
        </tr>
        <tr>
            <td>11499 RS</td><td>8750 Rs</td><td>2000 Rs</td>
        </tr>
    </table>
</body>
</html>
<?php
$sql="SELECT *from addmember";
   $rat=pg_query($db,$sql);
   if($rat){
      
      echo"<table class='table'>";
      echo"<th>Name</th><th>Email</th><th>Phone</th><th> Member Ship</th>";
      while($row=pg_fetch_row($rat)){ 
      echo"<tr>";
      echo "<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."<td>".$row[7]."</td>";
     echo"</tr>";
     }
     echo"</table>";
   }
?>