
<?php
  include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>FORGOTE php</title>
    <link rel="icon" type="image/x-icon" href="icon.jpg">
</head>
<body>
    <style>
    *{
        background-color:blue;

    }
    select{
        width: 220px;
        background-color:pink;
        height: 30px;
    }
    
    input[type=text]{
        margin: 22px;
        width:220px;
        background-color:pink;
    }
    form{
        border:5px solid black;
        width:500px;
        height:300px;
    }
    </style>
    <div class="kk"><center>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        
        <select name="stk">
            <option value="phone">Phone</option>
            <option value="username" selected>Username</option>
            <option value="id">ID</option>
        </select>
        <br>
        <input type="text" name="nm" placeholder="Enter: id/username/phoneno"><br>
        <input type="submit" >
        </div>
    </form></center>

</body>
</html>
<?php
session_start();
$_SESSION['cho']=$_POST['stk'];
    if($_POST['stk']=='phone')
    {
        $dt=$_POST['nm'];
        $sq="SELECT *FROM employee where phone='$dt'";
        $rat=pg_query($db,$sq);
        echo"<table class='table'>";
         echo"<th>ID</th><th>NAME</th>";
        while($row=pg_fetch_row($rat)){   
        echo"<tr>";
        echo "<td>".$row[0]."</td><td>".$row[1]."</td>";
        echo"</tr>";
        }
        
        echo"</table>";
        echo"<hr>";
        echo"<center>";
        echo"<form method='post' action='pass.php'>";
        echo"<input type='text' name='password' placeholder='Enter Password'><br>";
        echo"<input type='text' name='confomepass' placeholder='CONFORM Password'><br>";
        echo"<input type='submit'>";
        echo"</center>";

    }
    if($_POST['stk']=='username')
    {
        $dt=$_POST['nm'];
        $sq="SELECT *FROM employee where username='$dt'";
        $rat=pg_query($db,$sq);
        echo"<table class='table'>";
         echo"<th>ID</th><th>NAME</th>";
        while($row=pg_fetch_row($rat)){   
        echo"<tr>";
        echo "<td>".$row[0]."</td><td>".$row[1]."</td>";
        echo"</tr>";
        }
        
        echo"</table>";
        echo"<hr>";
        echo"<center>";
        echo"<form method='post' action='pass.php'>";
        echo"<input type='text' name='password' placeholder='Enter Password'><br>";
        echo"<input type='text' name='confomepass' placeholder='CONFORM Password'><br>";
        echo"<input type='submit'>";
        echo"</center>";

    }
    if($_POST['stk']=='id')
    {
        $dt=$_POST['nm'];
        $sq="SELECT *FROM employee where id_no='$dt'";
        $rat=pg_query($db,$sq);
        echo"<table class='table'>";
         echo"<th>ID</th><th>NAME</th>";
        while($row=pg_fetch_row($rat)){   
        echo"<tr>";
        echo "<td>".$row[0]."</td><td>".$row[1]."</td>";
        echo"</tr>";
        }
        
        echo"</table>";
        echo"<hr>";
        echo"<center>";
        echo"<form method='post' action='pass.php'>";
        echo"<input type='text' name='password' placeholder='Enter Password'><br>";
        echo"<input type='text' name='confomepass' placeholder='CONFORM Password'><br>";
        echo"<input type='submit'>";
        echo"</center>";
    }
  
?>