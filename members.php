

<?php
include 'config.php';

if(isset($_REQUEST["submit"]))
{
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $DOB = $_REQUEST["DOB"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $membership_type = $_REQUEST["membership_type"];
    $address = $_REQUEST["address"];
    $e_contact = $_REQUEST["e_contact"];

    $ins = "INSERT into members (id,name,DOB,email,phone,membership_type,address,e_contact) VALUES('$id','$name','$DOB','$email','$phone','$membership_type','$address','$e_contact')";

    $query3 = mysqli_query($connection, $ins);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
<!--navbar start-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin-login.php"><img src="img/logo.png" alt="Fitflex logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">FitFlex Gym</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="billing.php">Billing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="coach.php">Coach</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="members.php">Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="receptionist.php">Receptionist</a>
      </li>
    </ul>
  </div>
</nav>
<!--navbar end-->


<!--form start-->

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Member ID</label>
      <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="Id">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date of Birth</label>
    <input type="text" name="DOB" class="form-control" id="inputAddress" placeholder="DOB">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Email Address</label>
    <input type="text" name="email" class="form-control" id="inputAddress2" placeholder="@gmail.com">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone Number</label>
    <input type="text" name="phone" class="form-control" id="inputAddress2" placeholder="+91">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Membership Type</label>
    <input type="text" name="membership_type" class="form-control" id="inputAddress2" placeholder="Basic/Advance/Expert">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress2" placeholder="Flat, Bldg, Street Name, Area, City">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Emergency Contact</label>
    <input type="text" name="e_contact" class="form-control" id="inputAddress2" placeholder="+91">
  </div> 
  
  <div class="form-group">
    <input type="submit" name="submit" class="form-control" id="inputAddress2" value="Submit">
  </div>
</form>

<!--form end -->








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>