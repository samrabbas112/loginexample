<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p> This is my paragraph</p>
<h2>hello,<?php echo $_SESSION['username']; ?></h2>
<a href="logout.php">logout</a>
</body>
</html>