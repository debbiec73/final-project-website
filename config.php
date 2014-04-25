<?php
/**
 * Created by PhpStorm.
 * User: debbie
 * Date: 4/21/14
 * Time: 11:26 AM
 */
ini_set("display_errors", true);
error_reporting(E_ALL);

// enable sessions
session_start();

// require authentication for most pages
if (empty($_SESSION['id']))
{
    redirect("signin.php");
}