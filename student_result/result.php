<?php


function result_make(float $math, float $physics, float $chemistry, float $english, float $bangla){
    $total_marks=$math+$physics+$chemistry+$english+$bangla;
    $average_marks=$total_marks/5;

switch(true){
/*=====checking the input is valid or not =====*/
    case(!($math>=0 && $math<=100)|| 
        !($physics >= 0 && $physics <= 100) || 
        !($chemistry >= 0 && $chemistry <= 100) ||
        !($english >= 0 && $english <= 100) ||
        !($bangla >= 0 && $bangla <= 100)):
        {
            return "Mark range is invalid\n";
            break;
        }

/*======fail checking for individual subject======*/
    case(($math<33)||
        ($physics<33)||
        ($chemistry<33)||
        ($english<33)||
        ($bangla <33)
        ):{
            return "Grade is Fail\n";
            break;
        }

/*=========grade calculation based on average marks=========*/

case ($average_marks>=80 && 100>=$average_marks):
    echo "Total Marks = " . $total_marks . "\n";
    echo "Average Marks = " . $average_marks . "\n";
    echo "Grade: A+";
    break;
case ($average_marks>=70 && 80>$average_marks):
    echo "Total Marks = " . $total_marks . "\n";
    echo "Average Marks = " . $average_marks . "\n";
    echo "Grade: A";
    break;
case ($average_marks>=60 && 70>$average_marks):
    echo "Total Marks = " . $total_marks . "\n";
    echo "Average Marks = " . $average_marks . "\n";
    echo "Grade: A-";
    break;
case ($average_marks>=50 && 60>$average_marks):
    echo "Total Marks = " . $total_marks . "\n";
    echo "Average Marks = " . $average_marks . "\n";
    echo "Grade: B";
    break;
case ($average_marks>=40 && 50>$average_marks):
    echo "Total Marks = " . $total_marks . "\n";
    echo "Average Marks = " . $average_marks . "\n";
    echo "Grade: C";
    break;
case ($average_marks>=33 && 40>$average_marks):
    echo "Total Marks = " . $total_marks . "\n";
    echo "Average Marks = " . $average_marks . "\n";
    echo "Grade: D";
    break;
case ($average_marks>=0 && 33>$average_marks):
    echo "Total Marks = " . $total_marks . "\n";
    echo "Average Marks = " . $average_marks . "\n";
    echo "Grade: fail";
    break;
       }
}



$result=result_make(70,35,78.9,72,77);

echo $result;


?> 