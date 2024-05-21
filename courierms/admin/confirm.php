<html>
  <body>
  
	<?php
    if (isset($_POST['submit'])) { 
  include('../dbconnection.php');
  $bid = $_POST["book_id"];
  $sql = "SELECT * from courier";
  $result=mysqli_query($dbcon,$sql);
  while ($row=mysqli_fetch_row($result))
     {
    if($bid==$row[11])
    {				
      $row=mysqli_fetch_row($result);
      $sql1 = "UPDATE courier SET status='Confirmed' WHERE billno='$bid'";
      mysqli_query($dbcon,$sql1);
        header("Location: deliver.php");
    }
   
  }
    }
?>
  
  </body>
</html>



