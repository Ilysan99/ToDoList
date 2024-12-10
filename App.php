<?php

require_once __DIR__ . "/Model/Todolist.php";
require_once __DIR__ . "/BusinessLogic/ShowTodolist.php";
require_once __DIR__ . "/BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/View/ViewShiwTodoList.php";
require_once __DIR__ . "/View/AddTodoList.php";
require_once __DIR__ . "/ViewRemoveTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi TodoList" . PHP_EOL;

ViewShowTodoList();