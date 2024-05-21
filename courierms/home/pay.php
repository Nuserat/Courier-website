<html>

<body>
<?php
    if (isset($_POST['submit'])) { 
  include('../dbconnection.php');
  $bid = $_POST["book_id"];
  $sql = "SELECT * from courier";
 // $price ="SELECT `price` from courier";
  $result=mysqli_query($dbcon,$sql);
  while ($data=mysqli_fetch_assoc($result))
     {
    if($bid==$data['billno'])
    {		
	// $Admin_income="SELECT `price` from courier AS DECIMAL(10, 2)) * 0.3";
	//	$mincome= "SELECT `price` from courier AS DECIMAL(10, 2)) * 0.1";
	//	$sql1 = "UPDATE balance (Admin_income, mincome ) VALUES ($Admin_income, $mincome )'";
	$sql1 = "SELECT * from courier";
      mysqli_query($dbcon,$sql1);
    //  $sql2 = "UPDATE balance ";
  // mysqli_query($dbcon, $sql2);
    }
  }

  $run = mysqli_query($dbcon, $sql1);
  if ($run == true) {

	?> <script>
			alert('ORDER Successfull )');
			window.open('courierMenu.php', '_self');
		</script>
	<?php
    }
}?>

</body>
</html>

<!--$sql2 = "SELECT * from balance";
  $Admin_income=$price * 0.3;
  $mincome=$price * 0.1;
-->

