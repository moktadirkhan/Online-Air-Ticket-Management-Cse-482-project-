<?php 
    include('Connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/homepage.css"/>
    <script src="js/moktadir.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


</head>
<body> 
    
        <div class="row" >
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" width="30" height="30" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="homepage.html">Home </a>
                        <a class="nav-item nav-link" href="profile.html">Profile</a>
                        <a class="nav-item nav-link" href="#">Contacts</a>
                        <a class="nav-item nav-link" href="login.html">Log Out</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>


    <div class="container" id="full">
        
        <div class="row">
            <div class="col-md-7 col-md-push-5">
                <div class="booking-cta">
                    <h1>Make your reservation</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam
                        consectetur molestias itaque
                        ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid
                        consequuntur cumque quasi.
                        Perspiciatis.
                    </p>
                </div>
            </div>
            <div class="col-lg-4" id="form">
                <div class="container">
                    <h3>Book your tickets today </h3>
                    <div class="booking-form">
                        <form autocomplete="off">
                            <div class="form-checkbox">
                                <label for="roundtrip">
                                    <input type="radio" id="roundtrip" name="trip_type">
                                    <span></span>Roundtrip
                                </label>
                                <label for="one-way">
                                    <input type="radio" id="one-way" name="trip_type">
                                    <span></span>One way
                                </label>
                                <!-- <label for="multi-city">
                                    <input type="radio" id="multi-city" name="trip_type">
                                    <span></span>Multi-City
                                </label> -->
                            </div>
                            <div class="form-group">
                                <span class="form-label">Your Destination</span>
                                <div class="autocomplete">
                                    <input id="myInput" class="form-control" type="text"
                                    placeholder="Fly to Airport">
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <span class="form-label">From</span>
                                        <div class="autocomplete">
                                            <input id="myInput2" class="form-control" type="text"
                                            placeholder="Fly from Airport">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <span class="form-label">Check In</span>
                                        <input id="CI" class="form-control" type="date">
                                    </div>
                                </div>
                                <div id="hideco" class="col-sm-8">
                                    <div class="form-group">
                                        <span class="form-label">Check out</span>
                                        <input id="CO" class="form-control" type="date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="form-label">Adults</span>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="form-label">Children</span>
                                        <select class="form-control">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">                                
                                <!-- <button id="myBtn" type="submit" class="submit-btn">Check availability</button> -->
                                <input name="myBtn"  id="myBtn" value="Check availability" disabled />
                       
                                <div class="form-text"><a href="#">Create an account</a> to book your tickets</div>
                                <p>Already have an account?? <a href="#">Login Here</a></p>
                            </div>
                            <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h2>Modal Header</h2>
                                    <span class="close">&times;</span>
                                  
                                  </div>
                                  <div class="modal-body">
                                    <div style="display: inline-block;" class="col-md-2">
                                       <h3>Destination</h3>
                                        <h5>SPD</h5>
                                    </div>
                                    <div style="display: inline-block;" class="col-md-2">
                                        <h3>From</h3>
                                        <h5>DAC</h5>
                                    </div>
                                    <div style="display: inline-block;" class="col-md-2">
                                       <h3>Time</h3>
                                       <h5>9:00 PM - 10:00 pm</h5>
                                    </div>
                                    <div style="display: inline-block;" class="col-md-2">
                                        <h3>Seat Available</h3>
                                        <h5>23</h5>
                                    </div>
                                    <div style="display: inline-block;" class="col-md-2">
                                        <h3>Fare</h3>
                                        <h5>2300 tk</h5>
                                    </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <!-- <h3>Modal Footer</h3> -->
                                  </div>
                                </div>
                              
                              </div>
                        </form>
                    
                    </div>
                </div>                
            </div>
            
        </div>
    </div>
    <script>
        
$("#myInput").keyup(function(event) {
  validateInputs();
});

$("#myInput2").keyup(function(event) {
  validateInputs();
});

$("#CI").keyup(function(event) {
  validateInputs();
});

// $("#CO").keyup(function(event) {
//   validateInputs();
// });

function validateInputs(){
  var disableButton = false;

  var val1 = $("#myInput").val();
  var val2 = $("#myInput2").val();
  var val3 = $("#CI").val();
//   var val4 = $("#CO").val();

  if(val1.length == 0 || val2.length == 0 || val3.length == 0 )
      disableButton = true;

  $('#myBtn').attr('disabled', disableButton);
}
    </script>

    
    



<script src="js/moktadir.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

