<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>hello,<?php echo $_SESSION['username']; ?></h2>
<a href="logout.php">logout</a>
</body>
</html>