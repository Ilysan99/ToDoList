<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../View/ViewAddTodoList.php"; 
require_once "../View/ViewRemoveTodoList.php"; 
require_once "../Helper/Input.php"; 

function viewShowTodoList() {
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Foto" . PHP_EOL;
        echo "2. Hapus Foto" . PHP_EOL;
        echo "X. Exit" . PHP_EOL;

        $pilihan = input("pilih");

        if($pilihan == "1") {
            viewAddTodoList();
        } elseif ($pilihan == "2") {
            viewRemoveTodoList();
        } elseif ($pilihan == "X") { 
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }
    echo "See U Again" . PHP_EOL;
}