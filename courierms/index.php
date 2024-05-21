
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
		
		.container{
			margin: 10px 100px ;
		}
		.container .li{
			display: inline;
			float: right;
		}
		
		h1{
			margin: 10px 100px ;
		}
		p{
			margin: 10px ;
		}
           ul
		{
  			list-style-type: none;
			background-color: #0F0310;
			margin-bottom: 0px;
			color: white;
			margin-top: 0px;
			padding: 0px;
			overflow: hidden;
			margin-left: -10px;
			margin-right: -10px;
			z-index: 1;
			position: sticky;
			top: 0px;
		}
		li
		{
			display: inline;
			float: right;
		}
    a:link, a:visited 
		{
			color: white;
			padding: 17px 25px;
			text-align: center; 
			text-decoration: none;
			display: block;
		}

		a:hover, a:active 
		{
			background-color: white;
			color:  rgb(118 129 85 / 90%);
		}
      	body {
			margin: 0px;
     .		}

        .active {
		  background-color: #717171;
		}
		.mySlides{
			margin:  50px ;		}
    </style>
</head>
<body>
<ul>
 <!--  <img src="images/logohome1.png" height="60" alt=""> -->
<li> <a href="customerSI.php" >Sign In</a></li>
		<li><a href="admin/adminlogin.php">Admin Site</a></li>
        <li><a href="Marchent/home.php">Marchent Site</a></li>
        <li> <a href="index.php" >Home</a></li>
        
		</ul>
  <img src="images/fonta.jpg"  style="width:100%"> 
    <div class="mySlides">
					<img src="images/pross.png" alt="Snow" style="width:100%">
					<img src="images/ss1.png" alt="Snow" style="width:100%">
					<img src="images/ss0.png" alt="Snow" style="width:90%">
		</div>
</body>
</html>
<?php include('home/footer.php'); ?>
