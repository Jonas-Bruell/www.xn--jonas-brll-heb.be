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
foreach ($_SERVER as $key => $value) {
    echo "{$key} = {$value} <br>";
}
echo "</pre>";
?>