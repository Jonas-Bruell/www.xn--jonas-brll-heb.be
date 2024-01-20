<?php
    define("ROOT", "http://localhost/jonas-brüll.be");
    //define("ROOT", "http://www.xn--jonas-brll-heb.be");

    function URL($index = null) {
        $url = explode("/", trim($_GET["url"] ?? "home", "/"));
        if (!is_numeric($index)) {
            return $url;
        } return $url[$index] ?? "";
    } $file = URL(0) . ".php";

    if (file_exists($file)) {
        require $file;
    } else {
        require "404.php";
    }
?>