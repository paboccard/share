function getPrixPourcentage(){

	var prix = document.getElementById('price').innerHTML.replace('$','');
	var pourcentage = document.getElementById('pourcent_ribbon');
	var result = parseFloat(prix) * (parseFloat(pourcentage.innerHTML)/100);

	pourcentage.innerHTML = result.toFixed(2) + '€';

}

function getPourcentagePrix(){

	var prix = document.getElementById('price').innerHTML.replace('$','');
	var pourcentage = document.getElementById('pourcent_ribbon');
	var result = (parseFloat(pourcentage.innerHTML)*100) / parseFloat(prix);

	pourcentage.innerHTML = result.toFixed(0) + '%';

}

/*$('#button').toggle(function(){
	console.log('toogle');
    $('#left_bar').stop(true).animate({width:0});
    $('#B').stop(true).animate({left:0});
},function(){
	console.log('toogle');
    $('#left_bar').stop(true).animate({width:200});
    $('#B').stop(true).animate({left:200});
})*/