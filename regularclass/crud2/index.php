<?php
include_once 'header.php'; 


$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);
$sn=1;
$userData=$result->fetch_all(MYSQLI_ASSOC);


//diff between include once and require once
// include_once: if the file is not found, the script will continue to run
// require_once: if the file is not found, the script will stop
?>


   <div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped   table-hover mt-5">
                    <tr>S.N</tr>
                    <td>Name</td>
                    <td>Action</td>
<?php
foreach($userData as $data){
    

?>
                    <tr>
                        <td><?=$sn++?></td>
                        <td><?=$data['firstName']?></td>
                        <td><a href="edit-user.php?id=<?=$data['id']?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete-user.php?id=<?=$data['id']?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
}
                    ?>
                </table>
            </div>
        </div>
    </div>
   </div>

<?php include_once 'footer.php'; ?>
   