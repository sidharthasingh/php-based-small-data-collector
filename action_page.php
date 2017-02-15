<html>
	<head>
		<title>
			Taking action
		</title>
	</head>
	<body>
	<?php
			if($_POST['data']=='ed')
			{
				require("ed.php");
			}
			else if($_POST['data']=='rd')
			{
				require("rd.php");
			}
	?>	
	</body>
</html>