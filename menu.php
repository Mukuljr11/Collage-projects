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
    <title>MENU</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="icon.jpg">
</head>
<body>
<?php
 include 'conn.php';
  session_start();
  if(!isset($_SESSION['login_id']))
  header('location:employee.php');
  include 'nav.php';
?>
    <style>
        *{
            background-color: gray;
            color: green;
        }
        button{
            height: 222px;
            width: 222px;
        }
        .ck{
            background-color: bisque;
            font-size: 22px;
            float: left;
            top: 0;
        }
        .sk{
            background-color: bisque;
            font-size: 22px;
        }

    </style>
    <script>
       function s(i)
       {
        i.style.backgroundColor="black";
        i.style.color="green";
       }
        function ss(i){
           i.style.backgroundColor="bisque";
        }
          function atn(){
                open('atten.php');
            } 
            function rd()
            {
                open('readfd.php');
            }
            function ad(){
                open("addpac.php")
            }
            function dl()
            {
                open("del.php");
            }
            function mg(){
                open("mngpac.php");
            }
    </script>
    <div class="atd">
    <button class="ck" onmouseover="s(this)"onmouseout="ss(this)" onclick="atn()">Database</button>
    <button id="s" class="sk" onmouseover="s(this)" onmouseout="ss(this)" onclick="ss()">Attendance</button>
    <button id="s" class="sk" onmouseover="s(this)" onmouseout="ss(this)" onclick="dl()">Delete Member</button>
    <button id="s" class="sk" onmouseover="s(this)" onmouseout="ss(this)" onclick="ss()">Update Member</button>
    <button id="s" class="sk" onmouseover="s(this)" onmouseout="ss(this)" onclick="ad()">Add Member</button>
    <button id="s" class="sk" onmouseover="s(this)" onmouseout="ss(this)" onclick="mg()">Manage package</button>
    <button class="ck" onmouseover="s(this)"onmouseout="ss(this)" onclick="rd()">Read Feedback</button>
</div>
</body>
</html>