<?php

session_start();

if(isset($_SESSION['Admin_id']))
{
 unset($_SESSION['Admin_id']);

}

header("Location: A_login.php");
die;