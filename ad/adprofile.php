<?php
	$username  = $_GET['q']; 
?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1><?php echo $username?>'s Profile</h1></center>
</head>
	<style>
		body
		{   background-image: url(yellow.jpg);
    		background-repeat:no-repeat,repeat;
    		background-size: cover;
			margin-left:200px;
			margin-right:200px;
			margin-top:100px;			
		}

		.table
		{
			background-color:#484646;
			border-radius:20px;
			font-color:white;
			border:1px solid;
			opacity:0.8;
		}

		form{
			text-align:justify;	
		}

		input
		{
  			border-radius: 13px;
 			border-radius: 13px;
 			border-radius: 13px;
 			border-radius: 13px;
    		border:solid 1px;
   			padding:10px;
		}

		.text
		{
			width:300px;
		}

		.button 
		{
    		background-color: white;
    		border:2px solid #484646;
    		width:330px;
    		color: black;
    		padding: none;
   			text-align: center;
    		text-decoration: none;
    		display: inline-block;
    		font-size: 16px;
		}

		.button:hover
		{
			background-color: #392F2F;
    		color: white;
		}
	</style>
	<body>
			<!-- <center><img src="images/Capture.PNG" ></center><br> -->
			<form action="" method="POST">
				<br><br>
				<input type="submit" class="button" name="adposts" value="Post Advertisement"></b>
				<br><br>
				<input type="submit" class="button" name="viewads" value="View my Advertisements"></b>
				<br><br>
				<input type="submit" class="button" name="logout" value="Log Out"></b>
			</form>
	</body>
</html>

<?php
require('db.php');
   if (isset($_POST['viewads']))
    {
    	
			header("Location: viewads.php?q=$username"); 
	}

	if (isset($_POST['adposts']))
    {
			header("Location: adpost.php?q=$username"); 
	}

	if (isset($_POST['logout']))
	{
			header("Location: adlogin.php?q=$username");
	}
	
?>