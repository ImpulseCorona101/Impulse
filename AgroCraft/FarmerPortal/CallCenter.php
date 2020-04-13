<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Farmer Homepage</title>
     <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
     <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>

     <style>
          * {
               margin: 0;
               box-sizing: border-box;
          }


          .header {
               position: sticky;
               z-index: 100;
               top: 0rem;
               height: 69px;
               width: 100%;
               background-color: #00b300;
          }

          .select_element {
               width: 20px;
               background-color: transparent;
               border: none;
               text: none;
          }


          #logo {
               height: 66px;
               width: 100px;
               text-align: left;
               float: left;
          }

          .search_input {
               float: left;
               margin-left: 50px;
               margin-top: 20px;

          }

          .proicon {
               float: right;
               margin-right: 10px;
               margin-top: 20px;
          }

          .dropdown {
               float: right;
               margin-right: 35px;
               margin-top: 20px;
          }

          .options {
               color: yellow;
               margin-left: 20px;
               width: 25px;
               margin-right: 50px;
               display: inline;
          }

          .icon2 {
               float: right;
               margin-right: 10px;
               margin-top: 20px;

          }

          .loginz {
               float: right;
               margin-right: 20px;
               margin-top: 20px;
          }

          .headerdown {
               margin-left: 15%;
               height: 50px;
               width: 80%;
          }

          .makeitgreen {
               color: #00b300;
          }

          .sel1 {
               color: green;
               float: left;
               margin-top: 3px;
          }

          .sel2 {
               border-color: green;
               color: green;
               float: left;
               margin-left: 600px;
               margin-top: 3px;
          }

          .sel3 {
               font-size: 20px;
               margin-top: 3px;
               float: right;
               margin-right: 5px;
          }



          #input1 {
               width: 220px;
               border: none;
          }


          #input1:active {
               background-color: tomato;
          }


          .wrapper {
               display: grid;
               grid-template-columns: 20% 20% 20% 20%;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               margin-left: 30px;
          }

          .inputwrapper {
               float: left;
               border-style: double;
               text-align: center;
               margin-left: 80px;
               width: 280px;
               margin-bottom: 20px;
               clear: auto;
          }


          .inputwrapper:last-child {
               margin-right: 30px;
          }

          .addtocart {
               background-color: #FFD700;
          }

          .numberinput {
               width: 35px;
          }

          .content_item {
               text-align: center;
               justify-content: center;
          }

          .etc {
               margin-left: -40px;
               min-width: 90px;
               font-size: 20px;
          }

          .crop_items {
               color: green;
          }

          .footer {
               height: 70px;
               width: 100%;
               clear: both;
          }

          .payment {
               float: left;
               margin-left: 520px;
               font-size: 20px;
               margin-top: 25px;
          }

          .cash {
               float: left;
               margin-top: 0px;
               margin-left: 20px;
               margin-right: 20px;
          }

          .paytm {
               float: left;
          }

          h3 {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #000;
               line-height: 0.1em;
               margin: 10px 0 20px;
          }

          h3 span {
               background: #fff;
               padding: 0 10px;
          }

          .morefooter {
               height: 100px;
               width: 100%;
               background-color: white;

          }

          .call {
               float: left;
               font-size: 20px;
               margin-left: 150px;
               margin-top: 25px;
          }

          .gmail {
               margin-top: 10px;
               float: right;
               margin-right: 150px;

          }

          .instagram {
               margin-top: 10px;
               float: left;
               margin-left: 420px;
          }

          .instaid {
               height: 10px;
               width: 100%;

          }

          .text {
               float: left;
               margin-left: 735px;
               margin-top: -50px;
          }

          .gmailid {
               float: right;
               margin-right: 80px;
               margin-top: -60px;
          }

          .copy {
               float: left;
               margin-top: -65px;
          }

          body {
               margin: 0;
               padding: 0;
               font-family: sans-serif;
               background-size: cover;
               background-position: center;
               box-sizing: border-box;
          }

          .wrapper {
               background-image: 100px;
          }

          .add_button {
               float: right;
               text-align: center;
          }


          h1 {
               font-family: 'Times New Roman', Times, serif;
               color: white;

          }

          .lost {
               /* <font-fam></font-fam>; */
               color: black;
               text-align: center;
               height: 8%;
               margin-top: 150px;
               border-radius: 30px;
               font-size: 30px;
               /* margin-top: 5em; */
               background-color: olive;
               margin-top: 120px;
               margin: auto;
          }

          .new {
               text-align: center;
          }

          .button {
               position: relative;
               float: right;
          }

          h2 {
               color: white;
               margin-top: 3em;
               text-align: center;

          }

          .hii {
               float: right;
               margin-right: 5em;
          }

          .ribbon {
               position: relative;
               top: -16px;
               right: -706px;
               float: left;
               top: 0px;
               left: 0px;
               height: 74px;
               background-color: green;
          }

          .over {
               background-color: green;
               border: 1px;
               width: 100%;
               white-space: nowrap;
               height: 70px;


          }

          .subtract {
               float: right;
               border-color: olive;
               margin-top: 2%;
               text-align: center;
               border-radius: 25px;
          }

          /* .box{
            
            color: rgb(6, 36, 7);
            width: 1050px;
             line-height: 40px; 
             float:center;
            margin: auto;
            text-align: center;
              margin-top: 120px;  
             /* padding: 5px;  */
          /* border-style: outset;  */
          /* border-width: 5px;
            border-radius: 16px; */
          /* border-color:black;  */
          /* font-size:20px; */
          /* height: 900px;
            border-radius: 30px;
            
        }
        .please{
             text-align:center;
             float:right;
             margin-right:500px;
               margin: 0;
               padding: 0;
               font-family: sans-serif;
               background-size: cover;
               background-position: center;
               box-sizing: border-box;
          } */

          .wrapper {
               background-image: 100px;
          }

          .add_button {
               float: right;
               text-align: center;
          }


          h1 {
               font-family: 'Times New Roman', Times, serif;
               color: white;

          }

          .lost {
               font-family: Verdana, Geneva, Tahoma, sans-serif;
               color: black;
               text-align: center;
               margin-top: 220px;
               margin: auto;
          }


          .new {
               text-align: center;
          }

          .button {
               position: relative;
               float: right;
          }

          h2 {
               color: white;
               margin-top: 3em;
               text-align: center;

          }

          .hii {
               float: right;
               margin-right: 5em;
          }

          .ribbon {
               position: relative;
               top: -16px;
               right: -706px;
               float: left;
               top: 0px;
               left: 0px;
               height: 74px;
               background-color: green;
          }

          .over {
               background-color: green;
               border: 1px;
               width: 100%;
               white-space: nowrap;
               height: 70px;


          }

          .subtract {
               float: right;
               border-color: olive;
               margin-right: 12%;
               background-color: #00b300;
               text-align: center;
               /* border-radius: 25px; */
               width: 9%;
               height: 8%;
               margin-top: -5%;
               padding: 5px;

          }

          .items {
               width: 100%;
               margin: auto;
               height: auto;
          }



          /* .productbox:hover {
               float: left;
               margin: 25px;
               margin-left: 30px;
               padding: 20px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 5px;
               font-weight: bolder;
               height: 305px;
               width: 220px;
               transition: 0.5s;

          } */

          .slideshow {
               margin-top: 10px;
               margin-left: 100px;
               margin-bottom: 20px;
               float: left;
               border-style: solid;
          }

          #navbar {

               padding: 20px;
               color: green;
               text-decoration: none;
               margin: 20px;
               font-size: 25px;
               padding-top: 10px;
          }

          #navbar:hover {
               padding: 20px;
               color: green;
               text-decoration: underline;
               margin: 20px;
               font-size: 30px;
               font-weight: bolder;
               padding-top: 10px;
          }

          .products {
               margin-left: 5%;

          }

          .productbox {
               float: left;
               margin: 15px;
               /* margin-left: 30px; */
               padding: 15px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 10px;
          }

          .productbox img {
               height: 200px;
               width: 200px;
               border-style: double;
               border: 2px solid;
               border-color: brown;
               border-width: 2px;
               border-radius: 10px;
          }

          .productbox p {
               text-align: center;
               text-decoration: underline;
          }



          .tab {
               margin-left: 7%;
               margin-right: 6%;
               border-style: solid;
               border-width: 2px;
               padding: 2px;


          }

          td {
               border-style: solid;
               border-width: 2px;
               font-size: 50px;
          }

          tr {
               border-style: solid;
          }

          th {
               border-color: grey;
               border-style: solid;
               border-width: 2px;
               padding: 2px;
               font-size: 22px;

          }

          .tableyhead {

               color: red;

          }

          .thy {
               background-color: #555;
               color: white;
               border-style: solid;

          }

          .trow {
               align-content: center;
          }
          .bg{
               background-color: #f5ca0a;
width:220px;
margin-left:650px;
font-size: 20px;
border-style: solid;
border-radius: 10px;
padding: 10px;
          }
          .sp{
               background-color: #f5ca0a;
width:620px;
margin-left:650px;
font-size: 20px;
border-style: solid;
border-radius: 10px;
padding: 10px;
margin-left:500px;
          }
     </style>

