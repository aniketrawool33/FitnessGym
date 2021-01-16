<?php include 'header.html'?>
<!doctype html>
<html lang="en">

<head>
    <title>Calorie Intake Calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="Calorieintake.css">
</head>

<body>

    <div class="container">



        <div class="row">
            <div class="col-md-5 m-auto d-block">
                <h1>Calorie Calculator</h1>
                <form action="">
                    <div class="form-group">

                        <label for="">Gender</label>
                        <br>
                        <label>Male:
                            <input type="radio" name="Gender" id="Male" checked> </label>
                        <label>Female:
                            <input type="radio" name="Gender" id="Female"> </label>
                    </div>

                    <div class="form-group">
                        <label for="">Age</label>
                        <input type="text" class="form-control" id="Age" placeholder="years" required>
                    </div>

                    <div class="form-group">
                        <label for="">Weight</label>
                        <input type="text" class="form-control" id="Weight" placeholder="kg" required>
                    </div>
                    <div class="form-group">
                        <label for="">Height</label>
                        <input type="text" class="form-control" id="Height" placeholder="cm" required>
                    </div>
                    <div class="form-group">
                        <label>Exercise Level</label>
                        <br>
                        <select name="activity" id="activity">
                            <option value="1">Basic Metabolic Rate</option>
                            <option value="2">Little/No Exercise</option>
                            <option value="3" selected="true">3 Times/Week</option>
                            <option value="4">4 Times/Week</option>
                            <option value="5">5 Times/Week</option>
                        </select>
                    </div>


                    <button type="button" class="btn btn-primary" onclick="CalorieCal()" id="submit">CALCULATE</button>
                    <div id="display">

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="calorieintake.js"></script>
    <!--php after changes in js not seen temp sol different name-->
</body>

</html>
<?php include 'footer1.html'?>
