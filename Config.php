<?php
	class Config{
		public function __construct(){
			$url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'Home';

			$url = ucfirst($url); $url .= 'Controller';
		}
	}
?>