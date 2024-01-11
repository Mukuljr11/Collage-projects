<?php
    include 'conn.php';
    include 'bootstrap.php';
    include "nav.php";
    include 'seq.php';
    $sql="SELECT *FROM feedback;";
    $rs=pg_query($db,$sql);
    echo"<div class='container  style='background-color:gray;'>";
    while($row=pg_fetch_row($rs))
    {
        echo"<hr style='height:2px;border-width:0;color:gray;background-color:gray'>";
        echo"<div class='row' style='background-color:gray;'>";    
        echo"<div class='col-sm-6' style='background-color:red; border:3px solid black;'><b>Name:</b>$row[0]</div>";
        echo"<div class='col-sm-6'style='background-color:yellow;border:3px solid black;'> <b>Email:</b>$row[1]</div>";
        echo"<div class='col-sm-6'style='background-color:green;border:3px solid black;'> <b>Phone:</b>$row[2]</div>";
        echo"<div class='col-sm-6'style='background-color:pink;border:3px solid black;'><b>$row[3]</b></div>";
        
        echo"</div>";
        echo"<br><hr style='height:2px;border-width:0;color:gray;background-color:gray'>";
    }   
    
    echo"</div>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read feedback</title>
</head>
<body>
    <style>
    *{
        font-size:30px;
    }
    </style>
</body>
</html>