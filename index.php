<?php
//VÁLTOZÓ MEGADÁS
$table='golya';
$filter='nem';
?>

<form action="index.php" method="GET">
<input type="text" name="data"/>
</form>
<pre>
<?php
include_once('mysqli_connect.php');
if(isset($_GET['data'])){
	$q='SELECT * FROM '.$table.' WHERE '.$filter.'="'.$_GET['data'].'"';
	echo $q;
	echo '

';
	$result=$mysqli->query($q) or die(sqlerror('Query hiba'));
	if(!($result->num_rows)){die('Nincs találat');}
	while($raw=$result->fetch_assoc()){
		$data[]=$raw;
	}
	print_r($data);
}
?>
</pre>
