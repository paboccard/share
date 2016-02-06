var INIT_NB_SUPPLIER = 1; // 2 supplier sur l'accueil
var NB_SUPPLIER_ADD_BY_SCROLL = 2;


$(document).ready(function(){
	var nb_supplier = INIT_NB_SUPPLIER;
    var elm = $("#list_supplier li");
    elm.each(function(index){
    	if (index > nb_supplier)
    		$(this).hide();
    });

	function loadMore()
	{

	   nb_supplier +=NB_SUPPLIER_ADD_BY_SCROLL;
	   if (nb_supplier > elm.length-1){
			nb_supplier = elm.length-1;
		}
		elm.each(function(index){
	    	if (index <= nb_supplier)
	    		$(this).show();
	    });

	   $(window).bind('scroll', bindScroll);
	 }

	 function bindScroll(){
	   if($(window).scrollTop() + $(window).height() > $(document).height() - 350) {
	       $(window).unbind('scroll');
	       loadMore();
	   }
	}
	 
	$(window).scroll(bindScroll);

});
