<section class="bar background-chiffre">
    <div class="container">
        <div class="row showcase">
            <div class="col-md-3 col-sm-6">
                <div class="item">
                    <div class="icon">
                        <i class="fa fa-align-justify"></i>
                    </div>
                    <h4><span class="counter">{$nb_association}</span><br>associations</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item">
                    <div class="icon">
                        <i class="fa fa-eur"></i>
                    </div>
                    <h4><span class="counter">{$nb_totalGain|string_format:"%.2f"}</span>€<br> récoltés<br>au Total</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item">
                    <div class="icon">
                        <i class="fa fa-eur"></i>
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
        <!-- /.row -->
    </div>
<!-- /.container -->
</section>
    <!-- /.bar -->