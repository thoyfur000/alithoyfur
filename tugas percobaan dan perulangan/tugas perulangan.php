<?php
$input = 12345;

$total_digit = 0;
while ($input > 0) {
    $digit = $input % 10;
    $total_digit += $digit;
    $input = intdiv($input, 10);
}

echo "Output: Jumlah total digit: " . $total_digit;
?>