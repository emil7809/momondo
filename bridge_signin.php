<?php
session_start();
$_SESSION['user_name'] = 'Emily';
header('Location: view_index.php');
