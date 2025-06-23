<?php

$dateImmutable = new DateTimeImmutable(); // current time6(default timezone)

echo "Now : " . $dateImmutable->format("d-F-Y H:i:s") . PHP_EOL;

// Subtracts an amount of date
$new_date = $dateImmutable->sub(new DateInterval("P5Y2M4D"));

try {

    // ability to modify date with string using modify()
    $modify_new_date = $new_date->modify("+1 month");

    echo "+1 month with modify : " . $modify_new_date->format("d-F-Y") . PHP_EOL;

  // If an invalid Date/Time string is passed, DateMalformedStringException is thrown. 
} catch (DateMalformedStringException | Exception $err) {
    echo "date error : {$err->getMessage()} " . PHP_EOL; 
}

//diff is equals to ($new_date - $dateImmutable)
$interval = $dateImmutable->diff($new_date);

// convert date to string
$str = $new_date->format("Y-m-d H:i:s");

// %a will output the total number of days.
echo "Day difference: " .  $interval->format('%a total days')."\n";

// While %d will only output the number of days not already covered by the
// month.
echo "year,month,days difference: " . $interval->format('%y year, %m month, %d days')."\n";

$newDate = DateTimeImmutable::createFromFormat(
    "Y-m-d H:i:s",
    $str,
    new DateTimeZone("Asia/Jakarta")
);

if ($newDate) {
    echo $newDate->format("Y-m-d H:i:s T") . PHP_EOL;
} else {
    echo "Parsing gagal" . PHP_EOL;
}
?>

