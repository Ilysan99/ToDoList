<?php

require_once __DIR__ . "/Model/Todolist.php";
require_once __DIR__ . "/Controller/ShowTodolist.php";
require_once __DIR__ . "/Controller/AddTodoList.php";
require_once __DIR__ . "/Controller/RemoveTodoList.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi TodoList" . PHP_EOL;

ViewShowTodoList();