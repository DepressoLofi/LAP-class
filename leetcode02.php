<?php

echo "<h1>Problem 3</h1>";
function removeDuplicates(&$nums)
{
    $length = count($nums);

    if ($length <= 1) {
        return $length;
    }

    $i = 0;

    for ($j = 1; $j < $length; $j++) {
        if ($nums[$j] != $nums[$i]) {
            $i++;
            $nums[$i] = $nums[$j];
        }
    }

    $nums = array_slice($nums, 0, $i + 1);
    return $i + 1;
}


$nums = [1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 5, 6, 7, 8];
echo "Original array: <br> " . implode(", ", $nums);
echo "<br>";
echo "<br>";

$count = removeDuplicates($nums);



echo "Duplicate Removed array:<br>";
echo implode(", ", $nums);
echo "<br>";
echo "<br>";
echo "Number of element: " . $count;
