<?php
session_start();
if (!isset($_SESSION['loginuser'])) {
    //user is not logged in, redirect
    header('Location: login.php');
}
// $id = $_SESSION['id'];
// $post = $_SESSION['role'];
?> 
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Home</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap_min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sidebar.css" rel="stylesheet">
        <link href="css/dashboard-new.css" rel="stylesheet">
        <link href="css/marka.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            User Info
                        </a>
                    </li>
                    <li>
                        <a href="account.php" class="active">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Files</a>
                        <ul class="subMenu">
                            <li><a href="view_files.html"><span class="glyphicon glyphicon-file"></span>View File</a></li>
                            <li><a href="upload.html"><span class="glyphicon glyphicon-share"></span>Upload File</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="navbar navbar-default navbar-absolute" role="navigation">
                    <span class="menuHolder">
                        <a href="#" id="menu-toggle">Menu</a>
                    </span>
                    <div class="nav-header">
                        <a href="#" class="navbar-brand"><strong>OPAIC </strong></a>
                        <ul class="navbar-text list-inline pull-right">
                            <li><a href="#" title="Notifications"><span class="glyphicon glyphicon-bell"></span></a></li>
                            <li class="user"><a href="#">
                                    <?php echo ucfirst($_SESSION['loginuser']); ?>

                                </a>
                                <ul id="userAction" class="hide">
                                    <li><a href="account.php">Account</a></li>
                                  <!--   <?php
                                    if ($post == admin) {
                                        echo '<li><a href="admin.php">Admin</a></li>';
                                    }
                                    ?> -->
                                    <li>
                                        <a href="asset/logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container-fluid" style="margin-top:40px;">
                    <h1>Account Information</h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="abc">

                            </div>
                            <form role="form" class="col-sm-7 form-inline">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control"
                                           value="<?php echo $_SESSION['loginuser']; ?>">
                                </div>
                                <input type="button" value="Change" class="btn btn-primary btn-sm" onclick="changeUsername()">
                            </form>
                             </br>
                            <form role="form" class="col-sm-7 form-horizontal">
                                <legend>Update Password</legend>
                                <div class="form-group">
                                    <label for="pass1">Current Password</label>
                                    <input type="password" name="password[]" id="pass1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="pass2">New Password</label>
                                    <input type="password" name="password[]" id="pass2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="pass3">Confirm Password</label>
                                    <input type="password" name="password[]" id="pass3" class="form-control">
                                </div>
                                <input type="button" value="Change" class="btn btn-primary" onclick="changePassword()">
                            </form>


                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery Version 1.11.0 -->
        <script src="js/jquery.min.js"></script>
        <script src="js/marka.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/myScript.js"></script>
        <script src="js/account.js"></script>
        <script src="js/clock.js"></script>
    </body>

</html>
