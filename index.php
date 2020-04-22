<?php

function selectionSort($data)
{
    for($i=0; $i<count($data)-1; $i++) {
        $min = $i;
        for($j=$i+1; $j<count($data); $j++) {
            if ($data[$j]<$data[$min]) {
                $min = $j;
            }
        }
        $data = swapPositions($data, $i, $min);
    }
    return $data;
}

function swapPositions($data1, $left, $right) {
    $backup_old_data_right_value = $data1[$right];
    $data1[$right] = $data1[$left];
    $data1[$left] = $backup_old_data_right_value;
    return $data1;
}
$myArray = array(1, 9, 4.5, 6.6, 5.7, -4.5);
echo "Original Array :";
echo implode(', ',$myArray )."<br/>";
echo "Sorted Array :";
echo implode(', ',selectionSort($myArray)). PHP_EOL;
?>