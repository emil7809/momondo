<?php
require_once __DIR__ . '/_x.php';
$existing_email = 'a@a.com';
_validate_new_email();
_validate_name();
_validate_password();
if ($_POST['new_user_email']  == $existing_email) {
    _respond('This email allready exists', 400);
    exit();
}

_respond('You did it');
