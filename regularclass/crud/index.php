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
        $name=$_POST['name'];//$_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post".
        //$_POST['name'] is used to get the value of the input field with name 'name' from the form.
        $sql="INSERT INTO userss (name) VALUES ('$name')"; //explain the sql query -- insert into table userss the name value
        $result=mysqli_query($conn,$sql); //mysqli_query() function is used to execute SQL queries.
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
$readData = mysqli_fetch_all($read,MYSQLI_ASSOC); //MYSQL_ASSOC is a constant that is used to specify that the result should be returned as an associative array.
foreach($readData as $data){
 ?>

<div>
<b><?= $data['name']; ?></b>
<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> 
<!-- //?> explain the edit link -- it will redirect to edit.php page with the id of the user -->
<a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
</div>

<?php    
}
?>



?>


<?php

    include_once("./footer.php");

?>
