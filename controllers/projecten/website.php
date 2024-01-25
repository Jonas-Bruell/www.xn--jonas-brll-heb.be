<?php 

part("head.php", [
    "title" => "Projecten : Website",
    "description" => "Hoe maak je een eigen website met plain html, css, php, js?",
    "keywords" => "html, css, php, js, eigen website, ",
]);

part("header.php");

view("projecten/website.php");
    
part("footer.php");

?>