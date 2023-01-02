<?php
	//use Controller\HomeController as test;
	class Config{
		public function __construct(){
			$url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'Home';

			$url = ucfirst($url); $url.= 'Controller';

			if(file_exists('Controller/'.$url.'.php')){
				//$classN = 'Controller\\'.$url;
				$var = 'Controller\\'.$url;
				new $var();

				echo "<br/>".$url;
				//$cClass = new ClassN();

				//$cClass->exec();
			}else{
				die('controller not found');
			}
		}
	}
?>