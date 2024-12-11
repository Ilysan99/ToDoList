<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList() {

    echo "Menghapus TODO" . PHP_EOL;

    $pilihan = input("Nomor (X untuk batalkan)");

    if ($pilihan == "X") {
        echo "Batal mengahapus todo" . PHP_EOL;

    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}