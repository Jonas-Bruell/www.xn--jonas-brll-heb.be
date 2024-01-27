<?php

function dd($input) {
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
    die();
}

function engine($path, $attributes = []) {
    extract($attributes);
    require root("engine/" . $path);
}


function part($path, $attributes = []) {
    extract($attributes);
    require root("partials/" . $path);
}

function php($path, $attributes = []) {
    extract($attributes);
    require root("php/" . $path);
}

function view($path, $attributes = []) {
    extract($attributes);
    require root("views/" . $path);
}



function abort($code = 404) {
    http_response_code($code);
    view("errors/{$code}.php");
    die();
}

?>