<html>
<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>
<?php
include('head.php');
?>
<style>
	

	#td1
	{
		background-color:  rgb(255,174,66);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin:  10px 500px ;
		width: 500px;
		padding: 50px;
		box-shadow: 0 10px 20px  rgb(118 129 85 / 90%);
	}
	td {
		text-align: center;
	}
	th {
		font-weight: bold;
		padding-left: 15px;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 19%;
	  	font-size: 24px;
	  	background-color: rgb(255,174,66);
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
	  	background-color:  rgb(228,155,15);
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: rgb(228,155,15);;
	  	color: white;
	  	text-decoration: underline;
	}
</style>
</head>
<body>
<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 38px;">CARGO-DASH COURIER SERVICE</td>
		</tr>
	</table>
	<ul>
		<li><a href="dashboard.php" class="active">User Info</a></li>
		<!--<li><a href="tck.php">Price Control</a></li> -->
		<li><a href="deletedata.php">Delete Data</a></li>
		<li><a href="deleteusers.php">Delete Users</a></li>
        <li><a href="Emails.php">Check E-mails</a></li>
		<li><a href="deliver.php">Delivery Details</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>

<div class="admin control">
 
    <h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">Delivery Information</h1>
</div>

<div style="overflow-x:auto;">
<table width='70%' border="1px solid" style="margin-left: 330px; margin-right:auto; margin-top:10px; font-weight:bold;border-spacing: 5px 5px;">
<tr style="background-color: pink;">
        <th>Booking ID</th>
        <th>Users Name</th>
        <th>Receiver Email</th>
        <th>Packing </th>
    </tr>
    <?php
    include('../dbconnection.php');
    $qryd= "SELECT * FROM `courier` ";
   
	if ($result=mysqli_query($dbcon,$qryd))
	{
		while ($row=mysqli_fetch_row($result))
	  {
		if($row[15]=='Waiting'){
        ?>
        <tr align="center">
            <td><?php echo $row[11]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[3]; ?></td>
			<td><?php echo $row[15];}?></td>
        </tr> <?php
     
	}
	mysqli_free_result($result); 
}?>
</table><br><br>
			<table class="basic_box">
<tr >
<td colspan="1">Enter Booking ID:</td>
<td colspan="2">
<form action="confirm.php" method="post">
						<input type="number" name="book_id">
						</td>
			</tr>
			<tr>
				<td></td>
				<td colspan="4" align="center"><input type="submit" name="submit" value="Update Order" style="background-color: orange; margin-top:10px; border-radius: 15px; width: 140px; height: 40px;cursor:pointer;"></td>
</tr>
	</table>
	</div>
</body>
</html>







<!--    <button type="submit" formaction="cancel_room.php">Cancel Booking</button></td></form>	
-->

