<html>
<head>
<title>test109-4.php</title>
</head>
<body>
<h1>第3章　フォームの操作</h1>
<h2>テキストボックスのセキュリティ対策</h2>
<hr />

<form method="get" action="test109-4.php">
<input type="text" name="frmName">
<input type="submit" value="SEND">
</form>
<?php

$strMoji1 = "<";
$strMoji2 = "&lt;";
$strMoji3 = ">";
$strMoji4 = "&gt;";
if(isset($_GET["frmName"]) == false || $_GET["frmName"] == null){

	print("入力をしてください");

}else{
	$txtName = $_GET["frmName"];
	$txtName = str_replace($strMoji1,$strMoji2,$txtName);
	$txtName = str_replace($strMoji3,$strMoji4,$txtName);

	print($txtName);

}

?>
</body>
</html>
