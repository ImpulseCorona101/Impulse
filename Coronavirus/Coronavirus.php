<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>COVID-19 Detector</title>

    <style>
        .form-actions {
            margin: 0;
            background-color: transparent;
            text-align: center;
        }

        html {
            scroll-behavior: smooth;
        }

        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            .ele {
                width: 100%;
            }

            .x {
                margin-left: 34%;
                color: #000;
            }

            .y {
                margin-left: 38.5%;
                color: #000;
            }

            .z {
                margin-left: 23%;
            }

            .a {
                margin-left: 27%;
            }

            .b {
                margin-left: 33%;
            }

            .c {
                margin-left: 28%;
            }

            .d {
                margin-left: 32%;
            }

            .e {
                margin-left: 2%;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">COVID-19 Detector</a>
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
    <div class=" row ">
        <div class="col-8 ">
            <h2 class="text-right mt-3 font-weight-bolder ">Coronavirus Probability Detector</h2>
        </div>
        <div class="col ">
            <img src="VirusImage.png" class="img-fluid " alt="Responsive image " style="width: 100px; height:100px; ">
        </div>
    </div>


    <br>

    <br>
    <form class="container" action="Coronavirus.php" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1" class="font-weight-bold">Enter Body Temperature : </label>
            <input type="number" name="temperature" class="form-control" id="exampleFormControlInput1" placeholder="In Fahrenheit (97°F) " required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1" class="font-weight-bold">Age : </label>
            <input type="number" name="age" class="form-control" id="exampleFormControlInput1" placeholder="" required>
        </div>

        <div class="row ">
            <div class="col-12 ele col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="form-check form-check-inline">
                    <label class="font-weight-bold">Cough : </label>
                </div>

                <div class="form-check form-check-inline x">
                    <input class="form-check-input " type="radio" name="cough" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cough" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
            <div class="col-12 ele col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="form-check form-check-inline ">
                    <label class="font-weight-bold">Cold : </label>
                </div>

                <div class="form-check form-check-inline y">
                    <input class="form-check-input" type="radio" name="cold" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cold" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
            <div class="col-12 ele col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="form-check form-check-inline">
                    <label class="font-weight-bold">Sore Throat : </label>
                </div>

                <div class="form-check form-check-inline z">
                    <input class="form-check-input" type="radio" name="sore_throat" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sore_throat" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row  justify-content-center align-items-center">
            <div class="col-12 ele col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="form-check form-check-inline">
                    <label class="font-weight-bold">Body Pain : </label>
                </div>

                <div class="form-check form-check-inline a">
                    <input class="form-check-input" type="radio" name="body_pain" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="body_pain" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
            <div class="col-12 ele col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="form-check form-check-inline">
                    <label class="font-weight-bold">Fatigue : </label>
                </div>

                <div class="form-check form-check-inline b">
                    <input class="form-check-input" type="radio" name="fatigue" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="fatigue" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
            <div class="col-12 ele col-xl-4">
                <div class="form-check form-check-inline ">
                    <label class="font-weight-bold">Headache : </label>
                </div>

                <div class="form-check form-check-inline c">
                    <input class="form-check-input" type="radio" name="headache" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="headache" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-12 ele justify-content-center mx-auto col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="form-check form-check-inline">
                    <label class="font-weight-bold">Diarrhea : </label>
                </div>

                <div class="form-check form-check-inline d">
                    <input class="form-check-input" type="radio" name="diarrhea" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="diarrhea" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
            <div class="col-12 ele justify-content-center mx-auto col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="form-check form-check-inline">
                    <label class="font-weight-bold">Difficulty in breathing : </label>
                </div>

                <div class="form-check form-check-inline e">
                    <input class="form-check-input" type="radio" name="difficult_breathing" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="difficult_breathing" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
        </div>
        <br><br>

        <div class="form-group">
            <label class="font-weight-bold">Have you travelled recently during past 14 days :</label>
            <select class="form-control custom-select" id="travelled14" name="travelled14" required>
                <option value=""></option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <br>

        <div class="form-group">
            <label class="font-weight-bold">Do you have a travel history to a COVID-19 INFECTED AREA :</label>
            <select class="form-control custom-select" id="travel_covid" name="travel_covid" required>
                <option value=""></option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <br>

        <div class="form-group">
            <label class="font-weight-bold">Do you have direct contact or is taking care of a positive COVID-19
                PATIENT :</label>
            <select class="form-control custom-select" id="covid_contact" name="covid_contact" required>
                <option value=""></option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <br><br>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
        </div>
    </form>
    <br><br>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous ">
    </script>
</body>

</html>


<?php


if (isset($_POST['submit'])) {

    $temperature = (float) $_POST["temperature"];
    $age = (int) $_POST["age"];
    $cough = (int) $_POST["cough"];
    $cold = (int) $_POST["cold"];

    $sore_throat = (int) $_POST["sore_throat"];
    $body_pain = (int) $_POST["body_pain"];
    $fatigue = (int) $_POST["fatigue"];
    $headache = (int) $_POST["headache"];

    $diarrhea = (int) $_POST["diarrhea"];
    $difficult_breathing = (int) $_POST["difficult_breathing"];
    $travelled14 = (int) $_POST["travelled14"];
    $travel_covid = (int) $_POST["travel_covid"];

    $covid_contact = (int) $_POST["covid_contact"];

    // $sym  = array($temperature, $age, $cough, $cold, $sore_throat, $body_pain, $fatigue, $headache, $diarrhea, $difficult_breathing, $travelled14, $travel_covid, $covid_contact);

    // echo $sym;
    $result = exec("python Model.py $temperature $age $cough $cold $sore_throat $body_pain $fatigue $headache $diarrhea $difficult_breathing $travelled14 $travel_covid $covid_contact");

    $result_array = json_decode($result);

    echo $result_array;

    if ($result_array == "Infected") {
        echo "<script>window.open('Infected.htm','_self')</script>";
    } else {
        echo "<script>window.open('NonInfected.htm','_self')</script>";
    }
    // foreach ($result_array as $row) {
    //     echo $row . "<br>";
    // }
}




?>