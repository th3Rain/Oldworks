<?php
include 'include.php';

$username = $_POST['email'];
$password = $_POST['password'];

if(($username = "ADMIN001") and ($password = "ADMINBOSS")){
    $username = $password = "";
    header("location:adminPage.php");

}else{
    echo "<script type='text/javascript'>";
    echo "deletePost();";
    echo "</script>";
}
?>
<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <script>
   function deletePost() {
        
 var r = confirm("Incorrect Login... Retry?");
if (r == true) {
   document.location.href = "login.php";
} else {
     document.location.href = "../index.php";
}
    }

    
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>R.M.S  solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="accept-language" content="en-GB">

    <link rel="shortcut icon" href="../favicon.png">

    <link href="../Content/cssf050.css?v=lt9V9ko7kzKiVa3z1HdOHJf9hnt869Evt6GlSMGxxvc1" rel="stylesheet"/>

    <script src="../bundles/modernizr43eb?v=qVODBytEBVVePTNtSFXgRX0NCEjh9U_Oj8ePaSiRcGg1"></script>



    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Rambla|Calligraffitti' rel='stylesheet' type='text/css'>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="/js/html5shim.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
      <script src="/js/json2.js"></script>
    <![endif]-->
    



    <!--Scripts -->
    <script src="../bundles/jquery5ff6?v=673UEdByINoovgH_eKsiA4BMbLsnSrAtc9DxPkJUlwI1"></script>

    <script src="../bundles/jqueryvala58a?v=2ghtVqCM8JIEPGxCuZopth4zGa5gMbhnh7aDTCdn_Mw1"></script>

    <script src="../bundles/bootstrap23d7?v=kx_A1Ws6D65L6ZTMVn7LQrseX7kFhwEYj3RpyB51vvk1"></script>


    <script type="text/javascript">

        $(function () {


            resizeWindow();
            $(window).resize(resizeWindow);



        });



        function resizeWindow() {

            var winHeight = $(document).height();

            var otherHeight = 275;


            // $('#myContainer').height(winHeight - otherHeight);
            $('#content').css("min-height", (winHeight - otherHeight));
        }


    </script>

    

</head>

<body class="page">
    <div id="navigation" class="wrapper">
        <div class="navbar  navbar-static-top">


<div class="header">
                <div class="header-inner container">
                    <div class="row-fluid">
                        <div class="span7">
                            <!--branding/logo-->
                            <a class="brand" href="index.php" title="Home">
                                <h1>
                                    <img src="img/rms_logo.png" />
                                </h1>
                            </a>
                            <div class="slogan hidden-tablet hidden-phone">RMS JOB <small><sub><i>SOLUTIONS.</i></sub></small></div>
                        </div>

                        
                        <!--header rightside-->
                        <div class="span5">


                            <!--social media icons-->
                            <div class="social-media pull-right hidden-phone">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="navbar-inner">

                    <!--mobile collapse menu button-->
                    <a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>

                    <!--user menu-->
                    <ul class="nav user-menu pull-right">
                            <li><a href="register.php" class="btn btn-success signup">Register</a></li>
                            <li class="dropdown">
                                <a href="login.php" class="btn btn-success dropdown-toggle login" id="login-drop" data-toggle="dropdown">Login</a>
                                <div class="dropdown-menu" role="menu" aria-labelledby="login-drop">
                                    <form action="login.php" method="POST" class="form-inline" id="login-form-drop" role="menuitem">
                                        <input name="__RequestVerificationToken" type="hidden" value="jVKPc9n7qY3dU1uMklVEnHKZjXWIxODR-WA2xFmmeN0RKY9gfutsO6dWPD14fOuSOobUvHcnjwqFPsoP_zS4KBMTWZCwoglN9PZJ_I8aQPU1" />
                                        <div class="input-append">
                                            <input class="input-small email" id="email" name="email" placeholder="Email" type="text" value="" />
                                            <input class="input-small password" id="password" name="password" placeholder="Password" type="password" />
                                            <input type="submit" class="btn btn-success login" value="Login">
                                        </div>
                                    </form>
                                    <span class="divider" role="menuitem"></span><small role="menuitem">Not yet registered? <a href="register.php" class="signup">Register now!</a></small> <small role="menuitem"><a href="recover.php">Forgotten password?</a></small>
                                </div>
                            </li>
                    </ul>

                    <!--everything within this div is collapsed on mobile-->
                    <div class="nav-collapse collapse">

                        <!--main navigation-->
                        <ul class="nav" id="main-menu">
                            <li class="home-link"><a href="../index.php"><i class="icon-home hidden-phone"></i><span class="visible-phone">Home</span></a></li>

                            <li><a href="../index.php" class="menu-item">Home Page</a></li>
                            <li><a href="../about.html" class="menu-item">About</a></li>
                            <li><a href="../faq.html" class="menu-item">FAQ</a></li>
                            <li><a href="../contact.html" class="menu-item">Contact us</a></li>

                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="form-wrapper" style="max-width: 1125px; min-height: 500px;">
                

<h3 class="title-divider" style="margin-bottom: 10px;"><span>Login</span></h3>
<small class="lead" style="display: block; color: rgba(51, 51, 51, 0.60);">Provide your login details.</small>



<form action="login.php" class="form-medium form-horizontal" method="post" style="max-width: 1125px; min-height: 500px;"><input name="__RequestVerificationToken" type="hidden" value="dIMsjrRH3tbA64vGxTg13V0pvvNalcZyI4p9w_WZCa7-NS-jUT-n_SaNOaA8-yKnfVolpxuS5NCDrpPJ3zSncS1GrlU9vjR_sGAG8la1S4Q1" />    <div class="control-group">

        <label class="control-label" for="Username">Email</label>
        <div class="controls">
            <input id="email" name="email" type="email" value="" />
            <span class="field-validation-valid help-inline error" data-valmsg-for="Username" data-valmsg-replace="true"></span>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="Pwd">Password</label>
        <div class="controls">
            <input id="password" name="password" type="password" />
            <span class="field-validation-valid help-inline error" data-valmsg-for="Pwd" data-valmsg-replace="true"></span>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button class="btn btn-success" type="submit">Login</button>

        </div>

    </div>
</form>



            </div>
        </div>
    </div>
    <div id="content-below" class="wrapper">
        <div class="container">
            <div class="row-fluid">
            </div>
        </div>
    </div>

<!-- FOOTER -->
    <footer id="footer" style="padding-bottom: 5px; padding-top: 5px;">
        <div class="container">

            <div class="row-fluid">

                <div class="subfooter" style="padding-bottom: 5px; padding-top: 5px;">
                    <div class="span8">
                        <p>Copyright 2017 &copy; RMS <small>solutions.</small> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://www.facebook.com/oyeyemi.gabriel1" target="_blank" style="text-decoration: underline">Oyeyemi Gabriel</a></p>
                    </div>
                    <div class="span4">
                        <ul class="inline pull-right">
                            <li><a href="terms.html">Terms</a></li>
                            <li><a href="privacy.html">Privacy</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>


</html>

