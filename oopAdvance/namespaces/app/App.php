<?php

namespace App;

require_once'../models/Model.php';

// agar tidak bentrok menggunakan 'as'
use Models\{Table as ModelTable, Modell as ModelModell};

class Table{
    public static function get(): void{
        echo "App.Table.get()<br />";
    }
}

class Modell{
    public static function get(): void{
        echo "App.Modell.get()<br />";
    }
}

Table::get();
Modell::get();

ModelTable::get();
ModelModell::get();

?>