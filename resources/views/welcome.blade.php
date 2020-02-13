@extends('layout.header')

@section('login')
<div class="row">
    <div class="col-md-6" style="background-image:url('/images/image.jpg');height:100vh">
    </div>
    <div class="col-md-6">
        <center>
            <div class="login-header-message">
                <h4>Login Account</h4>
            </div>
            <div>
                <i class='fas fa-user-check'></i>
            </div>
        </center>
        <form action="">
            <div class="form-group">
                <label for="uname">Username:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password"
                    required>
            </div>
            <div class="form-group float-right">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('register')
<div class="row">
    <div class="col-md-6" style="background-image:url('/images/image.jpg');height:100vh">
    </div>
    <div class="col-md-6">
        <center>
            <div class="login-header-message">
                <h4>Register New Account</h4>
            </div>
            <div>
                <i class='fas fa-user-plus'></i>
            </div>
        </center>
        <form action="">
            <div class="form-row">
                <div class="col">
                    <label for="first_name">First name</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="first_name">
                </div>
                <div class="col">
                    <label for="last_name">Last name</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="last_name">
                </div>
            </div>
            <div>Address :</div>
            <div class="form-row">
                <div class="col-7">
                    <input type="text" class="form-control" placeholder="City">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="State">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Zip">
                </div>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password"
                    required>
            </div>
            <div class="form-group">
                <label for="pwd">Confirm Password:</label>
                <input type="password" class="form-control" id="pwd2" placeholder="Confirm password" name="password2"
                    required>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> I agree on
                    terms and conditions.
                </label>
            </div>
            <div class="form-group float-right">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection