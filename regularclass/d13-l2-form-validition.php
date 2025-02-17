<?php
function senitize($data){
    $data=trim($data);
    $data=stripslashes($data);//The stripslashes function removes backslashes
    $data=htmlspecialchars($data);//The htmlspecialchars function converts special characters in a string to their corresponding HTML entities
    return $data;
}

$genders=["male","female","others"];
$allowSkills=["php","java","python"];
$countries = [
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria",
    "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan",
    "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia",
    "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica",
    "Croatia", "Cuba", "Cyprus", "Czechia (Czech Republic)", "Democratic Republic of the Congo", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador",
    "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini (Swaziland)", "Ethiopia", "Fiji", "Finland", "France",
    "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau",
    "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland",
    "Israel", "Italy", "Ivory Coast", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait",
    "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
    "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico",
    "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar (Burma)", "Namibia", "Nauru",
    "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway", "Oman",
    "Pakistan", "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal",
    "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe",
    "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia",
    "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria",
    "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
    "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu",
    "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
];


if(isset($_POST['signup'])){
    $userName= $_POST["userName"]; //isset is used to check if the variable is set or not
    $userEmail= $_POST["userMail"];
    $gender= $_POST["gender"]??null;
    $skills= $_POST["skills"]??[];
    $country= $_POST["country"];
    $pass=$_POST["password"];

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

    if(empty($userEmail)){ //empty is used to check if the variable is empty or not
        $errmail= "<span style='color:red'>Email is required</span>";
    }elseif(!filter_var($userEmail,FILTER_VALIDATE_EMAIL)){
        $errmail= "<span style='color:red'>Invalid email format</span>";
    }
    else{
        $crrmail= senitize($userEmail);
    }

    if(empty($gender)){ //empty is used to check if the variable is empty or not
        $errGender= "<span style='color:red'>Gender is required</span>";
        
    }elseif(!in_array($gender,$genders)){
           $errGender= "<span style='color:red'>Invalid gender</span>"; 
    }else{
        $crrGender= senitize($gender);
    }

    if(count($skills)==0){
       $errSkills="<span style='color:red'>Skills are required</span>";
    }else{ 
        foreach($skills as $skill){
            if(!in_array($skill,$allowSkills)){
                $errSkills="<span style='color:red'>Invalid skill</span>";
                $crrSkill=[];
                break;
            }else{
                $crrSkill[]= senitize($skill);
            }
    }

    }

    if(empty($country)){
        $errCountry= "<span style='color:red'>Please Select Your Country</span>";
    }elseif(!in_array($country,$countries)){
        $errCountry="<span style='color:red'>Invalid country</span>";
   }
   else{
    $crrCountry= senitize($country);
   }

   if(empty($pass)){
    $errPass= "<span style='color:red'>Password is required</span>";
}
elseif(!preg_match("/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,}$/"
,$pass)){
    $errPass="<span style='color:red'>Password must contain 6 characters of letters, numbers and 
    at least one special character.</span>";
    // preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/")
    //(?=.*\d) → At least one digit (0-9) \d is a shorthand character class that matches any digit (0-9).
// (?=.*[a-z]) → At least one lowercase letter (a-z)
// (?=.*[A-Z]) → At least one uppercase letter (A-Z)
// ^ → Start of the string
//The (?= ...) is called a positive lookahead in regular expressions (RegEx). It is used to check if a pattern exists ahead in the string without consuming characters.

}
else{
    $crrPass= senitize($pass);
}

if(isset($crrname) && isset($crrmail) && isset($crrGender) && count($crrSkill)>0 && isset($crrCountry) && isset($crrPass)){
    $skillsList = implode(", ", $crrSkill);
    $show="Your name is $crrname <br> Your email is $crrmail <br> Your gender is $crrGender <br> Your skills are $skillsList <br> Your country is $crrCountry <br> Your password is:".password_hash($crrPass,PASSWORD_DEFAULT);
    // $userName=$userEmail=$gender=$skills=$country=$pass=null;
    // $crrname=$crrGender=$crrSkill=$crrCountry=$crrPass=$crrmail=null;
    
}

}
?>

<!-- <form action="./formtest.php" method="post"> -->
<form action="" method="post">
    <input type="text" placeholder="Your name" name="userName" value="<?= $crrname??null ?>">
    <?=$crrname??null ?>
    <?= $errname??null //<?= is used to shortcut of [use <?= instead of <?php echo  ]echo the value in php?> 
   
    <br><br>
    <input type="text" placeholder="Your mail" name="userMail" value="<?= $crrmail??null ?>">
    <?=$crrmail??null?>
    <?=$errmail??null?>
    <br><br>
    Gender:
    <input type="radio" value="male" name="gender" <?= isset($crrGender) && $crrGender == "male" ? "checked" : null ?>>Male
    <input type="radio" value="female" name="gender" <?= isset($crrGender) && $crrGender == "female" ? "checked" : null ?>>Female
    <input type="radio" value="others" name="gender" <?= isset($crrGender) && $crrGender == "others" ? "checked" : null ?>>Others
    <br><br>
    <?= $errGender ?? null ?>
    <?= $crrGender ?? null ?>
    
    <br><br>
    skills:
    <input type="checkbox" value="php" name="skills[]" <?= isset($crrSkill) && in_array("php", $crrSkill) ? "checked" : null ?>>PHP
    <input type="checkbox" value="java" name="skills[]" <?= isset($crrSkill) && in_array("java", $crrSkill) ? "checked" : null ?>>Java
    <input type="checkbox" value="python" name="skills[]" <?= isset($crrSkill) && in_array("python", $crrSkill) ? "checked" : null ?>>Python
    <br><br>
    <?= $errSkills ?? null ?>
    <?= isset($crrSkill) ? implode(", ", $crrSkill) : null ?>
   
   
    <br><br>
    <select name="country" >
        <option value="">Select country</option>
        <?php foreach($countries as $ctr){?>
            <option value="<?=$ctr?>" <?= isset($country) && $country == $ctr ? "selected" : null ?> ><?=$ctr?></option>
        <?php
        }
        ?>        
    </select>
    <br><br>
    <?= $errCountry ?? null ?>
    <?= $crrCountry ?? null ?>
    <br><br>
    <input type="password" placeholder="Enter your password" name="password">
    <br>
    <br>
    <?= $errPass ?? null ?>
    <!-- <?= $crrPass ?? null ?> -->
    <br>
    <button type="submit" name="signup">Submit</button>
</form>

<?=$show??null ?>