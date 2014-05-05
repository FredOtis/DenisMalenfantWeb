<?php
	/////////////////////////////
	/////// FUNCTIONS PHP ///////
	/////////////////////////////
	header('Content-type: text/json');
	$link = mysql_connect('localhost', 'root', '');
	mysql_select_db("denis_malenfant");
	
	if(isset($_POST['action']) && !empty($_POST['action'])) {
		$result = explode('=', $_POST['action']);
		switch($result[0]) {
			case 'SubGalList' : loadSubGalleries_GalleryID($result[1]);break;
		}
	}
	
	//GET SUB GALLERIIES LIST FOR A SPECIFIC GALLERY
	//////////////////////
	function loadSubGalleries_GalleryID($a){
		$res = array();
		$d = mysql_query("SELECT fld_SubGalName FROM tbl_SubGalleries WHERE fld_FK_GalID = 1");
		//$row = mysql_fetch_assoc($result); 
		while($r = mysql_fetch_assoc( $d )){ 
			$res['test'] = $r['fld_SubGalName'];
		} 
		
		return array($res);
	}
?>