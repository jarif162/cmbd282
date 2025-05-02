<?php
include_once 'header.php'; 


$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);

// $sn=1;
// $userData=$result->fetch_all(MYSQLI_ASSOC);
//fetch_all() returns all the rows in an array
//fetch_all() returns an array of all the rows in the result set. The MYSQLI_ASSOC constant is used to return an associative array, where the keys are the column names and the values are the corresponding values from the database.


//diff between include once and require once
// include_once: if the file is not found, the script will continue to run
// require_once: if the file is not found, the script will stop

// if(isset($_GET["page"])){
//     $page=$_GET["page"];
// }else{
//     // $page= 1;
//     header("location:index.php?page=1");
// }

(isset($_GET["page"]))?$page=$_GET["page"]:$page=1; //page=1 is default page also page is constant when we search as ?page=1 

$totalData=mysqli_num_rows($result);//total number of rows in the result set
// mysqli_num_rows() returns the number of rows in a result set. It is used to get the total number of rows returned by a SELECT query.
$limit=5; //number of rows per page
$totalPage=ceil($totalData/$limit); //ciel-rounding the total number of pages to the nearest integer
$offset=($page-1)*$limit; //offset is the number of rows to skip before starting to return rows from the result set. It is calculated by multiplying the current page number minus 1 by the number of rows per page.

$sql="SELECT * FROM users LIMIT $offset,$limit"; //LIMIT clause is used to specify the number of rows to return from the result set. It is used to limit the number of rows returned by a SELECT query.

// $sql="SELECT * FROM users ORDER BY 'id' DESC LIMIT $offset,$limit"; 
 //ORDER BY clause is used to sort the result set by one or more columns. It is used to specify the order in which the rows should be returned. The DESC keyword is used to sort the result set in descending order.
// The LIMIT clause is used to specify the number of rows to return from the result set. It

$result=mysqli_query($conn,$sql);
$userData=$result->fetch_all(MYSQLI_ASSOC);
$sn=$offset+1; //serial number for the first row
?>


   <div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if(count($userData)>0){
                 ?>
                <table class="table table-bordered table-striped   table-hover mt-5">
                    <tr>
                    <td>S.N</td>
                    <td>Name</td>
                    <td>Action</td>
                    </tr>
<?php
  foreach($userData as $data){
    

?>
                    <tr>
                        <td><?=$sn++?></td>
                        <td><?=$data['firstName']?></td>
                        <td><a href="edit.php?id=<?=$data['id']?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete.php?id=<?=$data['id']?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
}
                    ?>
                </table>

                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item <?=($page==1)?"disabled":null?>">
                        <a class="page-link" href="./?page=<?=$page-1?>">Previous</a>
                        </li>
                    <?php for($i=1;$i<=$totalPage;$i++){?>
                    <li class="page-item <?=($page==$i)?"active":null?>"><a class="page-link" href="./?page=<?=$i;?>"><?=$i?></a></li>
                    <?php }?>


                        <li class="page-item" <?=($page==$totalPage)?"disabled":null?>>
                        <a class="page-link" href="./?page=<?=$page+1?>">Next</a>
                        </li>
                    </ul>
                    </nav>
                <?php }else{ ?>
<div class="alert alert-danger">No data</div>
                    <?php  } ?>
            </div>
        </div>
    </div>
   </div>

<?php include_once 'footer.php'; ?>
   