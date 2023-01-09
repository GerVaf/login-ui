<?php require_once "header.php" ?>
<!-- recentacc -->
<div class=" container p-4">
    <div class="row mb-1">
        <div class="col-6">
            <p class=" fs-3 fw-bold text-danger">Tracebook</p>
            <div>
                <p class=" mb-0 fs-5">Recent Logins</p>
                <p class=" fs-6 ">Click your picture or add an account.</p>
            </div>
            <div class=" d-flex align-items-center">
                <!-- <a class=" text-decoration-none text-dark" href="...">
                    <div class=" card me-2 "  style="width: 10rem;">
                        <img src="./images/eab971592c8671e3d801d1b734202201.jpg" class=" w-100 fix card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">Vixx Grego</p>
                        </div>
                    </div>
                </a> -->

                    <!-- needToClose -->
                <a id="card" class=" text-decoration-none text-dark position-relative" href="...">
                    <div class=" card me-2" style="width: 10rem;">
                            <!-- Toclose -->
                            <span class="position-absolute top-0 start-0 translate-middle badge rounded bg-light">
                                <button type="button" class="btn-close " data-bs-dismiss="#card" aria-label="Close"></button>
                            </span>

                            <span class="position-absolute top-0 start-100 translate-middle badge rounded bg-danger">
                                1
                                <span class="visually-hidden">unread messages</span>
                            </span>
                            
                        <img src="./images/0b5dfdb50664e912c8c8237a27aa3800.jpg" class=" w-100 fix card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">Vixx Grego</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- information -->
        <div class="col-6   p-5">
            <div class="bg-light border rounded py-4 d-flex flex-column align-items-center  ">
                    <div class=" px-3 w-100 mb-3">
                        <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email address or phone number">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                        </div>
                        <a class=" mb-3 text-decoration-none" href="./desktop_login_ui.php"><button class=" btn w-100 btn-primary">Log in</button></a>
                    </div>
                    
                    <a class=" mb-2 text-decoration-none" href="./desktop_forgetten_ps.php">Forgotten password?</a>
                    <hr>
                    
                    <!-- Createacc -->
                    <div> 
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Create New Account
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class=" d-flex flex-column " >
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up</h1>
                                        <p>It's quick and easy </p>
                                    </div>
                                    <button type="button" class="btn-close top-0" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body mb-2">
                                    <div class=" d-flex mb-2">
                                    <input class="m-1 form-control" type="texttext" placeholder="First Name">
                                    <input class="m-1 form-control" type="texttext" placeholder="Last Name">
                                    </div>

                                    <input class=" form-control mb-2" type="text" placeholder="Mobile number or Email address">
                                    <input class=" form-control mb-3" type="text" placeholder="New Password">

                                    <div class=" mb-3">
                                        <div>
                                            <p class=" mb-0" >Date of birth</p>
                                            
                                        </div>
                                        <div class=" d-flex justify-content-between align-items-center">
                                            <select class=" m-1 form-select">
                                                <option value="">Date</option>
                                            </select>
                                            <select class=" m-1 form-select">
                                                <option value="">Month</option>
                                            </select>
                                            <select class=" m-1 form-select">
                                                <option value="">Year</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class=" mb-3" >
                                        <p class=" mb-0" >Gender</p>
                                        <div class=" d-flex justify-content-between align-items-center">
                                        <div class=" m-1  form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                            Male
                                            </label>
                                        </div>
                                        <div class=" m-1  form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                            Female
                                            </label>
                                        </div>
                                        <div class=" m-1  form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                                            <label class="form-check-label" for="exampleRadios3">
                                            Custom
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <div class="modal-footer d-flex justify-content-center align-items-center">
                                    <a  class="" href=""><button type="button" class=" px-5 btn btn-success">Sign Up</button></a>
                                </div>
                            </div>
                        </div>
                        </div>

                    </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "footer.php" ?>