<?php

//3 access modifiers - public, private, protected
// public - can be accessed from outside the class
// private - can be accessed from inside the class
// protected - can be accessed from inside and outside the class
class  studentsInfo{
    public $studentName="jarif foysal"; // public property -class property

    // public const gender="male";
    protected const gender="male"; // protected constant - class constant
     // public constant - class constant

     private $isMarried=false; // private property - class property

    public static $studentId=101; // public static property - class static property

    public function studentAge(){
        return  $this->studentName." age 25and his married status is".$this->isMarried."<br>"; // public method - class method here return and echo can be used
    }

    public function __construct (){
        echo "this is constructor"."<br>"; // constructor - class constructor
    }

    public function __destruct(){
        echo "<br> this is destructor"; // destructor - class destructor
    }

    public static function studentId(){
        return "student id 101"; // public static method - class static method
    }
}

$studentObj = new studentsInfo(); // object creation --class convert into object

$studentObj->studentName = "jarif"; // accessing public property - class property "->" is used to access the property of the class

echo $studentObj->studentName; // accessing public property - class property "->" is used to access the property of the class and name of "->" is the name of the property
echo "<br>";

echo $studentObj->studentAge(); // accessing public method - class method "->" is used to access the method of the class
echo "<br>";

// echo $studentObj::gender."<br>";
 // accessing public constant - class constant "::" is used to access the constant of the class

echo studentsInfo::$studentId; // accessing public static property - class static property "::" is used to access the static property of the class and "::" is name resolution operator and this is used to access the static property of the class without creating an object of the class
echo "<br>";

echo studentsInfo::studentId(); // accessing public static method - class static method "::" is used to access the static method of the class and "::" is name resolution operator and this is used to access the static method of the class without creating an object of the class
echo "<br>";

//inheritance - class inheritance - parent class and child class

class studentDetails extends studentsInfo{
     public function studentDetailsAll(){
        // echo "this is student details"."<br>";
         // child class constructor - class constructor

         return "Student name is: ".$this->studentName.", student gender is:".$this::gender.", student age is:".$this->studentAge();// accessing public property - class property "->" is used to access the property of the class and this is used to access the property of the parent class from child class
    }

}

$studentDetailsObj = new studentDetails(); // object creation --class convert into object
$studentDetailsObj->studentName = "foysal"; // accessing public property - class property "->" is used to access the property of the class

echo $studentDetailsObj->studentName; // accessing public property - class property "->" is used to access the property of the class and name of "->" is the name of the property
echo "<br>";

echo $studentDetailsObj->studentAge(); // accessing public method - class method "->" is used to access the method of the class
echo "<br>";

echo $studentDetailsObj->studentDetailsAll(); // accessing public method - class method "->" is used to access the method of the class
echo "<br>";








?>