<?php

$dateImmutable = new DateTimeImmutable(); // waktu saat ini (default timezone)

// Konversi ke string
$str = $dateImmutable->format("Y-m-d H:i:s");

// Buat ulang dengan timezone Asia/Jakarta
$newDate = DateTimeImmutable::createFromFormat(
    "Y-m-d H:i:s",
    $str,
    new DateTimeZone("Asia/Jakarta")
);

// Cek apakah parsing berhasil
if ($newDate) {
    echo $newDate->format("Y-m-d H:i:s T") . PHP_EOL;
} else {
    echo "Parsing gagal" . PHP_EOL;
}
?>
