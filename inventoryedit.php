<?php
session_start();
include('connection.php');

$id =$_GET['id'];

$sql ="SELECT * FROM inventory WHERE id='$id'";
$result =  mysqli_query($conn, $sql);

$data = mysqli_fetch_assoc($result);

$show= "SELECT * FROM inventory";
$res = mysqli_query($conn, $show);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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
            <div class="col-sm-2 " style="outline: 2px solid gray;">
                <center><img width="100" align="center" src="images/1600w-hbl5vlZh180.webp">
                    <font color="PURPLE" style="font-size: 20px;font-family: Arial, Helvetica, sans-serif;font-weight: bold;">Health Care</font>
                </center>
                <hr style="margin: 7px; ">
                <div><img src="images/doctor girl.webp" alt="image" height="90px" width="90px" style="border-radius: 50%;margin-left: 9px;">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size: 20px; font-weight: bold;">Admin</font></div>

                <hr style="margin: 7px; ">
                <div>
                <a href="#" class="text-decoration-none"><button class="form-control" style="text-decoration: none;" id="butt">Doctor</button></a></div><br>

                <div>
                    <a href="" class="text-decoration-none"><button class="form-control" style="text-decoration: none;" id="butt">Patient</button></a></div><br>

                    <div>
                        <a href="" class="text-decoration-none"><button class="form-control" style="text-decoration: none;" id="butt">Blood Bank</button></a></div><br>

                        <div>
                            <a href="" class="text-decoration-none"><button class="form-control" style="text-decoration: none;" id="butt">Departments</button></a></div><br>


                            <div>
                                <a href="" class="text-decoration-none"><button class="form-control" style="text-decoration: none;" id="butt">Inventory System</button></a></div><br>


                                <div>
                                    <a href="" class="text-decoration-none"><button class="form-control" style="text-decoration: none;" id="butt">Nurse</button></a></div><br>

                                    <div>
                                        <a href="" class="text-decoration-none"><button class="form-control" style="text-decoration: none;" id="butt">Billing</button></a></div><br>

                                        <div>
                                            <a href="" class="text-decoration-none"><button class="form-control" style="text-decoration:none;" id="butt">Appointments</button></a></div><br>

                                            <div>
                                                <a href="register.php" class="text-decoration-none"><button class="form-control" style="text-decoration: none;" id="butt">New Register</button></a></div><br>

                                                <div>
                                                    <a href="logout.php" class="text-decoration-none"><button class="form-control" style="text-decoration: none;" id="butt">Log Out</button></a></div><br>

                <hr style="margin: 7px; ">
            </div>

            <div class="col-sm-10">
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
                            <a class="nav-link active" aria-current="page" href="login.php" style="color: aliceblue;">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" style="color: aliceblue;">Link</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: aliceblue;">
                              Profession
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="AdminDashboard.php">Admin</a></li>
                              <li><a class="dropdown-item" href="Docterd.php">Doctor</a></li>
                              <li><a class="dropdown-item" href="staffd.php">Staff</a></li>
                              <li><a class="dropdown-item" href="Accountant.php">Accountant</a></li>
                              <li><a class="dropdown-item" href="Nurse.php">Nurse</a></li>
                              <li><a class="dropdown-item" href="Receptionsist.php">Receptionist</a></li>
                              
                            </ul>
                          </li>
                          
                        </ul>
                        <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                  </nav>
                
                  <div class="fluid-container">
        <div class="row">
            <div class="col-8">
                <div>
                    <h2>Add New Item</h2>
                <form action="inventoryupdate.php" method="post">
                    <input type="hidden" id="id" name="id" value="<?php echo $id?>">

                    <label for="product">Product Name :</label>
                    <input type="text" name="product" id="product" class="form-control" value="<?php echo $data['Product_Name'];?>">

                    <label for="description">Product Descripation :</label>
                    <input type="text" name="description" id="descripation" class="form-control" value="<?php echo $data['Product_Description'];?>">

                    <label for="order">Quentity Ordered :</label>
                    <input type="text" name="order" id="order" class="form-control" value="<?php echo $data['Quantity_Order'];?>">


                    <div class="row">
                        <div class="col-6">
                        <label for="mfg">MFG Date :</label>
                        <input type="date" name="mfg" id="mfg" class="form-control" value="<?php echo $data['MFG_Date'];?>">
                        </div>
                        <div class="col-6">
                        <label for="exp">Exp Date :</label>
                        <input type="date" name="exp" id="exp" class="form-control" value="<?php echo $data['EXP_Date'];?>">
                        </div>
                    </div>
                    <label for="supplier">Supplier :</label>
                    <input type="text" name="supplier" id="supplier" class="form-control" value="<?php echo $data['Supplier'];?>"><br>

                    <input type="submit" class="btn btn-primary" name="update" value="Update" style="width: 20%;">

                    
                </form>
                </div>
            </div>
            <div class="col-4">
                <img src="images/inventory.jpg" alt="inventory" class="img-fluid rounded mt-5">
            </div>
        </div>
    </div>
    <hr>

    <div class="container mt-5">
        <table class="table table-primary table-striped table-hover">
            <thead>
            <tr>
                <th>Sr No.</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Quantity Ordered</th>
                <th>MFG Date</th>
                <th>EXP Date</th>
                <th>Supplier</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
                <?php
                $cn =1;
                while($row = mysqli_fetch_assoc($res)){
                ?>
            <tr>
                <td><?php echo $cn++ ?></td>
                <td><?php echo $row['Product_Name'] ?></td>
                <td><?php echo $row['Product_Description'] ?></td>
                <td><?php echo $row['Quantity_Order'] ?></td>
                <td><?php echo $row['MFG_Date'] ?></td>
                <td><?php echo $row['EXP_Date'] ?></td>
                <td><?php echo $row['Supplier'] ?></td>
                <td>
                <a href="inventoryedit.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil" style="font-size:20px; color:black;"></i></a>
                <a href="inventorydelete.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash" style="font-size:20px; color:red;"></i></a>
                </td>

            </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
                
            </div>




        </div>
    </div>
    
</body>
</html>