<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-color: white;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .x {
        height: 70vh;
        margin-top: 10vh;
        margin-bottom: 10vh;
        width: 100%;
    }

    .inp::placeholder {
        display: none;
        visibility: hidden;
    }

    /* .s {
        width: auto;
    }
     */

    .x {
        background-color: ghostwhite;
        height: 80%;
        width: 38%;
        margin-top: 0%;
    }

    .text {
        background-color: black;
        color: gold;
    }

    h2,
    h1 {
        color: black;
    }

    .imag {
        height: 120px;
    }

    .s {
        width: 96%;
        margin-left: 2%;
        margin-right: 2%;
    }

    .fp {
        margin-left: 0%;
        margin-top: -10%;
        text-align: right;
        color: black;
        font-size: 20px;
    }

    .nu {
        /* margin-right: 0%;
        margin-left: 25%; */
        margin-top: -10%;
        text-align: center;
        margin-left: -2%;
        color: black;
        font-size: 20px;
    }

    .guard {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #ffc857;
        /* background-color: #ffc857; */
        line-height: 0.1em;
        margin: 10px 0 20px;
        font-family: serif;
    }

    .guard span {
        background: ghostwhite;
        padding: 0 10px;
    }

    .lastbtn {
        color: goldenrod;
    }

    .text {
        min-width: 180px !important;
        display: inline-block !important
    }

    .inp {
        width: 10%;
    }

    .head {
        margin-left: -20%;
        /* background-color: black; */
        margin-top: 10%;
    }

    /* .area{
    } */

    .logo {
        margin-left: 0%;
        float: right;
    }

    .inner {
        float: left;
    }

    .main {
        float: left;
    }

    a {
        text-decoration: none;
        color: #333;
    }

    a:hover {
        text-decoration: none;
        color: black
    }

    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        .x {
            padding: 0;
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 50px;
            /* margin-top: 100%; */
            /* background-color: black; */
        }

        a {
            text-decoration: none;
            color: #333;
        }

        a:hover {
            text-decoration: none;
            color: black
        }

        /* .imag {
            display: none;
            visibility: hidden;
        } */
        .s {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }

        .inp::placeholder {
            visibility: visible;
            color: black;
            text-align: center;
        }

        .input-group-prepend {
            display: none;
        }

        .fp {
            margin-left: 0%;
            margin-top: -30%;
            text-align: center;
            /* font-size: 20px; */
        }

        .nu {
            margin-right: 0%;
            margin-left: 0%;
            margin-top: -15%;
            text-align: center;
        }

        .text1 {
            text-align: center;
        }

        .text2 {
            text-align: center;
        }

        .button1 {
            margin-top: 10%;
        }

        .inp {
            border-color: black;
            border-style: solid;
        }

        .main {
            /* width: 80%;
            margin-left: 10%;
            margin-right: 10%; */
            display: flex;
            justify-content: center;
            align-items: center;
            float: none;
        }

        .inner {
            float: none;
            /* text-align: center; */
        }

        /* .inner1 {} */
    }
</style>


