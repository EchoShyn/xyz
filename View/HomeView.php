<?php
	namespace View;
	class HomeView{

		private function rendering($page){

			$content = file_get_contents('View/templates/homeTemplate.php');

			header("Refresh: 0");

			return file_put_contents($page, $content);
		}

		public function __construct($page){
			if(file_exists('View/render/'.$page.'Render.php')){
				include('View/render/'.$page.'Render.php');
			}else{

				//$page.= 'Render.php';

				$page = 'View/render/'.$page.'Render.php';

				$this->rendering($page);
			}
		}
	}
?>