<?php


define("SALT","JJdhs8sudjxm38iv78GBikesl7dgH");
define("TPL_PATH",'./tpl');
define("DEBUG",true);





function printTPL($name){
	if(file_exists(TPL_PATH.'/'.$name.'.php')){
		include(TPL_PATH.'/'.$name.'.php');
	}
	else{
		if(DEBUG){TT("Brak pliku".TPL_PATH.'/'.$name.'.php'); }
	}
}


function TT($tx){
	echo('<div class="debug">');
	print_r($tx);
	echo('</div>');
}

require_once('./tpl/ipsum.php');
?>