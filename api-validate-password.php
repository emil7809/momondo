<?php
require_once __DIR__ . '/_x.php';

$correct_password = '123';

_validate_user_password();

if ($_POST['user_password']  != $correct_password) {
    _respond('the password is not registred', 400);
    exit();
}

_respond('You did it');
