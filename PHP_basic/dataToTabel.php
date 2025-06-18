<?php

$items = [
    ['Barang' => 'Pensil', 'Harga' => 2000, 'Stok' => 5],
    ['Barang' => 'Buku', 'Harga' => 15000, 'Stok' => 7],
    ['Barang' => 'Penghapus', 'Harga' => 1000, 'Stok' => 10],
    ['Barang' => 'Spidol', 'Harga' => 5000, 'Stok' => 13],
    ['Barang' => 'Kertas', 'Harga' => 3000, 'Stok' => 20]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data To table</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php foreach ($items as $item => $value): ?>
            <tr>
                <td><?php echo $value['Barang'];?></td>
                <td><?php echo $value['Harga'];?></td>
                <td><?php echo $value['Stok'];?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>