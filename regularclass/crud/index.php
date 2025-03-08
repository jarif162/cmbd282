<?php

    include_once("./header.php");
    
    // if(isset($_POST['addUser'])){
    //     $name = $_POST['name'];
    //     $sql = "INSERT INTO userss (name) VALUES ('$name')";
    //     $result = mysqli_query($conn,$sql);
    //     if($result){
    //         echo "User Added Successfully";
    //     }else{
    //         echo "Failed to Add User";
    //     }
    // }

    if(isset($_POST['addUser'])){
        $name=$_POST['name'];
        $sql="INSERT INTO userss (name) VALUES ('$name')"; //explain the sql query -- insert into table userss the name value
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "User Added Successfully";
        }else{
            echo "Failed to Add User";
        }
    }

?>
<h1>Add User</h1>
<form action="" method="post">
    <input type="text" name="name" placeholder="User Name">
    
    <button type="submit" name="addUser" >Add User</button>
</form>

<?php
$sql = "SELECT * FROM userss";
$read = mysqli_query($conn,$sql); //mysqli_query() function is used to execute SQL queries.
//mysqli_fetch_all() function is used to fetch all result rows as an associative array, a numeric array, or both from a result set.
$readData = mysqli_fetch_all($read,MYSQLI_ASSOC);
foreach($readData as $data){
 ?>

<div>
<b><?= $data['name']; ?></b>
<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
<a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
</div>

<?php    
}
?>



?>


<?php

    include_once("./footer.php");

?>
