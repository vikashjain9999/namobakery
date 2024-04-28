<?php include 'terminate.php'; include 'loadingbar.php';?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'meta.php'; ?>
	<style type="text/css">
	      
	      *{
	      	padding:0;
	      	margin:0;  
	      	user-select:none; 
	      }	
	      body{
           	  background-color:#b8d4d4; 
	      }
        .head{
          height:35px;
          width:35px;
          position:fixed; 
          left:10px;
          top:8px;   
          z-index:10; 
        }
         .head img{
          height:30px;
          width:30px;   
        }
           .bmember{
           	border-radius:25px; 
           	  width:300px;
           	  position:fixed;
           	  padding:10px; 
           	  background-color:white; 
           	  top:50%;
           	  left:50%;  
           	  transform:translate(-50%,-50%);    
           }
            h1{
            background-color:white;
            text-align:center;  
           }
           form{
           	  background-color:white;  
           }
           form input{
           	  height:40px;
           	  width:100%;   
           	  background-color:white;
           	  text-align:center; 
           	  border-radius:20px; 
               font-weight:bold;
                 background-color:#d1f0e3; 
                 border:2px solid black;
           }
           form input[type='submit']{
               background-color:#47f5af;
           }
           form input[type='submit']:hover{
            cursor:pointer;
            background-color:#b8d4d4;  
           }
           form select{
              height:40px;
              width:100%;   
              background-color:white;
              text-align:center; 
              border-radius:20px;
               background-color:#d1f0e3; 
                 border:2px solid black;
           }
           form select option{
              height:40px;
              width:100%;   
              background-color:white;
              text-align:center; 
              border-radius:20px;
           }
           a{
           	 text-decoration:none; 
           }
           a .linkbutton{
           	height:40px; 
            width:100%;
            text-align:center;
            line-height:40px;
            font-size:22px;   
            background-color:pink; 
            border-radius:20px;  
           }
           .message{
              height: 40px;
              width: 100%;
              text-align:center;
              background-color:white;  
           }
           @media screen and (max-width:578px){
               .bmember{ 
                 width:90%;
                 position:absolute;
              }
           }
	</style>      
</head>
<body onload="load()">

<div class="head">
          <a href="index.php"><img src="icon/cancel.png"></a>
</div> 

<div class="bmember">

  <h1>Become member</h1>
    
    <form method="post" action=""><br><br>
    	<input type="text" placeholder="Enter name "  name="name" required><br><br>
      <input type="date" placeholder="Enter date of birth "  name="dob" required><br><br>
      <input type="email" placeholder="Enter email "  name="email" required><br><br>
      <input type="tel" placeholder="Enter phone no"  name="m1" maxlength="10" minlength="10" required><br><br>
      <input type="tel" placeholder="Enter another phone no "  name="m2" maxlength="10" minlength="10" required><br><br>
      <input type="tel" placeholder="Enter password "  name="passw" maxlength="8" minlength="8" required><br><br>
      <input type="text" placeholder="Enter address "  name="address" maxlength="100" minlength="1" required><br><br>
      <select name="pincode">
          <option value="470335">banda : 470335</option>
      </select><br><br>
      <input type="submit" value="submit" name="bmem">
    </form><br>


<div class="message">
    <?php

         if (isset($_POST['bmem'])) {
            
          $name    = $_POST['name'];
          $dob     = $_POST['dob'];
          $email   = $_POST['email'];
          $m1      = $_POST['m1'];
          $m2      = $_POST['m2'];
          $address = $_POST['address'];
          $pin     = $_POST['pincode'];
          $passw   = $_POST['passw'];
          
if (empty($name && $dob && $email && $m1 && $m2 && $address)) {
  echo "please fill all fields";
}else{

     include 'owner/conn.php';

     $select = "SELECT * FROM `coustomer` WHERE m1='$m1'";

     $runselect = mysqli_query($conn,$select);

     if (mysqli_num_rows($runselect)==1) {
         echo $m1." Already a coustomer<br> select another one";
     }else{

     $query = "INSERT INTO `coustomer`(`sno`, `name`, `email`, `m1`, `m2`, `address`, `pincode`, `dob`, `date`,`status`,`pass`) VALUES ('','$name','$email','$m1','$m2','$address','$pin','$dob',now(),'uv','$passw')";

     $run = mysqli_query($conn,$query);

     if ($run) {
         echo "successfully uploaded and verify in few hours and use mobile and password no for ordering";
     }else{
          echo "failed ! something went wrong";
     }
     }//select query

     mysqli_close($conn);
  
   }        
}
    ?>
    <br>
    <a href="tel:9300180014">get to verify call us or forget password</a>
</div>

</div>
</body>

<script type="text/javascript">
    function load() {
    document.getElementById("loader").style.display = "none";
  } 
</script>
</html>