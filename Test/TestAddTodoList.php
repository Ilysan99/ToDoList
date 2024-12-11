<?php

require_once "../Model/TodoList.php";
require_once "../Controller/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar MySQL");
addTodoList("Belajar Laravel");

var_dump($todoList);


