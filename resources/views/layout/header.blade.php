<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lwrite</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #4CAF50;
        color: white;
    }

    .topnav-right {
        float: right;
    }

    img {
        height: 100%;
        width: 100wh;
    }

    .tab-content {
        margin-top: 28px;
    }

    .form-group {
        margin-left: 0;
        margin-right: 10px;
    }

    .form-control {
        padding: .375rem .75rem;
    }

    .login-header-message {
        margin-top: 20px;
    }

    i {
        font-size: 36px;
        color: #007bff;
        margin: 20px
    }
    </style>
</head>

<body>
    <div class="topnav navbar-expand-sm navbar-light bg-dark fixed-top">
        <a class="navbar-brand bg-success" href="#home">LWrite</a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="topnav-right collapse navbar-collapse" id="navigation">
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#register">Register</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" style="position:relative">
        <div id="login" class="tab-pane active"><br>
            @yield('login')
        </div>
        <div id="register" class="tab-pane fade"><br>
            @yield('register')
        </div>
    </div>
    </div>
</body>

</html>