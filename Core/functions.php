<?php

use Core\Response;

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function authorize($condition, $status = Response::FORBIDDEN) {
    
    if (! $condition) {
        abort($status);
    }
}

function base_path($path) {
    return BASE_PATH . $path;
}

function viewPath($path) {
    return base_path('views/' . $path . '.view.php');
}

function view($path, $attributes = []) {
    
    extract($attributes);
    
    require base_path('views/' . $path);
}

function abort($statusCode = Response::NOT_FOUND) {

    http_response_code($statusCode);

    view("{$statusCode}.view.php", [
        'title' => $statusCode
    ]);
    
    die();
}

function login($user) {
    $_SESSION['user'] = [
        'email' => $user['email']
    ];

    session_regenerate_id(true);
}

function logout() {
    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();

    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}

?>