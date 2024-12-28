<?php

//session_start(); 

function registerUser()
{
    $username = filter_input(INPUT_POST, "register_username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "register_plain_password", FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($username)) {
        return "Gebruikersnaam is verplicht";
    }
    if (!validateInput("username", $username)) {
        return "Gebruikersnaam mag enkel a-z, A-Z, 1-9 en -_ bevatten";
    }
    if (empty($password)) {
        return "Wachtwoord is verplicht";
    }
    if (createNewUser($username, $password)) {
        $_SESSION["username"] = $username;
        header("Location: " . implode(array(ROOT, "/", $_GET['redirect'])));
        exit();
    }
}

?>
