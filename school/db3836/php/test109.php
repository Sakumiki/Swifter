<html>
<head>
<title>test109.php</title>
</head>
<body>
<h1>第3章　フォームの操作</h1>
<h2>テキストボックス</h2>
<hr />

<form method="get" action="test109.php">
<input type="text" name="frmName">
<input type="submit" value="SEND">
</form>
<?php

if(isset($_GET["frmName"]) == false || $_GET["frmName"] == null){

	print("入力をしてください");

}else{

	$txtName = $_GET["frmName"];
	print($txtName);

}

?>
</body>
</html>
