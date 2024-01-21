<?php // all urls are redirected to index.php with the url in the "pretty-url" variable

define("ROOT", "http://localhost/jonas-brüll.be");
//define("ROOT", "http://www.xn--jonas-brll-heb.be");

$subdirs = array("projects"); // array of projects

function URL($index = null) {
    $url = explode("/", trim($_GET["pretty-url"] ?? "homepage", "/")); // extract url into an array
    if (!is_numeric($index)) {
        return $url;
    } return $url[$index] ?? "";
}

// translating pretty url into pagelink
if (is_numeric(array_search(URL(0), $subdirs))) { // returns key (numeric) or false (not numeric)
    $file = "pages/" . URL(0) . "/" . URL(1) . ".php";
} else {
    $file = "pages/" . URL(0) . ".php";
}

// redirect to webpage or 404page
if (file_exists($file)) {
    require $file;
} else {
    require "404.php";
}

?>
</body>
</html>