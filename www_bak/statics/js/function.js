/////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////FUNCTION.JS///////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////

//DOCUMENT READY FUNCTION
$(document).ready(function(){
	//ACCUEIL - HOVER SUR UNE PHOTO
	$('.PicLink').hover(function(){
		$(this).children('.dark').fadeIn(200);
		$(this).children('.picComments').fadeIn(200);
	}, function(){
		$(this).children('.dark').fadeOut(200);
		$(this).children('.picComments').fadeOut(200);
	});
	
	//PRETTY PHOTO
	//$("#gallerie a[rel^='prettyPhoto']").prettyPhoto();
	
	//REDIRECT TO A PICTURE'S COMMENT PAGE
	$('.PicLink .picComments').click(function(){
		//console.log($(this).attr('name'));
		window.location.replace($(this).attr('name'));
	});
	
	//VALIDATIONS CONTACT
	//NAME
	$('#txtName').blur(function(){
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
	$('#txtPhone').blur(function(){
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
	$('#txtMail').blur(function(){
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
	$('#txtMsg').blur(function(){
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
	$('#submitButton').click(function(){
		$('#contact_form').find('input, textarea').each(function(){
			if($(this).val() == ''){
				$(this).addClass('invalid');
			}
		});
		
		if($('#txtName').hasClass('valid') && $('#txtPhone').hasClass('valid') && $('#txtMail').hasClass('valid') && $('#txtMsg').hasClass('valid')){
			$('#contact_form').submit();
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
	
	var myDevice = findBootstrapEnvironment();
	if(myDevice == 'xs' || myDevice == 'sm' || myDevice == 'md'){
		$(".PicLink a").photoSwipe();
	}
	else{
		$("#gallerie a[rel^='prettyPhoto']").prettyPhoto();
		//$(".PicLink a").photoSwipe();
	}
	////////
});