<?php

require_once "../Model/TodoList.php";
require_once "../Controller/AddTodoList.php";
require_once "../Controller/ShowTodoList.php";
require_once "../Controller/RemoveTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Web");
addTodoList("Belajar MySQL");
addTodoList("Belajar Laravel");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();

