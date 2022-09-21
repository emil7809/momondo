<?php
require_once __DIR__ . '/_x.php';

$correct_email = 'a@a.com';

// VALIDATE
_validate_email();

if ($_POST['user_email']  != $correct_email) {
    //document.querySelector("[name='user_email']").classList.add("validate_error")
    http_response_code(400);
    exit();
}
