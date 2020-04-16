<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Bootstrap Datepicker - Disabled Specific dates and Saturday,Sunday</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script type="text/javascript" src="qrcode.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      text-align: center;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      text-align: center;
      border: 1px solid #888;
      width: 25%;
      height: 28%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -webkit-animation-name: animatetop;
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
      from {
        top: -300px;
        opacity: 0
      }

      to {
        top: 0;
        opacity: 1
      }
    }

    @keyframes animatetop {
      from {
        top: -300px;
        opacity: 0
      }

      to {
        top: 0;
        opacity: 1
      }
    }

    /* The Close Button */
    .close {
      color: white;
      text-align: center;
      font-size: 28px;
      font-weight: bold;

    }

    .close h2 {

      position: relative;
    }

    .modal-header h2 {
      text-align: center;

    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .modal-header {
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
      text-align: center;
    }

    .modal-body {
      padding: 10px 10px;
      text-align: center;
    }


    * {
      font-family: sans-serif;
    }

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

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    .parent {
      width: 850px;
      height: 350px;
      left: 600px;
      top: 48px;
    }

    code {
      text-align: left;
    }

    .container {
      position: absolute;
      right: 600px;
    }

    #myDIV {
      display: none;
    }

    #myDIV1 {
      display: none;
    }

    #myDIV2 {
      display: none;
    }

    .container1 {
      width: 200px;
    }

    .d {
      position: relative;
      bottom: 34px;
      left: 65px;
      color: #616161;
    }

    .s {
      position: relative;
      bottom: 34px;
      left: 65px;
      color: #616161;
    }

    .l {
      position: relative;
      bottom: 34px;
      left: 115px;
    }

    .sl {
      position: relative;
      bottom: 15px;
    }

    .scam {
      position: absolute;
      width: 750px;
      right: 895px;
      top: 500px;
    }

    .c {
      position: relative;
      top: 400px;
      left: 500px;
      width: 500px;
    }

    .qrResult {
      position: absolute;

      top: 790px;
      left: 800px;
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
          <a class="nav-link" href="{{ url_for('Homepage') }}">Home <span class=" sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url_for('About') }}">About Application</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url_for('Contact') }}">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <div class="container ">
    <div class="row">
      <div class="col-md-5 offset-md-3 mt-5 ">
        <div class="card shadow-sm">
          <div class="card-header bg-light  shadow-sm">
            <h6 class="font-weight-bold">Select Your Date</h6>
          </div>
          <div class="card-body">
            <form action="#">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">

                    <input type="text" id="date" name="date" class="datepicker form-control" autocomplete="off" placeholder="Select Date" onchange="addressFunction()" required onkeydown="return false">
                    <code class=" text ">Note : Dates Can Only be Selected For This Week</code>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button type="button" onclick="fill()" class="btn btn-primary float-right">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-5 offset-md-3 mt-3 ">
        <div class="card shadow-sm">
          <div class="card-header shadow-sm bg-light">
            <h6 class="font-weight-bold">Select Your Schedule</h6>
          </div>
          <div class="card-body">
            <form action="#">
              <div class="row">
                <div class="col-md-12">
                  <button type="button" class="btn btn-outline-warning ml-5 mr-5" onclick="myFunction()">Morning</button>

                  <button type="button" class="btn btn-outline-secondary ml-5" onclick="myFunction1()">Evening</button>

                </div>
              </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  </div>



  </script>
  <script>
    function myFunction() {
      var x = document.getElementById("myDIV");
      var y = document.getElementById("myDIV1");
      if (x.style.display === "none") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }

    function myFunction4() {
      var x = document.getElementById("myDIV2");

      if (x.style.display === "none") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
  </script>
  <script>
    function myFunction1() {
      var x = document.getElementById("myDIV1");

      if (x.style.display === "none") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
  </script>


  <script type="text/javascript">
    $(function() {
      var enableDays = ['2020-04-19', '2020-04-20', '2020-04-21', '2020-04-22', '2020-04-23', '2020-04-24', '2020-04-25', '2020-04-26'];
      var disabledDays = [1, 3];

      function formatDate(d) {
        var day = String(d.getDate())
        //add leading zero if day is is single digit

        if (day.length == 1)
          day = '0' + day
        var month = String((d.getMonth() + 1))
        //add leading zero if month is is single digit
        if (month.length == 1)
          month = '0' + month
        return d.getFullYear() + '-' + month + "-" + day;
      }

      $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        beforeShowDay: function(date) {
          var dayNr = date.getDay();
          if (dayNr == 0 || dayNr == 1 || dayNr == 2 || dayNr == 3 || dayNr == 4 || dayNr == 5 || dayNr == 6) {
            if (enableDays.indexOf(formatDate(date)) >= 0) {
              return true;
            }
            return false;
          }
          if (disabledDays.indexOf(formatDate(date)) >= 0) {
            return false;
          }
          return true;
        }
      });
    });
  </script>

  <div class="parent position-relative border shadow-sm bg-white" id="myDIV">
    <div class="container-sm ">
      <div class="card-header bg-light shadow-sm">
        <h2 class="font-weight-bold">Select Your Time Slot</h2>
      </div>
      <div class="row">

        <button type="button" onclick="fill1()" id="btn" value="9:00 am - 9:30 am" class="btn btn-outline-success mt-5 ml-5 mr-4 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>9:00am - 9:30am</button>
        <button type="button" class="btn btn-outline-success mt-5 ml-5 mr-4 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>9:45am - 10:15am</button>
        <button type="button" class="btn btn-outline-success mt-5 ml-5 mr-4 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>10:30am-11:00am</button>

        <button type="button" class="btn btn-outline-success mt-5 ml-4 mr-4 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>11:15am-11:45am</button>
        <button type="button" class="btn btn-outline-success mt-5 ml-5 mr-5 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>12:00pm-12:30pm</button>
        <button type="button" class="btn btn-outline-success mt-5 ml-4 mr-5 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>12:45pm - 1:15pm</button>
        <button type="button" class="btn btn-outline-success mt-5 ml-4 mr-4 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>1:30pm - 2:00pm</button>
        <button type="button" class="btn btn-outline-success mt-5 ml-4 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>2:15pm - 2:45pm</button>



      </div>


    </div>
  </div>
  <br>
  <div class="parent position-relative border shadow-sm bg-white" id="myDIV1">
    <div class="container-sm ">
      <div class="card-header bg-light shadow-sm">
        <h2 class="font-weight-bold">Select Time Slot</h2>
      </div>
      <div class="row">
        <button type="button" id="btn" class="btn btn-outline-success mt-5 ml-5 mr-4 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>3:00pm - 3:30 pm</button>
        <button type="button" class="btn btn-outline-success mt-5 ml-5 mr-5 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>3:45pm - 4:15pm</button>
        <button type="button" class="btn btn-outline-success mt-5 ml-4 mr-5 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>4:30pm - 5:00pm</button>
