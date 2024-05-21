
<?php include('header.php');
    if (isset($_POST['submit'])) { 
   include('../dbconnection.php');
   $bid = $_POST["book_id"];
   // $billno = $_SESSION['emm'];
   $qryd = "SELECT * from courier WHERE `billno`='$bid'";

   if ($result=mysqli_query($dbcon,$qryd))
   {
       while ($row=mysqli_fetch_row($result))
     {
       if($row[15]=='Waiting'){
        ?>	
         <h2 style="margin: 40px;background-color:#CFB394;text-align:center">Status >> On The Way...</h2>		
        <table width='70%' border="1px solid" style="margin-left:200px; margin-right:auto; margin-top:25px; font-weight:bold;border-spacing: 5px 5px;">
    <tr style="background-color: #CFB399;">
    <th>Parcel No</th>
        <th>Deliver Status</th>
		<th>Packing Status</th>
    </tr>
    <?php
    include('../dbconnection.php');
	$qry= "SELECT * FROM `booking`WHERE `billno`='$bid'";
	$run= mysqli_query($dbcon,$qry);
    $data=mysqli_fetch_assoc($run)
        ?>
        <tr align="center">
        <td><?php echo $data['billno'];?></td>
            <td><?php echo $data['delivery'];?></td>
			<td><?php echo 'Waiting'; ?></td>
			</tr> 
            </table><br>
           
        <img src="../images/sts.png" height="280" alt="Snow" style="margin:10px 500px">
        <hr/>
        <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="background-color:#CFB396;height:60px;width:130px;border-radius:15px;cursor:pointer">GoBack</button>
    </div>
         <?php 
         
    }
    else  if($row[15]=='Confirmed'){
        ?>
         <h2 style="margin: 40px;background-color:#CFB394;text-align:center">Status >> On The Way...</h2>		
        <table width='70%' border="1px solid" style="margin-left:200px; margin-right:auto; margin-top:25px; font-weight:bold;border-spacing: 5px 5px;">
    <tr style="background-color: #CFB399;">
    <th>Parcel No</th>
        <th>Deliver Status</th>
		<th>Packing Status</th>
    </tr>
    <?php
    include('../dbconnection.php');
	$qry= "SELECT * FROM `booking`WHERE `billno`='$bid'";
	$run= mysqli_query($dbcon,$qry);
    $data=mysqli_fetch_assoc($run)
        ?>
        <tr align="center">
        <td><?php echo $data['billno'];?></td>
            <td><?php echo $data['delivery'];?></td>
			<td><?php echo 'Packed'; ?></td>
			</tr> 
            </table><br>
           
        <img src="../images/sts.png" height="280" alt="Snow" style="margin:10px 500px">
        <hr/>
        <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="background-color:#CFB396;height:60px;width:130px;border-radius:15px;cursor:pointer">GoBack</button>
    </div>
         <?php 
    }

    else{
        ?>
        <h1 style="margin: 60px;background-color:#CFB396;text-align:center">Status >>ITEMS DELIVERED..<br /><p>THANK YOU FOR USING OUR SERVICE</p></h1>
        <img src="../images/sts.png" height="280" alt="Snow" style="margin: 0px 500px">
        <br/> <br/><hr/>
        <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="background-color:#e56306;;height:60px;width:130px;border-radius:15px;cursor:pointer">GoBack</button>
        </div>
        <?php
    }

    }}
}
?>


