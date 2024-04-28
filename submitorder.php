<?php
include 'terminate.php'; include 'loadingbar.php';
session_start();

 $name = $_POST['namee'];
       if($mobile = filter_var($_POST['mobile'],FILTER_VALIDATE_INT)){
       $address = $_POST['address'];


 if (isset($_POST['submitorder'])) {
 	
   if (isset($_SESSION['cart'])) {

   	 
        $oid = date("dmyHis"); 

        if (isset($oid)) {
            
            include 'owner/conn.php'; 


            $coustdetail = "INSERT INTO `coustomerdetail`(`sno`, `name`, `mobile`, `address`, `oid`) VALUES ('', '$name', '$mobile', '$address', '$oid')";

           $coustdetail = mysqli_query($conn,$coustdetail);

        
        if (isset($coustdetail)) {

            
             foreach ($_SESSION['cart'] as $key => $value) {
                echo $qty = $value['quantity'];
                echo $ppid = $value['pid'];
                echo $member = $_POST['member'];
               // echo $date = now();

                $insert = "INSERT INTO `memberorder`(`sno`, `ppid`, `pqty`,`oid`, `odate` ,`otime`) VALUES ('',$ppid,$qty,$oid,now(),now())";


                $verifyinsert = mysqli_query($conn,$insert);

                if ($verifyinsert) {
                    
                    echo $_SESSION['message'] = "your order is completed";

                    unset($_SESSION['cart']);
                    header("location:index.php");
                }else{//verify insert
                    header("location:index.php");
                    echo $_SESSION['message'] = "something went wrong";
                }

             }//foreach loop


        }else{//select
            header("location:index.php");
            $_SESSION['message'] = "some thing went wrong";
            echo "some thing went wrong";
        }

      //mysqli_close($conn);



//end.....................................................................................

        }else{//oid create
            echo "something went wrong";
            header("location:index.php");
            $_SESSION['message'] = "something went wrong";
        }  

     }else{//session cart check
     	echo "cart is not set";
     	header("location:index.php");
     	 $_SESSION['message'] = "cart is not set";
     }

 }else{//post submit
 	 header("location:index.php");
 	 $_SESSION['message'] = "unable to order";
 }

 
             }else{//mobile check
                    header("location:index.php");
                    echo $_SESSION['message'] = "please enter valid mobile no";
            }
header("location:index.php");
?>















































$verifyquery = "SELECT `m1`,`status`,`pass` FROM `coustomer` WHERE `status`='vf' AND `m1`='$member' AND `pass`='$passw'";

       $verifyresult = mysqli_query($conn,$verifyquery);

        
        if (mysqli_num_rows($verifyresult) >= 1) {

            
             foreach ($_SESSION['cart'] as $key => $value) {
                echo $qty = $value['quantity'];
                echo $ppid = $value['pid'];
                echo $member = $_POST['member'];
               // echo $date = now();

                $insert = "INSERT INTO `memberorder`(`sno`, `ppid`, `pqty`, `memberid`, `oid`, `odate` ,`otime`) VALUES ('',$ppid,$qty,'$000','$member'.time,now(),now())";


                $verifyinsert = mysqli_query($conn,$insert);

                if ($verifyinsert) {
                    
                    echo $_SESSION['message'] = "your order is completed";

                    unset($_SESSION['cart']);
                    header("location:index.php");
                }else{//verify insert
                    header("location:index.php");
                    echo $_SESSION['message'] = "something went wrong";
                }

             }//foreach loop


        }else{//select
            header("location:index.php");
            $_SESSION['message'] = "you are not a verified coustomer or enter wrong detail";
            echo "you are not a verified coustomer";
        }

      //mysqli_close($conn);