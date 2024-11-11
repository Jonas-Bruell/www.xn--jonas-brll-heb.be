<!DOCTYPE html>
<html lang="nl-be">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>

</head>
<body style="margin: 0; padding: 0;;">

<form id="register-form" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" method="post">
    <fieldset style="margin: 10vw;">
        <h3>Registreren</h3>
        <p>Al een account? <a href="inloggen">Meld je hier aan</a>!</p>
        <!-- username -->
        <label from="register-form" for="register-username">username: </label>
        <input type="text" id="register-username" name="username" required><br>
        <!-- password -->
        <label form="register-form " for="register-password">password: </label>
        <input type="password" id="register-password" name="password" required><br>
        <!-- error handeling -->
        <span style="display: block; margin-block-start: 1em; margin-block-end: 1em;"> <?php if (isset($_POST['register_submit'])) echo registerUser(); ?> </span>
        <!-- submit -->
        <input type="submit" id="register-submit" name="submit" value="Inloggen">
    </fieldset>
</form>

</body>
</html>