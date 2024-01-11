<?php
    include 'bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="form.css">
    <link rel="icon" type="image/x-icon" href="icon.jpg">
</head>
<body>
    <?php
        include 'nav.php';
    ?>
    <div class="fm">
    <center>
    <form action="fm.php"method="post">
        <div class="form-group">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="nm" placeholder="Enter Name">
            </div>
            <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="em" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="phone">Phone No</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phn">
        </div>
        <div class="form-group">
           <label>Gender</label> <br>      
        <div class="form-check form-check-inline">
            <label for="male">
                Male
            </label>
            <input type="radio" id="male" value="M" name="gen">
            </div>
            <div class="form-check form-check-inline">
            <label for="female">Female</label>
            <input type="radio" id="female" value="F" name="gen">
            </div>
            <div class="form-check form-check-inline">
            <label for="oth">Others</label>
            <input type="radio" id="oth" value="Oth" name="gen">
        </div>
    </div>
        <div class="ba">
        <button type="submit" class="btn btn-primary text-center">Submit</button>
    </div>
           
    </form>
</center>
</div>
</body>
</html>