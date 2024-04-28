<?php
include 'loadingbar.php';
if (isset($_GET['piid'])) {
	echo $_GET['piid'];

	session_start();
    
    foreach ($_SESSION['cart'] as $key => $value) {
    	if ($value['pid']==$_GET['piid']) {
    		
    	
    	unset($_SESSION['cart'][$key]);
        $_SESSION['cart']=array_values($_SESSION['cart']);

         $_SESSION['removemessage'] = "successfully removed";

         header("location:cart.php");
    }
    }

}else{
	header("location:cart.php");
}
header("location:cart.php");
?>