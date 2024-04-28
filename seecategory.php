<?php
include 'loadingbar.php';
 if (isset($_GET['ciid'])) {
  $ciid = $_GET['ciid'];
 }else{
 	header("location:category.php");
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
	      	user-select: none;
	      }	
        body{
          background-color:var(--first); 
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
	      	cursor:pointer; 
	      }
	      .header .bhead{
	      	height:40px;
	      	line-height:40px;  
	      	width:100%;  
            text-align:center; 
	      }
	      h3{
	      	width:100%;
	      	text-align:center;  
	      }
	      .product{
	      	width:100%; 
	      	display:flex;
	      	flex-wrap:wrap;
          background-color:white;  
          background-color:var(--third);
	      }
	      .pro{ 
	      	width:300px;
	      	margin:10px auto;  
	      	border:5px solid #7babad; 
          background-color:white;
	      	border-radius:15px;   
	      	overflow:hidden;  
	      }
	      .pro .proimg{
	      	height:250px; 
          border-radius:15px; 
	      }
	      .pro .proimg img{
	      	height:100%;
	      	width:100%;
	      	border-radius:15px;   
	      	object-fit:contain;    
	      }
	      .pro .proname{
	      	width:100%;
	      	text-align:center;  
	      }
	      .pro .probutton{
            height:40px; 
            width:100%; 
	      }
	      .pro .probutton .button{
            height:40px; 
            width:100%;
            text-align:center;
            line-height:40px;
            font-size:22px;   
            background-color:#16f0de;  
	      }
	      .pro .probutton a{
	      	text-decoration:none; 
	      	color:black  
	      }
          .cartmessage{
          height:;
          border-radius:20px; 
          padding:3px 7px 3px 15px;
          position:fixed;
          left:50%;
          bottom:5%;
          transform:translate(-50%,-50%); 
          display:inline-flex;     
        }
        .cartmessage li{
          list-style:none;
          display:flex;  
        }
        .cartmessage #litext{
          border-radius:20px; 
          width:auto;   
          line-height:40px;  
        }
        .cartmessage img{
          margin-left:10px; 
            height:40px;
            width:40px;
        }
        @media screen and (max-width:578px){
               .pro{ 
                 width:90%; 
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
         	<h2>NamoBakery</h2>
         </div> 
   </div>


   	<?php

      include 'owner/conn.php';

      $query = "SELECT * FROM `productlist` WHERE `category`=$ciid ORDER BY type,pdate ASC";

      $run = mysqli_query($conn,$query);

      if(mysqli_num_rows($run) >= 1){

          echo "<div class='offe'><h3>deals on";
          echo $ciid;
          echo " </h3></div>";

          echo "<div class='product'>";

        while ( $row = mysqli_fetch_assoc($run)) {
          

   ?>
          <div class="pro">
   	     	<div class="proimg"><img src="owner/productimg/<?php echo $row['pfile'] ?>"></div>
   	     	<div class="proname">
   	     		<h1><?php echo $row['pname']; ?></h1>
   	     		<h3>Rs <?php echo $row['pprice']; ?></h3>
   	     	</div>
   	     	<div class="probutton">
   	     		<a href="addtocart.php?id='<?php echo $row['pid']; ?>'"><div class="button">Add to cart</div></a><br><br>
   	     	</div>
   	     </div>

<?php
}

}else{
  echo "no record found";
}
mysqli_close($conn);

?>
   	</div>   



   <div class="cartmessage" id="cartid">
        <?php 

         if (isset($_SESSION['message'])) {
          echo "<li id='litext' onchange='cartchange()' style='background-color:lightgreen; padding:3px 15px 3px 15px;'>".$_SESSION['message']."<br><img src='icon/cancel.png' onclick='onclickcart()'></li>";
          unset($_SESSION['message']);
         }

        ?>
        </div>

  </body>
<script type="text/javascript">
  function onclickcart() {
    document.getElementById("cartid").style.display = "none";
  }
  function load() {
    document.getElementById("loader").style.display = "none";
  } 
</script>
</html>
