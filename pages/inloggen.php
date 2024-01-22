
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
    include("database/interface.php");
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

<!DOCTYPE html>
<html lang="nl-be">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 

</head>
<body style="margin: 0; padding: 0;;">

    <form id="login-form" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>" method="post">
        <fieldset style="margin: 10vw;">
            <h3>login</h3>
            <p>Nieuw? <a href="registreren">Registreer je hier</a>!</p>
            <!-- username -->
            <label from="login-form" for="login-username">username: </label>
            <input type="text" id="login-username" name="username" required><br>
            <!-- password -->
            <label form="login-form "for="login-password">password: </label>
            <input type="password" id="login-password" name="password" required><br>
            <!-- error handeling -->
            <span style="display: block; margin-block-start: 1em; margin-block-end: 1em;"> <?php if (isset($_POST['login_submit'])) echo loginUser(); ?> </span>
            <!-- submit -->
            <input type="submit" id="login-submit" name="submit" value="Inloggen">
        </fieldset>
    </form>
    
</body>
</html>