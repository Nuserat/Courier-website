<!-- user will delete there courier themself when click delete link in track section-->
<?php
    include('../dbconnection.php');
    $billno= $_REQUEST['bb'];

    $qry = "DELETE FROM `courier` WHERE `billno`='$billno'";
    $run = mysqli_query($dbcon,$qry);
    $qry1 = "DELETE FROM `payment` WHERE `book_id`='$billno'";
    $run1 = mysqli_query($dbcon,$qry1);
    $qry2 = "DELETE FROM `booking` WHERE `billno`='$billno'";
    $run2 = mysqli_query($dbcon,$qry2);

    if($run==true){
    ?>  <script>
        alert('Courier Deleted Successfully :)');
        window.open('trackMenu.php','_self');
                
        </script>
    <?php
}
?>