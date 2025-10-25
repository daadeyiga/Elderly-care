<?php
include "header.php";
?>
<!-- LOGIN FORM SECTION -->
<section class="login-form d-flex align-items-center">
    <div class="container">
        <div class="login-form-title text-center">
            <figure class="login-page-logo">
                <a class="navbar-brand mr-0 p-0" href="index.html"><img src="./assets/images/sencare-logo2.png" alt=""
                        class="img-fluid"></a>
            </figure>
            <h2>Welcome Back !</h2>
        </div>
        <div class="login-form-box">
            <div class="login-card">
                <form>
                    <div class="form-group">
                        <input class="input-field form-control" type="email" id="exampleInputEmail1" placeholder="Email"
                            required>
                    </div>
                    <div class="form-group">
                        <input class="input-field form-control" type="password" id="exampleInputPassword1"
                            placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary hover-effect">Login</button>
                    <div>
                        <label class="font-weight-normal mb-0" style="cursor: pointer;">
                            <input class="checkbox" type="checkbox" name="userRememberMe" required>
                            Remember me
                        </label>
                        <a href="#" class="forgot-password float-right">Lost Password?</a>
                    </div>
                </form>
            </div>
            <div class="join-now-outer text-center">
                <a href="signup.php">Join now, create your FREE account</a>
            </div>
        </div>
    </div>
</section>
<?php
include "footer.php";
?>