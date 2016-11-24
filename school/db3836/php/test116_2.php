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
print("<table border='1'>");
for($i=1;$i<10;$i++){
	print("<tr>");
	for($j=1;$j<10;$j++){
		$tblKazu[$i][$j] = $i+$j;
		if($i==$j || $tblKazu[$i][$j]==10){
			$tblKazu[$i][$j] ="★";
		}else{
			$tblKazu[$i][$j] ="";
		}
		print("<td align='center' width='30' height='30'>");
		print($tblKazu[$i][$j]);
		print("</td>");
	}
	print("</tr>");
}
print("</table><br /><br /><br />");

?>
</body>
</html>
