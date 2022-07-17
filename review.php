<?php
   require_once 'header.php';
   require_once 'db/conn.php';
   require_once 'inc/auth_check.php';
   ?>
  

<script src="https://use.fontawesome.com/a6f0361695.js"></script>

<h2 id="fh2">WE APPRECIATE YOUR REVIEW!</h2>
<h6 id="fh6">Your review will help us to improve our web hosting quality products, and customer services.</h6>


<form action="success1.php" method="post" id="feedback">
    <div class="pinfo">Your personal info</div>

    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <label for="exampleFormControlInput1">Name</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input name="Name" placeholder="John Doe" class="form-control" id="Name" type="text">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <label for="exampleFormControlInput1">Email</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input name="Email" type="email" class="form-control" id="Email" placeholder="john.doe@yahoo.com">
            </div>
        </div>
    </div>


    <div class="pinfo">Rate our overall services.</div>


    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-heart"></i></span>
                <select class="form-control" name="rate" id="rate">
                    <option value="">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
    </div>

    <div class="pinfo">Write your feedback.</div>


    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <textarea class="form-control" id="review" name="review" rows="3"></textarea>
            </div>
        </div>
    </div>
    <button name="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include_once 'footer.php'; ?>
</html>