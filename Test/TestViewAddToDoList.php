<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar MySQL");
addTodoList("Belajar Laravel");

ViewAddTodoList();

showTodoList();

ViewAddTodoList();

showTodoList();