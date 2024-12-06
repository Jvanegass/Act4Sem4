<?php
function mergeSort(&$arr) {
    if (count($arr) > 1) {
        $mid = count($arr) / 2;

        // Dividir en dos mitades
        $left = array_slice($arr, 0, $mid);
        $right = array_slice($arr, $mid);

        mergeSort($left);
        mergeSort($right);

        $i = $j = $k = 0;

        // Mezclar las mitades
        while ($i < count($left) && $j < count($right)) {
            if ($left[$i] < $right[$j]) {
                $arr[$k] = $left[$i];
                $i++;
            } else {
                $arr[$k] = $right[$j];
                $j++;
            }
            $k++;
        }

        while ($i < count($left)) {
            $arr[$k] = $left[$i];
            $i++;
            $k++;
        }

        while ($j < count($right)) {
            $arr[$k] = $right[$j];
            $j++;
            $k++;
        }
    }
}

// Lista de ejemplo
$words = ["banana", "apple", "cherry", "date", "fig", "grape"];
echo "Lista antes de ordenar: " . implode(", ", $words) . PHP_EOL;
mergeSort($words);
echo "Lista después de ordenar: " . implode(", ", $words) . PHP_EOL;
?>
