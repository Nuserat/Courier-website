<!DOCTYPE html>
<html>
<head>
	<title>Book Status</title>
</head>
<style>
	*{
    margin: 0px;
    padding: 30;
    background-repeat: no-repeat;
}
	
    body {
	  margin: 0;
	  background: white;;
	}
	table {
		font-size: 22px;
	}
	td {
		text-align: center;
	}
	#td1
	{
		background-color: rgb(255,174,66);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: center;
		width: 700px;
		padding: 50px;
		box-shadow: 0 10px 20px  rgb(118 129 85 / 90%);
	}
	th {
		font-weight: bold;
		padding-left: 15px;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin:  10px 500px ;
		width: 500px;
		padding: 50px;
		box-shadow: 0 10px 20px  rgb(118 129 85 / 90%);
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 20%;
	  	font-size: 24px;
	  	background-color:  rgb(255,174,66);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}

	li a.active {
	  	background-color: rgb(228,155,15);
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: #e7da6f9e;
	  	color: white;
	  	text-decoration: underline;
	}
</style>
<body>
<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 38px;">CARGO-DASH COURIER SERVICE</td>
		</tr>
	</table>
	<ul>
		<li><a href="dashboard1.php" class="active">User Info</a></li>
		<li><a href="req.php">Courier request</a></li>
        <li><a href="confirm.php">Confirm request</a></li>
	<!--	<li><a href="deliver.php">Delivery History</a></li>  -->
		<li><a href="logout2.php">Logout</a></li>
	</ul>
	
	<h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">Request Information</h1>
</div>

<div style="overflow-x:auto;">
<table width='70%' border="1px solid" style="margin-left:330px; margin-right:auto; margin-top:20px; font-weight:bold;border-spacing: 5px 5px;">
    <tr style="background-color: pink;">
        <th>Parcel No.</th>
        <th>Delivery date</th>
        <th>Deliver Status</th>
		<th>Packing Status</th>
    </tr>

	<?php
    include('../dbconnection.php');
    $qryd= "SELECT * FROM `courier` ";
	$run= mysqli_query($dbcon,$qryd);
	$qry= "SELECT * FROM `booking` ";
	$run1= mysqli_query($dbcon,$qry);

	
    if(mysqli_num_rows($run)<1){
        echo "<tr><td colspan='6'>No record found..</td></tr>";
    }
    else{
        while($data=mysqli_fetch_assoc($run)) {
			if ($data['status']=='Confirmed'){
				while($data1=mysqli_fetch_assoc($run1))	{		
        ?>
        <tr align="center">
		<td><?php echo $data1['billno'];  ?></td>
            <td><?php echo $data1['date']; ?></td>
            <td><?php echo $data1['delivery'];?></td>
			<td><?php echo 'Packed'; }?></td>
			</tr> <?php
			}
		}  
		mysqli_free_result($run); 
    }  ?>

</table><br><br>
			<table class="basic_box">
<tr >
<td colspan="1">Enter Booking ID:</td>
<td colspan="2">
<form action="mci.php" method="post">
						<input type="number" name="book_id">
						</td>
			</tr>
			<tr>
				<td></td>
				<td colspan="4" align="center"><input type="submit" name="submit" value="delivery" style="background-color: orange; margin-top:10px; border-radius: 15px; width: 140px; height: 40px;cursor:pointer;"></td>
</tr>
	</table>
    
</table>
</div>
</body>
</html>