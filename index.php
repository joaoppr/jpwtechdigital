<?php require_once('includes/header.php'); ?>

<?php
if(isset($_GET['url'])){
	if($_GET['url'] == ''){
		$url = 'home';
	}else{
		$url = $_GET['url'];
	}
}else{
		$url = 'home';	
}
$url = array_filter(explode('/',$url));

if(isset($url[1])){
	$file = $url[0].'/'.$url[1].'.php';
}else{
	$file = $url[0].'.php';	
}

if(is_file($file)){
	include $file;
}else{
	include '404.php';
}             
?>

<?php require_once('includes/footer.php'); ?>