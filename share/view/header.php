<header>

    <!-- *** TOP ***
_________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="row">
                
                <div class="col-xs-7 pull-right">
                    <div class="login">
                        <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                        <a href="customer-register.html"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
                        <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-shopping-cart"></i></a>
                        <a href="panier.php">Panier</a>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- *** TOP END *** -->

    <!-- *** NAVBAR ***
_________________________________________________________ -->

    <div class="navbar-affixed-top" data-spy="affix" data-offset-top="100">

        <div class="navbar navbar-default yamm" role="navigation" id="navbar">

            <div class="container">
                <div class="navbar-header">

                    <a class="navbar-brand home" href="index.php">
                        <img src="../../img/logo.png" alt="Universal logo" class="hidden-xs hidden-sm">
                        <img src="../../img/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
                    </a>

                    <div class="col-lg-offset-2 col-md-offset-2 col-lg-6 col-md-6 col-xs-7 search_bar">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Informatique</a></li>
                                    <li><a href="#">Electroménager</a></li>
                                    <li><a href="#">Bien-être</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <input type="text" class="form-control" aria-label="...">
                            <span class="input-group-addon">
                                <div class="glyphicon glyphicon-search"></div>
                            </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->

                    <div class="navbar-buttons">
                        <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                    </div>
                </div>
                <!--/.navbar-header -->

                <div class="navbar-collapse collapse" id="navigation">


                </div>
                <!--/.nav-collapse -->



                <div class="collapse clearfix" id="search">

                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">

            <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

        </span>
                        </div>
                    </form>

                </div>
                <!--/.nav-collapse -->

            </div>


        </div>
        <!-- /#navbar -->

    </div>

    <!-- *** NAVBAR END *** -->

</header>

<!-- *** LOGIN MODAL ***
_________________________________________________________ -->

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="Login">Customer login</h4>
            </div>
            <div class="modal-body">
                <form action="customer-orders.html" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email_modal" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password_modal" placeholder="password">
                    </div>

                    <p class="text-center">
                        <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                    </p>

                </form>

                <p class="text-center text-muted">Not registered yet?</p>
                <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

            </div>
        </div>
    </div>
</div>