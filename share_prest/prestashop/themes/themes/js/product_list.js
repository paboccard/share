var INIT_NB_PRODUCT = 2; // 3 produits au départ
var NB_PRODUCT_ADD_BY_SCROLL = 3;


$(document).ready(function(){
	var nb_product = INIT_NB_PRODUCT;
    var elm = $(".product_list li");
    elm.each(function(index){
    	if (index > nb_product)
    		$(this).hide();
    });

	function loadMore()
	{

	   nb_product +=NB_PRODUCT_ADD_BY_SCROLL;
	   if (nb_product > elm.length-1){
			nb_product = elm.length-1;
		}
		elm.each(function(index){
	    	if (index <= nb_product)
	    		$(this).show();
	    });

	   $(window).bind('scroll', bindScroll);
	 }

	 function bindScroll(){
	   if($(window).scrollTop() + $(window).height() > $(document).height() - 370) {
	       $(window).unbind('scroll');
	       loadMore();
	   }
	}
	 
	$(window).scroll(bindScroll);

});
