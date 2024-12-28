<?php

function dd($input)
{
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
    die();
}

function root($path)
{
    return BASE . "{$path}";
}

function engine($path, $attributes = [])
{
    extract($attributes);
    require root("engine/" . $path . ".php");
}

function error($path, $attributes = [])
{
    extract($attributes);
    require root("views/errors/" . $path);
}

function part($path, $attributes = [])
{
    extract($attributes);
    require root("views/partials/" . $path);
}

function php($path, $attributes = [])
{
    extract($attributes);
    require root("php/" . $path);
}

function view($path, $attributes = [])
{
    extract($attributes);
    require root("views/" . $path);
}

function abort($code = 404)
{
    http_response_code($code);
    view("errors/{$code}.php");
    die();
}

function authorize($condition, $status = 403)
{
    if (!$condition) {
        abort($status);
    }
}


?>