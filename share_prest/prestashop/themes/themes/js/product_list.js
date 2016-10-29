var INIT_NB_PRODUCT = 1; // 2 produits au départ
var NB_PRODUCT_ADD_BY_SCROLL = 2;


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

	$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.nextUntil("div");

		$next.slideToggle();
		$this.parent().toggleClass('open');
		console.log($this);
		if (!e.data.multiple) {

			$el.find('.submen').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});

});
