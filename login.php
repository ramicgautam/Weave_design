<?php
session_start();
if (isset($_SESSION['loginuser'])) {
    //user is already logged in, redirect
    header('Location: account.php');
}
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login | OPAIC</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap_min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/stylee.css">
    <style type="text/css">
        .log_content{
            border-bottom:2px solid rgba(27, 172, 219, 1);
            background:rgba(240, 242, 243, 6);
            padding: 0 10px 10px;
            margin-top:50px;
            border-radius: 10px 10px 0 0;
            overflow: hidden;
            box-shadow: 0 0 5px #333;
        }
        .log_content form h3{
            color: #231f1f;
            text-align: center;
            border-bottom:2px solid rgba(27, 172, 219, 1);
            font-size: 24px;
        }
        #header {
            padding-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
           <!--  <div class="col-md-6 col-lg-6">
                <img src="images/illustration.png" style="width: 770px; height: 100%;">
            </div>
            --> <div id="header" class="col-md-4 col-md-offset-7 col-lg-4 col-lg-offset-7">
                <img src="images/logo.png">
            </div>
            <div class="col-lg-4 col-lg-offset-7 col-md-6 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 log_content">
                <form role="form" action="asset/validate.php" method="POST">
                    <strong><h3>Sign In</h3></strong>
                     <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="************">
                                    </div>

                    <input type="submit" name="submit" value="Log In" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
                    <a href="index.html">
                        <input value="cancel" class="btn btn-danger cancel" data-action="cancel" type="button">
                    </a>
                <span style="color: red;"><?php echo isset($_SESSION['error']) ? $_SESSION['error'] : ""; ?></span>
                </form>
                 </div>
                 </form>
          </div>
                  </br></br>
                      <div class="col-md-4 col-md-offset-7">
                </br>
                <b> If you need any assistance</b>
                <ul style="margin: 10px 0 10px 20px">  <li>0800 POLY IT (0800 765948)</li>  <li><a href="mailto:servicedesk@op.ac.nz">servicedesk@op.ac.nz</a></li></ul>
                </div>
    </div>
</body>
</html>