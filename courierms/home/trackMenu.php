<!-- when track menu is clicked it will show all courier placed by that User-->
<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>
<?php include('header.php'); ?>
<style>
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
    table {
        width: 70%';
    border: 1px solid;
    margin-left: 380px; 
    margin-right:auto; 
    margin-top:30px; 
    font-weight:bold;
    border-spacing: 5px 5px;"}
</style>
<div style="overflow-x:auto;">
<table width='80%' border="1px dash" style="margin-top:69px;margin-left:auto ;margin-right:auto ;font-weight:bold;border-spacing: 5px 5px;border-collapse: collapse;">
    <tr style="background-color: #D3C8BD;font-size:20px; text-align: center;">
    <th>No.</th>
        <th>Payment ID.</th>
        <th>Item's Image</th>
        <th>Sender Name</th>
        <th>Receiver Name</th>
        <th>Receiver Email</th>

        <th>Action</th>
    </tr>

    <?php
    include('../dbconnection.php');

    $email = $_SESSION['emm'];

    $qryy= "SELECT * FROM `courier` WHERE `semail`='$email'";
    $run= mysqli_query($dbcon,$qryy);

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
            <td><?php echo $data['billno']; ?></td>
                <td><img src="../images/<?php echo $data['image']; ?>" alt="pic" style="max-width: 100px;"/> </td>
                <td><?php echo $data['sname']; ?></td>
                <td><?php echo $data['rname']; ?></td>
                <td><?php echo $data['remail']; ?></td>
             
                <td>
                    <a href="updationtable.php?sid=<?php echo $data['c_id']; ?>">Edit</a> ||
                    <a href="deletecourier.php?bb=<?php echo $data['billno']; ?>">Delete</a>
                    </td>
        </tr>
        <?php
        }
    }
    ?>
</table>
</div>
<br>
			<table class="basic_box">
<tr ><td>Check status</td></tr>
<tr>
<td colspan="1">Enter Payment ID:</td>
<td colspan="2">
<form action="status.php" method="post">
						<input type="number" name="book_id">
						</td>
			</tr>
			<tr>
				<td></td>
				<td colspan="4" align="center"><input type="submit" name="submit" value="Track" style="background-color: orange; margin-top:10px; border-radius: 15px; width: 140px; height: 40px;cursor:pointer;"></td>
</tr>
	</table>
</html>
<!--          <th>Price</th>  -->
