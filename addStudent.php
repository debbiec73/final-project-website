<?php
/**
 * Created by PhpStorm.
 * User: debbie
 * Date: 4/22/14
 * Time: 12:12 AM
 */
$connectDB=mysqli_connect("localhost", "root", "hunter99", "website");
if(mysqli_connect_errno($connectDB))
{
    echo "Failed to connect to mysql" . mysqli_connect_error();
}
