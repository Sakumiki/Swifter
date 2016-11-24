<html>
<head>
<title>test105.php</title>
</head>
<body>
<h1>変数とループ制御</h1>
<h2>while文によるフォントサイズの繰り返し</h2>
<hr />
<?php
$i = 1;
$str = "神港高校";

while($i<=6){
	print("<font size=".$i.">".$str."</font><br />\n");
	$i++;
}
?>
</body>
</html>