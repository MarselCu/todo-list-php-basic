<?php

function showTodoList() {
    global $todoList;

    echo "TODOLIST: " . PHP_EOL;
    foreach ($todoList as $number => $value) {
        $number++;
        echo "$number. $value" . PHP_EOL;
    }
}