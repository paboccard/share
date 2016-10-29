 <section class="bar background-chiffre">
    <div class="container">
        <ul class="bxslider">
            <li>
                <div class="row showcase">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-list"></i>
                            </div>
                            <h4><span class="counter">{$nb_association}</span><br>associations</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <h4><span class="counter">{$nb_totalGain|string_format:"%.2f"}</span>€<br> récoltés<br>au Total</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <h4><span class="counter">{$nb_monthGain|string_format:"%.2f"}</span>€<br> récoltés<br>le mois dernier</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-eur"></i>
                            </div>
                            <h4><span class="counter">{$nb_weekGain|string_format:"%.2f"}</span>€<br> récoltés<br>la semaine dernière</h4>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="row showcase">
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <h4>Trouve et achète les produits dont tu as envie</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-heart"></i>
                            </div>
                            <h4>Un partie de la somme payé sera envoyé à l'association de ton choix</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <h4>Nous garantissons la valeur des produits sans augmentation du prix</h4>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <!-- /.row -->
    </div>
<!-- /.container -->
</section>
    <!-- /.bar -->

 <script>
     $(document).ready(function(){
         $('.bxslider').bxSlider({
             pause : 3000,
             auto : true,
             autoControls : true,
             stopAutoOnClick : true,
             autoControlsCombine : true
         });
     });
 </script>