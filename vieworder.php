<?php
 include 'loadingbar.php';
 session_start();

  if (isset($_SESSION['uniqueid'])) {

      header("location:owner/index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
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
	      .header{
	      	height:45px;
	      	width:100%;
	      	background:var(--first); 
	      	line-height:35px;   
	      }
	      .header .ahead{
	      	height:35px;
	      	width:35px;
	      	position:fixed; 
	      	left:10px;
	      	top:8px;   
	      }
	      .header .ahead img{
	      	height:30px;
	      	width:30px;   
	      }
	      .header .bhead{
	      	height:40px;
	      	line-height:40px;  
	      	width:100%;  
            text-align:center; 
	      }
	      .order{
	      	width:100%;
	      	background:var(--first);
	      	display:flex;
	      	flex-wrap:wrap;
	      }
	      .order form{
	      	margin:auto;
	      }
	      .order input{
	      	height:35px;
	      	width:250px;
	      	text-align:center;
	      	margin:10px auto;
	      }
	      .order input[type='submit']{
	      	width:150px;
	      	cursor:pointer;
	      }
	      .showorder{
	      	width:100%; 
	      	display:flex;
	      	flex-wrap:wrap;   
	      }
	      .showorder h1{
	      }
        .showorder .detail{
           width:100%; 
        }
        .detail table{
           width:100%; 
        }
        .showorder table{
          width:100%;
          text-align:center;  
        }
        .showorder table tr{
           font-size:18px;
        }
        .showorder table tr td{
          height:40px; 
        }
        .total table{
          width:100%;
          height:50px;  
        }
        .total table tr{
          text-align: center;
          font-size:18px; 
          height:50px;  
        }
        .button{
          width:100%;
          text-align:center;
          background-color:var(--third);
        }
        .button a{
          height:40px;
          width:70%;  
          text-align:center;
          background-color:var(--third);    
          font-size:22px;
          color:black;   
          border-radius:20px;
          padding:10px 30px;
          border:2px solid var(--first);
        }
         a{
          text-decoration:none; 
          line-height:40px;
          font-size:18px;
        }
          .button a:hover{
            font-size:20px;
          background-color:var(--first);
           cursor:pointer; 
           }
        
        @media screen and (max-width:578px){
               .pro{ 
                 width:90%; 
              }
              .button input{
                margin:10px auto; 
              }
           }
           @media screen and (max-width:400px){
              .order input{
              	width:100%;
              }
              .order input[type='submit']{
	      	    margin-left:50%;
	      	    transform:translateX(-50%);
	         }
           }
	</style>
</head>
<body onload="load()">
<div class="header">
         <div class="ahead">
              <a href="index.php"><img src="icon/cancel.png"></a>
         </div>
         <div class="bhead">
         	<h1>NamoBakery</h1>
         </div> 
  </div>

<div class="order">
	<form method="post">
		<input type="text" placeholder="Enter memberid" maxlength="10" minlength="10" required name="memid">
		<input type="text" placeholder="Enter password" maxlength="8" minlength="8" required name="pmemid">
		<input type="submit" value="submit" name="search">
	</form>
</div>
<div class="showorder">


<div class="detail">
  <?php
   if (isset($_POST['search'])) {
   	
   if (isset($_POST['memid']) && isset($_POST['pmemid'])) {
          
          $memid = $_POST['memid']; 
          $pmemid =  $_POST['pmemid'];

?>
<h1>coustomer details</h1>
<?php
    
           include 'conn.php';

          $query3 = "SELECT * FROM `coustomer` WHERE `m1`='$memid' AND `pass`='$pmemid'";

          $run3 = mysqli_query($conn,$query3);

          if(mysqli_num_rows($run3)){

        while($row3 = mysqli_fetch_assoc($run3)) {


          if ($row3['status']=='vf') {
             $status = "verified";
          }elseif ($row3['status']=='uv') {
            $status = "unverified";
          }elseif($row3['status']=='bl'){
                $status = "blocked";
          }else{
            $status = "no status";
          }


  ?>


   <table border="1">
      <tr>
        <td>user name</td>
        <td><?php echo $row3['name']; ?></td>
      </tr>
      <tr>
        <td>date of birth</td>
        <td><?php echo $row3['dob']; ?></td>
      </tr>
      <tr>
        <td>mobile no</td>
        <td><?php echo $row3['m1']; ?></td>
      </tr>
      <tr>
        <td>alternate no</td>
        <td><?php echo $row3['m2']; ?></td>
      </tr>
      <tr>
        <td>email</td>
        <td><?php echo $row3['email']; ?></td>
      </tr>
      <tr>
        <td>address</td>
        <td><?php echo $row3['address']; ?></td>
      </tr>
      <tr>
        <td>pincode</td>
        <td><?php echo $row3['pincode']; ?></td>
      </tr>
      <tr>
        <td>status</td>
        <td><?php echo $status; ?></td>
      </tr>
   </table>
       

  <?php
}
}else{
         echo "no record found";
    }
mysqli_close($conn);
}else{
  header("location:index.php");
}

  ?>
</div>
  
<h1>order list</h1>
  <table border="1">
    <tr>
  <td>p name</td>
  <td>p price</td>
  <td>p qty</td>
    </tr>

  <?php
  $total = 0;
        if (isset($_POST['memid']) && isset($_POST['pmemid'])) {
          
          $memid = $_POST['memid']; 
          $pmemid =  $_POST['pmemid'];

           include 'conn.php';


          $query = "SELECT * FROM `memberorder` WHERE `memberid`='$memid' AND `odate`= date(now())";

          $run = mysqli_query($conn,$query);

          if(mysqli_num_rows($run)){

        while($row = mysqli_fetch_assoc($run)) {


           $pid = $row['ppid']; 
           $pqty = $row['pqty'];

            $query2 = "SELECT * FROM `productlist` WHERE `pid`=$pid";

             $run2 = mysqli_query($conn,$query2);

          if(mysqli_num_rows($run2)){

        while($row2 = mysqli_fetch_assoc($run2)) {

         $pid = $row2['pprice']; 
        
            $total = $total+$row2['pprice']* $pqty;

  ?>
         
  <tr>
  <td><?php echo $row2['pname']; ?></td>
  <td><?php echo $row2['pprice']; ?></td>
  <td><?php echo $row['pqty']; ?></td>
  <tr>
    

  <?php

}}

  // second query
}
          }else{
              echo "no record found";
          }

         mysqli_close($conn);
     
     }else{
  header("location:index.php");
}
  ?>

  </table>
  </div>
<h1>charges</h1>

  <div class="total">
    <table border="1">

      <?php

       include 'conn.php';

           $query = "SELECT * FROM `charges`";

          $run = mysqli_query($conn,$query);

          if(mysqli_num_rows($run)){

        while ($row = mysqli_fetch_assoc($run)) {
        
           $total = $total+$row['amount'];
       ?>
      <tr>
        <td><?php echo $row['charges']; ?></td>
        <td>Rs <?php echo $row['amount']; ?></td>
      </tr>
      <?php 

          }
          }else{
               echo "no record found";
               header("location:index.php");
           }
            

          mysqli_close($conn);
      
      ?>

      <tr style="background-color:var(--first);"><td>final total</td><td><?php echo $total; ?></td></tr>
    </table>
  </div>
  <?php
 }
  ?>
<br>


</div>
</body>
<script type="text/javascript">
function load() {
    document.getElementById("loader").style.display = "none";
  }  
</script>
</html>