<body>

    <br>
    <div class="row main  ">

        <div class="col-6 inner1">
            <img src="../../Images/Impulse.png" class="img-fluid logo ml-5 " alt="Responsive image" style="width: 150px; height:100px;">

        </div>
        <div class="col inner">
            <h1 class="text-left  font-weight-bolder head">Impulse</h1>
        </div>

    </div>
    <!-- <p class="line-1 anim-typewriter">Animation typewriter style using css steps()</p> -->

    <!-- <br> -->
    <!-- <img src="Guadian.png" >
     -->
    <!-- <img src="0001.png" class="mx-auto d-block imag" />
    <div class="text-center">
        <h1>Guardian</h1>
    </div>
    <br> -->
    <div class="container x   pl-5 pr-5 pb-3 align-middle ">
        <div class="text-center">
            <br>

            <b>
                <h1 class="guard"><span><b>Register</b></span>
                </h1>
            </b>
        </div>
        <div class="form">
            <form action="user_signup.php" method="post">
                <div class="input-group mt-5 s">
                    <div class="input-group-prepend ">
                        <span class="input-group-text text  " id="inputGroup-sizing-default" style="font-size: 15px;"><i class="fas fa-user mr-2"></i>Full name</span>
                    </div>
                    <input type="text" class="form-control inp " name="name" aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="fullname">
                </div>

                <!-- <div class="input-group mt-5 s">
                    <div class="input-group-prepend ">
                        <span class="input-group-text text " id="inputGroup-sizing-default" style="font-size: 15px;"><i class="fas fa-user mr-2"></i>Username</span>
                    </div>
                    <input type="text " class="form-control inp " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Username">
                </div> -->
                <br><br>
                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text pr-5 pl-5  text" id="inputGroup-sizing-default"><i class="far fa-envelope mr-2"></i>Email </span>
                    </div>
                    <input type="email" class="form-control inp mb-5 " name="email" aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Email ">
                </div>

                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text pr-4 pl-4 text" id="inputGroup-sizing-default" style="width: 100%"><i class="fas fa-map-pin mr-2"></i>Pincode</span>
                    </div>
                    <input type="text" class="form-control inp mb-5 " name="pincode" aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Pincode">

                </div>
                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text pr-4 pl-4 text" id="inputGroup-sizing-default" style="width: 100%"><i class="fas fa-lock mr-2"></i>Password</span>
                    </div>
                    <input type="password" class="form-control inp mb-5 " name="password" aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Password">

                </div>
                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-3 ">
                        <span class="input-group-text  text" id="inputGroup-sizing-default" style="width: 100%"><i class="fas fa-lock mr-2"></i>Confirm Password</span>
                    </div>
                    <input type="password" class="form-control inp mb-1 " name="confirmpassword" aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Confirm Password">

                </div>

                <div class="d-flex justify-content-around flex-sm-column flex-md-column flex-lg-row flex-xl-row flex-column mb-3 ">

                    <div class="text1" style="font-size: 25px;"><b>Are you a ?</b></div>


                </div>
                <div class="contains d-flex justify-content-around mb-3">

                    <!-- <div class="form-check-inline text-left inners">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="occupation" value="doctor"
                                onclick="myfunction(this.value)"><b>Doctor</b>
                        </label>
                    </div> -->
                    <div class="form-check-inline ">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="occupation" value="visitor" onclick="myfunction(this.value)"><b>Visitor</b>
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio3">
                            <input type="radio" class="form-check-input" id="radio3" name="occupation" value="Shopkeeper" onclick="myfunction(this.value)"><b>Shopkeeper</b>
                        </label>
                    </div>
                </div>
                <div class="box" id="boxid">

                </div>
                <div class="d-flex justify-content-around flex-sm-column flex-md-column flex-lg-row flex-xl-row flex-column mb-5 mt-5 ">

                    <div class="text1" style="font-size: 20px;"><b>Already Registered ? <a href="user_signin.php">Sign
                                In</a></b> </div>


                </div>

                <div class="d-flex justify-content-around flex-sm-column flex-md-column flex-lg-row flex-xl-row flex-column mb-3" style="margin-top: -5%;">
                    <button type="submit" name="register" class="btn btn-dark btn-lg " style=" color: gold;">Sign up</button>

                </div>
            </form>
        </div>

