<?php include 'header.html'?>
<!doctype html>
<html lang="en">

<head>
  <title>BMI Calculator</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <script src="bmi1.js"></script>
  <link rel="stylesheet" href="bmi.css">

</head>

<body>


  <div class="container">


<div class="row">
  <div class="col-md-5 m-auto d-block">
    <div class="form-group" id="form">
      <h1>BMI CALCULATOR</h1>
      <label for="Ht">Height</label>
      <input type="text" class="form-control" id="height" placeholder="cm" required>
    </div>
    <div class="form-group">
      <label for="Wt">Weight:</label>
      <input type="text" class="form-control" id="weight" placeholder="kg" required>
    </div>
    <div class="form-group">
      <button type="button" class="btn btn-primary" onclick="BMIcalc()">CALCULATE</button>
    </div>
     <span id="Message" class="text-success text-center font-weight-bold"></span>
     <span id="Link" class="text-danger text-center font-weight-bold"><a href="Registration.php">Signup</a></span>
    </div>
  <!-- Shift+Alt+F beautify -->
</div>
</div>
</div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  

</body>

</html>
<?php include 'footer1.html'?>