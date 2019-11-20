<?php include '_css.php'; ?>
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>RICE SYSTEM/b></a>
            <small>WELCOME TO RICE SYSTEM</small>
        </div>
        <div class="card">
            <div class="body">
                <?php include 'logreg_function.php'; ?>
                <form id="sign_in" method="POST" action="./">
                    <div class="msg">CHECKING ACCOUNT!</div>
                    <div class="input-group">
                        <?php if (isset($_SESSION['success'])) : ?>
                          <div class="error success" >
                            <h5>
                              <center>  
                                <?php 
                                  echo $_SESSION['success']; 
                                  unset($_SESSION['success']);
                                ?>
                               </center>
                            </h5>
                          </div>
                        <?php endif ?>
                        <!-- logged in user information -->
                        <?php  if (isset($_SESSION['fullname'])) : ?>
                          <h3 class="alert alert-info text-center">Name:&nbsp <?php echo $_SESSION['fullname']; ?></h3>
                        <?php endif ?>
                    </div>
                    <div class="row m-t-15">
                        <div class="col-xs-12">
                            <center>Click here to <a href="sign-out.php">SIGN IN!</a></center> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include '_js.php'; ?>
</body>