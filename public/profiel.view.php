<!DOCTYPE html>
<html lang="nl-be">
<head>

    <?php include "elements/head.php";?>

    <meta name="keywords" content="cv, curriculum vitae, resume, Jonas, Brüll, Brull, Bruell">
    <meta name="description" content="My online resume">
    <title>Projecten</title> 

</head>
<body>

    <?php include "elements/header.php";?>

    <main>
        <form action="index.php" method="post">
            <input type="submit" name="logout" value="logout">
        </form>
        <?php
            if (isset($_POST["logout"])) {
                session_start();
                $_SESSION = array();
                session_destroy();
                header("Location: " . implode(array(ROOT, "/")));
                exit();
            }
        ?>

    </main>

    <?php
        echo $_SESSION['username'];
    ?>
    <br>
    <?php 
        echo "<pre>";
        foreach($_SERVER as $key => $value) {
            echo "{$key} = {$value} <br>";
        } echo "</pre>";
     ?>

    <?php include "elements/footer.php";?>

</body>
</html>

