<?php
require_once __DIR__ . '/_x.php';
_validate_new_email();
$existing_email = 'a@a.com';
if ($_POST['new_user_email']  == $existing_email) {
    _respond('This email allready exists', 400);
    exit();
}
