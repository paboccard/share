<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("head.php"); ?>
</head>

<body>


	<div id="all">
		<?php include("header.php"); ?>

		<!-- *** LOGIN MODAL END *** -->

		<div id="heading-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Shopping cart</h1>
					</div>
					<div class="col-md-6">
						<ul class="breadcrumb">
							<li><a href="index.php">Home</a>
							</li>
							<li>Shopping cart</li>
						</ul>

					</div>
				</div>
			</div>
		</div>

		<div id="content">
			<div class="container">

				<div class="row">
					<div class="col-md-9">
						<p class="text-muted lead">Vous avez 2 produits dans votre panier pour le moment</p>
					</div>
					<div class="col-md-3">
						<p class="text-muted lead">Produits pouvant vous intéressez</p>
					</div>

					<div class="col-md-9 clearfix" id="basket">

						<div class="box">

							<form method="post" action="shop-checkout1.html">

								<!--<div class="table-responsive"-->
								<div>
									<table class="table">
										<thead>
											<tr class="box-panier_header">
												<th colspan="2">Product</th>
												<th>Quantity</th>
												<th>Unit price</th>
												<th>Association</th>
												<th>Don</th>
												<th colspan="2">Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<a href="detailProduct.php">
														<img src="../../img/produit/appareil_photo/app1.jpg" alt="White Blouse Armani">
													</a>
												</td>
												<td><a href="detailProduct.php">White Blouse Armani</a>
												</td>
												<td>
													<input type="number" value="2" class="form-control">
												</td>
												<td>123.00€</td>
												<td>
													<!--<select size="1">
														<option>Action</option>
															<option>Another action</option>
															<option>Something else here</option>
															<option selected>Téléthon</option>
															<option>Art and Design</option>
															<option>Drama</option>
															<option>Music</option>
															<option>Physics</option>
															<option>Chemistry</option>
															<option>Biology</option>
															<option>Home economics</option>
															<option>Physical Education</option>
															<option>Computing Science</option>
															<option>French</option>
															<option>German</option>
															<option>Mandarin</option>
															<option>Religious Education</option>
															<option>Modern Studies</option>
															<option>Geography</option>
															<option>History</option>
															<option>Creative computing</option>
															<option>Craft, Design and Technology</option>
													</select>-->
													<div class="dropdown">
														<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
															Médecins sans frontières 
															<span class="caret"></span>
														</button>
														<ul class="dropdown-menu liste_deroulante" aria-labelledby="dropdownMenu1">
															<li><a href="#">Action</a></li>
															<li><a href="#">Handicap International</a></li>
															<li><a href="#">Médecins sans frontières</a></li>
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
												</td>
												<td>
													<span class="pourcentage_panier">10%</span></br>
													<span class="priceDon_panier">12.00€</span>
												</td>
												<td>246.00€</td>
												<td><a href="#"><i class="fa fa-trash-o"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
														<img src="../../img/produit/appareil_photo/app2.jpg" alt="Black Blouse Armani">
													</a>
												</td>
												<td><a href="#">Black Blouse Armani</a>
												</td>
												<td>
													<input type="number" value="1" class="form-control">
												</td>
												<td>200.00€</td>
												<td>
													<div class="dropdown">
														<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
															Handicap International
															<span class="caret"></span>
														</button>
														<ul class="dropdown-menu liste_deroulante" aria-labelledby="dropdownMenu1">
															<li><a href="#">Action</a></li>
															<li><a href="#">Handicap International</a></li>
															<li><a href="#">Médecins sans frontières</a></li>
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
												</td>
												<td><span class="pourcentage_panier">12%</span></br><span class="priceDon_panier">7.00€</span></td>
												<td>200.00€</td>
												<td><a href="#"><i class="fa fa-trash-o"></i></a>
												</td>
											</tr>
										</tbody>
										<tfoot>
											<tr class="box-panier_footer">
												<th colspan="5">Total</th>
												<th>19€</th>
												<th colspan="2">$446.00</th>
											</tr>
										</tfoot>
									</table>

								</div>
								<!-- /.table-responsive -->

								<div class="box-footer">
									<div class="pull-left">
										<a href="shop-category.html" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
									</div>
									<div class="pull-right">
										<button class="btn btn-default"><i class="fa fa-refresh"></i> Update cart</button>
										<button type="submit" class="btn btn-template-main">Proceed to checkout <i class="fa fa-chevron-right"></i>
										</button>
									</div>
								</div>

							</form>

						</div>
						<!-- /.box -->
					</div>
						<div class="col-md-3 box_overflow">
							<div class="col-md-9">
								<div class="product">
									<div class="image">
										<a href="shop-detail.html">
											<img src="../../img/product2.jpg" alt="" class="img-responsive image1">
										</a>
									</div>
									<div class="text">
										<h3><a href="shop-detail.html">Fur coat</a></h3>
										<p class="price">$143</p>

									</div>
								</div>
								<!-- /.product -->
							</div>

							<div class="col-md-9">
								<div class="product">
									<div class="image">
										<a href="shop-detail.html">
											<img src="../../img/product3.jpg" alt="" class="img-responsive image1">
										</a>
									</div>
									<div class="text">
										<h3><a href="shop-detail.html">Fur coat</a></h3>
										<p class="price">$143</p>
									</div>
								</div>
								<!-- /.product -->
							</div>

							<div class="col-md-9">
								<div class="product">
									<div class="image">
										<a href="shop-detail.html">
											<img src="../../img/product1.jpg" alt="" class="img-responsive image1">
										</a>
									</div>
									<div class="text">
										<h3><a href="shop-detail.html">Fur coat</a></h3>
										<p class="price">$143</p>
									</div>
								</div>
								<!-- /.product -->
							</div>

						</div>

					
					<!-- /.col-md-9 -->

				<!--<div class="col-md-2">
					<div class="box" id="order-summary">
						<div class="box-header">
							<h3>Order summary</h3>
						</div>
						<p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td>Order subtotal</td>
										<th>$446.00</th>
									</tr>
									<tr>
										<td>Shipping and handling</td>
										<th>$10.00</th>
									</tr>
									<tr>
										<td>Tax</td>
										<th>$0.00</th>
									</tr>
									<tr class="total">
										<td>Total</td>
										<th>$456.00</th>
									</tr>
								</tbody>
							</table>
						</div>

					</div>


					<div class="box">
						<div class="box-header">
							<h4>Coupon code</h4>
						</div>
						<p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
						<form>
							<div class="input-group">

								<input type="text" class="form-control">

								<span class="input-group-btn">

									<button class="btn btn-template-main" type="button"><i class="fa fa-gift"></i></button>

								</span>
							</div>
							<!-- /input-group --
						</form>
					</div>-->

				</div>
				<!-- /.col-md-3 -->

			</div>

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
    window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="../../js/jquery.cookie.js"></script>
    <script src="../../js/waypoints.min.js"></script>
    <script src="../../js/jquery.counterup.min.js"></script>
    <script src="../../js/jquery.parallax-1.1.3.js"></script>
    <script src="../../js/front.js"></script>

    



</body>

</html>