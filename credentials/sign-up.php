<?php include '_css.php'; ?>
<body class="signup-page">
    <div class="signup-box">
        <!-- LOGO TOP-->
        <?php include '_logo.php'; ?>
        <!-- END -->
        <div class="card">
            <div class="body">
                <?php include 'logreg_function.php'; ?>
                <form id="sign_up" method="POST">
                    <input type="hidden" name="group_id" value="1">
                    <div class="msg">Account Details</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="firstname" placeholder="First Name" required autofocus>
                        </div>
                        <span class="input-group-addon">
                            <i class="material-icons"></i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">contacts</i>
                        </span>
                        <div class="form-line">
                            <input type="number" class="form-control" name="contact" placeholder="Mobile Number (09)" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "11" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">directions_car</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="vehicle_type" placeholder="Vehicle Type" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">directions_car</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="plate_no" placeholder="Plate Number" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" id="pass1" onkeyup="checkPass(); return false;" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirmpassword" minlength="6" placeholder="Confirm Password" id="pass2" onkeyup="checkPass(); return false;" required>
                        </div>
                    </div>
                    <div class="form-group">
                      <center><div id="error-nwl"></div></center>
                    </div>

                    <button class="btn btn-block btn-lg bg-blue waves-effect" type="submit" name="btn_submit">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="sign-in.html">Already have an account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include '_js.php'; ?>

</body>