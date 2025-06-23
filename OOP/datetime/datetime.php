<?php

$datetime = new DateTime();

// $datetime->setDate(1988, 1, 18);
// $datetime->setTime(10,10,10, 10);

// set timezone from code
// $datetime->setTimezone(new DateTimeZone("Europe/Istanbul"));

// + 1 day
$datetime->add(new DateInterval("P1D"));

// + 3 month
// $datetime->add(new DateInterval("P3M"));

$dateInterval = new DateInterval("P1M");
// $dateInterval->invert = true;

// - 1 month 
// $datetime->add($dateInterval);

// Subtracts an amount of days, months, years, hours, minutes and seconds
// https://www.php.net/manual/en/datetimeimmutable.sub.php

// -1 month
$datetime->sub($dateInterval);

// var_dump($datetime);

// format date to string
$strDate = $datetime->format("Y-m-d H:i:s");

echo "Current time : $strDate " . PHP_EOL;

// $dateInput = DateTime::createFromFormat("Y-m-d H:i:s", "1998-09-11 20:11:08", new DateTimeZone("Asia/Jakarta"));

$dateInput = DateTime::createFromFormat("Y-m-d H:i:s", $strDate, new DateTimeZone("Asia/Jakarta"));

// if($dateInput){
//     var_dump($dateInput);
// } else {
//     echo "Format salah" . PHP_EOL;
// }
?>

<!-- https://www.php.net/manual/en/datetimeimmutable.createfromformat.php -->