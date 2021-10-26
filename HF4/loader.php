<?php
spl_autoload_register(function ($className)
{
    $parts = explode('\\', $className);

    $class = end($parts) . '.php';

    if (file_exists($class)) {
        include($class);
    }
});
/* https://stackoverflow.com/questions/29487199/php-namespaces-and-autoloading-issues */