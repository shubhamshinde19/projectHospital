<?php
session_start();
include('connection.php');

if(isset($_POST['submit'])){


$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$blood=$_POST['blood'];
$height = $_POST['height'];
$weight=$_POST['weight'];
$dob=$_POST['dob'];
$dona=$_POST['dona'];

$sql="INSERT INTO `bdonation`(`Fname`, `Mname`, `Lname`, `Email`, `Contact`, `Blood`, `Height`, `Weight`, `Dob`, `Donate previsiously`) VALUES ('$fname','$mname','$lname','$email','$contact','$blood','$height','$weight','$dob','$dona')";

$query= mysqli_query($conn, $sql);

if($query){
  header('location:donarlist.php');
}


}




?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donation Registration</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <div class="position-relative"
      style="
        background-image: url(images/Bdonation.jpg);
        width: 100%;
        
        background-repeat: no-repeat;
        background-attachment: fixed;
        filter: brightness(0.5);
        background-size: cover;
        height:120vh;
        ">
        
    </div>
    <div class="container position-absolute top-0   text-white  " style="left: 8%;">
      <h4 class="text-center">Blood Donation Registration form</h4>
      <form action="" method="post" enctype="multipart/form-data" class="p-4 border border-3 " style="width: 70%; margin: auto" >
        <div class="row">
          <div class="col-md-4">
            <label for="fname" class="form-label">FirstName</label>
            <input type="text" class="form-control" name="fname"  />
          </div>
          <div class="col-md-4">
            <label for="mname" class="form-label">MiddleName</label>
            <input type="text" class="form-control"  name="mname"/>
          </div>
          <div class="col-md-4">
            <label for="lname" class="form-label">LastName</label>
            <input type="text" class="form-control" name="lname"/>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email"/>
          </div>
          <div class="col-md-6">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" class="form-control" name="contact"/>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 ">
            <label for="blood" class="form-label">Bloodgroups</label>
          
          <select class="form-control" name="blood">
          <option value="Select Blood Group">Select Blood Group</option>
            <option value="O+ve">O+ve</option>
            <option value="O-ve">O-ve</option>
            <option value="B+ve">B+ve</option>
            <option value="B-ve">B-ve</option>
            <option value="AB+">AB+ve</option>
            <option value="AB-ve">AB-ve</option>
            <option value="A+">A+ve</option>
            <option value="A-ve">A-ve</option>
          </select>
          </div>
          
          <div class="col-md-6">
            <label for="hb" class="form-label">Hb</label>
            <input type="text" class="form-control" name="hb"/>
          </div>
          <div class="col-md-12">
            <label for="height" class="form-label">Height</label>
            <input type="text" class="form-control" name="height"/>
          </div>
          <div class="col-md-12">
            <label for="weight" class="form-label">weight</label>
            <input type="text" class="form-control" name="weight" />
          </div><hr>
          <div>
            <label for="dob">Date of Birth</label><br>
            <input type="date" name="dob">
          </div>
          <!-- <div class="col-md-12"></div><br>
          <label for="dona">Have you Donate previously? </label>
          <input type="radio" value="yes" id="id1" name="dona">Yes
          <input type="radio" value="no"id="id2"name="dona">No
          </div>
          <div> -->
          <div class="col-md-12"></div><br>
          <label for="dona">Have you Donate previously?</label>
          <div class="section1">
          <label for="id1">Yes</label>
          <input type="radio" value="Yes" name="dona" id="id1">
          <label for="id2">No</label>
          <input type="radio" value="No" name="dona" id="id2">
          </div>
          <div>
          <br>
          <input type="checkbox" name="check">
          <label for="check">I have read and understood all the information presented.</label><br><br>
          <div class="button"></div>
          <button type="reset">Reset</button> 
          <input type="submit" name="submit" value="submit">
         </div>
         </div>
        </div>
      </form>
    </div>
  </body>
</html>