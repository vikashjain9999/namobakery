<?php
 session_start();

 echo $oid = date("dmyHis"); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Namo Bakery and Food Hub</title>
    <meta charset="utf-8">
    <meta name="site_name" content="Namo Bakery">
    <meta name="image" content="icon/indexicon.png">
    <meta name="title" content="Namo Bakery and Food Hub">
	<meta name="description" content="Namo Bakery and Food Hub Banda are known for making each bite soulful and joyous that offers pizza, burger, momos at your door steps. Namobakery: Order delicious food online. Enjoy a wide range of flavors, sizes, and designs for any occasion. Fast and easy delivery to your doorstep. Order now and get only in . Namobakery Banda : 470335.Namobakery24">
    <meta name="keywords" content="banda bakery, Namo Bakery and Food Hub, Namo Bakery, namo bakery and food hub banda, namobanda, namobakery, namobakery banda, ansh namo bakery, food, bakery , banda, namo, food hub">

    <meta property="og:site_name" content="Namo Bakery">
    <meta property="og:image" content="icon/indexicon.png">
    <meta property="og:title" content="Namo Bakery and Food Hub">
    <meta property="og:description" content="Namo Bakery and Food Hub Banda are known for making each bite soulful and joyous that offers pizza, burger, momos at your door steps. Namobakery: Order delicious food online. Enjoy a wide range of flavors, sizes, and designs for any occasion. Fast and easy delivery to your doorstep. Order now and get only in . Namobakery Banda : 470335. Namobakery24">
    <meta property="og:keywords" content="banda bakery, Namo Bakery and Food Hub, Namo Bakery, namo bakery and food hub banda, namobanda, namobakery, namobakery banda, ansh namo bakery, food, bakery , banda, namo, food hub">

    <meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <link rel="canonical" href="https://namobakery.free.nf/" />
    <link rel="icon" href="icon/indexicon.png">
    
	<style type="text/css">
		:root{
      --first:#fcfcf5;
      --second:#ddc2f2;
      --third:#cc99ff;
      --fourth:black;
      --fifth:#252626;
      --sixth:white;
    }
	      
	      *{
	      	padding:0;
	      	margin:0; 
	      	user-select: none;
              -webkit-tap-highlight-color:transparent;
	      }	
        body{
          background-color:var(--sixth); 
        }
          .first{
            background:linear-gradient(360deg,var(--first),var(--second),var(--third));
            border-radius:0 0 30px 30px;
          }
	      .header{
	      	height:55px;
	      	line-height:55px;
	      	width:98%;
	      	line-height:35px;  
	      	display:flex;	
          }
	      .header .ahead{
	      	width:93%;
	      	text-align:center; 
	      	line-height:55px;
	      	font-size:22px;
	      	font-weight:bolder;
	      	font-style:italic;
            text-shadow:5px 5px 25px black;
            color:#2e004d;
	      }
	      .header .bhead{
	      	width:75px;
	      	text-align:center; 
	      	padding:10px;
	      }
	      .header .bhead img{
	      	height:30px;
	      	width:30px;   
	      	cursor:pointer; 
            z-index:30;  
	      }
	      .head{
	      	height:250px;
	      	width:100%;
	      	display:flex;
	      	flex-wrap:wrap;
	      	border-top:2px solid var(--sixth);	
          }
           .head .ahead{
          	width:50%;
	      	height:250px;
          	margin:auto;
	      	text-align:center; 
            text-shadow:5px 5px 20px black;
          }
           .head .ahead li{
           	margin-top:10%;
	      	list-style:none;
	      	flex-wrap:wrap;
	      	color:#5c0099;
	      	font-size:40px;
	      	font-weight:bolder;
	      	font-style:italic;
	      	text-decoration:blink;
          }
           .head .bhead{
          	width:40%;
	      	height:250px;
	      	margin:auto;
	      	text-align:center; 
	      	overflow:hidden;
          }
           .head .bhead img{
          	width:100%;
          	height:100%;
	      	object-fit:contain;
          }
	      .head .bhead .img{
	      	width:100%;
	      	height:250px; 
	      	position:relative; 
	      	animation:imager 10s infinite; 
	      }
	      .head .bhead .img img{   
	      	height:100%;
	      	width:100%;
              position:relative
	        object-fit:contain; 
	      }
	      @keyframes imager{
	      	0%{
	      	    bottom:0px;  
	      	}
	      	50%{
	      	    bottom:250px;      
	      	}
	      	100%{
	      	    bottom:500px;      
	      	}
	      }
	       .sidebar{
	      	height:100vh;
	      	width:100%;
	      	position:fixed;
	      	z-index:50;  
	      	display:none;   
	      }
	      .leftsidebar{
	      	height:100vh;
	      	width:400px;
	      	background:var(--third);
	      	position:fixed;
	      	top:0;
	      	left:0;
	      	z-index:15;  
	      	display:none;      
	      }
	      .leftsidebar .siderdiv{
             height:40px;
             width:100%; 
             display:flex;  
	      }
	      .leftsidebar .siderdiv .siderimg{
             height:40px;
             width:40px;
	      }
	      .leftsidebar .siderdiv .siderimg img{
             height:40px;
             width:40px;
             cursor:pointer; 
	      }
	      .leftsidebar .siderdiv .sidername{
             height:40px;
             width:100%;
             text-align:center; 
	      }
	      .leftsidebar .option{
             width:100%;  
	      }
	       .leftsidebar .options a{
	       	text-decoration:none; 
            color:black;
            font-weight:bold;   
             cursor:pointer; 
	       }
	       .leftsidebar .options li{
	       	height:55px; 
	       	line-height:55px; 
             width:95%;  
             background-color:var(--second);
             text-align:center;
             font-size:22px;
             margin:auto; 
             margin-top:5px;  
             cursor:pointer; 
             border:2px solid var(--second);
             border-radius:10px;
	      }
	       .leftsidebar .options li:hover{  
             background-color:var(--first);
             font-size:24px; 
             color:black;   
             cursor:pointer; 
	      }
          .categorylist{
          	 width:98%;
          	 margin:5px auto;
          	 border-radius:20px;
          	 display:flex;
          	 flex-wrap:wrap;
          	 background:white;
          }
          .categorylist a{
          	margin:auto;
          	text-decoration:none;
            color:#5c0099;
            -webkit-tap-highlight-color:transparent;
            border:20px;
          }
          .categorylist .category{
          	 width:160px;
          	 height:150px;
          	 margin:10px auto 10px 10px;
          	 padding:10px;
          	 text-align:center;
          	 background-color:;
          	 border-radius:30px;
             border:0.5px solid grey;
          }
          .categorylist .category .cateimg{
          	 width:90%;
          	 height:70%;
          	 margin:auto;
          }
          .categorylist .category .label{
          	  height:35px;
          	  line-height:35px;
          	  width:100%;
          	  font-size:20px;
          	  font-weight:bold;
                color:var(--third);
                margin-top:10px;
          }
          .categorylist .category .cateimg img{
          	 height:100%;
          	 width:100%;
          	 object-fit:contain;
          	 border-radius:30px;
          }
          .footer{
	      	width:100%;
	      	margin:10px auto; 
	      	display:flex;
	      	flex-wrap:wrap;
	      	background:black;
            color:white;
            border-radius:20px 20px 0 0;
	      }
	      .footer .left{
	      	height:300px;
	      	width:300px;
	      	margin:20px auto;  
	      	border-radius:15px;   
	      	overflow:hidden;
            background-color:var(--fourth); 
            border:2px solid grey;
	      }
	      .footer .left a{ 
	      	display:flex;
	      	line-height:50px;
	      	text-decoration:none;
              color:var(--second); 
              -webkit-tap-highlight-color:transparent;
	      }
           .footer .left a:hover{    
	      	color:white;
           }
	      .footer .left a h3{
	      	margin-left:30px; 
	      }
	      .footer .left img{
	      	height:40px;
	      	width:40px; 
	      	margin-top:8px; 
	      }
	      .footer .left .external{
              margin-left:20px; 
	      }
	      .footer .center{
	      	height:300px;
	      	width:300px; 
	      	margin:20px auto;  
	      	border-radius:15px;   
	      	overflow:hidden;
	      	text-align:center; 
            background-color:var(--fourth);
            box-shadow:black ;
            border:2px solid grey;
	      }
	      .footer .center h3{
	      	margin:20px 0 20px 0 ;
	      } 
	      .footer .center input{
              height:40px;
              width:80%;
              text-align:center;
              margin-top:5px;   
               border:5px solid var(--second); 
	      }
	      .footer .center input[type='textarea']{
	      	 height:100px; 
               word-wrap:break-wrap;
	      }
          .footer .center input[type='submit']{
	      	 width:100px;
             background:var(--second); 
             border:none;
             margin-top:10px;
	      }
	      .footer .right{
	      	height:300px;
	      	width:300px;
	      	margin:20px auto;  
            box-shadow:black;
	      	border-radius:15px;   
	      	overflow:hidden;
	      	text-align:center;
          background-color:var(--fourth);
            border:2px solid grey; 
	      }
	     .cartmessage{
          height:;
          word-wrap:break-word;
          display:flex;
          border-radius:20px 0 20px 20px; 
          position:fixed;
          left:50%;
          top:50%;
          transform:translate(-50%,-50%);  
          padding:50px;
          background:white;
        }
         .cartover{
        	height:100vh;
        	width:100%;
        	position:fixed;
        	top:0px;
        	left:0;
        	background-color:var(--third);
        	opacity:0.5;
        }
        .cartmessage li{
          list-style:none; 
        }
        .cartmessage #litext{
          border-radius:20px 0 20px 20px; 
          width:auto;   
          line-height:40px;  
          font-weight:bold;
        }
        .cartmessage img{
        	position:absolute;
        	top:-40px;
        	right:0;
            height:40px;
            width:40px;
            background-color:white;
            border-radius:20px 20px 0 0;
        }
        @media screen and (max-width:610px){
        	.categorylist a{
          	 margin:5px auto;
          	}
              .leftsidebar{
                  width:80%;
              }
        }
          @media screen and (max-width:580px){
          	.categorylist{
          		background-color:#ffffff;
          	}
          	.header .ahead h1{
          		font-size:30px;
          	}
          	.head .ahead li{
                margin-top:20%;
          		font-size:30px;
          	}
          	.categorylist a{
          	 margin:5px auto;
          	}
          	.cartmessage{
          		width:80%;
                  padding:30px;
          	}
          	.cartmessage img{
          		top:-50px;
          		border-radius:20px;
          	}
          }
          @media screen and (max-width:370px){
          	.categorylist .category{
          		width:140px;
          	}
              .leftsidebar{
                  width:90%;
              }
              .cartmessage{
          		width:70%;
                  padding:30px;
          	}
          }
          @media screen and (max-width:330px){
          	.categorylist .category{
          		width:120px;
          	}
          }
	</style>
