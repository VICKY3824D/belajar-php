<?php 

interface TableInterface {
    public function save(array $data);
}

interface LogInterface {
    public function log(string $message);
}

class Table implements TableInterface, LogInterface{
    public function save(array $data){
        foreach ($data as $key => $value){
            return "{$key} => {$value} <br />";
        }
        // return "Save method from table class <br>";
    }

    public function log(string $message){
        return $message . "<br>";
    }
}

$table1 = new Table;

echo $table1->save(["Nama" => "Heru"]);

echo $table1->log("Hello my brother ");

echo (new Table)->log("Koen kapan moleh");
?>