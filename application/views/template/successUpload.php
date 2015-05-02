<html>
<head>
	<title> upload success </title>
</head>
<body>
	<h4> finish upload </h4>
	<?php echo $error?>

	<?php 

		foreach ($upload_data as $k => $v) 
		{
			echo "<br/>" .$k. "=>" .$v;
		}

	?>

	<?php echo anchor('template/cekBooking',' upload more files ')?>


</body>
</html>