<?php 
	ini_set('display_errors',1); date_default_timezone_set('America/Sao_Paulo');

	class Config
	{
		public function __construct()
		{
			$url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'Home';

			$url = ucfirst($url); $url.= 'Controller';

			if(file_exists('Controller/'.$url.'.php'))
			{
				$var = 'Controller\\'.$url;

				new $var();
			}else{
				die('controller not found');
			}
		}
	}
?>