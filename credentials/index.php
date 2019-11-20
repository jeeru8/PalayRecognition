<?php include '_css.php'; ?>
<body class="login-page">
    <div class="login-box">
        <!-- LOGO TOP-->
        <?php include '_logo.php'; ?>
        <!-- END -->
        <div class="card">
            <div class="body">
                <?php include 'logreg_function.php'; ?>
                <form id="sign_in" method="POST">
                    <div class="msg">LOGIN DETAILS</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-blue waves-effect" type="submit" name="btn_login">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-12">
                            <!-- <label>Don't have an account?</label> <a href="sign-up.php">Create Account</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include '_js.php'; ?>

</body>