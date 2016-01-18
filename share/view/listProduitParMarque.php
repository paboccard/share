<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
</head>

<body>
    <div id="all">

        <?php include("header.php"); ?>

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Fnac : Appareil Photo</h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li><a href="entreprise.php">Fnac</a>
                            </li>
                            <li>Appareil Photo</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">


                    <!-- *** LEFT COLUMN ***
            _________________________________________________________ -->

                    <?php include("categorieProduit.php"); ?>

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
            _________________________________________________________ -->

                    <div class="col-sm-9">

                        <!--<h3>Appareil Photo</h3>-->
                    

                        <div class="row products">

                            <div class="col-md-4 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="detailProduct.php">
                                            <img src="../../img/produit/appareil_photo/app1.jpg" alt="" class="img-responsive image1">
                                        </a>
                                        <p class="buttons">
                                            <!--<a href="detailProduct.php" class="btn btn-default">View detail</a>
                                            <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
                                        </p> 
                                    </div>
                                    <div class="col-md-12 btn_produit">
                                        <a href="detailProduct.php" class="btn btn-default col-lg-12 col-md-12 col-xs-12">Détail</a>
                                        <a href="shop-basket.html" class="btn btn-template-main col-lg-12 col-md-12 col-xs-12"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                    </div>
                                    <!-- /.image -->
                                    <div class="text">
                                        <h3><a href="detailProduct.php">Fur coat with very but very very long name</a></h3>
                                        <p class="price" id="price">$143.00</p>
                                        
                                    </div>

                                    <!-- /.text -->
                                    <div class="ribbon pourcent" id="ribbon_produit" onmouseover="getPrixPourcentage()" onmouseout="getPourcentagePrix()">
                                        <div class="theribbon" id="pourcent_ribbon">12%</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon -->
                                </div>
                                <!-- /.product -->
                            </div>


                            <div class="col-md-4 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="shop-detail.html">
                                            <img src="../../img/produit/appareil_photo/app2.jpg" alt="" class="img-responsive image1">
                                        </a>
                                        
                                    </div>
                                    <div class="col-md-12 btn_produit">
                                        <a href="detailProduct.php" class="btn btn-default col-lg-12 col-md-12 col-xs-12">Détail</a>
                                        <a href="shop-basket.html" class="btn btn-template-main col-lg-12 col-md-12 col-xs-12"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                    </div>
                                    <!-- /.image -->
                                    <div class="text">
                                        <h3><a href="shop-detail.html">White Blouse Armani</a></h3>
                                        <p class="price"><del>$280</del> $179.00</p>
                                        
                                    </div>
                                    <!-- /.text -->

                                    <div class="ribbon pourcent">
                                        <div class="theribbon">16%</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon -->
                                </div>
                                <!-- /.product -->
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="shop-detail.html">
                                            <img src="../../img/produit/appareil_photo/app3.jpg" alt="" class="img-responsive image1">
                                        </a>
                                        
                                    </div>
                                    <div class="col-md-12 btn_produit">
                                        <a href="detailProduct.php" class="btn btn-default col-lg-12 col-md-12 col-xs-12">Détail</a>
                                        <a href="shop-basket.html" class="btn btn-template-main col-lg-12 col-md-12 col-xs-12"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                    </div>
                                    <!-- /.image -->
                                    <div class="text">
                                        <h3><a href="shop-detail.html">Black Blouse Versace</a></h3>
                                        <p class="price">$123.00</p>
                                        

                                    </div>
                                    <!-- /.text -->
                                    <div class="ribbon pourcent">
                                        <div class="theribbon">11%</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon -->
                                </div>
                                <!-- /.product -->
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="shop-detail.html">
                                            <img src="../../img/produit/appareil_photo/app4.jpg" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="col-md-12 btn_produit">
                                        <a href="detailProduct.php" class="btn btn-default col-lg-12 col-md-12 col-xs-12">Détail</a>
                                        <a href="shop-basket.html" class="btn btn-template-main col-lg-12 col-md-12 col-xs-12"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                    </div>
                                    <!-- /.image -->
                                    <div class="text">
                                        <h3><a href="shop-detail.html">Black Blouse Versace</a></h3>
                                        <p class="price">$205.00</p>
                                        

                                    </div>
                                    <!-- /.text -->
                                    <div class="ribbon pourcent">
                                        <div class="theribbon">12%</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon -->
                                </div>
                                <!-- /.product -->
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="shop-detail.html">
                                            <img src="../../img/produit/appareil_photo/app5.jpg" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="col-md-12 btn_produit">
                                        <a href="detailProduct.php" class="btn btn-default col-lg-12 col-md-12 col-xs-12">Détail</a>
                                        <a href="shop-basket.html" class="btn btn-template-main col-lg-12 col-md-12 col-xs-12"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                    </div>
                                    <!-- /.image -->
                                    <div class="text">
                                        <h3><a href="shop-detail.html">White Blouse Versace</a></h3>
                                        <p class="price">$145.00</p>
                                        

                                    </div>
                                    <!-- /.text -->

                                    <div class="ribbon pourcent">
                                        <div class="theribbon">12%</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon -->
                                </div>
                                <!-- /.product -->
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="shop-detail.html">
                                            <img src="../../img/produit/appareil_photo/app6.jpg" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="col-md-12 btn_produit">
                                        <a href="detailProduct.php" class="btn btn-default col-lg-12 col-md-12 col-xs-12">Détail</a>
                                        <a href="shop-basket.html" class="btn btn-template-main col-lg-12 col-md-12 col-xs-12"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                    </div>
                                    <!-- /.image -->
                                    <div class="text">
                                        <h3><a href="shop-detail.html">Fur coat</a></h3>
                                        <p class="price">$143.00</p>
                                        

                                    </div>
                                    <!-- /.text -->
                                    <div class="ribbon pourcent">
                                        <div class="theribbon">12%</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon -->
                                </div>
                                <!-- /.product -->
                            </div>
                            <!-- /.col-md-4 -->
                        </div>
                        <!-- /.products -->

                        <div class="pages">

                            <p class="loadMore">
                                <a href="#" class="btn btn-template-main"><i class="fa fa-chevron-down"></i> Load more</a>
                            </p>

                            <ul class="pagination">
                                <li><a href="#">&laquo;</a>
                                </li>
                                <li class="active"><a href="#">1</a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>
                                <li><a href="#">4</a>
                                </li>
                                <li><a href="#">5</a>
                                </li>
                                <li><a href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div>


                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

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