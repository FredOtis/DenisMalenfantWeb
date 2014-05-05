// FUNCTION.JS - ADMIN //

$(document).ready(function(){
	//GESTION GALLERIES
	$('#GestionGalleries select').change(function(){
		var test = 'SubGalList=' + $('#GestionGalleries select').val();
		var result = ajaxTest(test);
		console.log(result);
		$('#HidingPanel').fadeIn(500);
	});
	$('#btnCancel').click(function(){
		$('#HidingPanel').fadeOut(500);
		$('#GestionGalleries select').val(0);
	});
});


function ajaxTest(t){
	var arrayTest = [];
	$.ajax({ url: 'statics/php/functions.php',
		 data: 'action=' + t,
		 type: 'post',
		 datatype: 'json',
		 async: false,
		 success: function(output) {
					console.log(output);
					arrayTest = output;
				  }
	});
	return arrayTest;
}
