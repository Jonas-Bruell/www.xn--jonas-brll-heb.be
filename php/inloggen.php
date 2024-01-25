<?php
/*
if (isset($_SESSION['username'])) {
    echo "you should not be here";
    header("Location: /profiel");// . implode(array(ROOT, "/profiel")));
    exit();
}
*/
?>

<?php  //session_start(); 
    include("db/interface.php");
    function loginUser() {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($username)) {
            return "Gebruikersnaam is verplicht";
        }
        if (!validateInput("username", $username)) {
            return "Gebruikersnaam mag enkel a-z, A-Z, 1-9 en -_ bevatten";
        }
        if (empty($password)) {
            return "Wachtwoord is verplicht";
        }
        if (checkLoginCredentials($username, $password)) {
            session_start();
            $_SESSION["session-username"] = $username;
            header("Location: " . implode(array(ROOT, "/", $_GET['redirect'])));
            exit();
        }
    }
?>