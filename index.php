<?php // all urls are redirected to index.php, url is stored in REDIRECT_QUERY_STRING

define("ROOT", "http://localhost/jonas-brüll.be");
//define("ROOT", "http://www.xn--jonas-brll-heb.be");

$subdirs = array("projects"); // array of projects

function URL($index = null) {
    $url = explode("&", trim($_SERVER['REDIRECT_QUERY_STRING'] ?? "homepage", "/"));
    //$pagina = explode("/", $url[0] ?? "homepage", "/");
    //$parameters = $url[1];
    //$url = explode("/", trim($_SERVER['REDIRECT_QUERY_STRING'] ?? "homepage", "/")); // extract url into an array
    if (!is_numeric($index)) {
        return $url;
    } return $url[$index] ?? "";
}
//echo $_SERVER['REDIRECT_QUERY_STRING'];
/*
echo "<br>";
echo URL(0);
echo "<br>";
echo URL(1);
echo "<br>";
echo URL(2);
/*
// translating pretty url into pagelink
if (is_numeric(array_search(URL(0), $subdirs))) { // returns key (numeric) or false (not numeric)
    $file = "pages/" . URL(0) . "/" . URL(1) . ".php";
    //$rest = ;
} else {
    $file = "pages/" . URL(0) . ".php";
    //$rest = ;
}
*/
/*
function reconstructURL($file) {

}
*/
// redirect to webpage or 404page
$file = "pages/" . URL(0) . ".php";
if (file_exists($file)) {
    require $file; //reconstructURL($file);
} else {
    require "404.php";
}

?>