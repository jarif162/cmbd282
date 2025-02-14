<?php
function senitize($data){
    $data=trim($data);
    $data=stripslashes($data);//The stripslashes function removes backslashes
    $data=htmlspecialchars($data);//The htmlspecialchars function converts special characters in a string to their corresponding HTML entities
    return $data;
}

if(isset($_POST['signup'])){
    $userName= $_POST["userName"]; //isset is used to check if the variable is set or not
    if(empty($userName)){ //empty is used to check if the variable is empty or not
        $errname= "<span style='color:red'>Name is required</span>";
    }elseif(!preg_match("/^[A-Za-z.\- ]*$/",$userName)){
        $errname= "<span style='color:red'>only letter and space allowed</span>";
    }elseif(strlen($userName)<3){
        $errname= "<span style='color:red'>Name must be at least 3 characters</span>";
    }
    else{
        $crrname= senitize($userName);
    }
}
echo $errname??null;
echo $crrname??null;

?>