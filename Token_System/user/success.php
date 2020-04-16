<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUCCESS</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="#">Impulse</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url_for('Homepage') }}">Home <span
                            class=" sr-only">(current)</span></a>
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
    <br>

    <div class="container mr-5">
    <div class="row text-center">
        <div class="col-sm-6 col-sm-offset-5">
        <br><br> <h2 style="color:#0fad00">Thank You!</h2>
        
        <h3></h3>
        <p style="font-size:20px;color:#5C5C5C;">We have sent you an email  with your QrCode <br> Please go to your above profile to check</p>
        <a href="profile.html" class="btn btn-success">     Go To Profile      </a>
    <br><br>
        </div>
        
    </div>
</div>
<style >
    .container{
        position: absolute;
        left: 500px;
    }
    @media screen and (max-width: 400px) {
  body {
    background-color: lightgreen;
  }
}

</style>
</body>
</html>