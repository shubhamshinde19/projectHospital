
<?php
session_start();
//$id = $_SESSION['id'];
include('connection.php');



$sql = "SELECT * FROM `opd`";
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

        #butt:hover{
            background-color: purple;
            color: aliceblue;

        }
    </style>

</head>
<body>
    <div class="fluid-container">
        <div class="row">

            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary" >
                    <div class="container-fluid" style="background-color:purple">
                        <a class="navbar-brand" href="#">
                            <img src="images/1600w-hbl5vlZh180.webp" alt="Bootstrap" width="55" height="54" style="border-radius: 50%;">
                          </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item" >
                            <a class="nav-link active" aria-current="page" href="AdminDashboard.php" style="color: aliceblue;">Home</a>
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
                              <li><a class="dropdown-item" href="doctordashboard.php">Doctor</a></li>
                              <li><a class="dropdown-item" href="staffd.php">Staff</a></li>
                              <li><a class="dropdown-item" href="Accountant.php">Accountant</a></li>
                              <li><a class="dropdown-item" href="Nurse.php">Nurse</a></li>
                              <li><a class="dropdown-item" href="receptionistd.php">Receptionist</a></li>
                              
                            </ul>
                          </li> -->
                          
                        </ul>
                        <div class="input-group mb-3" width=50% style="margin-left:55%;margin-top:15px">
                           <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" onkeyup="searchfun()" id="search" >
                         <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <!-- <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> -->
                      </div>
                    </div>
                  </nav>
                
                  <div class="container">


    <table class="table table-bordered mt-4 m-4" id="mytable">
<tr>
    <th>sr.no</th>
    <th>first Name</th>
    <th> Middle Name</th>
    <th>Last Name</th>
    <th>Adhar Number</th>
    <th>DOB</th>
    <th>phone</th>
   <th>Symptoms</th>
    <th>Gender</th>
    <th>Action</th>
   
</tr>


<?php 
$cn = 1;
while($row= mysqli_fetch_array($res)){



?>
<tr>
    <td><?php echo $cn++; ?></td>
    <td><?php echo $row['fname'];?></td>
    <td><?php echo $row['mname'];?></td>
    <td><?php echo $row['lname'];?></td>
    <td><?php echo $row['adhar'];?></td>
    <td><?php echo $row['dob'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><?php echo $row['symptoms'];?></td>
    <td><?php echo $row['gender'];?></td>
  
    
   


    <td>
    <!-- <div class="dropdown">
  <button class="dropbtn">ACTION -->
    
  </button>
  <div class="dropdown-content">
    <a href="opdedit.php?id=<?php echo $row['id'];?>"class="fa fa-pencil" style="font-size:30px;color:black;"></a>
    <a href="opddelete.php?id=<?php echo $row['id'];?>"class="fa fa-trash " style="font-size:30px;color:red;"></a>
    
  </div>
    
 

    </td>
    
   


</tr>
    <?php } ?>
    <script>
                              function searchfun(){
                                  let filter = document.getElementById('search').value.toUpperCase();
                                  let mytab = document.getElementById('mytable');
                                  let tr = mytab.getElementsByTagName('tr');

                                  for(var i=0;i<tr.length;i++){


                                      
                                          
                                              let td= tr[i].getElementsByTagName('td')[1];
                                              
                                              
                                              // console.log(td);
                                              if(td){
                                                  let textvalue = td.textContent || td.innerHTML;
                                                  if(textvalue.toUpperCase().indexOf(filter)>-1){
                                                      tr[i].style.display=""; 
                                                  } else {
                                                      tr[i].style.display="none"; 
                                                  }
                                              }

                                  }

                              }
                              
                                      
                                      
                                  
                              


                          </script>
</table>
</div>
            </div>




        </div>
    </div>
    
</body>
</html>