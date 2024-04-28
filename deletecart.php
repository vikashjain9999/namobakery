 <?php include 'terminate.php'; include 'loadingbar.php';?>
 
 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'meta.php'; ?>
	<style type="text/css">
		:root{
      --first:#7af2ca;
      --second:#c5fae9;
      --third:#d3f2e8;
      --fourth:#a4f5db;
    }
	    
			*{
	      	padding:0;
	      	margin:0; 
	      	user-select:none; 
	      }	
	      body{
	      	background-color:var(--second); 
	      }
          .center{
            width:50%;
            padding:20px;
            text-align:center;  
            position:fixed;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            background-color:var(--first);        
          }
          .center form input{
          	height:40px;
          	width:45%;

          }
           @media screen and (max-width:578px){
             .center{
             	width:90%; 
             }          
          }
	</style>
</head>
<body onload="load()">
<div class="center">
	<h1>Are you sure delete all items in cart</h1>
<br>
	<form method="post">
		<input type="submit" value="Back" name="back">
		<input type="submit" value="Delete" name="delete">
	</form>
	<?php 
      if (isset($_POST['back'])) {
      	 header("location:cart.php");
      }
      if (isset($_POST['delete'])) {
      	  session_start();
      	  unset($_SESSION['cart']);
      	  echo "<br>successfully deleted all items in cart";
      	  echo "<br><br><a href='index.php'>GO to homepage</a>";
      }
	?>
</div>
</body>
<script type="text/javascript">
function load() {
    document.getElementById("loader").style.display = "none";
  }  
</script>
</html>