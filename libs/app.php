<?php
	
	
	class App
	{
		
		function __construct()
		{
			echo "<p>Clase app</p>";

			$url = $_GET['url'];
			echo $url;
		}
	}

?>