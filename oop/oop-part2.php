<?php
//interface

interface school
{
    public function mySchool();
    public function myClass();
}

interface student
{
    public function studentName();
    public function studentRoll();
}

//when an interface is defined, it can be implemented by a class.
//The class must implement all methods defined in the interface.

//interface can be used to create a contract for classes
//that implement the interface. The class must implement all methods defined in the interface.

class studentInfo implements school, student
{
    protected $schoolName = "XYZ High School";
    protected $studentName = "John Doe";
    public $studentRollName = "10";

    public function mySchool()
    {
        echo "My school is XYZ High School" . $this->schoolName;
    }

    public function myClass()
    {
        echo "My class is 10th" . $this->schoolName;
    }
    public function studentName()
    {
        echo "My name is " . $this->studentName;
    }

    public function studentRoll()
    {
        echo "My roll is " . $this->studentRollName;
        // echo "My roll is ".$this->studentRollName();
    }
}
$studentinfoObj = new studentInfo();
echo $studentinfoObj->mySchool();
echo "<br>";
echo "" . $studentinfoObj->myClass();
echo "<br>";
echo "" . $studentinfoObj->studentName();
echo "<br>";
echo "" . $studentinfoObj->studentRoll();
echo "<br>";

//override

$studentinfoObj->studentRollName = "20";
echo $studentinfoObj->studentRoll();
echo "<br>";

//  public
// Accessible from anywhere (inside the class, outside the class, and in subclasses).

// private
// Accessible only within the class where it is declared.

// protected
// Accessible within the class and subclasses, but not from outside.

//magic methods
// __construct() - Called when an object is created from a class
// __destruct() - Called when an object is destroyed
// __call() - Called when invoking inaccessible methods in an object context
// __callStatic() - Called when invoking inaccessible methods in a static context
// __get() - Called when reading data from inaccessible properties
// __set() - Called when writing data to inaccessible properties
// __isset() - Called when checking if inaccessible properties exist
// __unset() - Called when unsetting inaccessible properties
// __sleep() - Called when serializing an object
// __wakeup() - Called when unserializing an object
// __toString() - Called when an object is treated as a string
// __invoke() - Called when an object is called as a function
// __set_state() - Called for classes exported by var_export()
// __clone() - Called when an object is cloned
// __debugInfo() - Called when var_dump() is called on an object
// __serialize() - Called when an object is serialized
// __unserialize() - Called when an object is unserialized

class studentInfo3
{
    public $name = "John Doe";
    public $age = 25;
    private $studentRollName = "10";

    public $properties = [];



    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        } else if (array_key_exists($property, $this->properties)) {
            return $this->properties[$property];
        } else {
            return "Property '$property' does not exist.";
        }
    }

    public function __set($property, $value)
    {
        // return "Setting property '$property' to '$value'.";

        if (array_key_exists($property, $this->properties)) {
            $this->properties[$property] = $value;
        } else {
            array_push($this->properties, $property);
            $this->properties[$property] = $value;
        }
    }

    // public function __construct($name, $age) {
    //     $this->name = $name;
    //     $this->age = $age;
    // }

    public function __toString()
    {
        return "Name: " . $this->name . ", Age: " . $this->age;
    }

    public function __invoke($data)
    {
        return "Invoked object with name: " . $this->$data;
    }

    public function __call($method, $args)
    {
        if (method_exists($this, $method)) {
            return $this->$method($args);
        } else {
            return "Method  does not exist.";
        }
    }



    public function __isset($property)
    {
        return isset($this->properties[$property]);
    }

    public function __unset($property)
    {
        if (isset($this->properties[$property])) {
            unset($this->properties[$property]);
        } elseif (array_key_exists($property, $this->properties)) {
            unset($this->properties[$property]);
        } else {
            return "Property  does not exist.";
        }
    }
    // public function __sleep() {
    //     return array('name', 'age');
    // }
    // public function __wakeup() {
    //     // Code to execute when the object is unserialized
    // }
    // public function __clone() {
    //     // Code to execute when the object is cloned
    // }
    // public function __debugInfo() {
    //     return array(
    //         'name' => $this->name,
    //         'age' => $this->age,
    //     );
    // }
    // public function __serialize() {
    //     return array(
    //         'name' => $this->name,
    //         'age' => $this->age,
    //     );
    // }
    // public function __unserialize($data) {
    //     $this->name = $data['name'];
    //     $this->age = $data['age'];
    // }
    // public function __set_state($array) {
    //     $obj = new self($array['name'], $array['age']);
    //     return $obj;
    // }

    public static function __callStatic($method, $args)
    {
        return "Static method '$method' called with arguments: " . implode(", ", $args);
    }
}

$studentInfoObj3 = new studentInfo3;
// echo $studentInfoObj3->name."<br>"; // Accessing public property
// echo $studentInfoObj3->age."<br>"; // Accessing public property
// echo $studentInfoObj3->studentRollName."<br>"; // Accessing public property

$studentInfoObj3->studentD = "JArif";
echo $studentInfoObj3->studentD . "<br>"; // Accessing public property

//isset 
var_dump(isset($studentInfoObj3->studentD)); // Check if property exists
echo "<br>";
echo isset($studentInfoObj3->studentD) . "<br>"; // Check if property exists

//unset
// unset($studentInfoObj3->name); // Unset property

// echo $studentInfoObj3->name."<br>"; // Accessing public property after unset

//call
echo $studentInfoObj3->namef() . "<br>";

//call static
echo  studentInfo3::__callStatic('staticMethod', ['arg1', 'arg2']) . "<br>"; // Call static method

//tostring
echo $studentInfoObj3 . "<br>"; // Call __toString method

//invoked
echo $studentInfoObj3("name") . "<br>"; // Call __invoke method
