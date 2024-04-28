<?php
include 'loadingbar.php';

   if (isset($_POST['addqty'])) {
   	   $_POST['qty'];
       $_POST['pid'];
session_start();
      if (preg_match("/^[1-9]\d*$/", $_POST['qty'])) {
        
      
       
       foreach($_SESSION['cart'] as $key => $value) {

       	if ($value['pid']==$_POST['pid']) {
       	     
             $_SESSION['cart'][$key] = array('pid'=> $_POST['pid'],'quantity'=> $_POST['qty']);
             $_SESSION['removemessage'] = "successfully added   ";
            header("location:cart.php");

       	}
       }
      }else{//regexp
        echo "no";
             $_SESSION['removemessage'] = "please enter only positive no";
             header("location:cart.php");
      }
       }else{//session
         header("location:cart.php");
       }
       header("location:cart.php");

?>