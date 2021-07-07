<?php

class Http
{
    //redirect index.php
    static function redirect(string $url): void
    {
        header("Location: $url");
        exit();
    }
}
