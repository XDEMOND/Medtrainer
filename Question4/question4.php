<?php
// Question 4

   function binarySearch($array, $target) {
    $left = 0; // declare the left index
    $right = count($array) - 1; // declare the right index

        while ($left <= $right) {
            $mid = floor(($left + $right) / 2); // calculate the middle index

            if ($array[$mid] == $target) { // if the target is found
                return true;
            }

            elseif ($array[$mid] < $target) { // if the target is greater than the middle element
                $left = $mid + 1; // move the left index to the right of the middle element
            }

            else {
                $right = $mid - 1; // move the right index to the left of the middle element
            }
        }

        return false; // if the target is not found
    }

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $target = 2;

    if (binarySearch($array, $target)) {
        echo 'true';
    } else {
        echo 'false';
    }
?>