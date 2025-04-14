<?php
  function senitize($data){
    $data=trim($data); //remove spaces from the beginning and end of the string
    $data=htmlspecialchars($data); //convert special characters to html entities
    $data=stripslashes($data); //remove backslashes from the string
    return $data;

}

$conn=mysqli_connect("localhost","root","","cmbd282");

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- jquery cdn -->
     <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- toastr cdn -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </>

    <!-- place toastr at bottom right -->
    <script>
        toastr.options={
            "positionClass":"toast-bottom-center"
        }
    </script>
   </head>
  <body> 
    <?php require_once 'navbar.php'; ?>