<?php

echo "<h1>Problem 1</h1>";
function twoSum($nums, $target)
{
    $twoNums = [];
    for ($x = 0; $x < count($nums) - 1; $x++) {
        for ($y = $x + 1; $y < count($nums); $y++) {
            if ($nums[$x] + $nums[$y] == $target) {
                $twoNums[] = $x;
                $twoNums[] = $y;
                return $twoNums;
            }
        }
    }
    return $twoNums;
}

$nums = [1, 3, 4, 0, 1];
$target = 2;
$ans = implode(", ", twoSum($nums, $target));

echo   " List of array: " . implode(", ", $nums);
echo "<br>";
echo "The sum of two numbers from the array: "  . $target;
echo "<br>";
echo "The index of two element in the array: " . $ans;

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h1>Problem 2</h1>";

$num1 = 9;
$square = sqrt($num1);

echo "The squareroot of " . $num1 . " is: " . $square;
