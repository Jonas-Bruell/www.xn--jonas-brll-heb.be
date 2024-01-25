<?php 

part("head.php", [
    "title" => "Jonas Brüll",
    "description" => "My online resume",
    "keywords"=> "cv, curriculum vitae, resume, Jonas, Brüll, Brull, Bruell",
]);

part("header.php");

view("homepage.html");
    
part("footer.php");

?>