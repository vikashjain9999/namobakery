<!DOCTYPE html>
<html>
<head>
	<title></title>
  <?php  ?>
	<style type="text/css">
		   *{
	      	padding:0;
	      	margin:0; 
	      	user-select: none;
	      }	
        .loading{
          background:#f0ad41; 
          height:100%;
          width:100%;
          z-index:100;
          position:fixed; 
        }
         .outerload{
          width:auto;   
          position:fixed; 
          top:50%;
          left:50%;  
          transform:translate(-50%,-50%);  
        }
        .outerload .img img{
          height:200px;
          width:200px;
          animation:loadingbar 10s infinite;
        }
        .outerload .img h1{
          text-shadow:2px 2px 5px red;
        }
           @keyframes loadingbar{
           	   0%{
                 transform:rotate(0deg);
                 text-shadow:2px 2px 5px red;  
           	   }
           	   100%{
                 transform:rotate(360deg); 
                 text-shadow:2px 2px 5px blue;
           	   }
           }

        .outerload .img h1{
          animation:bar 5s infinite;
        }
           @keyframes bar{
               0%{
                 text-shadow:2px 2px 10px red;
                 font-size:30px;  
               }
               25%{
                 text-shadow:2px 2px 10px green;  
               }
               75%{
                 text-shadow:2px 2px 10px white;
               }
               100%{
                 text-shadow:2px 2px 10px blue;
                 font-size:35px;
               }
           }
           @media screen and (max-width:578px){
             .outerload .img{ 
                 width:100%;
                 margin:0;  
              }
             .outerload .img img{
                 width:100%;  
              }
           } 
</style>
</head>
<body>
<div class="loading" id="loader">
  <div class="outerload">
  <div class="img"><img src="icon/pizza.png"><br><h1>Namobakery ......</h1></div>
    </div>
</div>
</body>
</html>
