<?php

const BASE = __DIR__ . "/../";
define("ROOT", "http://localhost/jonas-brüll.be/public");
//define("ROOT", "http://www.xn--jonas-brll-heb.be");
define("DOMAIN", "/jonas-br%c3%bcll.be/public");

function root($path) { 
    return BASE . "{$path}";
}

require root("php/global-functions.php");

$uri = strtolower(parse_url($_SERVER['REQUEST_URI'])['path']);


$link = substr($uri , 28, strlen($uri));
$file = root("controllers/" . ($link === "" ? "homepage" : $link) . ".php");

if (file_exists($file)) {
    require $file;
} else {
    abort();
}


//require root("router.php");


/*


const ROOT = __DIR__ . "/../";



require root("routing/router.php");

//require "routing/router.php";

dd($_SERVER);
*/
/*



// all urls are redirected to index.php, url is stored in REDIRECT_QUERY_STRING
function buildURL($index = null) {
    // split webpage from HTTP GET variables or return homepage when no redirect defined
    $url = explode("&", trim($_SERVER['REDIRECT_QUERY_STRING'] ?? "homepage", "/"));
    if (!is_numeric($index)) {
        return implode($url);
    } return $url[$index] ?? "";
}

// redirect to webpage or 404page
$file = "router/" . buildURL(0) . ".controller.php";
if (file_exists($file)) {
    require $file;
} else {
    require "errors/404.php";
}

*/
?>