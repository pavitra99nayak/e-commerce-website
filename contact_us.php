<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<p>Help Center</p>
<?php
            echo "<b>Hello </b>".$_SESSION['username'];
        ?>
</body>
</html>