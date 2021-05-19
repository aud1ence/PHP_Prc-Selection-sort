<?php
function selectionSort($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] > $arr[$min]) {
                $min = $j;
            }
        }
        $arr = swapPositions($arr, $min, $i);
    }
    return $arr;
}

function swapPositions($data, $right, $left)
{
    $backupOldDataRightValue = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $backupOldDataRightValue;
    return $data;
}

$myArray = [3, 0, 2, 5, -1, 4, 1];
echo "Original Array :\n";
echo implode(', ', $myArray);
echo "<br>";
echo "\nSorted Array :\n";
echo implode(', ', selectionSort($myArray));