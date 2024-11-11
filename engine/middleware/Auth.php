<?php

namespace engine\middleware;

class Auth
{
    public function handle()
    {
        if (!$_SESSION['user'] ?? false) {
            header('Location: /');
            exit();
        }
    }

}

?>