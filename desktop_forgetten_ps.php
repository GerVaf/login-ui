<?php require_once "header.php" ?>

    <div class="container d-flex justify-content-between p-5">
        <div class="col-4"></div>
        <div class="col-4 p-3 bg-light border border-1 rounded">
            <div class="">
                <h2 class=" ">Find Your Account</h2>
                <hr>
                <p class=" ">Please enter your email address or mobile number to search for your account.</p>
                <input class=" form-control " type="text" placeholder="Email address or mobile number">
                <hr>
            </div>
            <div class=" d-flex justify-content-end ">
                <a class=" me-3 " href=""><button class="btn btn-outline-danger">Cancel</button></a>
                <a class=" me-3 " href=""><button class="btn btn-primary">Search</button></a>
            </div>
        </div>
        <div class="col-4"></div>
    </div>

<?php require_once "footer.php" ?>
