<?php 

echo "<table border=\"1\">";
echo "<caption><b>Vos informations</b></caption>";
foreach ($_POST as $cle => $val) {
	echo "<tr> <td> $cle </td> <td> $val </td> </tr>";
}
echo "</table>";





 ?>