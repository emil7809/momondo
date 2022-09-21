<?php

$correct_password = '123';


if ($_POST['user_password']  != $correct_password) {
    http_response_code(400);
    exit();
}
