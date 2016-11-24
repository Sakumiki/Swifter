<html>
<head>
<title>test109.php</title>
</head>
<body>
<h1>第3章　フォームの操作</h1>
<h2>テキストボックス</h2>
<hr />

<?php

$tblKazu = array();
for($i=0;$i<3;$i++){
	$tblKazu[$i] = $i;
}

for($i=0;$i<3;$i++){
	print("数字は".$tblKazu[$i]."です。<br />\n");
}

?>
</body>
</html>
