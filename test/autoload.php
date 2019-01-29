<?php

function my_autoloader($class) {
    require_once '../src/' . $class . '.php';
}

spl_autoload_register('my_autoloader');