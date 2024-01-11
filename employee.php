<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Employee id</title>
    <link rel="stylesheet" href="employee.css">
    <link rel="icon" type="image/x-icon" href="icon.jpg">
</head>
<body>
    <h1>Employee Login</h1>
    <form method="post" action="employe.php">
        ID:<input type="number" name="id" placeholder="Select Number"><br>
       UserName <input type="text" name="usn" placeholder="enter username"><br>
       Password<input type="password" name="pas" placeholder="Enter Password"><br>
       <div class="sub">
       <input  type="submit">
       <input type="reset">
     </div>
    </form><br>
    <a href="forgote.php" color="blue">Forgot password</a>
</body>
</html>