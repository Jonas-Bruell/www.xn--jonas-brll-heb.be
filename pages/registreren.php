<?php //session_start(); 
include("database/interface.php");
    function registerUser() {
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




<!DOCTYPE html>
<html lang="nl-be">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title> 

</head>
<body style="margin: 0; padding: 0;;">

    <form id="register-form" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>" method="post">
        <fieldset style="margin: 10vw;">
            <h3>register</h3>
            <p>Al een account? <a href="inloggen">Meld je hier aan</a>!</p>
            <!-- username -->
            <label from="register-form" for="register-username">username: </label>
            <input type="text" id="register-username" name="username" required><br>
            <!-- password -->
            <label form="register-form "for="register-password">password: </label>
            <input type="password" id="register-password" name="password" required><br>
            <!-- error handeling -->
            <span style="display: block; margin-block-start: 1em; margin-block-end: 1em;"> <?php if (isset($_POST['register_submit'])) echo registerUser(); ?> </span>
            <!-- submit -->
            <input type="submit" id="register-submit" name="submit" value="Inloggen">
        </fieldset>
    </form>
    
</body>
</html>