<<<<<<< HEAD
        <button type="button" class="btn btn-outline-success mt-5 ml-4 mr-4 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>5:15pm - 5:45pm</button>
        <button type="button" class="btn btn-outline-success mt-5 ml-5 mr-4 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>6:00pm - 6:30pm</button>
        <button type="button" class="btn btn-outline-success mt-5 ml-5 mr-4 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>6:45pm - 7:15pm</button>

        <button type="button" class="btn btn-outline-success mt-5 ml-5 mr-5 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>7:30pm-8:00pm</button>
        <button type="button" class="btn btn-outline-success mt-5 ml-5  p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>8:15pm-8:45pm</button>



      </div>


    </div>
  </div>

  <script>

  </script>

  <div class="scam">
    <div class="confirm1 position-relative">
      <div class="col-md-5 offset-md-3 mr-3 mt-3 ">
        <div class="card shadow-sm">
          <div class="card-header shadow-sm bg-light">
            <h5 class="font-weight-bold">Confirm Your Slot</h5>
          </div>
          <div class="card-body">
            <form action="#">
              <div class="row">
                <div class="col-md-10">

                  <h4 class="font-weight-bold">Date: </h4><input class="d" disabled="disabled" id="demo" required>


                  <h4 class="font-weight-bold">Time:</h4> <input class="s" disabled="disabled" id="demo1" required="required">

                  <div class="sl">
                    <button type="button" id="myBtn" class="btn btn-primary" onclick="userValid()"> Confirm</button>

                  </div>
                </div>
              </div>
          </div>



        </div>
      </div>
    </div>
    <br>



    <br><br>

  </div>
  <script>