</head>

<body>

     <div class="header">

          <a href="Homepage.php"><img id="logo" src="../portal_files/logo.jpg"></a>

          <div class="dropdown">
               <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="margin-top:-5px;"> <i class="fa fa-bars fa-2x" style="color: white;">
               </button></i>
               <ul class="dropdown-menu etc">
                    <?php
                    if (isset($_SESSION['phonenumber'])) {
                         echo "<li class='options'> <a href='FarmerProfile.php'><label class='makeitgreen'>Profile</label></a><br></li>";
                         echo "<li class='options'> <a href='CallCenter.php'><label class='makeitgreen'>Call Centers</label></a></li>";
                         echo "<li class='options'> <a href='logout.php'><label class='makeitgreen'>Logout</label></a></li>";
                    } else {
                         echo "<li class='options'> <a href='../auth/FarmerLogin.php'><label class='makeitgreen'>Login</label></a></li>";
                    }
                    ?>
               </ul>
          </div>

          <div class="proicon">

               <?php
               if (!isset($_SESSION['phonenumber'])) {
                    echo "<a href='../auth/FarmerLogin.php'> <i class='far fa-user-circle ' style='font-size:30px; color: white; padding-top:5px;'></i></a>";
               } else {
                    echo "<a href='FarmerProfile.php'> <i class='far fa-user-circle' style='font-size:30px; color: white; padding-top:5px;'></i></a>";
               }
               ?>
          </div>

          <div class="loginz">
               <?php getFarmerUsername(); ?>
          </div>
     </div>

     <br>

     </div>

     <div class="headerdown">

          <a href="Homepage.php" id="navbar"><i class="fa fa-home" aria-hidden="true"></i><label>Home</label></a>
          <a href="MyProducts.php" id="navbar"><i class="fa fa-leaf" aria-hidden="true"></i><label>My Products</label></a>
          <a href="Transactions.php" id="navbar"><i class="fa fa-exchange" aria-hidden="true"></i><label>My Transactions</label></a>
          <a href="CallCenter.php" id="navbar"><i class="fa fa-phone fa-rotate-vertical" aria-hidden="true"></i><label>Call Centers And Sms</label></a>
          <hr>
     </div>



     <br>
     <div class="content_item bg"><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>SMS</b></label></div>
     <div class="content_item " ><label style="font-size :24px; text-shadow: 1px 1px 1px gray;"><b>Insert Product</b></label></div>
     <hr>
     <div class=content_item ><label style="font-size :18px; text-shadow: 1px 1px 1px gray;">*#*,insert,password,product title,product category , product type , product stock ,MRP,Base Price, product keywords , product description ,product delivery</label></div>
     <hr>
     <div class="content_item "><label style="font-size :24px; text-shadow: 1px 1px 1px gray;"><b>Update Product</b></label></div>
     <hr>
     <div class=content_item><label style="font-size :18px; text-shadow: 1px 1px 1px gray;">*#*,update,password,product title,product category , product type , product stock ,MRP,Base Price, product keywords , product description ,product delivery</label></div>
     <hr>
     <div class="content_item "><label style="font-size :24px; text-shadow: 1px 1px 1px gray;"><b>Delete Product</b></label></div>
     <hr>
     <div class=content_item><label style="font-size :18px; text-shadow: 1px 1px 1px gray;">*#*,delete,password,product title,MRP</label></div>
     <hr>
     <div class="content_item sp"><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Call Center , Location's & Langauges</b></label></div>
     <br>
     <h4 align="center">Phone Number : 9820835845</h4>
     <br>
     <table class=tab>
          <thead align="center" class=tableyhead>
               <th class=thy>SR NO.</th>
               <th class=thy>LOCATION</th>
               <th class=thy>STATES</th>
               <th class=thy>LANGUAGES</th>


          </thead>
          <tr align="center" class=trow>
               <th align="center">1</th>
               <th align="center">Hyderabad</th>
               <th align="center">Andhra Pradesh</th>
               <th align="center">Telugu</th>

          </tr>
          <tr align="center" class=trow>
               <th align="center">2</th>
               <th align="center">Patna</th>
               <th align="center">Bihar | Jharkhand</th>
               <th align="center">Hindi</th>


          </tr>
          <tr align="center" class=trow>
               <th align="center">3</th>
               <th align="center">Jaipur</th>
               <th align="center">Delhi | Rajasthan</th>
               <th align="center">Hindi</th>

          </tr>
          <tr align="center" class=trow>
               <th align="center">4</th>
               <th align="center">Ahmadabad/Anand</th>
               <th align="center">Gujarat | Dadra & Nagar Haveli | Daman & Diu</th>
               <th align="center">Gujarati | Goan</th>

          </tr>
          <tr align="center" class=trow>
               <th align="center">5</th>
               <th align="center">Chandigarh</th>
               <th align="center">Haryana | Punjab | Chandigarh | Himachal Pradesh</th>
               <th align="center">Hindi/Haryanvi | Punjabi | Hindi</th>

          </tr>
          <tr align="center" class=trow>
               <th align="center">6</th>
               <th align="center">Jammu</th>
               <th align="center">Jammu and Kashmir</th>
               <th align="center">Dogri, Kashmiri, Ladakh</th>

          </tr>
          <tr align="center" class=trow>
               <th align="center">7</th>
               <th align="center">Bangalore</th>
               <th align="center">Karnataka | Kerala | Lakshadweep</th>
               <th align="center">Kannada | Malayalam</th>

          </tr>
          <tr align="center" class=trow>
               <th align="center">8</th>
               <th align="center">Jabalpur</th>
               <th align="center">Madhya Pradesh | Chhattisgarh</th>
               <th align="center">Hindi</th>

          </tr>
          <tr align="center" class=trow>
               <th align="center">9</th>
               <th align="center">Nagpur/Pune</th>
               <th align="center">Maharashtra | Goa</th>
               <th align="center">Marathi | Goan</th>

          </tr>
          <tr align="center" class=trow>
               <th align="center">10</th>
               <th align="center">Coimbatore</th>
               <th align="center">Tamil Nadu | Puducherry | Andaman & Nicobar</th>
               <th align="center">Tamil</th>

          </tr>
          <tr align="center" class=trow>
               <th align="center">11</th>
               <th align="center">Kanpur</th>
               <th align="center">Uttar Pradesh | Uttarakhand</th>
               <th align="center">Hindi</th>

          </tr>
          <tr align="center" class=trow>
               <th align="center">12</th>
               <th align="center">Kolkata</th>
               <th align="center">West Bengal | Sikkim</th>
               <th align="center">Bengali | Sikkimese</th>

          </tr>
          <tr align="center" class=trow>
               <th align="center">13</th>
               <th align="center">Bhubaneshwar</th>
               <th align="center">Orissa</th>
               <th align="center">Oriya</th>

          </tr>
          <tr align="center" class=trow>
               <th align="center">14</th>
               <th align="center">Guwahati</th>
               <th align="center">Arunachal Pradesh | Assam | Manipur | Meghalaya | Mizoram | Nagaland | Tripura</th>
               <th align="center">Adi | Assamese | Manipuri | Khasi | Mizo | Nagamese | Bengali</th>

          </tr>

     </table>
     <div class="footer">
          <hr>
          <label class="payment">Payment Options:-</label>
          <div class="cash"><img src="../Images/Website/cash.jpg" height="75px" width="125px"></div>
          <div class="patym"><img src="../Images/Website/petm.jpg" height="75px" width="125px"></div>
     </div><br><br>
     <h3><span> GET SOCIAL WITH US </span></h3>
     </div>
     <div class="morefooter">

          <div class="call">
               <i class="fas fa-phone-alt call_color"></i>
               <a href="#" style="color:black;">+91-8191046421</a>
          </div>

          <div class="instagram"><img src="../Images/Website/Insta.jpg" height="45px" width="60px">
          </div>

          <div class="gmail">
               <img src="../Images/Website/gmail.jpg" height="30px" width="50px">
          </div>

     </div>
     <div class="instaid">
          <div class="text"><a href="#" style="color:black;">@AgroCraft</a></div>

          <div class="gmailid">
               <a href="#" class="hypher" style="color:black;">agrocraft6@gmail.com</a>
          </div>

     </div>
     <div class="copy">
          <h5 style="test-align:center; padding-top:40px;margin-left:650px; background-color:'grey';">Copyright &copy; 2022 by www.AgroCraft.com</h5>
     </div>

</body>

</html>