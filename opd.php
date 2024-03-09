

<?php 


include('connection.php');
if(isset($_POST['submit'])){
 
// print_r($_POST);die;
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$adhar = $_POST['adhar'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$symptoms = $_POST['symptoms'];
$gender = $_POST['gender'];





 $sql = "insert into `opd`( `fname`, `mname`, `lname`, `adhar`, `dob`, `phone`, `symptoms`, `gender`) VALUES ('$fname','$mname','$lname','$adhar','$dob','$phone','$symptoms','$gender')";
$a = mysqli_query($conn, $sql);



// if($a) {
//   echo "succes";
// }

// else
//  {

//     echo "fail";
// }

}



?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OPD Registration</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
   .label {
    display: inline-block;
   }
       body {
   background-image: url('https://cdn.wallpapersafari.com/38/87/XLwqyG.jpg');
   
  
    
   
    
   } 

  
  </style>
</head>
<body>


    
    <div class="card" style="padding-left: 30px; padding-top: 30px; padding-bottom: 30px;width:700px; align:center;margin-left:300px;margin-top:30px;box-shadow:  0 6px 20px 0 rgba(0, 0, 0, 0.80);background-color:;">
        <div class="reg">
      <h2 style="text-align: center;">OPD Registration</h2><br>

      <form method="post" action ="oopdview.php" enctype="multipart/form-data">

        <div class=" form-group  label">
          <label for="fname">First Name:</label>
          <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter your name" required>
        </div>&nbsp;&nbsp;

         <div class=" form-group  label">
            <label for="mname"> Middle Name:</label>
            <input type="text" class="form-control" name="mname" id="mname" placeholder="Enter your name"required>
          </div>&nbsp;&nbsp;

          <div class=" form-group  label">
            <label for="lname"> Last Name:</label>
            <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter your name"required>
          </div>&nbsp;&nbsp;

          <div class=" form-group  label">
            <label for="adhar">Adhar No:</label>
            <input type="text" class="form-control" id="adhar"  name="adhar" placeholder="Enter your name"required>
          </div>&nbsp;&nbsp;

          <div class=" form-group  label">
            <label for="dob">DOB:</label>
            <input type="date" class="form-control"  name="dob"   placeholder=""required>
          </div>&nbsp;&nbsp;

         
        

          <div class=" form-group  label">
            <label for="phone">Phone Number:</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your name"required>
          </div>&nbsp;&nbsp;

        


       
        <div class="form-group  label">
          <label for="symptoms">Symptoms:</label>
          <textarea class="form-control" name="symptoms" id="symptoms" rows=""></textarea>
        </div>

        <div class="form-check">Gender&nbsp; &nbsp;
            <input class="w3-radio" type="radio" name="gender" value="male"required>
           <label for="male">Male</label>&nbsp; &nbsp; 

           <input class="w3-radio" type="radio" name="gender" value="female">
           <label for="female">Female</label>&nbsp;&nbsp;

         <input class="w3-radio" type="radio" name="gender" value="other">
         <label for="other">Other</label>
          </div> 

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="agreepolicy" name="agreepolicy">
            <label class="form-check-label" id="checkbox" for="agreepolicy">DECLARATION: I hereby declare that what has been stated above is true and complete to the best of my knowledge and belief
   </label>
        </div>
        
          <div class="btn" style="padding-left: 150px;">
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-primary">Reset</button>
        </div>
      </form>
    </div>
  <!-- </div> -->

    <!-- Image Container -->
    <!-- <div class="image" style="width:150px">
    <div class="col-sm-4">
        <div class="card" style="height: 700px; width: 560px;">
            <div class="card-body " style="">
      <img src='https://wallpapercave.com/wp/wp9401168.jpg' alt="Placeholder Image" style="background-size:cover; height: 100%;width: 100%;">
      
    </div>
  </div>
  </div> -->
<!-- </div> -->
<!-- </div>
</div> -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
