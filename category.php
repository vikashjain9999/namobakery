<?php //include 'loadingbar.php'; ?>
<?php
 
      include 'owner/conn.php';

      $query = "SELECT * FROM `category`";

      $run = mysqli_query($conn,$query);

      if(mysqli_num_rows($run) >= 1){

        

        while ( $row = mysqli_fetch_assoc($run)) {
          

   ?>
    <a href="seecategory.php?ciid='<?php echo $row['cname'] ?>'">
    <div class="category">
        <div class="categoryimg"><img src="owner/category/<?php echo $row['cfile'] ?>"></div>
        <div class="categoryname"><li><?php echo $row['cname'] ?></li></div>
    </div>
     </a>      
         
<?php
}
  

}else{
  echo "no record found";
}
mysqli_close($conn);

 //header("location:index.php");
?>