=======
           <button type="button" class="btn btn-outline-success mt-5 ml-4 mr-4 p-2" ><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>5:15pm - 5:45pm</button>
           <button type="button" class="btn btn-outline-success mt-5 ml-5 mr-4 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>6:00pm - 6:30pm</button>
           <button type="button" class="btn btn-outline-success mt-5 ml-5 mr-4 p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>6:45pm - 7:15pm</button>
           
           <button type="button" class="btn btn-outline-success mt-5 ml-5 mr-5 p-2" ><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>7:30pm-8:00pm</button>
           <button type="button" class="btn btn-outline-success mt-5 ml-5  p-2"><i class="fa fa-user fa-lg"><label class="ml-2"> 5 slots</i></label><br>8:15pm-8:45pm</button>
           
           
           
         </div>
         
   
   </div>
   </div>
   
                 <script>
                 
            </script>
            
            <div class="scam">
            <div class="confirm1 position-relative">
                <div class="col-md-5 offset-md-3 mr-3 mt-3 ">
                 <div class="card shadow-sm">
                    <div class="card-header shadow-sm bg-light">
                       <h5 class="font-weight-bold">Confirm Your Slot</h5>
                    </div>
                    <div class="card-body">
                       <form action="#">
                          <div class="row">
                             <div class="col-md-10">
                                 
                               <h4 class="font-weight-bold">Date: </h4><input class="d"   disabled="disabled" id="demo" required>    
                                                     
                               
                                   <h4 class="font-weight-bold">Time:</h4> <input class="s"   disabled="disabled" id="demo1" required="required">
                               
                               <div class="sl">
                               <button  type="button" id ="myBtn" class="btn btn-primary" onclick="userValid()"> Confirm</button>
                                 
                               </div>
                                 </div>
                                   </div>
                                   </div>
                                   
                                  
                                  
                               </div>
                               </div>
                             </div>
                             <br>
                              
                              
                                             
                                             <br><br>
                                             
                                             </div>
                                             <script>
>>>>>>> 54c930fe0745ff4386dc9337bae292b7959b39f8
    function userValid() {
      var Description;
      Description = document.getElementById("demo1").value;

      if (Description == "") {
        alert("Please fill all the details");
        return false;
      }
      return true;
    }
  </script>

  <script>
    function fill() {
      if (document.getElementById('date').value != 0) {
        document.getElementById('demo').value = document.getElementById('date').value;
      }
    }

    function fill1() {
      if (document.getElementById('btn').value != 0) {
        document.getElementById('demo1').value = document.getElementById('btn').value;
      }
    }

    (function() {
      $('form > input').keyup(function() {

        var empty = false;
        $('form > input').each(function() {
          if ($(this).val() == '') {
            empty = true;
          }
        });

        if (empty) {
          $('#register').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
        } else {
          $('#register').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
        }
      });
    })()
  </script>
  <script>
    function generate() {
      var number = Math.floor(Math.random() * 10000000000000000) + 1;
      console.log(number);
      let qrcode = new QRCode("qr", {
        text: number,
        width: 100,
        height: 100,
        colorDark: "#990000",
        colorLight: "#ffffff",

      });
      const Uniqueid = document.querySelector(".Uniqueid");
      Uniqueid.textContent = "Unique Number is : " + number;
      qrcode.makeCode(message.value);
    }
  </script>
  <div class="col-md-5 offset-md-3 mr-3 mt-1">


    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">

          <h2>Are You Sure?</h2>
        </div>
        <div class="modal-body">
          <br>
          <a href="success.html" value="1" id="qr" class="btn btn-outline-info   mr-5 p-3">Yes</a>
          <span>
            <button type="button" value="1" id="qr1" class="btn btn-outline-danger    mr-2 p-3">No</button>
          </span>
          <div id="qrResult" style="height:100px;width: 100px">

          </div>


        </div>

      </div>

    </div>

  </div>
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    var qr1 = document.getElementById("qr1")

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    qr1.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  </div>

</body>

</html>