<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		:root{
			--first:black;
			--second:white;
		}
		*{
	      	padding:0;
	      	margin:0; 
	      	user-select: none;
	      }	
        body{
          background-color:var(--first); 
        }
        .first{
        	position:fixed;
        	height:100vh;
        	width:100vw;
        	overflow:hidden;
        	display:flex;
        }
        .background{
        	 width:50%;
        }
        .background img{
            width:100%;
            height:100%;
        }
        .categorylist{
          	 width:50%;
          	 margin:5px auto;
          	 border-radius:20px;
          	 display:flex;
          	 flex-wrap:wrap;
          	 background:black;
          	 overflow-y:scroll;
          }
          .categorylist::-webkit-scrollbar{
               width:0;
          }
          .categorylist h1{
          	 text-align:center;
             color:var(--second);
             margin:20px; 
             width:100%;
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
             background-color:var(--second); 
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
                color:var(--first);
                margin-top:10px;
          }
          .categorylist .category .cateimg img{
          	 height:100%;
          	 width:100%;
          	 object-fit:contain;
          	 border-radius:30px;
          }
        .footer{
	      	width:310px; 
	      	height:100vh;
	      	display:flex;
	      	flex-wrap:wrap;
	      	background:var(--first); 
	      	overflow-y:scroll;
	      }
	      .footer::-webkit-scrollbar{
               width:0;
          }
	      .footer .left{
	      	height:300px;
	      	width:300px;
	      	margin:10px auto;  
	      	border:2px solid #055157; 
	      	border-radius:15px;   
	      	overflow:hidden;
          background-color:#daf5f7; 
	      }
	      .footer .left a{ 
	      	display:flex;
	      	line-height:50px;
	      	text-decoration:none;    
	      	color:#07838c; 
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
	      	margin:10px auto;  
	      	border:2px solid #055157; 
	      	border-radius:15px;   
	      	overflow:hidden;
	      	text-align:center; 
          background-color:#daf5f7;
	      }
	      .footer .center h3{
	      	margin:20px 0 20px 0 ;
	      } 
	      .footer .center input{
              height:40px;
              width:80%;
              text-align:center;
              margin-top:5px;    
	      }
	      .footer .center input[type='text']{
	      	 height:100px; 
	      }
	      .footer .right{
	      	height:300px;
	      	width:300px;
	      	margin:10px auto;  
	      	border:2px solid #055157; 
	      	border-radius:15px;   
	      	overflow:hidden;
	      	text-align:center;
          background-color:#daf5f7; 
	      }

	     .footercancel img{
	     	height:40px;
	     	width:40px;
	     	background-color:white;
	     	position:fixed;
	     	top:20px;
	     	left:20px;
	     	border-radius:50px;
	     }
	     .footeropen img{
	           display:none;
	     }
	      @media screen and (max-width:1100px){
	      	.first{
        	     display:block;
        	     height:100%;
        	     overflow-y:scroll;
              }
             .background{
        	     width:100%;
        	     height:100vh;
        	     position:fixed;
        	     z-index:-1;
               }
               .categorylist{
		          	 width:100%;
		          	 position:absolute;
		          	 top:60%;
		          	 z-index:10;
		          	 background:rgba(0,0,0,0.3);
		          	 overflow:unset;
              }
              .footer{
			      	width:100%; 
			      	height:100%;
			      	position:fixed;
			      	z-index:15;
			      	display:none;
	           }
	           .footeropen img{
	              	height:40px;
			     	width:40px;
			     	background-color:white;
			     	position:fixed;
			     	top:20px;
			     	left:20px;
			     	border-radius:50px;
			     	display:block;
	           }
	      }
	</style>
</head>
<body>
	<div class="first">
<div class="background"><img src="icon/namo.png"></div>

 <div class="categorylist">
 	<h1>Categories</h1>
 	<?php include 'category.php'; ?>
 </div>

<div class="">
	 <div class="footeropen" onclick="footeropen()"><img src="icon/arrow.png"></div>
    
	<?php include 'footer.php'; ?>
</div>
    </div>
</body>
<script>
	function footerclose() {
		document.getElementById("about").style.display = "none";
	}
	function footeropen() {
		document.getElementById("about").style.display = "block";
	}
</script>
</html>