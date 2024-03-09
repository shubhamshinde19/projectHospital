<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Emergency Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
   
    .container {
      margin-top: 50px;
    }
    footer {
      background-color: #343a40;
      color: #fff;
      padding: 20px 0;
      text-align: center;
     
      align:center;
  
    }
    
      .card {
  box-shadow: 0 8px 12px rgb(0 0 0 / 0.5);
}
    
  </style>
</head>
<body>
<div class="card w-75 mx-auto " style="background-color:	#ffb3ff">
  <div class="card-body">
<header class="container">
  <div class="text-center py-4">
    <h1 style="font-family: Georgia, serif;"><img src="https://sweetclipart.com/wp-content/uploads/Medical-Logo-Red-White-Clip-Art.png" height="60px" width="60px">&nbsp;Emergency Contact&nbsp;<img src="https://sweetclipart.com/wp-content/uploads/Medical-Logo-Red-White-Clip-Art.png" height="60px" width="60px"></h1>
  </div>
</header>

<div class="container">
  
  <form>
    <div class="row">
      <div class="col-md-4 mb-3">
        <label for="patientName" class="form-label">Patient Name</label>
        <input type="text" class="form-control" id="patientName" placeholder="Enter patient's name" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" placeholder="Enter patient's age" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-select" id="gender" required>
          <option value="">Select gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-3">
      <label for="blood">Blood Group:</label>
            <select name="blood" id="blood" class="form-control">
              <option value="">Select blood group</option>
              <option value="A +ve">A +ve</option>
              <option value="B +ve">B +ve</option>
              <option value="O +ve">O +ve</option>
              <option value="A -ve">A -ve</option>
              <option value="B -ve">B -ve</option>
              <option value="O -ve">O -ve</option>
              <option value="AB -ve">AB -ve</option>
              <option value="AB +ve">AB +ve</option>
            </select><br>
      </div>
      <div class="col-md-4 mb-3">
        <label for="weight" class="form-label">Weight</label>
        <div class="input-group">
          <input type="number" class="form-control" id="weight" placeholder="Enter patient's weight">
          <span class="input-group-text">kg</span>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="height" class="form-label">Height</label>
        <div class="input-group">
          <input type="number" class="form-control" id="height" placeholder="Enter patient's height">
          <span class="input-group-text">feet</span>
        </div>
      </div>
    </div>
    <div class="mb-3">
      <label for="symptoms" class="form-label">Symptoms</label>
      <textarea class="form-control" id="symptoms" rows="3" placeholder="Describe patient's symptoms" required></textarea>
    </div>
    <div class="mb-3">
      <label for="contact" class="form-label">Emergency Contact</label>
      <input type="tel" class="form-control" id="contact" placeholder="Enter emergency contact number" required>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="arrivalTime" class="form-label">Estimated Arrival Time</label>
        <input type="datetime-local" class="form-control" id="arrivalTime" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="insurance" class="form-label">Insurance Provider</label>
        <input type="text" class="form-control" id="insurance" placeholder="Enter patient's insurance provider">
      </div>
    </div>
    <div class="mb-3">
      <label for="medications" class="form-label">Current Medications</label>
      <textarea class="form-control" id="medications" rows="3" placeholder="List any current medications"></textarea>
    </div>
    <div class="mb-3">
      <label for="allergies" class="form-label">Allergies</label>
      <textarea class="form-control" id="allergies" rows="3" placeholder="List any known allergies"></textarea>
    </div>
    <div class="mb-3">
      <label for="medicalHistory" class="form-label">Medical History</label>
      <textarea class="form-control" id="medicalHistory" rows="3" placeholder="Brief medical history if available"></textarea>
    </div>
    <div class="mb-3">
      <label for="comments" class="form-label">Additional Comments</label>
      <textarea class="form-control" id="comments" rows="3" placeholder="Enter any additional comments"></textarea>
    </div>
  
</div>
<footer>
  <div class="container">
  <input type="checkbox" name="check" >
    By submitting this form, you agree to the terms and conditions outlined in the hospital's declaration form.
    For emergencies, please dial 911 or go to the nearest emergency room.
    </label><br><br>
    <input type="submit" class="btn btn-primary "></button>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" class="btn btn-primary" name="reset"  value="reset">
  </div>
</footer>
</div>
</div>
</form>
</body>
</html>
