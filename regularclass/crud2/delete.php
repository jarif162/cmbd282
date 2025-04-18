<?php
    require_once 'header.php';
   isset($_GET['id'])? $id=$_GET['id'] : header("Location: index.php");

    $sql="SELECT * FROM users WHERE id=$id";
    $read=mysqli_query($conn,$sql);
    mysqli_num_rows($read)>0 ? $user=mysqli_fetch_assoc($read) : header("Location: index.php");

    if(isset($_POST['deleteUser'])){
        $sql="DELETE FROM users WHERE id=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script>toastr.success('User deleted successfully')</script>";
            header("Location: index.php");
        }else{
            echo "<script>toastr.error('User not deleted')</script>";
        }   
    }

    //header("refresh:2;url=-1")--redirect to index.php after 2 seconds -1 means go back to the previous page
?>

<div class="container">
    <div class="row py-5">
        <div class="col-md-5 mx-auto my-5 border shadow p-4">
            <form action="" method="post">
               <div class="mb-3">
                <input type="hidden" name="id"  

                class="form-control <?=isset($errName) ? "is-invalid" : null?>" 
                value="<?=$user['id'] ?>">
               <div class="invalid-feedback"> <?=$errName?? null?> </div>
               </div>

               <button type="submit" class="btn btn-dark" name="deleteUser">Delete</button>

            </form>
            

        </div>
    </div>
</div>


<?php
    require_once "footer.php";
?>