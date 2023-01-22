<?php
	namespace Controller;
	class HomeController{
		public function __construct(){
			new \View\HomeView('home');
		
			if (isset($_POST['action'])) {
				
			}
		}
	}
?>