<?php
include "header.php";
?>
<!-- SIGN UP FORM SECTION -->
<section class="login-form sign-up-form d-flex align-items-center">
    <div class="container">
        <div class="login-form-title text-center">
            <figure class="login-page-logo">
                <a class="navbar-brand mr-0 p-0" href="index.html"><img src="./assets/images/sencare-logo2.png" alt=""
                        class="img-fluid"></a>
            </figure>
            <h2>Create Your FREE Account</h2>
        </div>
        <div class="login-form-box">
            <div class="login-card">
                <form>
                    <div class="form-group">
                        <input class="input-field form-control" type="text" id="exampleInputName1" placeholder="Name"
                            required>
                    </div>
                    <div class="form-group">
                        <input class="input-field form-control" type="email" id="exampleInputEmail1" placeholder="Email"
                            required>
                    </div>
                    <div class="form-group">
                        <input class="input-field form-control" type="password" id="exampleInputPassword1"
                            placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <select id="inputNoncorehub" class="input-field form-control select-option">
                            <option selected>Please, choose the first interaction you remember.</option>
                            <option value="online_community">Online community (e.g. GitHub, Reddit, Stack Overflow,
                                Hacker News, ...)</option>
                            <option value="article">Website article, blog (not ours)</option>
                            <option value="review_sites">Review site (e.g. G2, Capterra, ...)</option>
                            <option value="search">Search engine (e.g. Google, Bing, ...)</option>
                            <option value="mobile_app">App store listing (App Store, Google Play)</option>
                            <option value="social">Social media (e.g. Twitter / Quora / Facebook / LinkedIn...)</option>
                            <option value="youtube">YouTube</option>
                            <option value="friend">From a friend, colleague, ...</option>
                            <option value="message_groups">Message group (e.g. Discord, Slack, Telegram, ...)</option>
                            <option value="events">Event (e.g. workshop, conference or meet up)</option>
                            <option value="podcast">Podcast</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-weight-normal mb-md-4 mb-3" style="cursor: pointer;">
                            <input class="checkbox" type="checkbox">
                            Inform me about new features and updates (max. twice a month)
                        </label>
                    </div>
                    <button type="submit" class="hover-effect btn btn-primary mb-0">Register Now</button>
                </form>
            </div>
            <div class="join-now-outer text-center">
                <a href="login.php">Already have an account?</a>
            </div>
        </div>
    </div>
</section>
<?php
include "footer.php";
?>