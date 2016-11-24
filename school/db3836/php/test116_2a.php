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
print("<table border='0.5'>");
for($i=1;$i<10;$i++){
	print("<tr>");
	if($i<2){
		print("<th align='center' width='30' height='30' bgcolor='#1e90ff'>");
		print("/");
		print("</th>");		
		for($k=1;$k<10;$k++){
			print("<th align='center' width='30' height='30' bgcolor='#1e90ff'>");
			print($k);
			print("</th>");
		}
		print("</tr><tr>");
	}
	print("<td align='center' width='30' height='30' bgcolor='#32cd32'>");
	print($i);
	print("</td>");
	for($j=1;$j<10;$j++){
		$tblKazu[$i][$j] = $i * $j;
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
