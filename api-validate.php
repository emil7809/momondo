<?php
require_once __DIR__ . '/_x.php';

_validate_email();
_validate_user_name();

/* echo json_encode(['error' => $error_message]); */
echo json_encode(['user_name' => $_POST['user_name']]);
