<?php 

	function loadClass($nameClass){
		require_once($nameClass .".php");
	}
	spl_autoload_register("loadClass");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>TESTS</title>
</head>
<body>

</body>
</html>