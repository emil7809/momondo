<?php

$correct_email = 'a@a.com';
$correct_password = '123';


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
