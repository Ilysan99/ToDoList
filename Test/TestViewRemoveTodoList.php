<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../Controller/AddTodoList.php";
require_once "../Controller/ShowTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Web");
addTodoList("Belajar MySQL");
addTodoList("Belajar Laravel");

showTodoList();

viewRemoveTodoList();

showTodoList();


