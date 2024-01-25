<?php // all urls are redirected to index.php, url is stored in REDIRECT_QUERY_STRING

define("ROOT", "http://localhost/jonas-brüll.be");
//define("ROOT", "http://www.xn--jonas-brll-heb.be");

function buildURL($index = null) {
    // split webpage from HTTP GET variables or return homepage when no redirect defined
    $url = explode("&", trim($_SERVER['REDIRECT_QUERY_STRING'] ?? "homepage", "/"));
    if (!is_numeric($index)) {
        return implode($url);
    } return $url[$index] ?? "";
}

// redirect to webpage or 404page
$file = "public/" . buildURL(0) . ".view.php";
if (file_exists($file)) {
    require $file;
} else {
    require "errors/404.php";
}

?>