<?php
      //header("location:index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <?php  ?>
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
        .loading{
          background:#222; 
          height:100%;
          width:100%;
          z-index:100;
          position:fixed; 
        }
         .outerload{
          width:auto;   
          background:#262626; 
          position:fixed; 
          top:50%;
          left:50%;  
          padding:5px; 
          transform:translate(-50%,-50%);  
        }
        .outerload::after,.outerload::before{
          content:""; 
          width:calc(100% + 4px);
          height:calc(100% + 4px);  
          position:absolute; 
          top:-2px;
          left:-2px;  
          background:linear-gradient(45deg,#fb0094 , #0000ff , #00ff00, #ffff00, #ff0000,#fb0094 , #0000ff , #00ff00, #ffff00, #ff0000); 
          animation:loadingbar 3s linear infinite alternate; 
          background-size:400%;  
          z-index:-5; 
        }
        .outerload::after{
          filter:blur(30px);
        }
        .outerload .img{
              height:250px;
              width:250px;  
              background-color:white;
              z-index:5;  
        }
           @keyframes loadingbar{
           	   0%{
                 background-position:0 0;  
           	   }
           	   50%{
                  background-position:100% 0; 
           	   }
           	   100%{
                 background-position:0 0; 
           	   }
           }
           @media screen and (max-width:578px){
               .outerload .img{ 
                 width:100%;
                 margin:0;  
              }
              .outerloader .img video{
                 width:100%;  
              }
              .outerload{
                width:80%;
                padding:5px;  
              }
           } 
</style>
</head>
<body>
<div class="loading" id="loader">
<div class="outerload">
  <div class="img"><video height="100%" width="100%" autoplay="" muted="" loop=""><source src="icon/namo.mp4" type="video/mp4"></video></div>
</div>
</div>
</body>
</html>


