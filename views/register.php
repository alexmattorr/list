<?php include('_header.php'); ?>

<!-- show registration form, but only if we didn't submit already -->
<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>

 <div class="col-sm-12" style="background: url(http://i.imgur.com/acJrpkt.jpg); background-size: cover; position: absolute; height: 100%; width:100%; background-position: center center;">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title text-center">Grocery Tracker</h1>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="register.php" name="registerform">
                            <div class="form-group">
                                <input id="user_name" placeholder="Username" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
                            </div>

                            <div class="form-group">
                                <input id="user_email" placeholder="Email" class="form-control" type="email" name="user_email" required />
                            </div>

                            <div class="form-group">
                                <input id="user_password_new" placeholder="Password" class="form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
                            </div>


                            <div class="form-group">
                                <input id="user_password_repeat" placeholder="Password Repeat" class="form-control" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
                            </div>

                            <img src="tools/showCaptcha.php" alt="captcha" />

                            <input class="form-control" type="text" name="captcha" required />
                            <input class="form-control" type="submit" name="register" value="<?php echo WORDING_REGISTER; ?>" />
                        </form>

                        <a href="index.php"><?php echo WORDING_BACK_TO_LOGIN; ?></a>

                    </div>
                </div>
            </div>
        </div>
    </div>


<?php } ?>

    <a href="index.php"><?php echo WORDING_BACK_TO_LOGIN; ?></a>





<style>

.centered-form {
    margin-top: 120px;
    margin-bottom: 120px;
}

.centered-form .panel {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}

</style>




<?php include('_footer.php'); ?>
