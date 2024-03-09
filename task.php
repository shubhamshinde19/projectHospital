




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="enter your username" required><br>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required><br>
                    <input type="submit" name="submit" value="Submit" id="submit">
                    <a href="#">Forgot password</a>
                </form>
            </div>
            <div class="col-6"></div>
        </div>
    </div>
    <script>
    function myFunction() {
         alert("Invalid Creditional");
    }
</script>
</body>
</html>


<?php
session_start();

include('connection.php');
if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `hospital` WHERE `Username`='$username' AND `Password`='$password'";
    $sql= mysqli_query($conn,$sql);

    $row= mysqli_fetch_assoc($sql);
if($row){
    if($row['Proffession']=='Admin'){

        header('location:AdminDashboard.php');

    }elseif($row['Proffession']=='Doctor'){

        header('location:doctordashboard.php');

    }elseif($row['Proffession']=='Accountant'){

        header('location:Accountant.php');
        
    }elseif($row['Proffession']=='Receptionistd'){

        header('location:receptionistd.php');
        
    }elseif($row['Proffession']=='Nurse'){

        header('location:nurse.php');
        
    }
}else{
   echo "<script>myFunction();</script>"; 
}
}
?>