<?php

part("head.php", [
    "title" => "Profiel",
    "description" => "Je eigen profiel",
    "keywords" => "profiel",
]);

part("header.php");

view("profiel.view.php");

part("footer.php");

?>