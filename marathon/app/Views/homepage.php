<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Marathon Master</title>
    <?php
        $err_css="";
        if(isset($load_error)) {
            $load_error = null;
            $err_css="alert alert-danger";
            echo "<script>document.location.href = '#login'</script>";
        }
    ?>
    <style>
        input{
            margin: 7px !important;
            padding: 7px;
        }
    </style>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav" href="#">Marathon Master</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#services">Services</a>
                </li>
                <li>
                    <a href="#login">Login</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<!-- Header -->
<a name="about"></a>
<div class="intro-header">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1>Marathon Master</h1>
                    <h3>Software that just runs!</h3>

                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.intro-header -->

<!-- Page Content -->

<a  name="services"></a>
<div class="content-section-a">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Sponsors<br>Special Thanks</h2>
                <p class="lead">A special thanks to <a target="_blank" href="https://endurance.biz/2025/industry-news/nike-and-sportsshoes-com-sponsor-runthroughs-2025-altrincham-10k/">Nike and SportsShoes.com </a> for providing the sport shoes that you see in this marathon.</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img class="img-responsive" src="img/sponsor-bg.jpg" alt="">
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.content-section-a -->

<div class="content-section-b">

    <div class="container">

        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">About the Marathon<br>by Nike and SportsShoes.com</h2>
                <p class="lead">The ‘Nike Altrincham 10K Presented by SportsShoes.com’ will see 3,500 runners take on a closed-road course through the Cheshire town centre in North West England. <a target="_blank" href="https://www.altrincham10k.com/">Altrincham10k</a>! Visit their website to find more about the marathon!.</p>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                <img class="img-responsive" src="img/logo-bg.png" alt="">
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.content-section-b -->

<div class="content-section-a">

    <div class="container">
        <div class="row">

        </div>
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Run for Charity<br>The first of its kind</h2>
                <p class="lead">Chosen for its historical market town setting, don’t miss out on the chance to be a part of the first ever RunThrough event in Altrincham. <a target="_blank" href="https://www.altrincham10k.com/why-you-should-run/"></a>.</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img class="img-responsive" src="img/Gardens-bg.jpg" alt="">
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<a  name="login"></a>
<div class="content-section-a">

    <div class="container">
        <div class="row">
            <div class=" col-sm-12<?=$err_css?>">
                <?php
                $validation = service('validation');
                if($validation->hasError('username')){
                    echo $validation->getError('username'). "<br/>";
                }
                if($validation->hasError('password')){
                    echo $validation->getError('password'). "<br/>";
                }
                if(isset($error_message)){
                    echo $error_message;
                }

                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class=" col-sm-2"></div>
        <div class=" col-sm-5">
            <h2>Login</h2>
                <?php
                echo form_open('http://10.7.66.166/marathon/public/login');
                echo form_input('username','','placeholder="Enter Username"'). "<br>";
                echo form_password('password','','placeholder="Enter Password"'). "<br>";
                echo form_submit('submit','Login');
                echo form_close();
                ?>
            </div>
            <div class=" col-sm-5">
                <h2>Create Account</h2>
                <?php
                echo form_open('http://10.7.66.166/marathon/public/create');
                echo form_input('username','','placeholder="Enter Username"'). "<br>";
                echo form_password('password','','placeholder="Enter Password"'). "<br>";
                echo form_password('password2','','placeholder="Retype Password"'). "<br>";
                echo form_input('email','','placeholder="Enter Email"'). "<br>";
                echo form_submit('submit','Create Account');
                echo form_close();
                ?>
            </div>
            <div class=" col-sm-1"></div>
        </div>

    </div>
    <!-- /.container -->
<!-- /.content-section-a -->

<a  name="contact"></a>
<div class="banner">

    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h2>Marathon Master</h2>
            </div>

        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.banner -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
                <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
