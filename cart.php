<?php include 'terminate.php'; include 'loadingbar.php';?>
<?php
session_start();
//session_unset();
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
        .header .chead{
          height:35px;
          width:35px;
          position:fixed; 
          right:10px;
          top:8px;     
        }
        .header .chead img{
          height:30px;
          width:30px; 
          z-index:15;  
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
	      input{
	      	height:40px;
	      	width:70%;  
	      	text-align:center; 
	      }
	      input[type="submit"]{
	      	height:40px;
	      	width:250px;
	      	background-color:var(--first);  
	      	text-align: center;
	      	margin:auto;   
	      	border-radius:20px  
	      }
	       a{
	      	text-decoration:none; 
	      	line-height:40px;
	      	font-size:18px;
	      }
           input[type="submit"]:hover{
           	font-size:20px;
	      	background-color:var(--second);
	      	 cursor:pointer; 
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
        #qty{
           width: 100%;
        }
        #qty input{
          border-radius:0; 
          width:45%;
          margin:auto;  
        }
        #qty input[type="submit"]{ 
            font-size:15px; 
            height:40px; 
            background-color:var(--fourth); 
        }
        @media screen and (max-width:578px){
               .pro{ 
                 width:90%; 
              }
              .cartmessage{
                 width:80%;        
              }
        }
        #hide{display:none;}
        .please{
           width:100%;
           padding:10px;
           text-align:center;
           font-size:22px;
           color:red;      
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
         <div class="chead">
          <a href="deletecart.php"><img src="icon/dcart.png"></a>
         </div>
  </div>


<div class="product">

	<?php
	$total = 0;
        if (isset($_SESSION['cart'])) {
        
        foreach ($_SESSION['cart'] as $key) {
      
          $pid = $key['pid'];  
          $qty = $key['quantity'];
    
           include 'owner/conn.php';

          $query = "SELECT * FROM `productlist` WHERE pid=$pid";

          $run = mysqli_query($conn,$query);

          if(mysqli_num_rows($run)){

        while($row = mysqli_fetch_assoc($run)) {

        
            $total = $total+$row['pprice']* $qty;

	?>
          <div class="pro">
   	     	<div class="proimg"><img src="owner/productimg/<?php echo $row['pfile']; ?>"></div>
   	     	<div class="proname">
   	     		<h1><?php echo $row['pname']; ?></h1>
   	     		<h3>Rs <?php echo $row['pprice']; ?></h3>
   	     	</div>
          <form method="post" action="addqty.php" id="qty">
            <input type="text" value="<?php echo $pid; ?>" name="pid" id="hide">
            <input type="tel" required placeholder="quantity" value="<?php echo $qty; ?>" name="qty">
            <input type="submit" value="Add" name="addqty">
          </form>
   	     	<div class="probutton">
   	     		<a href="removeproductcart.php?piid='<?php echo $row['pid']; ?>'"><div class="button">remove</div></a>
   	     	</div>


  </div>
  <?php

       } 

          }else{
              echo "no record found";
          }

         mysqli_close($conn);
     }
     }else{
     	echo "<div class='please'>please add product in cart</div>";
     }
  ?>
  </div>


  <div class="total">
  	<table border="1">

  		<?php

  		 include 'owner/conn.php';

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
          }

          mysqli_close($conn);
      
  		?>
  	</table>
  </div>
<br>

<div class="button">
  <form method="post" action="submitorder.php"><br><br>
    <input type="text" placeholder="Enter your name" minlength="1" maxlength="20" name="namee"><br><br>
  	<input type="tel" placeholder="Enter mobile no" minlength="10" maxlength="10" name="mobile"><br><br>
    <input type="text" placeholder="Enter address" maxlength="100" minlength="5" name="address"><br><br>
  	<input type="submit" value="order now of rs <?php echo $total; ?>" name="submitorder"><br><br>
  </form>
</div>


<div class="cartmessage" id="cartid">
        <?php 

         if (isset($_SESSION['removemessage'])) {
          echo "<li id='litext' onchange='cartchange()' style='background-color:lightgreen; padding:3px 15px 3px 15px;'>".$_SESSION['removemessage']."<br><img src='icon/cancel.png' onclick='onclickcart()'></li>";
          unset($_SESSION['removemessage']);
         }

        ?>
        </div>
</body>
<script type="text/javascript">
function load() {
    document.getElementById("loader").style.display = "none";
  }  
	function onclickcart() {
    document.getElementById("cartid").style.display = "none";
  }
</script>
</html>