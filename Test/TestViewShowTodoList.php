<?php

require_once "../View/ViewShowTodoList.php";
require_once "../Controller/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Web");
addTodoList("Belajar MySQL");
addTodoList("Belajar Laravel");

viewShowTodoList();