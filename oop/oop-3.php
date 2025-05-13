<?php
//namespace
namespace school1;
//abstraction
abstract class school{
    public static string $schoolName="XYZ School"; 
    abstract public function mySchool() : string; //type hinting
    //abstract method
    abstract public function myClass() :mixed; //mixed type hinting
    //abstract method
}
  

class student extends school{
    public function mySchool() : string{
        return "My school is XYZ School";
    }
    public function myClass():bool{
        return true;
    }
}

//final 
final class studentInfo extends school{
    public function mySchool() : string{
        return "My school is XYZ School";
    }
    public function myClass():bool{
        return true;
    }
}

//cloning
$studentInfoObj= new studentInfo;
$studentInfoObj2= clone $studentInfoObj;
echo $studentInfoObj2->mySchool();

//comparing objects
if ($studentInfoObj===$studentInfoObj2){
    echo "Both objects are same";
}else{
    echo "Both objects are different";
}






?> 