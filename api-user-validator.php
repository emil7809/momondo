<?php

$hard_coded_email = 'a@a.com';

if (!$hard_coded_email == $_POST['user_email']) {
    http_response_code(400);
    exit();
}

$hard_coded_password = '123';

if (!$hard_coded_email == $_POST['user_password']) {
    http_response_code(400);
    exit();
}

// Success