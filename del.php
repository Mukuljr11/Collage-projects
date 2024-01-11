<?php
    include 'conn.php';
    include 'bootstrap.php';
    include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
   <div class="input-group">
      <select name="sl">
         <option value="name" selected>Name</option>
         <option value="Email">Email</option>
         <option value="phone">Phone No</option>

      </select>
      
      <button name='del' value="delete">Delete</button>
         <input type="text"  name="sea">
         <button type="submit" class="btn btn-outline-primary">Search</i></button>
   </div> 
   </form>
   </div> 
</body>
</html>
<?php

      if($_POST['sl']=='name')
      {
         $s=$_POST['sea'];
         $sq="SELECT *FROM addmember where Name='$s'";
         $rat=pg_query($db,$sq);
         echo"<table class='table'>";
         echo"<th>Name</th><th>Email</th>";
         while($row=pg_fetch_row($rat)){   
            echo"<tr>";
            echo "<td>".$row[0]."</td><td>".$row[1]."</td>"."<td><button name='del'>Delete</button></td>";
            echo"</tr>";
         }
         echo"</table>";
      }
      else if($_POST['sl']=='Email'){
         $s=$_POST['sea'];
         if($_POST['del'])
         {
            echo"Hello";
            $dl="DELETE from addmember where email='$s'";
            $q=pg_query($db,$dl);
         }
         $sq="SELECT *FROM addmember where email='$s'";
         $rat=pg_query($db,$sq);
         echo"<table class='table'>";
         echo"<th>Name</th><th>Email</th>";
         while($row=pg_fetch_row($rat)){   
         echo"<tr>";
         echo "<td>".$row[0]."</td><td>".$row[1]."<td>"."<td><button name='del'>Delete</button></td>";
         echo"</tr>";
      }
      echo"</table>";
      }
      else if($_POST['sl']=='phone'){
         $s=$_POST['sea'];
        
            if($_POST['del'])
            { 
         $sq="SELECT *FROM addmember where phone='$s'";
         $rat=pg_query($db,$sq);
            }
         echo"<table class='table'>";
         echo"<th>Name</th><th>Email</th>";
         while($row=pg_fetch_row($rat)){   
         echo"<tr>";
         echo "<td>".$row[0]."</td><td>".$row[1]."</td>";
         if('del'){
            echo"";
         }
         echo"</tr>";
      }

      echo"</table>";
    }
?>