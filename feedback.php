<?php
    include 'bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Feedback</title>
</head>
<body>
    
    <form method="post" action="fd.php">
    <div class="form-group">
    <label>Name</label><input class="form-control" type="text" name="name" placeholder="Enter Name">
    </div>
        <br>
        <div class="form-group">
        <label>Email</label><input class="form-control" type="text" name="eml" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label>phone</label><input class="form-control" type="text" name="phone" placeholder="Enter Phone number">
    </div>
    <div class="form-group">
    <label for="fdb">Feedback</label>
    <textarea name="feed" class="form-control" id="fdb" rows="5"></textarea>
  </div><br><center>
    <input type="submit" class="btn btn-primary text-center" placeholder="Submit">
</center>
    </form>
</body>
</html>