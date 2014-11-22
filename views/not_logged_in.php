<?php include('_header.php'); ?>

 <div class="col-sm-12" style="background: url(http://i.imgur.com/acJrpkt.jpg); background-size: cover; position: absolute; height: 100%; width:100%; background-position: center center;">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title text-center">Grocery Tracker</h1>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="index.php" name="loginform">
                            <div class="form-group">
                                <input id="user_name" class="form-control input-sm" type="text" name="user_name" placeholder="User Name" required />
                            </div>

                            <div class="form-group">
                                <input id="user_password" class="form-control input-sm" type="password" name="user_password" placeholder="Password" autocomplete="off" required />
                            </div>

                            <div class="form-group">
                                <input class="form-control input-sm" type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
                                <label for="user_rememberme"><?php echo WORDING_REMEMBER_ME; ?></label>
                            </div>
                            
                            <input class="btn btn-default" type="submit" name="login" value="<?php echo WORDING_LOGIN; ?>" />
                        </form>

                        <a href="register.php"><?php echo WORDING_REGISTER_NEW_ACCOUNT; ?></a>
						<a href="password_reset.php"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
