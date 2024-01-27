<?php 

part("head.php", [
    "title" => "Over mij",
    "description" => "Wat uitleg over mezelf.",
    "keywords" => "cv, curriculum vitae, resume, over mij, vaardigheden",
]);

part("header.php");

view("over-mij.view.php");
    
part("footer.php");

?>