<?php

declare(strict_types=1);

class Router
{
    public function redirect(string $url): void
    {
        $url = sprintf('Location: %s', $url);
        header($url);

        die();
    }
}