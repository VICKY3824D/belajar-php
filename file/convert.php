<?php

$items = [
    ['Barang' => 'Pensil', 'Harga' => 2000, 'Stok' => 5],
    ['Barang' => 'Buku', 'Harga' => 15000, 'Stok' => 7],
    ['Barang' => 'Penghapus', 'Harga' => 1000, 'Stok' => 10],
    ['Barang' => 'Spidol', 'Harga' => 5000, 'Stok' => 13],
    ['Barang' => 'Kertas', 'Harga' => 3000, 'Stok' => 20]
];

// $serializedData = serialize($items);
// file_put_contents('data.txt', $serializedData);

// $rawData = file_get_contents('data.txt');
// $unserializedData = unserialize($rawData);
// print_r($unserializedData);

$jsonData = json_encode($items);
file_put_contents('data.json', $jsonData);

$jsonData = file_get_contents('data.json');
$data = json_decode($rawData, true);
echo $data;

?>