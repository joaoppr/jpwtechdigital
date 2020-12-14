<?php /*Chamada do Header*/ require_once('header.php'); ?>

<?php

if(is_file($file)){
	include $file;
}else{
	include '404.php';
}            
?>


<?php /*Chamada do Rodape*/ require_once('footer.php'); ?>