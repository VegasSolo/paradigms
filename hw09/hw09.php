<!doctype html>
<html>
	<?php
		if (empty($_REQUEST)) {
			echo "<head>";
				echo "<title>Assignment 9: no query string</title>";
			echo "</head>";
			echo "<body>";
				echo "<p>Hello world!</p>";
				echo "<p>Dillon VanBuskirk's Assignment 9.</p>";
				echo "<p>The query string is null.</p>";
				phpinfo();
			echo "</body>";
		} else {
			echo "<head>";
				echo "<title>Assignment 9: with a query string</title>";
			echo "</head>";
			echo "<body>";
				echo "<p>Hello world!</p>";
				echo "<p>Dillon VanBuskirk's Assignment 9.</p>";
				echo "<p>The query string is ";
				var_dump($_REQUEST);
				echo "</p>";
				phpinfo();
			echo "</body>";
		}
	?>
</html>
