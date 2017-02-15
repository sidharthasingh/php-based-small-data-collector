<?php
echo <<< htm
<html>
	<head>
		<title>PHP webpage
		</title>
	</head>
	<body>
		<pre>
			<form action="action_page.php" method="POST">
				<input type="radio" name="data" value="ed">Enter data
				<br/>
				<input type="radio" name="data" value="rd">Retrieve data
				<br/>
				<input type="submit">
			</form>
		</pre>
	</body>
</html>
htm;
?>