</body>
<script>
    function myfunction(values) {
        console.log(values)
        var boxid = document.getElementById('boxid')
        if (values === "doctor") {
            boxid.innerHTML = ` <br><div class="input-group mt-1  s">
                        <div class="input-group-prepend mb-5 ">
                            <span class="input-group-text  text" id="inputGroup-sizing-default" style="width: 100%"><i class="fas fa-user mr-2"></i> Clinic name</span>
                        </div>
                        <input type="password" name="clinicName" class="form-control inp mb-1 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Confirm Password">
                </div>
                
            <div class="input-group mt-1 s">
                <div class="input-group-prepend mb-5 ">
                    <span class="input-group-text  text pl-3 pr-3 align-middle p-3" id="inputGroup-sizing-default"><i class="fas fa-home mr-2"></i>Clinic Address </span>
                </div>
                <textarea class="form-control inp area mb-5 " name="clinicAddress" id="exampleFormControlTextarea1" rows="2" placeholder="Address"></textarea>
            </div>
            <div class="input-group mt-5  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text  text pl-3 pr-3" id="inputGroup-sizing-default"><i
                                class="fas fa-phone-alt mr-2"></i>Phone number </span>
                    </div>
                    <input type="text" class="form-control inp mb-5 " name="phonenumber" aria-label="Sizing example input "
                        aria-describedby="inputGroup-sizing-default " placeholder="Phone number ">

                </div>
                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text  p-2  text" id="inputGroup-sizing-default"><i class="fas fa-hourglass-start mr-2"></i>Start Time</span>
                    </div>
                    <input type="text" onfocus="(this.type='time')" name="startTime" onfocusout="(this.type='text')" class="form-control inp timeinput mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Start Time ">
                </div>
                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text p-2  text" id="inputGroup-sizing-default"><i class="fas fa-hourglass-end mr-2"></i>End Time</span>
                    </div>
                    <input type="text" onfocus="(this.type='time')" name="endTime" onfocusout="(this.type='text')" class="form-control inp timeinput mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="End Time ">
                </div>
                `
        } else if (values === "Shopkeeper") {
            boxid.innerHTML = `<br>
            <div class="input-group mt-1  s">
                        <div class="input-group-prepend mb-5 ">
                            <span class="input-group-text  text" id="inputGroup-sizing-default" style="width: 100%"><i class="fas fa-user mr-2"></i> Shop name</span>
                        </div>
                        <input type="text" class="form-control inp mb-1" name="shopName" aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Shopname">
                </div>
                
            <div class="input-group mt-1 s">
                <div class="input-group-prepend mb-5 ">
                    <span class="input-group-text  text pl-3 pr-3 align-middle p-3" id="inputGroup-sizing-default"><i class="fas fa-home mr-2"></i>Shop Address </span>
                </div>
                <textarea class="form-control inp area mb-5 " name="shopAddress" id="exampleFormControlTextarea1" rows="2" placeholder="Shop Address"></textarea>
            </div>
            <div class="input-group mt-5  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text  text pl-3 pr-3" id="inputGroup-sizing-default"><i
                                class="fas fa-phone-alt mr-2"></i>Phone number </span>
                    </div>
                    <input type="text" class="form-control inp mb-5 " name="phonenumber" aria-label="Sizing example input "
                        aria-describedby="inputGroup-sizing-default " placeholder="Phone number ">

                </div>
                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text  p-2  text" id="inputGroup-sizing-default"><i class="fas fa-hourglass-start mr-2"></i>Start Time</span>
                    </div>
                    <input type="text" onfocus="(this.type='time')" name="startTime1" onfocusout="(this.type='text')" class="form-control inp timeinput mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Start Time ">
                </div>
                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text p-2  text" id="inputGroup-sizing-default"><i class="fas fa-hourglass-end mr-2"></i>End Time</span>
                    </div>
                    <input type="text" onfocus="(this.type='time')" name="endTime1" onfocusout="(this.type='text')" class="form-control inp timeinput mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="End Time ">
                </div>
                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text p-2  text" id="inputGroup-sizing-default"><i class="fas fa-stopwatch mr-2"></i>Time Interval</span>
                    </div>
                    <label class="radio-inline ml-3"><input type="radio" name="optradio" checked value="30">30 Mins</label>
                    <label class="radio-inline ml-3"><input type="radio" name="optradio" value="45">45 Mins</label>
                    <label class="radio-inline ml-3"><input type="radio" name="optradio" value="60">60 Mins</label>
                </div>
                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text p-2  text" id="inputGroup-sizing-default"><i class="fas fa-user-friends mr-2"></i>No. Of User Per Slot</span>
                    </div>
                    <input type="text"  onfocusout="(this.type='text')" class="form-control inp timeinput mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="User Per Slot " name="slotUser">
                </div>
                `
            console.log(values)
        } else {
            boxid.innerHTML = ` <br>    <div class="input-group mt-1 s">
                <div class="input-group-prepend mb-5 ">
                    <span class="input-group-text  text pl-3 pr-3 align-middle p-3" id="inputGroup-sizing-default"><i class="fas fa-home mr-2"></i>Address </span>
                </div>
                <textarea class="form-control inp area mb-5 " name="address" id="exampleFormControlTextarea1" rows="2" placeholder="Address"></textarea>
            </div>
            <div class="input-group mt-5  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text  text pl-3 pr-3" id="inputGroup-sizing-default"><i
                                class="fas fa-phone-alt mr-2"></i>Phone number </span>
                    </div>
                    <input type="text" class="form-control inp mb-5 " name="phonenumber" aria-label="Sizing example input "
                        aria-describedby="inputGroup-sizing-default " placeholder="Phone number ">

            </div>`
        }
    }
