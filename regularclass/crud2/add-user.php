<?php
include_once 'header.php'; 


//diff between include once and require once
// include_once: if the file is not found, the script will continue to run
// require_once: if the file is not found, the script will stop

  

    if(isset($_POST['addUser'])){
        $name=$_POST['name'];

        if(empty($name)){
            $errName="please enter a name";
        }else{
            $crrName=senitize($name);
            $sql="INSERT INTO users (firstName) VALUES ('$crrName')";
            $result=mysqli_query($conn,$sql);
            if($result){
               echo "<script>toastr.success('User added successfully')</script>";
                
            }else{
               echo "<script>toastr.error('User not added')</script>";
            }   
        }  
    }
?>


<div class="container"> 
    <div class="row">
        <div class="col-md-5 m-auto my-5 border shadow p-4">
            <form action="" method="post">
                <h2 class="mb-4">Add User</h2>
                <div class="mb-3">
                    <label for="name" class="form-label">User name</label>
                    <input type="text" name="name" id="name" class="form-control <?=isset($errName) ? "is-invalid" : null?>" >
                    <div class="invalid-feedback">
                        <?=$errName?? null?>Please enter your name
                    </div>
                </div>
                <button type="submit" class="btn btn-dark" name="addUser">Add users</button>
            </form>

        </div>
    </div>
    
</div>


<?php include_once 'footer.php'; ?>

   
   