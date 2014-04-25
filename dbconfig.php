<?php
/**
 * Created by PhpStorm.
 * User: debbie
 * Date: 4/21/14
 * Time: 11:32 AM
 */
// connect to mysql
function connectDB() {
$mysqli = new mysqli('localhost', 'root', 'hunter99', 'website');
// check connection

if($mysqli->connect_error)
{
    die('Error:('.$mysqli->connect_errno.')'.$mysqli->connect_error);
    //echo "failed to connect to MySQL: " . mysqli_connect_error();
}
}
