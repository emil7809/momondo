<?php
require_once __DIR__ . '/_x.php';
$existing_email = 'a@a.com';
_validate_new_email();
_validate_name();
if ($_POST['new_user_email']  == $existing_email) {
    http_response_code(400);
    exit();
}

echo json_encode(['user_name' => $_POST['user_name']]);
