<?php error_reporting (E_ALL ^ E_NOTICE); ?> <?php error_reporting(0); ?> 
<?php
    $host        = "host = localhost";
    $port        = "port = 5432";
    $dbname      = "dbname = gym_mg";
    $credentials = "user = postgres  password=shubham@20";
 
    $db = pg_connect("$host $port $dbname $credentials");
?>