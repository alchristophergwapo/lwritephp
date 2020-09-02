@extends('layout.header')

@section('login')
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="https://www.brandcrowd.com/gallery/brands/pictures/picture15482692036942.jpg"
                        class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form action="{{ route('home') }}">
                @csrf
                    <div class="form-group mb-8">
                        <h3 class="login-message">Login Account</h3>
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username" id="username" class="form-control input_user" value=""
                            placeholder="Enter your username">
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control input_pass" value=""
                            placeholder="Enter your password">
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" name="button" class="btn login_btn">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('register')
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="https://www.brandcrowd.com/gallery/brands/pictures/picture15482692036942.jpg"
                        class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form action="">
                    <div class="form-row mb-3">
                        <div class="input-group col">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-info"></i></span>
                            </div>
                            <input type="text" class="form-control" id="fname" placeholder="Enter first name"
                                name="first_name">
                        </div>
                        <div class="input-group col">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-info"></i></span>
                            </div>
                            <input type="text" class="form-control" id="lname" placeholder="Enter last name"
                                name="last_name">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Enter your username">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                            name="password" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" id="pwd2" placeholder="Confirm password"
                            name="password2" required>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">I agree to the terms and
                                conditions</label>
                        </div>
                    </div>
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection