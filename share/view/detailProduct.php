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
                        <h1>White Blouse Armani</h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a>
                            </li>
                            <li><a href="entreprise.php">Fnac</a>
                            </li>
                            <li><a href="listProduitParMarque.php">Appareil Photos</a>
                            </li>
                            <li>White Blouse Armani</li>
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

                    <div class="col-md-12">


                        <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Scroll to product details, material & care and sizing</a>
                        </p>

                        <div class="row" id="productMain">
                            <div class="col-sm-6">
                                <div id="mainImage">
                                    <img src="../../img/produit/appareil_photo/app1.jpg" alt="" class="img-responsive">
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="box">

                                    <form>
                                        <div class="sizes">

                                            <h4>Available sizes</h4>

                                            <label for="size_s">
                                                <a href="#">S</a>
                                                <input type="radio" id="size_s" name="size" value="s" class="size-input">
                                            </label>
                                            <label for="size_m">
                                                <a href="#">M</a>
                                                <input type="radio" id="size_m" name="size" value="m" class="size-input">
                                            </label>
                                            <label for="size_l">
                                                <a href="#">L</a>
                                                <input type="radio" id="size_l" name="size" value="l" class="size-input">
                                            </label>

                                        </div>

                                        <p class="price">
                                            <span>Prix : <span class="nb_price">143.00€</span> <a class="texte_complementaire" href="explicationRemboursement.php"> 10€ remboursés</a></span>
                                        </br>
                                        <span>Don réalisé : <span class="nb_price">17,16€</span></span>
                                    </p>

                                    <div class="box">
                                        <p class="">
                                            <div class="dropdown">
                                                Quantité : 
                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    1
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu liste_deroulante" aria-labelledby="dropdownMenu2">
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#">6</a></li>
                                                    <li><a href="#">7</a></li>
                                                    <li><a href="#">8</a></li>
                                                    <li><a href="#">9</a></li>
                                                    <li><a href="#">10</a></li>
                                                    <li><a href="#">11</a></li>
                                                    <li><a href="#">12</a></li>
                                                </ul>
                                            </div>
                                        </p>
                                        <p class="">
                                           <div class="dropdown">
                                            Choisir une association :
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Téléthon
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu liste_deroulante" aria-labelledby="dropdownMenu1">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Art and Design</a></li>
                                                <li><a href="#">Drama</a></li>
                                                <li><a href="#">Music</a></li>
                                                <li><a href="#">Physics</a></li>
                                                <li><a href="#">Chemistry</a></li>
                                                <li><a href="#">Biology</a></li>
                                                <li><a href="#">Home economics</a></li>
                                                <li><a href="#">Physical Education</a></li>
                                                <li><a href="#">Computing Science</a></li>
                                                <li><a href="#">French</a></li>
                                                <li><a href="#">German</a></li>
                                                <li><a href="#">Mandarin</a></li>
                                                <li><a href="#">Religious Education</a></li>
                                                <li><a href="#">Modern Studies</a></li>
                                                <li><a href="#">Geography</a></li>
                                                <li><a href="#">History</a></li>
                                                <li><a href="#">Creative computing</a></li>
                                                <li><a href="#">Craft, Design and Technology</a></li>
                                            </ul>
                                        </div>
                                    </p>
                                </div>
                                <p class="">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
                                    <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i>
                                    </button>
                                </p>

                            </form>
                        </div>

                        <div class="row" id="thumbs">
                            <div class="col-xs-4">
                                <a href="../../img/produit/appareil_photo/app1.jpg" class="thumb">
                                    <img src="../../img/produit/appareil_photo/app1.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="../../img/produit/appareil_photo/app2.jpg" class="thumb">
                                    <img src="../../img/produit/appareil_photo/app2.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="../../img/produit/appareil_photo/app5.jpg" class="thumb">
                                    <img src="../../img/produit/appareil_photo/app5.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="box" id="details">
                    <p>
                        <h4>Product details</h4>
                        <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
                        <h4>Material & care</h4>
                        <ul>
                            <li>Polyester</li>
                            <li>Machine wash</li>
                        </ul>
                        <h4>Size & Fit</h4>
                        <ul>
                            <li>Regular fit</li>
                            <li>The model (height 5'8" and chest 33") is wearing a size S</li>
                        </ul>

                        <blockquote>
                            <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em>
                            </p>
                        </blockquote>
                    </div>

                    <div class="box social" id="product-social">
                        <h4>Show it to your friends</h4>
                        <p>
                            <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box text-uppercase">
                                <h3>You may also like these products</h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="product">
                                <div class="image">
                                    <a href="shop-detail.html">
                                        <img src="../../img/product1.jpg" alt="" class="img-responsive image1">
                                    </a>
                                    <p class="buttons">
                                        <a href="detailProduct.php" class="btn btn-default">View detail</a>
                                        <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.image -->
                                <div class="text">
                                    <h3><a href="shop-detail.html">Fur coat with very but very very long name</a></h3>
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

                        <div class="col-md-3 col-sm-6">
                            <div class="product">
                                <div class="image">
                                    <a href="#">
                                        <img src="../../img/product3.jpg" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <div class="text">
                                    <h3>Fur coat</h3>
                                    <p class="price">$143</p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="product">
                                <div class="image">
                                    <a href="#">
                                        <img src="../../img/product1.jpg" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <div class="text">
                                    <h3>Fur coat</h3>
                                    <p class="price">$143</p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box text-uppercase">
                                <h3>Products viewed recently</h3>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div class="product">
                                <div class="image">
                                    <a href="#">
                                        <img src="../../img/product3.jpg" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <div class="text">
                                    <h3>Fur coat</h3>
                                    <p class="price">$143</p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="product">
                                <div class="image">
                                    <a href="#">
                                        <img src="../../img/product1.jpg" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <div class="text">
                                    <h3>Fur coat</h3>
                                    <p class="price">$143</p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div class="product">
                                <div class="image">
                                    <a href="#">
                                        <img src="../../img/product2.jpg" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <div class="text">
                                    <h3>Fur coat</h3>
                                    <p class="price">$143</p>

                                </div>
                            </div>
                            <!-- /.product -->
                        </div>

                    </div>

                </div>
                <!-- /.col-md-9 -->


                <!-- *** LEFT COLUMN END *** -->



                <!-- *** RIGHT COLUMN END *** -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->


        <!-- *** FOOTER ***
        _________________________________________________________ -->

        <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>About us</h4>

                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                    <hr>

                    <h4>Join our monthly newsletter</h4>

                    <form>
                        <div class="input-group">

                            <input type="text" class="form-control">

                            <span class="input-group-btn">

                                <button class="btn btn-default" type="button"><i class="fa fa-send"></i></button>

                            </span>

                        </div>
                        <!-- /input-group -->
                    </form>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Blog</h4>

                    <div class="blog-entries">
                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="../../img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Blog post name</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="../../img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Blog post name</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="../../img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Very very long blog post name</a></h5>
                            </div>
                        </div>
                    </div>

                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Contact</h4>

                    <p><strong>Universal Ltd.</strong>
                        <br>13/25 New Avenue
                        <br>Newtown upon River
                        <br>45Y 73J
                        <br>England
                        <br>
                        <strong>Great Britain</strong>
                    </p>

                    <a href="contact.html" class="btn btn-small btn-template-main">Go to contact page</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->



                <div class="col-md-3 col-sm-6">

                    <h4>Photostream</h4>

                    <div class="photostream">
                        <div>
                            <a href="#">
                                <img src="../../img/detailsquare.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="../../img/detailsquare2.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="../../img/detailsquare3.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="../../img/detailsquare3.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="../../img/detailsquare2.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="../../img/detailsquare.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
        _________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2015. Your company / name goes here</p>
                    <p class="pull-right">Template by <a href="http://bootstrapious.com">Bootstrap 4 Themes</a> with support from <a href="http://kakusei.cz">Designové předměty</a> 
                        <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :) -->
                    </p>

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

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