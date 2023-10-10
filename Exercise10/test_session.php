<?php
session_start();
?>
<!DOCTYPE >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>test_session</title>
</head>
<body>
<?php
echo "Chao ban ".$_SESSION['name']." co tuoi la:".$_SESSION['age'];
?>
<br />
<a href="huy_session.php">Huy session</a>
</body>
</html>