<?php
	require_once 'controllers/error.php';
	class App
	{
		
		function __construct()
		{
			echo "<p>Clase app</p>";

			$url = $_GET['url'];
			$url = rtrim($url, '/');
			$url = explode('/', $url);

			//var_dump($url);
			$archivoControlador = 'controllers/' . $url[0] . '.php';

			if(file_exists($archivoControlador)){
				require_once $archivoControlador;
				$controller = new $url[0];

				if(isset($url[1])){
					$controller->{$url[1]}();
				}
			}else{
				 $controller = new ErrorURL();
			}			
		}
	}

?>