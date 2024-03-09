<?php 
session_start();
include('connection.php');
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
$sql = "SELECT * FROM `hospital` WHERE `Username` = '$username' AND `Password` = '$password'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);


if($row){
    $_SESSION['aadhar'] = $row['Aadhar_no'];
    $_SESSION['name'] = $row['Name'];
    $_SESSION['id'] = $row['id'];

    if($row['Proffession']== 'Admin')
    {
        header('location:AdminDashboard.php');

    }elseif($row['Proffession']== 'Doctor'){

        header('location:doctordashboard.php');

    }
    elseif($row['Proffession']== 'Nurse'){

        header('location:nurse.php');

    }
    elseif($row['Proffession']== 'Receptionist'){

        header('location:receptionist.php');

    }
    elseif($row['Proffession']== 'Accountant'){

        header('location:Accountant.php');

    }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: Cursive;
        }
        #left-cont{
            background-color: #9AC8EC;
            padding: 5%;
            padding-top: 10%;
        }
        #form{
             font-size: 20px; 
        }
        .login{
            border: 1px solid black;
            border-radius: 15px;
            padding: 25px;
            background-color: #1E67DE;
            color: white;
            box-shadow: 10px 10px 15px #0c4b7b ;
        }
        #username,#password{
            background-color: transparent;
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="margin: 0px; padding: 0px;">
        <div class="row" style="margin: 0px; padding: 0px;">
            <div class="col-7" style="margin: 0px; padding: 0px;">
                <img src="images/backlogin.jpg" alt="body" width="100%" style="margin-right: 0px;">
            </div>
        
        
            <div class="col-5" id="left-cont">
                <img src="images/loginpro.jpg" alt="profile" class="float-end" height="150px">
                
                <div class="login">
                <h2>Hello, <br>
                Welcome Back</h2>
                
                <form method="post" action="#">  
                    <div class="main">


                        Username:<input type="text" name="username" id="username" class="form-control" placeholder="Enter username"><br>
                
                        
                        Password:<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password"> <br>

                    <input type="submit" class="btn btn-light form-control text-primary" name="login" id="login" value="Login">
                    </div>
                </form>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>