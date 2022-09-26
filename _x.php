<?php

define('NAME_MIN_LEN', 2);
define('NAME_MAX_LEN', 10);

define('PASSWORD_MIN_LEN', 3);
define('PASSWORD_MAX_LEN', 10);


define('_REGEX_EMAIL', '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/');



function _validate_name()
{
    $error_message = 'user_name min ' . NAME_MIN_LEN . ' max ' . NAME_MAX_LEN . ' characters';
    if (!isset($_POST['user_name'])) {
        _respond($error_message, 400);
    }
    $_POST['user_name'] = trim($_POST['user_name']);
    if (strlen($_POST['user_name']) < NAME_MIN_LEN) {
        _respond($error_message, 400);
    }
    if (strlen($_POST['user_name']) > NAME_MAX_LEN) {
        _respond($error_message, 400);
    }
    return $_POST['user_name'];
}

function _validate_password()
{
    $error_message = 'new_password min ' . PASSWORD_MIN_LEN . ' max ' . PASSWORD_MAX_LEN . ' characters';
    if (!isset($_POST['new_password'])) {
        _respond($error_message, 400);
    }
    $_POST['new_password'] = trim($_POST['new_password']);
    if (strlen($_POST['new_password']) < PASSWORD_MIN_LEN) {
        _respond($error_message, 400);
    }
    if (strlen($_POST['new_password']) > PASSWORD_MAX_LEN) {
        _respond($error_message, 400);
    }
    return $_POST['new_password'];
}

function _validate_user_password()
{
    $error_message = 'user_password min ' . PASSWORD_MIN_LEN . ' max ' . PASSWORD_MAX_LEN . ' characters';
    if (!isset($_POST['user_password'])) {
        _respond($error_message, 400);
    }
    $_POST['user_password'] = trim($_POST['user_password']);
    if (strlen($_POST['user_password']) < PASSWORD_MIN_LEN) {
        _respond($error_message, 400);
    }
    if (strlen($_POST['user_password']) > PASSWORD_MAX_LEN) {
        _respond($error_message, 400);
    }
    return $_POST['user_password'];
}



function _validate_email()
{
    $error_message = 'user_email missing or invalid';
    if (!isset($_POST['user_email'])) {
        _respond($error_message, 400);
    }
    $_POST['user_email'] = trim($_POST['user_email']);
    if (!preg_match(_REGEX_EMAIL, $_POST['user_email'])) {
        _respond($error_message, 400);
    }
    return $_POST['user_email'];
}

function _validate_new_email()
{
    $error_message = 'new_user_email missing or invalid';
    if (!isset($_POST['new_user_email'])) {
        _respond($error_message, 400);
    }
    $_POST['new_user_email'] = trim($_POST['new_user_email']);
    if (!preg_match(_REGEX_EMAIL, $_POST['new_user_email'])) {
        _respond($error_message, 400);
    }
    return $_POST['new_user_email'];
}

// ##############################
function _respond($message = '',  $http_response_code = 200)
{
    header('Content-Type: application/json');
    http_response_code($http_response_code);
    $response = is_array($message) ? $message :  ['info' => $message];
    echo json_encode($response);
    exit();
}
