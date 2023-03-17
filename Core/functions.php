<?php

function view($path, $attributes = [])
{
    extract($attributes);

    require BASE_PATH . 'views/' . $path;
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/error/$code.php");

    die();
}