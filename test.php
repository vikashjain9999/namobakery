<?php
header("location:index.php");
$vaar = -2;
if (preg_match("/^[1-9]\d*$/", $vaar)) {
	echo "yes";
	echo $vaar;
}else{
	echo "no";
}
?>