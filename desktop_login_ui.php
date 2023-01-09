<?php require_once "header.php" ?>


<div class="container d-flex justify-content-between align-content-center pt-5">
    <div class="col-4"></div>

    <div class="col-4">
        <p class=" fw-bold fs-3 text-danger text-center">Tracebook</p>
        <div class=" fs-5 bg-light p-3 d-flex flex-column justify-content-center align-items-center">
            <p>Login to Tracebook</p>

                <!-- error div -->
                <div class="mb-3 border border-danger border-1 w-100  error">
                    <p class="mb-0 mt-2  text-center fw-bold">Wrong credentials</p>
                    <p class="mb-2  text-center">invalid username or password</p>
                </div>

            <input class=" form-control mb-3" placeholder="Email address or phone number" type="text">
            <input class=" form-control mb-3" placeholder="Password" type="password">

            <a class=" w-100 mb-3 text-decoration-none mb-3" href="..."><button class=" btn w-100 btn-primary">Log in</button></a>
            <a class=" mb-2 fs-6 text-decoration-none mb-3" href="./desktop_forgetten_ps.php">Forgotten password?</a>
            
        </div>
    </div>

    <div class="col-4"></div>
</div>


<?php require_once "footer.php" ?>
