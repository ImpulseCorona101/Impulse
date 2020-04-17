<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <title>Impulse - Homepage</title>

     <style>
          .form-actions {
               margin: 0;
               background-color: transparent;
               text-align: center;
          }

          .mobileContent {
               display: none;
          }

          @media only screen and (min-device-width:320px) and (max-device-width:480px) {
               .mobileContent {
                    display: inline;
               }

               .table-responsive {
                    display: none;
               }
          }
     </style>
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Impulse</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                         <a class="nav-link" href="#">Home <span class=" sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="#">About Application</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="#">Contact Us</a>
                    </li>
               </ul>
          </div>
     </nav>
     <br>
     <div class="row">
          <div class="col-6">
               <img src="Images/Impulse.png" class="img-fluid float-right mx-0" alt="Responsive image" style="width: 150px; height:100px;">

          </div>
          <div class="col float-left">
               <h1 class="text-left mt-3 mx-0 font-weight-bolder">Impulse</h1>
          </div>
     </div>

     <br>

     <div class="card bg-gradient-info">
          <h4 class="text-center p-3 font-italic" style="color:#0099ff;">To insure good health eat lightly ,breath deeply , live moderately,cultivate cheerfulness , and maintain an interest in life.</h4>
     </div>

     </div>


     <div class="container">
          <br>


          <div class="table-responsive">
               <table cellspacing="1" cellpadding="25" class="table">
                    <thead>
                         <tr>
                              <th rowspan=3 class="float-right"><img src="Images/VirusImage.png" alt="3"></th>
                              <th colspan="3" class="text-center align-middle">
                                   <h2 class="font-weight-bold">Coronavirus Section </h2>
                              </th>
                         </tr>
                         <tr>
                              <td cellpadding="3">
                                   <h3 id="cases">Total Cases : 0</h3>
                              </td>
                              <td>
                                   <h3 id="cured">Total Cured : 0</h3>
                              </td>
                              <td>
                                   <h3 id="death">Total Death :0</h3>
                              </td>
                         </tr>
                    </thead>
               </table>
          </div>

          <div class="mobileContent">
               <br>
               <h2 class="text-center font-weight-bold">Coronavirus </h2>
               <br>
               <div class="card container" style="width: 18rem;">
                    <ul class="list-group list-group-flush items">
                         <li class="list-group-item text-center">
                              <h4 id="mcases">Total Cases : </h4>
                         </li>
                         <li class="list-group-item text-center" id="cured">
                              <h4 id="mcured">Total Cured : </h4>
                         </li>
                         <li class="list-group-item text-center" id="death">
                              <h4 id="mdeath">Total Death : </h4>
                         </li>
                    </ul>
               </div>
          </div>

          <br>
          <a href="Coronavirus/CurrentStats.html"><button type="submit" class="btn btn-primary btn-lg col-4 ml-5 p-2" type="submit">Current
                    Status</button></a>

          <a href="Coronavirus/Coronavirus.php"><button type="submit" class="btn btn-primary btn-lg float-right col-4 mr-5 p-2" type="submit">COVID-19
                    Detector</button></a>
     </div>

     <br><br>

     <div class="card text-center">
          <div class="card-header">
               Slot Booking for Grocery shops and Clinics
          </div>
          <div class="card-body">
               <h1 class="card-title">Book Your Slot And Be Safe</h1>
               <h5 class="card-text ">Book your slot according to your on will and time,which helps in maintaining social distancing and prevent overcrowding
               </h5>
               <br>
               <a href="Token_System/user/shop_list.php" class="btn btn-primary btn-lg">Book Now</a>
          </div>
          <div class="card-footer text-muted">
               A step against Coronavirus Pandemic
          </div>
     </div>

     <br><br>
     <div class="card container">
          <h5 class="card-header text-center">Connecting Farmer and Buyer Across the Country</h5>
          <div class="card-body">
               <h2 class="card-title text-center">Gets Fresh Products Directly form the Farm</h2>
               <h5 class="card-text text-center">Buy Vegetables , Grains , Fruits ,etc Across the Country by Directly Contacting to the Farmer </h5>
               <br>
               <div class="form-actions">
                    <a href="AgroCraft/index.html" class="btn btn-primary btn-lg">Start Buying</a>
               </div>
          </div>
     </div>

     <br>
     <br>
     <br>
     </div>

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
     </script>
     <script src="https://code.jquery.com/jquery-3.5.0.min.js" crossorigin="anonymous"></script>

     <script src="Javascript/Homepage.js"></script>
</body>

</html>