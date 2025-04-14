<?php
$pageName=basename($_SERVER["PHP_SELF"]); //basename() returns the trailing name of the path - it removes the directory part of the path.-example ->fully->/regularclass/crud2/navbar.php returns crud2/navbar.php and basename() returns navbar.php
//echo $pageName; //navbar.php
//echo $_SERVER["PHP_SELF"]; //returns the full path of the file - example ->/regularclass/crud2/navbar.php
//echo $_SERVER["SCRIPT_NAME"]; //returns the full path of the file - example ->/regularclass/crud2/navbar.php

?>





<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Batch 282</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?=$pageName == "index.php" ? "active":null?>" aria-current="page" href="./">All user</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?=$pageName == "add-user.php" ? "active":null?>" href="./add-user.php">Add new user</a>
        </li>
        
         
    </div>
  </div>
</nav>

