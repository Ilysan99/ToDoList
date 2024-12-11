<?php

require_once "../View/ViewAddTodoList.php";
require_once "../Controller/ShowTodoList.php";
require_once "../Controller/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar MySQL");
addTodoList("Belajar Laravel");

ViewAddTodoList();

showTodoList();

ViewAddTodoList();

showTodoList();