<?php
require_once './components/header.php';

if (isset($_POST['signin123'])) {
    echo "<script>toastr.error('Please fill in all fields');</script>";
}


?>


<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto my-5 border rounded shadow py-3 ">
            <h2>sign in</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary" name="signin123">sign in</button>
                <p class="mt-3">don't have an account? <a href="sign-up.php">sign up</a></p>
        </div>
    </div>
</div>






<?php
require_once './components/footer.php';

?>