</script>

</html>
<?php
include("../Includes/db.php");

$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$encryption_iv = '2345678910111211';
$encryption_key = "DE";

if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
    $pincode = mysqli_real_escape_string($con, $_POST['pincode']);

    $encryption = openssl_encrypt(
        $password,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );

    $radio_val = $_POST["occupation"];
    if ($radio_val == "doctor") {
        $clinic_name = mysqli_real_escape_string($con, $_POST['clinicName']);
        $clinic_address = mysqli_real_escape_string($con, $_POST['clinicAddress']);
        $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
        $start_time = mysqli_real_escape_string($con, $_POST['startTime']);
        $end_time = mysqli_real_escape_string($con, $_POST['endTime']);
        if (strcmp($password, $confirmpassword) == 0) {
            $query = "insert into doctor(name,email,
                    pincode,password,clinicName,clinicAddress,phone,startTime,endTime) 
                    values ('$name','$email','$pincode','$encryption','$clinic_name',
                    '$clinic_address','$phonenumber','$start_time','$end_time'
                    )";
            $run_register_query = mysqli_query($con, $query);
            echo "<script>alert('SucessFully Registered');</script>";
            echo "<script>window.open('user_signin.php','_self')</script>";
        } else if (strcmp($password, $confirmpassword) != 0) {
            echo "<script>
                    alert('Password and Confirm Password Should be same');
                </script>";
        }
    } else if ($radio_val == "Shopkeeper") {
        $shop_name = mysqli_real_escape_string($con, $_POST['shopName']);
        $shop_address = mysqli_real_escape_string($con, $_POST['shopAddress']);
        $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
        $start_time1 = mysqli_real_escape_string($con, $_POST['startTime1']);
        $end_time1 = mysqli_real_escape_string($con, $_POST['endTime1']);
        $slots_intv = $_POST["optradio"];
        if ($slots_intv == "30") {
            $slot_interval = "30";
        } else if ($slots_intv == "45") {
            $slot_interval = "45";
        } else if ($slots_intv == "60") {
            $slot_interval = "60";
        } else {
            $slot_interval = "30";
        }

        $slot_user = mysqli_real_escape_string($con, $_POST['slotUser']);


        if (strcmp($password, $confirmpassword) == 0) {
            $query = "insert into shopkeeper(name,email,
                    pincode,password,shopName,shopAddress,phone,startTime,endTime,slotInterval,slotUser) 
                    values ('$name','$email','$pincode','$encryption','$shop_name',
                    '$shop_address','$phonenumber','$start_time1','$end_time1','$slot_interval','$slot_user'
                    )";
            $run_register_query = mysqli_query($con, $query);
            echo "<script>alert('SucessFully Registered');</script>";
            echo "<script>window.open('user_signin.php','_self')</script>";
        } else if (strcmp($password, $confirmpassword) != 0) {
            echo "<script>
                    alert('Password and Confirm Password Should be same');
                </script>";
        }
    } else if ($radio_val == "visitor") {
        $visitor_address = mysqli_real_escape_string($con, $_POST['address']);
        $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
        if (strcmp($password, $confirmpassword) == 0) {
            $query = "insert into consumer(name,email,
                    pincode,password,address,phone) 
                    values ('$name','$email','$pincode','$encryption',
                    '$visitor_address','$phonenumber'
                    )";
            $run_register_query = mysqli_query($con, $query);
            echo "<script>alert('SucessFully Registered');</script>";
            echo "<script>window.open('user_signin.php','_self')</script>";
        } else if (strcmp($password, $confirmpassword) != 0) {
            echo "<script>
                    alert('Password and Confirm Password Should be same');
                </script>";
        }
    } else {
        echo "nothing happened";
    }
}
?>