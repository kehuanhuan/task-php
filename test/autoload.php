<?php

function my_autoloader($class) {
    require_once APP_PATH .'/'. $class . '.php';
}

spl_autoload_register('my_autoloader');