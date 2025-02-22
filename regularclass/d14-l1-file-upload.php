<?php
   if(isset($_POST["uploadbtn"])){
    $fileName=$_FILES["imgFile"]["name"];
     $tempName=$_FILES["imgFile"]["tmp_name"];

    $capitalAlpha="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $smallAlpha= "abcdefghijklmnopqrstuvwxyz";
    $number="0123456789";
     $randomString=str_shuffle(substr($capitalAlpha,0,2).substr($smallAlpha,0,2).substr($number,0,2));

     $uniqString=uniqid($randomString); //uniqid is used to generate unique string

     //get file extension
     $fileExt=pathinfo($fileName,PATHINFO_EXTENSION);

     //create new file name
    $newfileName=$uniqString.".".$fileExt;

    //create folder
    if(!is_dir("upload")){
        mkdir("upload");    //is_dir mean directory and mkdir mean create directory
    }

    //destination
    $destination="upload/".$newfileName;


    move_uploaded_file($tempName,$destination); //move_uploaded_file is used to upload file



   }






   // entype is help to upload file without any error
?>

<form action="" method="post" enctype="multipart/form-data"> 
    <input type="file" name="imgFile"> 
    <input type="submit" value="upload " name="uploadbtn">
</form>