</head>
<body  onload="load()">
<?php 

  if (isset($_SESSION['uniqueid'])) {

      header("location:owner/");
           }

 include 'loadingbar.php'; 
 
 ?>

	<div class="first">
<div class="header">
	<div class="ahead"><h1>Namobakery</h1></div>
	<div class="bhead"><img src="icon/menu.png" onclick="opennfun()"></div>
</div>
<div class="head">
	<div class="ahead"><li>Order food <br> Online in banda</li></div>
	<div class="bhead">
             <?php

		      include 'owner/conn.php';

		      $query = "SELECT * FROM `slider`";

		      $run = mysqli_query($conn,$query);

		      if(mysqli_num_rows($run)){

		        while ($row = mysqli_fetch_assoc($run)) {
		          

			   ?>
			   	   <div class="img"><img src="owner/sliderimg/<?php echo $row['img']; ?>"></div>
                      
			<?php
			}

			}else{
			  echo "no record found";
			}

			mysqli_close($conn);

			?>
	</div>
</div>
    </div>



<div class="sidebar" id="sidebar" onclick="closefun()"></div>

   <div class="leftsidebar" id="leftsidebar">
   	    <div class="siderdiv">
         
         <div class="sidername">
         	<h1>NamoBakery</h1>
         </div>
         <div class="siderimg">
              <img src="icon/cancel.png"  onclick="closefun()">
         </div>

         </div>

        <br><br>

         <div class="options">
         	<ul>
         		<a href=""><li>home</li></a>
         		<a href="vieworder.php"><li>my order</li></a>
         		<a href="cart.php"><li>cart</li></a>
            <a href="bmember.php"><li>become member</li></a>
            <a href=""><li>coustomer details</li></a>
            <a href="#about"><li>about us</a></li></a>
            <a href="#about"><li>contact us</li></a>
         	</ul>
         </div>
   </div>






    <div class="categorylist">
    	<?php include 'category.php'; ?>
    </div>


      <div class="footer" id="about">
       	<div class="left">
            <div class="external">
            	 		   <?php

                                     include 'owner/conn.php';

                                       $query = "SELECT * FROM `links`";

                                      $run = mysqli_query($conn,$query);

                                     if(mysqli_num_rows($run) >= 1){

                                     while ( $row = mysqli_fetch_assoc($run)) {
          

                            ?>  
           <a href="<?php echo $row['gmail']; ?>"icon/google><img src="icon/gmail.png"><h3>Gmail</h3></a>
         <a href="<?php echo $row['whatsapp']; ?>"icon/google><img src="icon/whatsapp.png"><h3>whatsapp</h3></a>
         <a href="<?php echo $row['instagram']; ?>"icon/google><img src="icon/instagram.png"><h3>instagram</h3></a>
         <a href="<?php echo $row['map']; ?>"icon/google><img src="icon/map.png"><h3>location</h3></a>
          <a href="tel:<?php echo $row['mobile']; ?>"icon/google><img src="icon/phone.png"><h3>call</h3></a>

                         <?php
                                }

                                }else{
                                        echo "no record found";
                                }
                                mysqli_close($conn);

                            ?> 
       		
            </div>
       	</div>
       	<div class="center">
       		<h3 style="color:var(--second);">Any complain or query</h3>
       		<form method="post">
       			<input type="textarea" placeholder="Enter complain or query" name="candq"><br>
       			<input type="field" placeholder="Enter email or mobileno" name="userid">
       			<input type="submit" value="submit" name="cq"><br>
       		</form>
       		 <?php

         if (isset($_POST['cq'])) {
            
          $candq = $_POST['candq'];
          $userid = $_POST['userid'];
          
if (empty($candq && $userid)) {
  echo "all fields are compulsary";
}else{

     include 'owner/conn.php';

     $query = "INSERT INTO `campandquery`(`id`, `complain`, `userid`) VALUES ('','$candq','$userid')";

     $run = mysqli_query($conn,$query);

     if ($run) {
         echo "successfully uploaded";
     }else{
          echo "failed";
     }

     mysqli_close($conn);
  
   }        
}
    ?>
       	</div>
       	<div class="right">
       		<br><br>
       		   <?php

      include 'owner/conn.php';

      $query = "SELECT * FROM `address`";

      $run = mysqli_query($conn,$query);

      if(mysqli_num_rows($run) >= 1){

        while ( $row = mysqli_fetch_assoc($run)) {
          

       ?>
             <div class="r">
       			<h1 style="color:var(--second);">Address :</h1>
       			<h3><?php echo $row['address']; ?></h3>
       			<br>
       			<h1 style="color:var(--second);">phone no :</h1>
       			<h3><?php echo $row['phone']; ?></h3>
       			<br>
       			<h1 style="color:var(--second);">mobile no :</h1>
       			<h3><?php echo $row['mobile']; ?></h3>
       			<br>
       		</div>


      <?php
      }

      }else{
               echo "no record found";
       }

         mysqli_close($conn);

          ?> 
       		       		
       	</div>
       </div>
   </div>



        <?php 

        //session_start();
        //$_SESSION['message'] = "hello jhj hj hj jhhjhjh hjhuhu hjuhugh jhgjggyg hggy h ghgs";

         if (isset($_SESSION['message'])) {
         	echo "<div class='cartover' id='cartoverf' onclick='onclickcart()'></div>";

         	echo "<div class='cartmessage' id='cartid'>";

          echo "<li id='litext' onchange='cartchange()' style='background-color:white; padding:3px 15px 3px 15px;'>".$_SESSION['message']."<img src='icon/cancel.png' onclick='onclickcart()'></li>";
          unset($_SESSION['message']);
         }

        ?>
        </div>
</body>
<script type="text/javascript">
	function opennfun() {
		document.getElementById("sidebar").style.display = "block";
		document.getElementById("leftsidebar").style.display = "block";
	}

	function closefun() {
		document.getElementById("sidebar").style.display = "none";
		document.getElementById("leftsidebar").style.display = "none";
	}
  
  function load() {
    document.getElementById("loader").style.display = "none";
  }
  function onclickcart() {
    document.getElementById("cartid").style.display = "none";
    document.getElementById("cartoverf").style.display = "none";
  }
</script>
</html>