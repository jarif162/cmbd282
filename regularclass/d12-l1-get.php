<?php
// $_GET['name'] = 'John';

echo "<pre>";
print_r($_GET);
echo "</pre>";

echo $_GET['name'];

// when error got then we can use (?) sign as query then put the value and key like this like http://localhost/cmbd282/regularclass/d12-l1-get.php? ->name=jarif and use multiple value like this http://localhost/cmbd282/regularclass/d12-l1-get.php?name=jarif&age=25   %20 is used for space like this http://localhost/cmbd282/regularclass/d12-l1-get.php?name=jarif%20foysal&age=25

echo "<br>";
// echo $_GET['age'] ?? "Age not set";

if(isset($_GET['age'])){
    echo '<br>';
    echo $_GET['age'];
}else{
    echo '<br>';
    echo "Age not set";      //echo $_GET['age'] ?? "Age not set";       shortcut of this code
}
?>