<?php
	echo "<form action='ejecutar.php' method='POST'>";
		echo "<input style='background:orange; border-radius: 5px 5px 5px 5px; font-size:30px; top:20%' type='submit' value='Actualizar' name='btnActualizar'>";
		echo "</form>";
	if (isset($_POST['btnActualizar'])) {
		$direc='D:/xampp/htdocs/proyectopractico';
		chdir($direc);
		exec ('git pull origin');
		/*exec('git fetch origin master');
		exec('git merge origin/master');*/
	}
?>