<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Furniture Store</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- theme stylesheet -->
    <link href="css/style.blue.css" rel="stylesheet" id="theme-stylesheet">
    <!-- stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.min.js"></script>
    <link rel="shortcut icon" href="favicon.png">
</head>
<body>
    <!-- *** TOPBAR ***-->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php" >Login</a></li>
                    <li><a href="login.php">Register</a></li>
                    <li><a href="#">Recently viewed</a></li>
                    <li><a href="admin/">Admin</a></li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password" name="pass">
                            </div>
                            <p class="text-center">
                                <button class="btn btn-primary" name="login"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>
                        </form>
                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** TOP BAR END *** -->
    <!-- *** NAVBAR ***-->
    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                    <span class="sr-only">Vumbua Interiors</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.php">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->
            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li class=""><a href="all_product.php">Shop</a></li>
                    <li class=""><a href="contact.php">Contact US</a></li>
                    <li>
                        <a href="customer-account.php">My Account</a></li>
                        <li><a href="admin/">Admin</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
            <div class="navbar-buttons">
                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="cart.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Cart</span></a>
                </div>
                <!--/.nav-collapse -->
                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="collapse clearfix" id="search">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn"><button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button></span>
                    </div>
                </form>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->
    <!-- *** NAVBAR END *** -->
