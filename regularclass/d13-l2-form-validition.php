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
?>

<!-- <form action="./formtest.php" method="post"> -->
<form action="./formtest.php" method="post">
    <input type="text" placeholder="Your name" name="userName">
    <?=$crrname??null ?>
    <?= $errname??null //<?= is used to shortcut of [use <?= instead of <?php echo  ]echo the value in php?> 
   
    <br><br>
    <input type="text" placeholder="Your mail" name="userMail">
    Gender:
    <input type="radio" value="male" name="gender">Male
    <input type="radio" value="female" name="gender">Female
    <br><br>
    skills:
    <input type="checkbox" value="php" name="skills[]">PHP
    <input type="checkbox" value="html" name="skills[]">HTML
    <input type="checkbox" value="css" name="skills[]">CSS
    <br><br>
    <select name="country" >
        <option value="bangladesh">Bangladesh</option>
        <option value="india">India</option>
        <option value="pakistan">Pakistan</option>
    </select>
    <br><br>
    <input type="password" placeholder="Enter your password" name="password">
    <button type="submit" name="signup">Submit</button>
</form>