<?php
session_start();
include('connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM `hospital` WHERE id = '$id'";
$res = mysqli_query($conn, $sql);
 
// echo($res);

$row = mysqli_fetch_assoc($res);
// echo $row['name'];

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    

    <style>
       
        body{
            background-image: url('images/re.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            background-attachment: fixed;
            width: 70%;

        }
        #form{
             font-size: 20px; 
        }
        .registration{
            border: 1px solid black;
            border-radius: 15px;
            padding: 25px;
            margin: 5% 15%;
            background-color: white;
            box-shadow: 10px 10px 15px #0c4b7b ;
        }
    </style>

    </head>
    <body>
<div class="container-fluid" width="50%">
       <div class="registration">
        <h2 style="text-align: center;color: purple;font-family: Arial, Helvetica, sans-serif;">Registration</h2>
        <form method="post" action ="updatenurse.php" enctype="multipart/form-data">
            <input type="hidden" id="id" name="id" value="<?php echo $id?>">
            <label for="name">Name :</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" value="<?php echo $row['Name'];?>">

            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="aadhar">Aadhar No. :</label>
            <input type="text" class="form-control" name="aadhar" id="aadhar" placeholder="1234-4567-7891"value="<?php echo $row['Aadhar_no'];?>" >
            </div>
            <div class="col-md-6 mb-3">
            <label for="contact">Conatct :</label>
            <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter your number" value="<?php echo $row['Contact'];?>">
            </div>
            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="email">Email Id :</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="<?php echo $row['Email'];?>">
            </div>
            <div class="col-md-6 mb-3">
            <label for="profession">Profession:</label>
            <select name="profession" id="profession" class="form-control">
              <option name="profession" value="Admin"<?php if($row['Proffession']== 'Admin'){ echo 'selected';}?>>Admin</option>
              <option name="profession" value="Doctor"<?php if($row['Proffession']== 'Doctor'){ echo 'selected';}?>>Doctor</option>
              <option name="profession" value="Staff"<?php if($row['Proffession']== 'Staff'){ echo 'selected';}?>>Staff</option>
              <option name="profession" value="nurse"<?php if($row['Proffession']== 'nurse'){ echo 'selected';}?>>Nurse</option>
              <option name="profession" value="receptionist"<?php if($row['Proffession']== 'receptionist'){ echo 'selected';}?>>Receptionist</option>

              
            </select>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 mb-3">
                
            <label for="dob">Date of Birth :</label>
            <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $row['DOB'];?>">
            </div>
            <div class="col-md-6 mb-3">
                
            <label for="blood">Choose a Blood Group:</label>
            <select name="blood" id="blood" class="form-control">
            <option value="">Select blood group</option>
              <option name="blood" value="A +ve"<?php if($row['Blood_group']== 'A +ve'){ echo 'selected';}?>>A +ve</option>
              <option name="blood" value="B +ve"<?php if($row['Blood_group']== 'B +ve'){ echo 'selected';}?>>B +ve</option>
              <option name="blood" value="O +ve"<?php if($row['Blood_group']== 'O +ve'){ echo 'selected';}?>>O +ve</option>
              <option name="blood" value="A -ve"<?php if($row['Blood_group']== 'A -ve'){ echo 'selected';}?>>A -ve</option>
              <option name="blood" value="B -ve"<?php if($row['Blood_group']== 'B -ve'){ echo 'selected';}?>>B -ve</option>
              <option name="blood" value="O -ve"<?php if($row['Blood_group']== 'O -ve'){ echo 'selected';}?>>O -ve</option>
              <option name="blood" value="AB -ve"<?php if($row['Blood_group']== 'AB -ve'){ echo 'selected';}?>>AB -ve</option>
              <option name="blood" value="AB +ve"<?php if($row['Blood_group']== 'AB +ve'){ echo 'selected';}?>>AB +ve</option>
            </select>
            </div>
        </div>

       <div class="row">
            <div class="col-md-6 mb-3">
            <label for="qualification" >Qualification</label>
             <input type="text" name="qualification" class="form-control" id="qualification" value="<?php echo $row['Qualification'];?>">
            </div>
            <div class="col-md-6 mb-3">
            
            <label for="department">Department :</label>
             <select name="department">
                <option>select department</option>
                <option name="department" value="neurology"<?php if($row['Department']== 'neurology'){ echo 'selected';}?>>Neurology</option>
                <option name="department" value="gynaecology"<?php if($row['Department']== 'gynaecology'){ echo 'selected';}?>>Gynaecology</option>
                <option name="department" value="cardiology"<?php if($row['Department']== 'cardiology'){ echo 'selected';}?>>Cardiology</option>
                <option name="department" value="dermatology"<?php if($row['Department']== 'dermatology'){ echo 'selected';}?>>Dermatology</option>
                <option name="department" value="radiology"<?php if($row['Department']== 'radiology'){ echo 'selected';}?>>Radiology</option>
                <option name="department" value="ortho"<?php if($row['Department']== 'ortho'){ echo 'selected';}?>>Ortho</option>
                <option name="department" value="dentistry"<?php if($row['Department']== 'Neurdentistryology'){ echo 'selected';}?>>Dentistry</option>
               
                
             </select><br>
            </div>
        </div>    



        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="male" <?php echo ($row['Gender']== 'male') ? "checked" : "" ; ?>> Male
        <input type="radio" name="gender" value="female" <?php echo ($row['Gender']== 'female') ? "checked" : "" ; ?>> Female
        <input type="radio" name="gender" value="other" <?php echo ($row['Gender']== 'other') ? "checked" : "" ; ?>> Other

            <br>

            <label for="address">Address :</label>
            <input type="text" class="form-control" name="address" id="address" style="height: 60px;" value="<?php echo $row['Address'];?>">

            
            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="myfile">Upload your Image:</label>
            <!-- <input type="file" class="form-control" name="myfile" id="myfile"> -->
            <input type="file" name="newfile">
            <input type="hidden" name="oldfile" value="<?php echo $row['Profile']; ?>"><br>
            </div>
            <div class="col-md-6 mb-3">
            <label for="experience">Experience :</label>
            <input type="text" class="form-control" name="experience" id="contact" placeholder="Enter your number" value="<?php echo $row['Experience'];?>">
            </div>
            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="user">Username :</label>
            <input type="text" class="form-control" name="user" id="user" placeholder="Enter your Username" value="<?php echo $row['Username'];?>">
            </div>
            <div class="col-md-6 mb-3">
            <label for="pass">Password :</label>
            <input type="password" class="form-control" name="pass" id="pass" value="<?php echo $row['Password'];?>"><br>

            </div>

            <!-- <div class="row">
            <div class="col-md-6 mb-3">
            <label for="myfile">Upload your Image:</label>
            <input type="file" class="form-control-file" name="myfile" id="myfile" placeholder="">
            </div>
            
            </div> -->

        </div>

        <div class="row">
            <div class="col-6">
            <input type="submit" class="btn btn-primary form-control" name="update" value="Update">
            </div>
            <div class="col-6">
            <input type="reset" class="btn btn-primary form-control" name="reset" value="Reset">
            </div>
        </div>
        
             

        </form>
       </div>
        
    </div>
</body>
</html>