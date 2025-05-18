<?php
//1. Write a simple PHP class which displays the following string. Go to the editor ‘Mamurjor IT Institute !’
class  Mamurjor{
    public function displayMessage() {
        echo "Mamurjor IT Institute !";
    }
}

$it = new Mamurjor();
echo $it->displayMessage()."<br>";

//  Write a simple PHP class which displays an introductory message like “Hello All, I am Hadi”, where “Hadi” is an argument value of the method within the class

class intro {
    public function display($name){
        echo "Hello All, I am $name";
    }
}

$it= new intro();
echo $it->display("Hadi")."<br>";


// Write a PHP class that calculates the factorial of an integer

class Factorial {
    public function calculate($number) {
        if ($number < 0) {
            return "Factorial is not defined for negative numbers.";
        } elseif ($number == 0 || $number == 1) {
            return 1;
        } else {
            $factorial = 1;
            for ($i = 2; $i <= $number; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        }
    }
}

$factorial = new Factorial();
echo $factorial->calculate(6)."<br>";

//Write a PHP class that sorts an ordered integer array with the help of sort() function. Sample array : array(11, -2, 4, 35, 0, 8, -9)

class SortArray {
    public function sortArray($array) {
        sort($array);
        return $array;
    }
}
$sortArray = new SortArray;
// $array = array(11, -2, 4, 35, 0, 8, -9);
echo "<pre>";
print_r($sortArray->sortArray([11, -2, 4, 35, 0, 8, -9]));
echo "</pre>";

// Calculate the difference between two dates using PHP OOP approach Sample Dates : 1981-11-03, 2013-09-04 Expected Result : Difference : 31 years, 10 months, 1 days

class DateDifference {
    public function calculateDifference($date1, $date2) {
        $datetime1 = new DateTime($date1);
        $datetime2 = new DateTime($date2);
        $interval = $datetime1->diff($datetime2);
        return "Difference : " . $interval->y . " years, " . $interval->m . " months, " . $interval->d . " days";
    }
}

$dateDifference = new DateDifference();
echo $dateDifference->calculateDifference("1981-11-03", "2013-09-04")."<br>";


// 6. Write a PHP Calculator class which will accept two values as arguments, then add them,
// subtract them, multiply them together, or divide them on request.
// For example :
// $mycalc = new MyCalculator( 12, 6);
// echo $mycalc- > add(); // Displays 18
// echo $mycalc- > multiply(); // Displays 72

class MyCalculator {
    private $value1;
    private $value2;

    public function __construct($value1, $value2) {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function add() {
        return $this->value1 + $this->value2;
    }

    public function subtract() {
        return $this->value1 - $this->value2;
    }

    public function multiply() {
        return $this->value1 * $this->value2;
    }

    public function divide() {
        if ($this->value2 != 0) {
            return $this->value1 / $this->value2;
        } else {
            return "Division by zero is not allowed.";
        }
    }
}

$mycalc = new MyCalculator(12, 6);
echo $mycalc->add()."<br>";
echo $mycalc->subtract()."<br>";
echo $mycalc->multiply()."<br>";
echo $mycalc->divide()."<br>";

// 7. Write a PHP script to convert a string to Date and DateTime.
// Sample Date : ’12-08-2004′
// Expected Output : 2004-12-08
// Note : PHP considers ‘/’ to mean m/d/Y format and ‘-‘ to mean d-m-Y format.

class DateConverter {
    public function convertToDate($dateString) {
        $date = DateTime::createFromFormat('d-m-Y', $dateString);
        return $date->format('Y-m-d');
    }
}

$dateConverter = new DateConverter();
echo $dateConverter->convertToDate("12-08-2004")."<br>";





?>