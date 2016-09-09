

<div class="reference-images">

<?php



	
	$files=glob('./tpl/reference/*');
	foreach ($files as $file){
		printf("<img src=\"%s\" />",$file);
	}

?>



</div>