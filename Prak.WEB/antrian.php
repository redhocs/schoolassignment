<?php

	if(isset($_GET['get'])){

		$nums = $_GET['get'];
			echo ('
<html>
<head>
	<title>PROGRAM ANTRIAN</title>
</head>
<style> form{ margin-top: 100px; }</style>
<body bgcolor="MediumBlue">
	<center>
	<form action="?get" method="get">
	<input type="text" style="text-align: center; font-size: 250%" value="'.$nums.'"><br />
<div style="padding-top: 20px;">
	

<button type="button" style="background-color:#00FF00"><a href="?get='.($nums - 1).'" style=" font-size:180%; text-align:center; font-family:Arial Black; color:#000000">Prev</a></button>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<button type="button" style="background-color:#FF7F00"><a href="?get='.($nums + 1).'" style=" font-size: 180%; text-align:center; font-family:Arial Black; color:#000000">Next</a></button>
</div>

	</form>

	<div style="font-weight: bold; font-size: 500%; color:#000000; font-family:Clarendon Blk BT">
	'.$nums.'	
	</div>
</body>
</html>
				');

		die();
	}
?>

<html>
<head>
	<title>PROGRAM ANTRIAN</title>
</head>
<style> form{ margin-top: 200px; }</style>
<body bgcolor="MediumBlue">
	<center>
	<form action="" method="get">
	<input type="text" name="get" style="text-align: center; font-size: 300%;">
	</form>
</body>
</html>
