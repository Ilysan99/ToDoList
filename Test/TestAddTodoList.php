<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar MySQL");
addTodoList("Belajar Laravel");

var_dump($todoList);


