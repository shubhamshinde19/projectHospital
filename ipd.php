<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IPD Patient Registration Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
   body {
        background-color: #f8f9fa; 
        box-shadow: 4px 4px 10px grey; 
    }
    .heading {
        background-color: #007bff; 
        color: #fff;
        padding: 10px;
        margin-bottom: 20px;
    }
    .navbar-nav .nav-link:hover {
        background-color: blue;
        color: black;
    }
    .footer {
        background-color: #343a40;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }
    .footer a {
        color: #fff;
    }
</style>
</head>
<body>



<div class="container" style="width:800px;background-color:lavender">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Hospital Name</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">OPD Status</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">IPD Status</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="heading text-center">
        <h1>IPD Patient Registration Form</h1>
    </div>
    <form>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="patientname" class="form-label">Patient Name</label>
                <input type="text" class="form-control" id="patientname"name="patientname"placeholder="Enter patient's name" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Enter patient's age" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" id="gender" name="gender" required>
                    <option value="">Select gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="contact" class="form-label">Contact Number</label>
                <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter contact number" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" name="address"id="address" rows="3" placeholder="Enter patient's address" required></textarea>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="indate" class="form-label">In-date</label>
                <input type="date" class="form-control" name="indate"id="indate" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="outdate" class="form-label">Out-date</label>
                <input type="date" name="outdate"class="form-control" id="outdate" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="roomnumber" class="form-label">Room Number</label>
            <input type="text" class="form-control" id="roomnumber" name="roomnumber" placeholder="Enter room number" required>
        </div>
        <div class="mb-3">
            <label for="aadhar" class="form-label">Aadhar Card</label>
            <input type="text" class="form-control" id="aadhar" name="aadhar" placeholder="Enter Aadhar card number" required>
        </div>
       
    
    <footer class="footer">
    <div class="container">
    <input type="checkbox" name="check" id="check"> 


        By submitting this form, I hereby declare that the information provided above is accurate and true to the best of my knowledge.
        </label>
    </div><br>
    <input type="submit" name="submit" class="btn btn-primary "></button>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" class="btn btn-primary" name="reset"  value="reset">
</footer>
</div>


</body>
</html>




