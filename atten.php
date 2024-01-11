<?php
 include 'conn.php';
include 'bootstrap.php';
  session_start();
  if(!isset($_SESSION['login_id']))
  header('location:employee.php');
  include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    
   <title>Attendance</title>
</head>
<body>
  <div class="sk">
   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
   <div class="input-group">
      <select name="sl">
         <option value="name" selected>Name</option>
         <option value="Email">Email</option>
         <option value="phone">Phone No</option>
      </select>
         <input type="text"  name="sea">
         <button type="submit" class="btn btn-outline-primary">Search</i></button>
   </div> 
   </form>
   </div> 
   <style>
      *{
         background-color:pink;
         font-size:22px;
      }
      .sk{
         background-color:white;
      }
      form{
         background-color:white;
         text-align:center;
         font-size:22px;
      }
      input{
         background-color:pink;
         color:green;
         width: 220px;
         height: 50px;
      }
      select{
         background-color:pink;
         color:green;
         width: 220px;
         height: 50px;
      }
   </style>
   <?php
   session_start();
   if($i==0){
      if($_POST['sl']=='name')
      {
         $s=$_POST['sea'];
         $sq="SELECT *FROM login where Name='$s'";
         $rat=pg_query($db,$sq);
         echo"<table class='table'>";
         echo"<th>Name</th><th>Email</th>";
         while($row=pg_fetch_row($rat)){   
            echo"<tr>";
            echo "<td>".$row[0]."</td><td>".$row[1]."</td>";
            echo"</tr>";
         }
         echo"</table>";
      }
      else if($_POST['sl']=='Email'){
         $s=$_POST['sea'];
         $sq="SELECT *FROM login where email='$s'";
         $rat=pg_query($db,$sq);
         echo"<table class='table'>";
         echo"<th>Name</th><th>Email</th>";
         while($row=pg_fetch_row($rat)){   
         echo"<tr>";
         echo "<td>".$row[0]."</td><td>".$row[1]."</td>";
         echo"</tr>";
      }
      echo"</table>";
      }
      else if($_POST['sl']=='phone'){
         $s=$_POST['sea'];
         $sq="SELECT *FROM login where phone_No='$s'";
         $rat=pg_query($db,$sq);
         echo"<table class='table'>";
         echo"<th>Name</th><th>Email</th>";
         while($row=pg_fetch_row($rat)){   
         echo"<tr>";
         echo "<td>".$row[0]."</td><td>".$row[1]."</td>";
         echo"</tr>";
      }
      echo"</table>";
   }

   $sql="SELECT *from login";
   $rat=pg_query($db,$sql);
   if($rat){
      
      echo"<table class='table'>";
      echo"<th>Name</th><th>Email</th><th>Phone</th>";
      while($row=pg_fetch_row($rat)){ 
      echo"<tr>";
      echo "<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2];
     echo"</tr>";
     }
     echo"</table>";
   }
   
   else{
      echo"Login";
   
   }
}
?>
</body>
</html>