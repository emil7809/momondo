<?php

$target_dir = 'img/';
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']); // img/circle.png
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // png | jpg | zip
$tmp_name = $_FILES['fileToUpload']['tmp_name']; // C:\xampp\tmp\php5B1.tmp
move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "img/profile-img.jpg");
header('Location: view_admin.php');
