<?php
session_start();

if(! isset($_SESSION['email']))
{
    header("location: login.php");
}

?>
<h1>welcome to dashboard</h1>
<a href="logout.php">Logout</a>