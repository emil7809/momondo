<?php
require_once __DIR__ . '/_x.php';

$correct_email = 'a@a.com';
$correct_password = '123';

_validate_email();


// Check if the user's email matches the correct email
if ($_POST['user_email']  != $correct_email) {
    //document.querySelector("[name='user_email']").classList.add("validate_error")
    http_response_code(400);
    exit();
}

if ($_POST['user_password']  != $correct_password) {
    http_response_code(400);
    exit();
}

$email = ['user_email' => $_POST['user_email']];
_respond($email);

/* echo json_encode(['info' => 'Welcome to the system', 'message' => $_POST['user_email']]); */
