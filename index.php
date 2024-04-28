<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
    
	<style>
		*{
			margin:0;
			padding:0;
			user-select:none;
		}
		body{
			scroll-behavior:smooth;
			background-color:#b3f0ff;
		}
		a{
			text-decoration:none;
            -webkit-tap-highlight-color:transparent;
		}
		li{
			list-style:none;
		}
		.header{
			height:45px;
			width:100wv;
			border-bottom:2px solid grey;
			background-color:#1ac6ff;
		}
		.header .leftheader{
			width:50%;
			display:flex;
			height:45px;
			line-height:45px;
			margin:0 20%;
			font-size:18px;
		}
		.header .leftheader h2{
			margin:0 10px;
		}
		.header .rightheader{
			width:50px;
			height:45px;
			line-height:45px;
			position:fixed;
			right:10px;
			top:8px;
		} 
		.header .rightheader img{
            height:35px;
            width:35px;
		}
		.slider{
			height:220px;
			width:30%;
			margin:20px 20px 0 50px;
			border-radius:20px;
			box-shadow:-1px -1px 10px 2px black , 1px 1px 10px 2px black;
			overflow:hidden;
			float:left;
			background-color:white;
		}
		.slider .sliderimg{
			width:100%;
			animation:slider 5s infinite;
		}
		.slider .sliderimg div{
			height:220px;
			width:100%;
			object-fit:cover;
		}
		@keyframes slider{
			0%{
				margin-top:0;
			}
			50%{
				margin-top:-220px;
			}
			100%{
				margin-top:-440px;
			}
		}
		.slider .sliderimg div img{
			height:100%;
			width:100%;
			object-fit:contain;
		}
		.special{
			width:60%;
			overflow-y:hidden;
			overflow:auto;
			margin:20px 40px;
			scrollbar-color:red white;
			scrollbar-width:thin;
			box-shadow:-1px -1px 10px 2px black , 1px 1px 10px 2px black;
			border-radius:20px 20px;
			overflow-y:hidden;
			background:white;
		}
		.special .speciall{
			display:flex;
			float:left;	
			margin:17px 0;
		}
		.special .specialbox{
			width:300px;
			border-radius:20px;
			float:left;
			margin:0 20px;
			overflow:hidden;
		}
		.special .specialbox img{
			height:100%;
			width:100%;
			object-fit:contain;
		}
		.barbackground{
			height:100vh;
			width:100vw;
			background-color:#80e5ff;
			opacity:0.7;
			position:fixed;
			top:0;
			left:0;
			z-index:5;
			display:none;
		}
		.leftsidebar{
			width:20%;
			padding:20px;
			border-radius:20px;
			background-color:#e6faff;
			position:fixed;
			top:50%;
			left:50%;
			transform:translate(-50%,-50%);
			z-index:10;
			box-shadow:-1px -1px 30px 1px black , 1px 1px 30px 1px black;
			display:none;
		}
		.leftsidebar .leftsidebarheader{
			height:30px;
			width:100%;
			text-align:center;
			line-height:30px;
			background-color:#00ccff;
			padding:10px 0 10px 0;
			border-radius:10px;
		}
		.leftsidebar .options li{
            height:30px;
            width:100%;
            line-height:30px;
            margin-top:10px;
            background-color:#66e0ff;
            border-radius:20px;
            text-align:center;
            list-style:none;
            cursor:pointer;
            color:#0044cc;
		}
		.leftsidebar .options li:hover{
			background-color:#99ebff;
		}
		.leftsidebar .moreoption img{
            height:35px;
            width:35px;
            display:flex;
            flex-wrap:wrap;
            float:left;
            margin:20px 0 0 20px;
            cursor:pointer;
		}
		.categoryheader{
			height:30px;
			width:100%;
			text-align:center;
			line-height:30px;
			padding:20px 0 20px 0;
		}
        .categorylist{
        	width:95%;
        	display:flex;
        	flex-wrap:wrap;
        	margin:auto;
        	border-radius:20px;
        	background-color:white;
			box-shadow:-1px -1px 30px 1px black , 1px 1px 30px 1px black;
        }
        .categorylist a{
          	margin:10px auto;
          	text-decoration:none;
            color:#5c0099;
            -webkit-tap-highlight-color:transparent;
          }
        .category{
           	border-radius:20px;
        	padding:5px;
        	margin:10px auto 10px 10px;
        	background-color:#d9d9d9;
        }
        .category .categoryimg{
        	height:80px;
        	width:80px;
        	border-radius:20px;
        }
        .category .categoryimg img{
        	height:100%;
        	width:100%;
        	object-fit:contain;
        	border-radius:20px;
        }
        .category .categoryname{
        	height:20px;
        	width:80px;
        	text-align:center;
        	line-height:20px;
        	border-radius:20px;
        }
        .category .categoryname li{
        	list-style:none;
        	color:black;
        }
        .features{
        	width:95%;
        	margin:10px auto;
        	padding:15px 0;
        	display:flex;
        	flex-wrap:wrap;
        	border-radius:20px;
        }
        .features .featureslist{
        	display:flex;
        	height:40px;
        	margin:20px auto;
        	border-radius:20px;
        	padding:10px;
        	background-color:#999999;
        }
        .features .featuresicon{
        	height:40px;
        	width:40px;
        	border-radius:20px;
        }
        .features .featuresicon img{
        	height:100%;
        	width:100%;
        	object-fit:contain;
        	border-radius:20px;
        }
        .features .featuresheading{
        	height:40px;
        	width:auto;
        	text-align:center;
        	line-height:40px;
        	border-radius:20px;
        	padding:0 10px;
        }
        .features .featureline{
        	height:40px;
        	margin:auto 0;
        	border:2px solid black;
        }
        .review{
        	width:95%;
        	margin:auto;
        	border-radius:20px;
        	padding:10px;
        }
        .review .reviewheading{
        	padding:20px 10px;
           	width:70%;
        	border-radius:20px;
        	margin:20px auto;
        	text-align:center;
			box-shadow:-1px -1px 10px 2px black , 1px 1px 10px 2px black;
			background-color:white;
        }
        .review .reviewheading h3{
        }
        .review .reviewheading h3 li a{
        	padding:10px 30px;
        	margin:20px auto;
        	border-radius:20px;
        	color:black;
        	background-color: #ff8080;
        }
         .review .reviewheading h3 li a:hover{
         	background-color:#99ebff;
         	color:white;
         	border-radius:10px;
         }
        .review .reviewbox{
        	width:80%;
        	border-radius:20px;
        	margin:auto;
        	display:flex;
        	flex-wrap:wrap;
        	padding:10px;
			box-shadow:-1px -1px 10px 2px black , 1px 1px 10px 2px black;
        	background-color:white;
        }
        .review .reviewbox .reviewlist{
        	width:250px;
        	border-radius:20px;
        	margin:5px auto;
        	border:2px solid black;
        	background-color:#d9d9d9;
        	overflow:hidden;
        }
        .review .reviewbox .reviewlist li{
        	font-size:20px;
        	text-align:center;  
        	font-weight:bold;
        }
        .review .reviewbox .reviewlist #star{
        	font-size:18px;
        	background-color:#4d4d4d;
        	color:white;
        	padding:20px 0;
        	border-radius:20px 20px 0 0;
        	border-radius:0;
        }
        .review .reviewbox .reviewlist #underline{
        	border:1px solid grey; 
        	width:80%; 
        	margin:auto;
        }
        .review .reviewbox .reviewlist #contain{
        	font-style:italic;
        	background-color:#d9d9d9;
        	word-wrap:break-word;
        	margin:10px 0;
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
        	background-color:#80e5ff;
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
         @media screen and (max-width:1090px){
            .review{
            	display:block;
            }
            .review .reviewheading{
            	width:300px;
            	margin:20px auto;
            }
            .review .reviewbox{
            	margin:20px auto;
            }
            .leftsidebar{
            	width:300px;
            }
         }
         @media screen and (max-width:1000px){
        	
				.slider{
					margin:20px 20px 0 10px;
				}

				.special{
					width:65%;
				}
        }
         @media screen and (max-width:700px){
				.special{
					width:60%;
				}
        }
         @media screen and (max-width:600px){
         	    .slider{
         	    	height:200px;
         	    }
         	    .slider .sliderimg div{
         	    	height:200px;
         	    }
         	    @keyframes slider{
					0%{
						margin-top:0;
					}
					50%{
						margin-top:-200px;
					}
					100%{
						margin-top:-400px;
					}
		            }
				.special{
					height:200px;
					width:60%;
				}
				.special::-webkit-scrollbar{
					width:0;
				}
				.special .speciall{
			        height:200px;
			        margin:0;
		        }
		        .special .speciall .specialbox{
			        height:180px;
			        margin:5px 10px;
		        }
		        .leftsidebar{
		        	width:80%;
		        }
		         .leftsidebar .options li{
		        	padding:6px 0;
		        }
		        .categorylist{
		        	border-bottom:2px solid black;
		        }
		         .features{
		        	border-bottom:2px solid black;
		        	border-top:2px solid black;
		        	background-color:white;
		        	margin-top:20px;
		        }
        }
         @media screen and (max-width:636px){
         	   .slider{
         	    	float:none;
         	    	width:95%;
         	    	margin:20px auto;
         	    }
				.special{
					float:none;
					width:95%;
					margin:20px auto;
				}
				.features .featureline{
					display:none;
				}
         }
          @media screen and (max-width:490px){
          	    .header .leftheader{
          	    	width:auto;
					margin:0 5%;
		        }
		        .categorylist{
		        	padding-right:0;
		        }
		        .category{
                	margin:20px auto 0 10px;
                 }
                 .review .reviewbox{
                 	width:90%;
                 }
                .review .reviewbox .reviewlist{
                	width:100%;
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
	</style>
</head>
<body>
<div class="header">
	<div class="leftheader"><h2>Namobakery</h2>order now</div>
	<div class="centerheader"></div>
	<div class="rightheader"><img src="icon/menu.png" onclick="opennfun()"></div>
</div>

<div class="second">
<div class="slider">
	<div class="sliderimg">
		    <?php

		      include 'owner/conn.php';

		      $query = "SELECT * FROM `slider`";

		      $run = mysqli_query($conn,$query);

		      if(mysqli_num_rows($run)){

		        while ($row = mysqli_fetch_assoc($run)) {
		          

			   ?>
		<div><img src="owner/sliderimg/<?php echo $row['img']; ?>"></div>
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
<div class="special">
	   <div class="speciall" id="aaa">
        <div class="specialbox"><img src="icon/pizza.jpg"></div>	 
        <div class="specialbox"><img src="icon/burger.jpg"></div>	 
        <div class="specialbox"><img src="icon/magg.jpg"></div>
        <div class="specialbox"><img src="icon/momos.jpg"></div>
       </div>
</div>


<div class="barbackground" onclick="closefun()" id="sidebar"></div>
<div class="leftsidebar" id="leftsidebar">
	<div class="leftsidebarheader">
		<h2>Namobakery</h2>
	</div>
	<div class="options">
		<a href="index.php"><li>Home</li></a>
		<a href="cart.php"><li>Cart</li></a>
		<a href="track.php"><li>Track order</li></a>
		<a href="aboutus.php"><li>About us</li></a>
		<a href="namohelp.php"><li>Help</li></a>
		<a href="feedback.php"><li>Feedback</li></a>
	</div>
	<div class="moreoption">

		                       <?php

                                     include 'owner/conn.php';

                                       $query = "SELECT * FROM `links`";

                                      $run = mysqli_query($conn,$query);

                                     if(mysqli_num_rows($run) >= 1){

                                     while ( $row = mysqli_fetch_assoc($run)) {
          

                            ?>  
		<div><a href="<?php echo $row['whatsapp']; ?>"icon/google><img src="icon/whatsapp.png"></a></div>
		<div><a href="<?php echo $row['instagram']; ?>"icon/google><img src="icon/instagram.png"></a></div>
		<div><a href="<?php echo $row['map']; ?>"icon/google><img src="icon/map.png"></a></div>
		<div><a href="tel:<?php echo $row['mobile']; ?>"icon/google><img src="icon/phone.png"></a></div>
		<div><a href="mailto:<?php echo $row['gmail']; ?>"icon/google><img src="icon/gmail.png"></a></div>

		                        <?php
                                }

                                }else{
                                        echo "no record found";
                                }
                                mysqli_close($conn);

                            ?> 
       		
	</div>
</div>

<div class="categoryheader"><h1>Category</h1></div>
<div class="categorylist">
	<?php include 'category.php'; ?>
</div>


<div class="features">
	<div class="featureslist">
		<div class="featuresicon"><img src="icon/fast.jpg"></div>
		<div class="featuresheading"><li>Fast delivery</li></div>
	</div>
		<div class="featureline"></div>
	<div class="featureslist">
		<div class="featuresicon"><img src="icon/delivery.jpg"></div>
		<div class="featuresheading"><li>Home delivery</li></div>
	</div>
		<div class="featureline"></div>
	<div class="featureslist">
		<div class="featuresicon"><img src="icon/cash.jpg"></div>
		<div class="featuresheading"><li>Cash on delivery</li></div>
	</div>
		<div class="featureline"></div>
	<div class="featureslist">
		<div class="featuresicon"><img src="icon/foode.jpg"></div>
		<div class="featuresheading"><li>hygienic food</li></div>
	</div>
</div>

<div class="review">
	<div class="reviewheading"><h3><li>Your review  are precious to us it motivate to become better</li><br><br><li><a href="give-review.php">Review</a></li></h3></div>
	<div class="reviewbox">


		                       <?php

                                     include 'owner/conn.php';

                                       $query = "SELECT * FROM `givereview`";

                                      $run = mysqli_query($conn,$query);

                                     if(mysqli_num_rows($run) >= 1){

                                     while ( $row = mysqli_fetch_assoc($run)) {
          

                            ?>  

			<div class="reviewlist">
				<li id="star"><?php echo $row['name'] ." : ". $row['stars']." of 10"; ?></li>
				<li id="underline"></li>
				<li id="contain">
					<?php echo $row['review']; ?> 
				</li>
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

  function onclickcart() {
    document.getElementById("cartid").style.display = "none";
    document.getElementById("cartoverf").style.display = "none";
  }
</script>
</html>