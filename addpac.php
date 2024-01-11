<?php
    include 'bootstrap.php';
    include 'seq.php';
    include 'nav.php';
    include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
</head>
<body>
    <div class="fi contener">
        <h1>Add Members</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
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
    <div class="form-group">
            <label for="dp">DOB</label>
            <input type="date" class="" id="db"  name="dob">
        </div>
        <div class="form-group">
            <label for="phone">Weight in kg</label>
            <input type="number" class="form-control" id="phone" placeholder="Enter Weight in kg" name="wik">
        </div>
        <div class="form-group">
            <label for="phone">Height in ft</label>
            <input type="number" class="form-control" id="phone" placeholder="Enter Height in ft" name="hif">
        </div>
        <div class="form-group">
           <label>PACKAGE</label> <br>      
        <div class="form-check form-check-inline">
            <label for="mt">
                6 Month:
            </label>
            <input type="radio" id="mt" value="8750 Rs" name="pac">
            </div>
            <div class="form-check form-check-inline">
            <label for="yr">1 Year</label>
            <input type="radio" id="yr" value="11499 RS" name="pac">
            </div>
            <div class="form-check form-check-inline">
            <label for="mt1">One Month</label>
            <input type="radio" id="mt1" value="2000 Rs" name="pac">
        </div>
    </div>
        <div class="ba">
        <button type="submit" class="btn btn-primary text-center">Submit</button>
    </div>
            </form>
    </div>
</body>
</html>
<?php
    session_start();
    $nm=$_POST['nm'];
    $eml=$_POST['em'];
    $ph=$_POST['phn'];
    $gen=$_POST['gen'];
    $dob=$_POST['dob'];
    $wei=$_POST['wik'];
    $hei=$_POST['hif'];
    $pac=$_POST['pac'];
    $sql="INSERT INTO addmember(name,email,phone,gender,dob,weight,height,package) VALUES('$nm','$eml','$ph','$gen','$dob','$wei','$hei','$pac')";
    $in=pg_query($db,$sql);
    if($in)
    {
        header("location:menu.php");
        echo"<br>Insert";
    }
    else
    {
       echo $rs=pg_last_error($db);
    }
?>