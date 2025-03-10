<?php
require_once("./header.php");
isset($_GET['id'])? $id=$_GET['id'] : header("Location: index.php");    
$sql="SELECT * FROM userss WHERE id=$id";
$read=mysqli_query($conn,$sql);
$read->num_rows!=1? header("Location: index.php") : $data=mysqli_fetch_assoc($read);

if(isset($_POST['updateUser'])){
    $name=$_POST['name'];
    $sql="UPDATE userss SET name='$name' WHERE id=$id"; //update the name of the user with the id
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location: index.php");
    }else{
        echo "Failed to Update User";
    }
}
?>

<form action="" method="post">
    <input type="text" name="name" placeholder="User Name" required value="<?= $data['name']; ?>">
    <button type="submit" name="updateUser">Update User</button>
    <button type="button" onclick="window.location.href='index.php'">Cancel</button>
</form>


<?php
require_once("./footer.php");


?>