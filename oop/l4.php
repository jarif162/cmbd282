<?php  
//namespace
namespace school2;
//traits
trait schoolTrait{
    public function mySchool(){
        echo "My school is XYZ School";
    }

}




//late static binding
class school{
    public static string $schoolName = "ABC School";


    public static function school():string{
        return  "I amm a student of ABC school";
    }

    public static function mySchool():string{  {
        return "My school is XYZ School";
    }
}
}

// class student extends school{
//     public static function mySchool(){
//         return "My school is XYZ School";
//     }
// }   

echo school::mySchool(); // My school is XYZ School
echo school ::$schoolName; // ABC School

//object and reference
class student{
    public string $studentName="kamal khan";
    protected int $studentAge=20;
    private int $studentRoll=101;
}


$studentObj = new student;
$studentObj2=$studentObj; // reference

$studentObj2->studentName="Ali Khan"; // change the name of studentObj2
echo $studentObj->studentName; // Ali Khan

echo "<br>";

//serialization
$studentObj3=serialize($studentObj); // serialize the object
echo $studentObj3; // O:6:"student":3:{s:12:"studentName";s:10:"kamal khan";s:12:"studentAge";i:20;s:11:"studentRoll";i:101;}

$studentObj4=unserialize($studentObj3); // unserialize the object
echo $studentObj4->studentName; // kamal khan

//use of traits
class student2{
    use schoolTrait; // use the trait
    public string $studentName="kamal khan";
    protected int $studentAge=20;
    private int $studentRoll=101;

    public function mySchool(){
        return "My school is XYZ School";
    }
}






?>