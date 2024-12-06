<?php
function bubbleSortDescending(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Intercambiar valores
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

// Lista de ejemplo
$nums = [34, -5, 23, 0, -42, 12, 34];
echo "Lista antes de ordenar: " . implode(", ", $nums) . PHP_EOL;
bubbleSortDescending($nums);
echo "Lista después de ordenar: " . implode(", ", $nums) . PHP_EOL;
?>
