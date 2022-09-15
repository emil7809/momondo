<?php
require_once __DIR__ . '/_x.php';

$correct_email = 'a@a.com';
$correct_password = '123';

// VALIDATE
_validate_user_email();


// Check if the user's email matches the correct email
if ($_POST['user_email']  != $correct_email) {
    http_response_code(400);
    exit();
}

if ($_POST['user_password']  != $correct_password) {
    http_response_code(400);
    exit();
}
