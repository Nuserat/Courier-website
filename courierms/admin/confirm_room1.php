<html>
  <body>
  
	<?php
    if (isset($_POST['submit'])) { 
  include('../dbconnection.php');
  $bid = $_POST["price"];
  $dt = $_POST['rooms'];
  $sql = "SELECT * from pc";
  $result=mysqli_query($dbcon,$sql);
  if(strcmp($dt, "Normal Delivery")==0)
  {
	  $price =$bid ;
  }
  else if(strcmp($dt, "VIP Delivery")==0)
  {
	  $price =$bid;
  }
  else if(strcmp($dt, "Urgent Delivery")==0)
  {
	  $price =$bid;
  }
  $sqlt = "UPDATE INTO pc VALUES ('$sname', '$dt','$newDate', '$billn', '$price')";
  mysqli_query($dbcon,$sqlt);
    }
?>
  
  </body>
</html>

