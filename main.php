<?php require_once('php/def.php'); ?>
<!DOCTYPE html>
<html>
<head><?php printTPL('head'); ?></head>
<!--mf5-->
<body>
	
	

<div class="logo">LOGO</div>





 

	
<nav class="main-menu bgblack hidden-xs" data-spy="affix" data-offset-top="150">
	<?php printTPL('nav'); ?>
</nav>

<section id="navisec">
	<?php printTPL('navisec'); ?>
</section>
<section id="kontakt"><?php //printTPL('kontakt'); ?>TEST, TEST, TEST, TEST, TEST, TEST, TEST, ...</section>
<section id="reference"><?php printTPL('reference'); ?></section>
<section>S2<?php lorem(9000); ?></section>




<script src="./js/index-scripts.js"></script>
</body>

</html>