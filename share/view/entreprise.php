<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
</head>

<body>
    <div id="all">

        <?php include("header.php"); ?>

        <section class="bar background-image-fixed-2 no-mb">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">

                    <div class="item catEntreprise">
                        <div class="col-md-3">
                            <div class="panel-group accordion" id="accordionOne">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordionOne" href="#collapse1a">
                                                Electronique
                                                <i class="fa fa-chevron-down pull-right"></i>
                                            </a>

                                        </h4>
                                    </div>
                                    <div id="collapse1a" class="panel-collapse collapse">
                                        <ul>
                                            <li><a class="li_hover" href="listProduitParMarque.php">Appareil Photo</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                            <a data-toggle="collapse" data-parent="#accordionOne" href="#collapse1b">
                                                Cuisine
                                                <i class="fa fa-chevron-down pull-right"></i>
                                            </a>

                                        </h4>
                                    </div>
                                    <div id="collapse1b" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordionOne" href="#collapse1c">
                                                Livre
                                                <i class="fa fa-chevron-down pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse1c" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!--<div class="col-sm-5 right">
                                    <ul class="list-style-none list_categorie">
                                        <li><a class="li_hover" href="listProduitParMarque.php">Appareil Photo</a></li>
                                        <li><a class="li_hover" href="#">Ordinateur</a></li>
                                        <li><a class="li_hover" href="#">Livre</a></li>
                                        <li><a class="li_hover" href="#">Télévision</a></li>
                                    </ul>
                                </div>-->
                            </div>
                            <div class="">
                                <div class="same-height-row">
                                    <div class="col-md-offset-5 col-md-4">
                                        <div class="box-simple box-blue same-height">
                                            <div class="icon">
                                                <i class="fa fa-info-circle"></i>
                                            </div>
                                            <h3>Pourcentage moyen : 20%</h3>
                                            <h3>272€ récoltés</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-8">
                                <div class="text-center">
                                    <div class="icon icon-lg"><i class="fa fa-file-code-o"></i>
                                    </div>
                                    <h3>Pourcentage moyen : 20%</h3>
                                    <h3>272€ récoltés</h3></br></br>
                                </div>
                            </div>-->
                        <!--<p class="text-center">
                            <a href="#" class="btn btn-template-transparent-black btn-lg">Voir les produits</a>
                        </p>-->

                    </div>

                </div>
            </div>
        </section>

    </div>
    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="../../js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="../../js/jquery.cookie.js"></script>
    <script src="../../js/waypoints.min.js"></script>
    <script src="../../js/jquery.counterup.min.js"></script>
    <script src="../../js/jquery.parallax-1.1.3.js"></script>
    <script src="../../js/front.js"></script>
    <script src="../../js/custom.js"></script>
</body>
</html>