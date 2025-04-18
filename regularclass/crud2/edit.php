<?php
    require_once 'header.php';
   isset($_GET['id'])? $id=$_GET['id'] : header("Location: index.php");

    $sql="SELECT * FROM users WHERE id=$id";
    $read=mysqli_query($conn,$sql);
    mysqli_num_rows($read)>0 ? $user=mysqli_fetch_assoc($read) : header("Location: index.php");

    if(isset($_POST['updateUser'])){
        $name=$_POST['name'];
        if(empty($name)){
            $errName="please enter a name";
        }else{
            $crrName=senitize($name);
            $sql="UPDATE users SET firstName='$crrName' WHERE id=$id";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo "<script>toastr.success('User updated successfully')</script>";
                header("Location: index.php");
            }else{
                echo "<script>toastr.error('User not updated')</script>";
            }   
        }  
    }
?>

<div class="container">
    <div class="row py-5">
        <div class="col-md-5 mx-auto my-5 border shadow p-4">
            <form action="" method="post">
               <div class="mb-3">
                <input type="text" name="name"   placeholder="Enter your name" 
                class="form-control <?=isset($errName) ? "is-invalid" : null?>" 
                value="<?=($name) ?? ($users['name'] ?? null) ?>">
               <div class="invalid-feedback"> <?=$errName?? null?> </div>
               </div>

               <button type="submit" class="btn btn-dark" name="updateUser">update</button>

            </form>
            

        </div>
    </div>
</div>


<?php
    require_once "footer.php";
?>