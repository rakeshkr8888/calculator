<?php
require('database.php');
require('function.php');
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['user_login']);
unset($_SESSION['user_name']);
unset($_SESSION['user_role']);
redirect('index.php');
?>