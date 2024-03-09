<?php
        session_start();
        // $id = $_SESSION['id'];

        include('connection.php');
        $sql = "SELECT * FROM `ipd`";
        $res = mysqli_query($conn, $sql);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/6ee00b2260.js" crossorigin="anonymous"></script>

    <style>
       

        #img{
            padding-left: 10px;
        }

        .butt:hover{
            background-color: purple;
            color: aliceblue;

        }
        .home:hover{
            background-color: black;
            color: black;

        }

        #content {
            background-image:url('http://pluspng.com/img-png/doctor-hd-png-we-are-looking-for-qualified-professionals-who-are-passionate-about-their-job-1635.png');
            background-size: cover;
            height: 90%;
            width: auto;
        }
        .patient:hover{
            color:black;
        }
    </style>

</head>
<body>
    <div class="fluid-container">
        <div class="row">
            <div class="col-sm-2 " style="outline: 2px solid gray;">
                <center><img width="100" align="center" src="center.jpg"
                ><br>
                    <font color="PURPLE" style="font-size: 20px;font-family: Arial, Helvetica, sans-serif;font-weight: bold;">Health Care</font>
                </center>
                <hr style="margin: 7px; ">
                <div><img src="https://img.freepik.com/premium-photo/medical-concept-indian-beautiful-female-doctor-white-coat-with-stethoscope-waist-up-medical-student-woman-hospital-worker-looking-camera-smiling-studio-blue-background_185696-621.jpg?w=1380" alt="image" height="80px" width="80px" style="border-radius: 50%;margin-left: 9px;"><br>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size: 20px; font-weight: bold;">Doctor</font></div>

                <hr style="margin: 7px; ">
               


                <div class="dropdown butt" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Reports
                  </button>
                   <ul class="dropdown-menu">
                   <a class="dropdown-item" href="#">Blood Reports</a>
            <a class="dropdown-item" href="#">X-Rays</a>
            <a class="dropdown-item" href="#">MRI Scans</a>
                     
                     
                 </ul>
                </div><br>






                             


               


               

                <div class="dropdown butt" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-droplet"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                     Blood Bank
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Available Blood</a></li>
                     <li><a class="dropdown-item" href="#">Donar list</a></li>
                     <li><a class="dropdown-item" href="#">Donar Registration</a></li>
                 </ul>
                </div><br>

                <div class="dropdown butt" style="width:100%;margin-left:7px">
                    <button class="btn dropdown form-control" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-boxes-stacked"></i>&nbsp;&nbsp;&nbsp;
                     Departments
                  </button>
                   <ul class="dropdown-menu" id="butt">
                     <li><a class="dropdown-item" href="#">Neurologist</a></li>
                     <li><a class="dropdown-item" href="#">Gynecologist</a></li>
                     <li><a class="dropdown-item" href="#">Cardiologist</a></li>
                     <li><a class="dropdown-item" href="#">Dermatologist</a></li>
                     <li><a class="dropdown-item" href="#">Radiologist</a></li>
                     <li><a class="dropdown-item" href="#">Orthopedic</a></li>
                     <li><a class="dropdown-item" href="#">ICU</a></li>
                     <li><a class="dropdown-item" href="#">Dental</a></li>
                 </ul>
                </div><br>
                 <a href="login.php">
                <button class="form-control butt" style="text-decoration: none;" id="butt"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Log Out</button></a>

                                            

                <hr style="margin: 7px; ">
            </div>

            <div class="col-sm-10">
                <nav class="navbar navbar-expand-lg bg-body-tertiary" >
                    <div class="container-fluid" style="background-color:purple">
                        <a class="navbar-brand" href="#">
                            <img src="https://freepngimg.com/download/health/22905-6-health-file.png" alt="Bootstrap" width="55" height="54" style="border-radius: 50%;">
                          </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item" >
                            <a class="nav-link active home" aria-current="page" href="login.php" style="color: aliceblue;">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" style="color: aliceblue;"></a>
                          </li>
                          <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: aliceblue;">
                              Dashboard
                            </a>

                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="AdminDashboard.php">Admin</a></li>
                              <li><a class="dropdown-item" href="Doctor.php">Doctor</a></li>
                              <li><a class="dropdown-item" href="staffd.php">Staff</a></li>
                              <li><a class="dropdown-item" href="Accountant.php">Accountant</a></li>
                              <li><a class="dropdown-item" href="Nurse.php">Nurse</a></li>
                              <li><a class="dropdown-item" href="receptionistd.php">Receptionist</a></li>
                              
                            </ul>
                          </li> -->
                          
                        </ul>
                        <div class="input-group mb-3" width=50% style="margin-left:55%;margin-top:15px">
                           <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" >
                         <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                       
                      </div>
                    </div>
                  </nav>
    
<div class="container-fluid pt-5" id="content">
<!-- <div class="card bg-primary" style="height:150px; width:150px">
  <div class="card-body">
  
  <a href="patients.php" target="_blank"
       rel="noopener noreferrer">
        <img id="logo" src=
"https://cdn0.iconfinder.com/data/icons/insurance-flat-unexpected-situations/512/Outpatient_Department-1024.png" height="80px" width="80px" alt="GeeksforGeeks Logo">
    </a>
  </div>
</div> -->

<table class="table table-border" id="mytable">
<tr>
    <th>id.</th>
    <th>pname</th>
    <th>age</th>
    <th>gender</th>
    <th>contact No</th>
    <th>address</th>
    <th>indate</th>
    <th>outdate</th>
    <th>Mobile No</th>
    <th>adhar</th>
    <th>Know more</th>

   
  
    
</tr>

<?php 
$cn = 1;
while($row= mysqli_fetch_array($res)){



?>
<tr>
    <td><?php echo $cn++; ?></td>
    
    <td><?php echo $row['pname']; ?></td>
    
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['contact'];?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['indate']; ?></td>
    <td><?php echo $row['outdate']; ?></td>
    <td><?php echo $row['contact']; ?></td>
    <td><?php echo $row['adhar']; ?></td>
    
    

    <td><div class="dropdown">
  <button class="dropbtn" id="morebutton" onclick="showoptions()">more</button>
  <div class="dropdown-content">

    <a class="edit" style="display:none;" href="editdr.php?id=<?php echo $row['id']; ?>" class="fa fa-pencil" style="font-size:30px;color:black;"></a>
    <a id="delete" style="display:none;" href="deletedr.php?id=<?php echo $row['id']; ?>" class="fa fa-trash" style="font-size:30px;color:red;"></a>
    
  </div>
</div></td>
    
    
</tr>
    <?php } ?>
</table>
</div>
</div>
</div>                
</div>
            




       
  
    
</body>
</html>