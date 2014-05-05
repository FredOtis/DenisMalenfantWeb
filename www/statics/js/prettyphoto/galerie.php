<!DOCTYPE html> 
<?php 
$url = "toiles.xml";
$xml = simplexml_load_file($url);
$count = 0;
$lazy = 0;
$row = '<div class="row-fluid">';
$row_close = '</div>';
$galerie = '';
foreach ($xml->toile as $toile)
{
	$lazy++;
	$count++;
	if($lazy > 18){
		$image = '<div class="span2"><a href='.$toile->image.'rel="prettyPhoto[gal1]"><img class="lazy" src="images/loading.gif" data-original='.$toile->thumbnail.' alt='.$toile->titre.' width="125" height="125"></a></div>';
	}
	else{
		$image = '<div class="span2"><a href='.$toile->image.'rel="prettyPhoto[gal1]"><img src='.$toile->thumbnail.' alt='.$toile->titre.'></a></div>';

	}
	if ($count == 1){
		$galerie .= $row;
	}
	$galerie .= $image;
	if ($count == 6){
		$galerie .= $row_close;
		$count = 0;
	}
}
$galerie .= $row_close;
?> 
<html lang="fr">  
<head>    
<meta charset="utf-8">  
<title>Galerie d'art - Guyon</title>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<meta name="description" content="Galerie d'art - Guyon">  
<meta name="author" content="">  
<!-- Le styles -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
<link href="custom_css.css" rel="stylesheet">
<script src="modernizr.custom.71519.js"></script>  
</head>  
<body>  
<div class="container-fluid">
<?php
	include("include_header.php");
?>
<div class='navbar navbar-inverse'>
    <div class='navbar-inner nav-collapse' style="height: auto;">
      <ul class="nav">
        <li class="active"><a href="galerie.php">Galerie</a></li>
        <li><a href="biographie.php">Biographie</a></li>
		<li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
</div> 
</br> 
<?php echo $galerie; ?>
<hr>  
<footer> 
	<?php
		include("include_footer.php");
	?> 
</footer>
</div> <!-- /container -->
<!-- Le javascript  
================================================== -->     
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	Modernizr.load([
	  {
		load: ['prettyphoto/js/jquery.prettyPhoto.js', 'prettyphoto/css/prettyPhoto.css'],
		complete: function () {
		  	function findBootstrapEnvironment() {
				var envs = ['phone', 'tablet', 'desktop'];

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
			myDevice = findBootstrapEnvironment();
		  $("a[rel^='prettyPhoto']").prettyPhoto({
			social_tools: false,
			show_title: true,
			deeplinking: false,
				changepicturecallback: function(){
					$('.pp_expand').addClass('hidden');
				}
			});
		}
	  },
	  {
		load: '//cdn.jsdelivr.net/jquery.lazyload/1.8.4/jquery.lazyload.min.js',
		complete:function(){
			$("img.lazy").lazyload({
				effect: "fadeIn"
			}); 
		},
	  }
		
	]);
</script>
</body>  
</html>