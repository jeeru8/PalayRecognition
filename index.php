<?php include 'credentials/auth.php'; ?>
<?php include '_css.php'; ?>

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
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <?php include 'widgets.php'; ?>
            <!-- #END# Widgets -->

            <?php include 'modals.php'; ?>
        </div>
    </section>

    <?php include '_js.php'; ?>
</body>
