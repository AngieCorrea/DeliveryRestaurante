<?php
  if (isset($_GET['view'])) {
	if (file_exists('controllers/'.$_GET['view'].'controller.php')) {
		include ('controllers/'.$_GET['view'].'controller.php');
		# code...
	}else{
       include ('controllers/indexController.php');

	}

	}else{
		include ('controllers/indexController.php');
	}
?>