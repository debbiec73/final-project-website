<?php
/**
 * Created by PhpStorm.
 * User: debbie
 * Date: 4/18/14
 * Time: 12:10 AM
 */
$mysqli = new mysqli('localhost', 'root', 'hunter99', 'website');
// check connection

if($mysqli->connect_error)
{
    die('Error:('.$mysqli->connect_errno.')'.$mysqli->connect_error);
    //echo "failed to connect to MySQL: " . mysqli_connect_error();
}

$user_id = $_POST['userId'];
$name = $_POST['name'];
$email = $_POST['email'];

//$user_exist = $mysqli->query("SELECT COUNT(google_id) as usercount FROM google_users WHERE google_id=$user_id")->fetch_object()->usercount;
$user_exist = $mysqli->query("SELECT COUNT(google_id) as usercount FROM google_users WHERE google_id=$user_id")->fetch_object()->usercount;
if($user_exist)
{
    echo '<script type="text/javascript">';
    echo 'alert("Welcome back!")';
    echo '</script>';

    echo 'Welcome back '.$name.'!';
    session_start();
    //$_SESSION['login'] = '1';
    //header("Location: student.php");
}
    else{
        //user is new
        echo 'Hi '.$name.', Thanks for Registering!';

$mysqli->query("INSERT INTO google_users(google_id, google_name, google_email)
    VALUES($user_id, '$name', '$email')");

    }

echo "1 record added";
mysqli_close($mysqli);
//header('Location:student.php');


