<template>
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
</template>
<script>
export default {
    mounted() {
        console.log("Login mounted")
    }
}
</script>