<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		*{
            margin:0;
            padding:0;
		}
		.body{
			height:100vh;
			width:100wh;
		}
		.head{
			position:fixed;
			top:50%;
			left:50%;
			transform:translate(-50%,200%);
			color:purple;
		}
		.loaderdiv{
			position:fixed;
			top:50%;
			left:50%;
			transform:translate(-50%,-50%);
		}
		.load{
			width:15px;
			height:0px;
			display:inline-flex;
			margin:5px;
			border-radius:20px;
			animation:animi 2s infinite;
		}
		.load:nth-child(2){
			animation-delay:0.1s;
		} 
		.load:nth-child(3){
			animation-delay:0.2s;
		} 
		.load:nth-child(4){
			animation-delay:0.3s;
		}  
		.load:nth-child(5){
			animation-delay:0.4s;
		}        
		@keyframes animi{
        	0%{
               	height:10px;
               	background-color:green;
        	}
            25%{
            	background-color:#f2cffa;
            }
        	50%{
        	    height:80px;
        	    background-color:purple;
        	}
            75%{
            	background-color:#f2cffa;
            }
        	100%{
        		height:10px;
        		background-color:white;
        	}
        }
        
		
	</style>
</head>
<body>
<div class="body"></div>
	<div class="loaderdiv">
		<div class="load"></div>
		<div class="load"></div>
		<div class="load"></div>
		<div class="load"></div>
		<div class="load"></div>
	</div>
	<div class="head"><h1>Loading ...</h1></div>
</body>
</html>