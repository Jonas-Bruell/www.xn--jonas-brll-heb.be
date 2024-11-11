<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403-fout</title>
</head>
<body>
<main style="margin: 25vh 10vw; display: grid; grid-template-columns: 50% 50%;">
    <div style="grid-area: 1/1/2/2; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <p style="margin: 0; font-size: 5vw; font-weight: bold;">403</p>
        <p style="margin: 0; font-size: 3vw;">Forbidden to view this page!</p>
    </div>
    <div style="grid-area: 2/1/3/2; display: flex; justify-content: center; align-items: center;">
        <button onclick="location.href='<?= ROOT ?>'">
            <a style="font-size: 1vw;" href="<?= ROOT ?>">Terug naar homepage</a>
        </button>
    </div>
    <div style="grid-area: 1/2/3/3; display: flex; justify-content: left; align-items: center;">
        <img style="width: 35vw;" src="<?= ROOT ?>/img/lock-403.png">
    </div>
</main>
</body>
</html>