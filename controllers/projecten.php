<?php

part("head.php", [
    "title" => "Projecten",
    "description" => "Mijn projecten",
    "keywords" => "projecten",
]);

part("header.php");

view("projecten.view.php");

part("footer.php");

?>