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
           	  background-color:#99ddff; 
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
           	  position:absolute;
           	  padding:10px; 
           	  background-color:white; 
           	  top:50%;
           	  left:50%;  
           	  transform:translate(-50%,-50%); 
            box-shadow:-1px -1px 10px 2px black , 1px 1px 10px 2px black;   
           }
            h1{
            background-color:white;
            text-align:center;  
           }
           form{
           	  background-color:white;  
              text-align:center;
           }
           form input{
           	  height:40px;
           	  width:100%;   
           	  text-align:center; 
           	  border-radius:20px; 
               font-weight:bold;
                 background-color:#cceeff; 
                 border:2px solid black;
           }
           form textarea{
              width:80%;
              padding:10px;
              text-align:center; 
              border-radius:20px; 
              font-weight:bold;
              background-color:#cceeff; 
              border:2px solid black;
              
           }
           form input[type='submit']{
               background-color:#33bbff;
           }
           form input[type='submit']:hover{
            cursor:pointer;
            background-color:#66ccff;  
           }
           form select{
              height:40px;
              width:100%;   
              background-color:white;
              text-align:center; 
              border-radius:20px;
               background-color:#cceeff; 
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

  <h1>Give review</h1>
    
    <form method="post" action=""><br><br>
      <input type="text" placeholder="Enter name "  name="name" required><br><br>
      <input type="tel" placeholder="Enter phone no"  name="m1" minlength="10" maxlength="10" required><br><br>
      <textarea name="review" rows="5" cols="35" minlength="10" maxlength="150" required></textarea><br><br>
      <label>select stars</label><br><br>
      <select name="stars">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
      </select><br><br>
      <input type="submit" value="submit" name="submitreview">
    </form><br>


<div class="message">
    <?php

         if (isset($_POST['submitreview'])) {
            
          $name    = $_POST['name'];
          $m1      = $_POST['m1'];
          $review = $_POST['review'];
          $stars = $_POST['stars'];
           
if (empty($name && $m1 && $review && $stars)) {
  echo "please fill all fields";
}else{

     include 'owner/conn.php';

     $select = "SELECT * FROM `givereview`";

     $runselect = mysqli_query($conn,$select);

     $query = "INSERT INTO `givereview`(`sno`, `name`, `mobile`, `review`, `stars`, `odate`) VALUES ('','$name','$m1', '$review','$stars',now())";

     $run = mysqli_query($conn,$query);

     if ($run) {
         echo "successfully uploaded review";
     }else{
          echo "failed ! something went wrong";
     }

     mysqli_close($conn);
  
   }        
}
    ?>
    <br>
</div>

</div>
</body>

<script type="text/javascript">
    function load() {
    document.getElementById("loader").style.display = "none";
  } 
</script>
</html>