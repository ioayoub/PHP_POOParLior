<?php

//enregistre nouvelle façon de charger des classes
spl_autoload_register(function ($className) {
    //className = Controllers\Article <-- ce que l'on a
    //require = libraries/controllers/Article.php <-- ce que l'on veut
    $className = str_replace("\\", "/", $className);
    require_once("libraries/$className.php");
    var_dump($className);
});
