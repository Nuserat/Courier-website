<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>
<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <style>
        	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: center;
		width: 800px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	#td1
	{
		background-color:  rgb(118 129 85 / 90%);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}
	td {
		text-align: center;
		font-size: 17px;
			padding-left: 30px;
		padding-bottom:10px;
	}
       
      
		th {
		font-weight: bold;
		padding-left: 20px;
	
	}


    </style>
</head>
<body>
	
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="	text-align: center;margin-right:40% ; font-size: 28px;"></p>
		
    <?php
    include('../dbconnection.php');

			$sql = "SELECT * from pc";
            $run= mysqli_query($dbcon,$sql); 
            ?>	
			<div >
			<table class="basic_box">
			<tr>
					<td colspan="4"><p style="font-size: 20px;	margin: 0px 170px; ">COURIER CHARGES DETAILS</p>
				</td>
				<tr>
					<th >Parcel Type</th>
					<th >Weight(KG) </th>
					<th >Price</th>
				</tr>
				<tr></tr>
			<?php 
			while ($row=mysqli_fetch_row($run))
    		{	?>	
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; 
				
			} ?>
			</td>
				</tr>
				</table><br><br>
    </div>
			
	<div >
		
	<table class="basic_box">
			<tr>
					<td colspan="7"><p style="font-size: 20px; text-align: center; text-decoration: underline;">Payment Details</p></td>
				<tr>
					<th>Payment ID</th>
					<th>Weight</th>
					<th> Date</th>
					<th> Price</th>
				</tr>
				<tr>
				<?php 
			while ($row=mysqli_fetch_row($run))
    		{	?>	
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; 
				
			}?>


<?php	
						$email = $_SESSION['emm'];

						$sql= "SELECT * FROM `courier` WHERE `semail`='$email'";
						$run= mysqli_query($dbcon,$sql); 
					
					  if(mysqli_num_rows($run)<1){
						echo "<tr><td colspan='6'>No record found..</td></tr>";
					}
					else{
					while ($row=mysqli_fetch_row($run))
    		{	?>	
				<tr>
					<td><?php echo $row[11]; ?></td>
					<td><?php echo $row[10]; ?></td>
					<td><?php echo $row[13]; ?></td>
					<td><?php echo $row[16]; 
				
			}
		} ?>
			 
				</table><br><br>
				<table class="basic_box">
<tr>
<td colspan="1" >Enter Payment ID:</td>
<td colspan="2">
<form action="pay.php" method="post">
						<input type="number" name="book_id">
						</td>
			</tr>
			<tr>
				<td></td>
				<td colspan="4" align="center"><input type="submit" name="submit" value="Place Payment" style="background-color: orange; margin-top:10px; border-radius: 15px; width: 140px; height: 40px;cursor:pointer;"></td>
</tr>
	</table><br>
    <p>
    1. E-mail:  fastE@sb.com <br>
    2. Bkash:  6362786223 <br>
    3. Bank:  3565656555 <br>
    </p>
    </div>
</body>
</html>

<!-- <td>
					<div align='center'>
        <button onclick="window.location.href='price.php'" style="height:40px;width:130px;border-radius:15px;cursor:pointer">Pay Now</button>
        </div>


			<tr>
					<td></td>
					<td colspan="1">Enter Booking ID:</td>
					<td colspan="2">
					<form action="pay.php" method="post">
							<input type="number" name="book_id">
							<td style="text-align: center;"><button type="submit">Pay Now</button></td>
					</td>
				</tr>

		-->