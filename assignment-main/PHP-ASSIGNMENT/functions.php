<?php

// ANSWER 1
function posNegChecker($num)
{
    if ($num > 0) {
        echo "Number $num is positive number";
    } elseif ($num < 0) {
        echo "Number $num is negative number";
    } elseif ($num === 0) {
        echo "The number: $num is zero";
    } else {
        echo "Not a number";
    }
}

// ANSWER 2
function tempConverter($temp)
{
    $convertedCelsius = ($temp - 32) * 5 / 9;
    $convertedFarenheit = ($temp * 9 / 5) + 32;

    echo "The converted temperature: $temp to celsius $convertedCelsius <br>";
    echo "The converted temperature: $temp to farenheit $convertedFarenheit";
}

// ANSWER 3
function evenOrOdd($num)
{
    if ($num % 2 === 0) {
        echo "The number: $num is EVEN";
    } else {
        echo "The number: $num is ODD";
    }
}

// ANSWER 4
function findingBiggestNum($num1, $num2, $num3)
{
    if ($num1 >= $num2 && $num1 >= $num3) {
        $biggest = $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        $biggest = $num2;
    } elseif ($num3 >= $num1 && $num3 >= $num2) {
        $biggest = $num3;
    } else {
        echo "all of the numbers are the same";
    }

    echo "Between the numbers $num1,$num2, and $num3 so the biggest number is $biggest";
}

// ANSWER 5
function checkGrade($grade)
{
    if ($grade >= 70) {
        echo "HONOR";
    } elseif ($grade <= 40) {
        echo "FAIL";
    } else {
        echo "PASS";
    }
}

//7//
function findLargestNum($num1, $num2)
{
    if ($num1 > $num2) {
        echo "The Largest number is: $num1 <br>";
    } elseif ($num2 > $num1) {
        echo "The Largest number is: $num2 <br>";
    } else {
        echo "Both numbers are equal. <br>";
    }
}
