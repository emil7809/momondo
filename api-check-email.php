<?php

$existing_email = 'a@a.com';


if ($_POST['new_user_email']  == $existing_email) {
    http_response_code(400);
    exit();
}
