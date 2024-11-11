<?php

require root("config.php");
//Database
function openMySQLConnection()
{
    global $db_server, $db_user, $db_password, $db_name;
    try {
        return mysqli_connect($db_server, $db_user, $db_password, $db_name);
    } catch (Exception $exeption) {
        echo "Error: interface.php :: could not connect to database";
    }
}

//Validator
function validateInput($inputtype, $sanitized_input)
{
    switch ($inputtype) {
        case "username":
            return preg_match("/^[a-zA-Z1-9_-]*$/", $sanitized_input); // only letters, numbers, hyphen, underscore allowed

    }

}

function createNewUser($username, $password)
{
    $connection = openMySQLConnection();
    $sql_query = "INSERT INTO Users (username, password) VALUES ('$username', '$password')";
    try {
        mysqli_fetch_assoc(mysqli_query($connection, $sql_query));
    } catch (Exception $exeption) {
        echo "could not register user";
    } finally {
        mysqli_close($connection);
    }
}

##########""
function checkLoginCredentials($username, $password)
{
    $connection = openMySQLConnection();
    $sql_query = "SELECT username, password FROM Users WHERE username = '$username'";
    try {
        $user = mysqli_fetch_assoc(mysqli_query($connection, $sql_query));
        return password_verify($password, $user['password']);
    } catch (Exception $exeption) {
        echo "could not find user";
        return false;
    } finally {
        mysqli_close($connection);
    }
}

?>