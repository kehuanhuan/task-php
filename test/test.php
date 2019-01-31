<?php


require_once 'config.php';
require_once 'exception_handle.php';
require_once 'autoload.php';

function task1() {
    $i = 0;
    while ($i <= 10) {
        // sleep(1);
        echo "This is task 1 iteration $i.\n";
        yield;
        $i++;
    }

}

function task2() {
    $i = 0;
    while ($i <= 5) {
        // sleep(1);
        echo "This is task 2 iteration $i.\n";
        // var_export(2);
        yield;
        $i++;
    }
}


$scheduler = new Scheduler;

$scheduler->newTask(task1());
$scheduler->newTask(task2());

$scheduler->run();