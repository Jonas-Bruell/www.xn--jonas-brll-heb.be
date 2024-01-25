<?php

function dd($input) {
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
    die();
}

function view($path, $attributes = []) {
    extract($attributes);
    require root("views/" . $path);
}

function part($path, $attributes = []) {
    extract($attributes);
    require root("partials/" . $path);
}

function php($path, $attributes = []) {
    extract($attributes);
    require root("php/" . $path);
}

function abort($code = 404) {
    http_response_code($code);
    require root("errors/{$code}.php");
    die();
}

?>