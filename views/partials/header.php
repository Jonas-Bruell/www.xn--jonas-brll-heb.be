<?php
function buttonLoginProfile()
{
    if (isset($_SESSION['session-username'])) {
        echo '/profiel';
    } else {
        echo implode(array('/profiel/inloggen?redirect=', htmlspecialchars($_SERVER["REDIRECT_QUERY_STRING"] ?? "homepage")));
    }
}

?>
<body>
<header class="flex-center"
        style="background-color: #ddd; justify-content: space-between; padding: 20px 50px; position: sticky; top: 0;">
    <div class="flex-center">
        <img style="height: 40px;" src="<?= ROOT ?>/img/JB.svg">
        <p style="margin-left: 30px; border-left: 1px solid black; padding-left: 30px; font-size: 40px; font-weight: bold; text-transform: uppercase;">
            Jonas Brüll</p>
    </div>
    <nav class="flex-center">
        <ul class="flex-center" style="list-style-type: none;">
            <li><a class="<?= $_SERVER['REQUEST_URI'] === '/' ? "selected" : "not-selected" ?>"
                   style="text-decoration: none;" href="<?= ROOT ?>">
                    <button>Home</button>
                </a></li>
            <li><a class="<?= $_SERVER['REQUEST_URI'] === '/projecten' ? "selected" : "not-selected" ?>"
                   style="text-decoration: none;" href="<?= ROOT ?>/projecten">
                    <button>Projecten</button>
                </a></li>
            <li><a class="<?= $_SERVER['REQUEST_URI'] === '/over-mij' ? "selected" : "not-selected" ?>"
                   style="text-decoration: none;" href="<?= ROOT ?>/over-mij">
                    <button>Over mij</button>
                </a></li>
        </ul>
        <div class="flex-center">
            <a href="<?= ROOT ?><?php buttonLoginProfile(); ?>">
                <button>Profiel</button>
            </a>
        </div>
    </nav>
</header>