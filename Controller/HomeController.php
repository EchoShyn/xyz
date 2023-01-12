<?php
	namespace Controller;
	class HomeController{
		public function __construct(){
			new \View\HomeView();
			die();
		}
	}
?>