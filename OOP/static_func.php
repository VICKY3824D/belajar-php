<?php

class Math{
    public static function sum(int ...$numbers): int {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}

echo Math::sum(1, 2, 3, 4, 5) . '<br>'; // Output: 15

?>