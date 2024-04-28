 <div class="footer" id="about">

    <div class="footercancel" onclick="footerclose()"><img src="icon/cancel.png"></div>
    
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
       		<h3>Any complain or query</h3>
       		<form method="post">
       			<input type="text" placeholder="Enter complain or query" name="candq"><br>
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
       			<h1>Address</h1>
       			<h3><?php echo $row['address']; ?></h3>
       			<br>
       			<h1>phone no</h1>
       			<h3><?php echo $row['phone']; ?></h3>
       			<br>
       			<h1>mobile no</h1>
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

