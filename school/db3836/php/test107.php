<html>
<head>
<title>test105.php</title>
</head>
<body>
<h1>第２章　条件によって処理を分ける</h1>
<h2>if文　else文　elseif文</h2>
<hr />
<?php
$intAaa = 10;
$intBbb = 3;
$intCcc = 4;

if($intAaa > 5){
	print("変数\$intAaaは、５よりも大きい<br />\n");
}

if($intBbb > 5){
	print("変数\$intBbbは、５よりも大きい<br />\n");
}else{
	print("変数\$intBbbは、５以下<br />\n");
}

if($intCcc > 5){
	print("変数\$intCccは、５よりも大きい<br />\n");
}elseif($intCcc > 3){
	print("変数\$intCccは、３よりも大きい<br />\n");
}else{
	print("変数\$intCccは、３以下<br />\n");
}

?>
</body>
</html>