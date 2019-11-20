<?php include 'credentials/auth.php'; ?>
<?php include '_css.php'; ?>
<?php include 'custom-css.php'; ?>
<body class="theme-green">
    <!-- Page Loader -->
    <?php include '_loader.php'; ?>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <?php include '_topbar.php'; ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <?php include '_leftbar.php'; ?>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <?php include '_rightbar.php'; ?>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Text Styles -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SUCCESS MESSAGE
                            </h2>
                        </div>
                        <div class="body">
                            <?php include 'php-functions.php'; ?>
                            <form method="POST">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>SUCCESSFULLY UPLOAD IMAGE/PHOTO</h2>
                                            </div>
                                            <div class="body">
                                                <div class="row clearfix">
                                                    <div class="col-lg-12" align="center">
                                                        <button type="button" class="btn btn-block btn-lg bg-blue" onclick="move()" data-toggle="modal" data-target="#recognize">RECOGNIZE IMAGE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Text Styles -->
            <?php include 'modals.php'; ?>
        </div>
    </section>
    <?php include '_js.php'; ?>
</body>
<?php include 'custom-js.php'; ?>
