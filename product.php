
   	<?php
include 'terminate.php';
      include 'owner/conn.php';

      $query = "SELECT * FROM `productlist` WHERE `type`='np' ORDER BY type,pdate ASC";

      $run = mysqli_query($conn,$query);

      if(mysqli_num_rows($run) >= 1){

          echo "<div class='offe'><h1>Great deals</h1></div>";

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
header("location:index.php");
?>
   	</div>   
