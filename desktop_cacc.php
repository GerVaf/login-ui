<?php require "header.php" ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up</h1>
            <p>It's quick and easy </p>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>

        <div class="modal-body mb-2">
            <div class=" d-flex mb-2">
              <input class="m-1 form-control" type="texttext" placeholder="First Name">
              <input class="m-1 form-control" type="texttext" placeholder="Last Name">
            </div>

            <input class=" form-control mb-2" type="text" placeholder="Mobile number or Email address">
            <input class=" form-control mb-3" type="text" placeholder="New Password">

            <div class=" mb-3">
              <p class=" mb-0" >Date of birth</p>
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

<?php require "footer.php" ?>