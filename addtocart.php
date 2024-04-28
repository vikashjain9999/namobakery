<?php

include 'loadingbar.php';

$pid = $_GET["id"];


 	echo "<a href='index.php' style='position:fixed; top:10%; left:10%;'>click here</a>";

 if (isset($pid)) {

 	session_start();

 	if(isset($_SESSION['cart'])){


       $myitems =  array_column($_SESSION['cart'],'pid');

       if (in_array($pid,$myitems)) {
       	   echo "Already exist";
       	   $_SESSION['message']='Already exist in our cart';
       }else{

 		$count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array('pid' => $pid ,'quantity'=> 1);
         echo "added successfully";
         $_SESSION['message']='Added successfully in cart';

        }
 	}else{//session cart

 		$_SESSION['cart']['0'] = array('pid' => $pid ,'quantity'=> 1);
        echo "added successfully";
        $_SESSION['message']='Added successfully in cart';

 	}


 	header("location:index.php");

 }else{//isset
  	header("location:index.php");
 }
header("location:index.php");
?>