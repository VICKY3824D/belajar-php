<?php

    $greeting = "Minal Aidin Wal Faizin, Mohon Maaf Lahir dan Batin";
    $items = [
        ['Barang' => 'Pensil', 'Harga' => 2000, 'Stok' => 5],
        ['Barang' => 'Buku', 'Harga' => 15000, 'Stok' => 7],
        ['Barang' => 'Penghapus', 'Harga' => 1000, 'Stok' => 10],
        ['Barang' => 'Spidol', 'Harga' => 5000, 'Stok' => 13],
        ['Barang' => 'Kertas', 'Harga' => 3000, 'Stok' => 20]
    ];
    file_put_contents("greeting.txt", $greeting, FILE_APPEND);

    $jsonData = serialize($items);
    file_put_contents('data.txt', $jsonData);

    $message = file_get_contents("greeting.txt");
    
    $rawData = file_get_contents('data.txt');
    $data = unserialize($rawData);
    $jsonData = json_encode($data);
    print_r($jsonData);
    // print_r($data);

    // foreach ($items as $key => $value) {
    //     echo $key . "Nama barang : " . $value['Barang'] . "<br>";
    //     echo "Harga : " . $value['Harga'] . "<br>";
    //     echo "Stok : " . $value['Stok'] . "<br>";
    //     echo "<br>";
    // }

?>