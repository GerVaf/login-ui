<?php require_once "header.php" ?>

<div class="  d-flex pt-2 px-2 ms-3 flex-row align-items-center ">
    <a class=" fs-3 text-decoration-none me-3 " href="./login.php">Back</a>
    <a class=" text-dark text-decoration-none fs-3 me-3">Date of Birth</a>
    
</div>
<hr>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="p-4 d-flex flex-column align-items-center justify-content-center">
    <p class="fs-3 fw-bold ">What's your date of birth?</p>
    <p class=" fs-5">Choose your date of birth.You can always make this private later.</p>
    <br>
    <div class=" d-flex">
    <select class=" form-select">
        <option value="">Day</option>
    </select>
    <select class=" form-select">
        <option value="">Month</option>
    </select>
    <select class=" form-select">
        <option value="">Years</option>
    </select>
    </div>
    <br>
    <button class=" btn btn-primary w-100 " ><a class=" fs-3 text-light text-decoration-none" href="./ca_birth_next.php">Next</a></button>
</div>