<html>
  <body>
  
	<?php
    if (isset($_POST['submit'])) { 
  include('../dbconnection.php');
  $bid = $_POST["book_id"];
  $sql = "SELECT * from booking";
  $result=mysqli_query($dbcon,$sql);
  while ($row=mysqli_fetch_row($result))
     {
    if($bid==$row[0])
    {				
      $row=mysqli_fetch_row($result);
      $sql1 = "UPDATE booking SET delivery='Delivered' WHERE billno='$bid'";
      mysqli_query($dbcon,$sql1);
        header("Location: req.php");
    }
   
  }
    }
?>
  
  </body>
</html>

