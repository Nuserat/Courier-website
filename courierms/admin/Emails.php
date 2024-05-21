<!DOCTYPE html>
<head>
<style>
	body {
	  margin: 0;
	  background: white;
	}
	table {
		font-size: 22px;
	}
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
		margin: center;
		width: 700px;
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
	  	background-color:   rgb(228,155,15);
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
	<!--	<li><a href=".php">Price Control</a></li>  -->
		<li><a href="deletedata.php">Delete Data</a></li>
		<li><a href="deleteusers.php">Delete Users</a></li>
        <li><a href="Emails.php">Check E-mails</a></li>
		<li><a href="deliver.php">Delivery Details</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>

<div class="admin control">
 
    <h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">Email Information</h1>
</div>

<div style="overflow-x:auto;">
<table width='70%' border="1px solid" style="margin-left: 330px; margin-right:auto; margin-top:0px; font-weight:bold;border-spacing: 5px 5px;">
    <tr style="background-color: pink;">
        <th>No.</th>
        <th>Email ID</th>
        <th>Subject </th>
        <th>Message </th>
    </tr>

    <?php
    include('../dbconnection.php');

    $qryd= "SELECT * FROM `contacts`";
    $run= mysqli_query($dbcon,$qryd);

    if(mysqli_num_rows($run)<1){
        echo "<tr><td colspan='6'>No record found..</td></tr>";
    }
    else{
        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++;
        ?>
        <tr align="center">
            <td><?php echo $count; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['subject']; ?></td>
            <td><?php echo $data['msg']; ?></td>
        </tr>
        <?php
        }
    }
    ?>
</body>
</html>