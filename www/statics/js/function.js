/////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////FUNCTION.JS///////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////

//DOCUMENT READY FUNCTION
$(document).ready(function(){
	//ACCUEIL - HOVER SUR UNE PHOTO
	$('.picture').hover(function(){
		$(this).children('.dark').fadeIn(200);
		$(this).children('.picComments').fadeIn(200);
	}, function(){
		$(this).children('.dark').fadeOut(200);
		$(this).children('.picComments').fadeOut(200);
	});
	
	//PRETTY PHOTO
	//$("#gallerie a[rel^='prettyPhoto']").prettyPhoto();
	
	//REDIRECT TO A PICTURE'S COMMENT PAGE
	$('.picture .picComments').click(function(){
		//console.log($(this).attr('name'));
		window.location.replace($(this).attr('name'));
	});
	
	//VALIDATIONS CONTACT
	//NAME
	$('#txt_name').blur(function(){
		if($(this).val() != ''){
			var regex = /^[a-zA-Z\s]*$/;
			var value = $(this).val();
			if(value.match(regex)){
				$(this).removeClass('invalid');
				$(this).addClass('valid');
			}
			else{
				$(this).removeClass('valid');
				$(this).addClass('invalid');
			}
		}
		else{
			$(this).removeClass('valid');
			$(this).addClass('invalid');
		}
	});
	
	//PHONE
	$('#txt_phone').blur(function(){
		if($(this).val() != ''){
			var regex = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
			var value = $(this).val();
			if(value.match(regex)){
				$(this).removeClass('invalid');
				$(this).addClass('valid');
			}
			else{
				$(this).removeClass('valid');
				$(this).addClass('invalid');
			}
		}
		else{
			$(this).removeClass('valid');
			$(this).addClass('invalid');
		}
	});
	
	//EMAIL
	$('#txt_mail').blur(function(){
		if($(this).val() != ''){
			var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
			var value = $(this).val();
			if(value.match(regex)){
				$(this).removeClass('invalid');
				$(this).addClass('valid');
			}
			else{
				$(this).removeClass('valid');
				$(this).addClass('invalid');
			}
		}
		else{
			$(this).removeClass('valid');
			$(this).addClass('invalid');
		}
	});
	
	//MESSAGE
	$('#txt_msg').blur(function(){
		if($(this).val() != ''){
			$(this).removeClass('invalid');
			$(this).addClass('valid');
		}
		else{
			$(this).removeClass('valid');
			$(this).addClass('invalid');
		}
	});
	
	//SUBMIT BUTTON
	$('#submitBtn').click(function(){
		$('#contactForm').find('input, textarea').each(function(){
			if($(this).val() == ''){
				$(this).addClass('invalid');
			}
		});
		
		if($('#txt_name').hasClass('valid') && $('#txt_phone').hasClass('valid') && $('#txt_mail').hasClass('valid') && $('#txt_msg').hasClass('valid')){
			$('#contactForm').submit();
		}
		else{
			$('#message').html('Veuillez vérifier les champs en rouge.');
			$('#message').fadeIn(300);
		}
	});
	//VALIDATIONS CONTACT
	
	//EMAIL SENT MESSAGE
	// get querystring as an array split on "&"
	var querystring = location.search.replace( '?', '' ).split( '&' );
	// declare object
	var queryObj = {};
	// loop through each name-value pair and populate object
	for ( var i=0; i<querystring.length; i++ ) {
		  // get name and value
		  var name = querystring[i].split('=')[0];
		  var value = querystring[i].split('=')[1];
		  // populate object
		  queryObj[name] = value;
	}

	// ***now you can use queryObj["<name>"] to get the value of a url
	// ***variable
	if ( queryObj[ "s" ] === "1" ) {
		$('#message').addClass('MsgSent');
		$('#message').html('Message envoyé avec succès !');
		$('#message').fadeIn(300);
	}
	
	if ( queryObj[ "s" ] === "0" ) {
		$('#message').addClass('MsgNotSent');
		$('#message').html('Le message n\'a pas été envoyé.');
		$('#message').fadeIn(300);
	}
	//EMAIL SENT MESSAGE
	
	//DETERMINE SI NOUS SOMMES SUR MOBILE
	function findBootstrapEnvironment() {
		var envs = ['xs', 'sm', 'md', 'lg'];

		$el = $('<div>');
		$el.appendTo($('body'));

		for (var i = envs.length - 1; i >= 0; i--) {
			var env = envs[i];

			$el.addClass('hidden-'+env);
			if ($el.is(':hidden')) {
				$el.remove();
				return env
			}
		};
	}
	
	// var myDevice = findBootstrapEnvironment();
	// if(myDevice == 'xs' || myDevice == 'sm' || myDevice == 'md'){
		// $("a[rel^='prettyPhoto']").photoSwipe();
	// }
	// else{
		//$("a[rel^='prettyPhoto']").prettyPhoto();
		//$("a[rel^='prettyPhoto']").photoSwipe();
	// }
	
	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};
	if(isMobile.any()) {
	    $("a[rel^='prettyPhoto']").photoSwipe();
	}
	else{
		$("a[rel^='prettyPhoto']").prettyPhoto({allow_resize: true,allow_expand:true});
	}
	////////
});