<html>
<head>
<title>test201.php</title>
</head>
<body>
<h1>第１章 Web-DB連携の動作確認</h1>
<h2>ブラウザからデータベース（DB）への接続確認</h2>
<hr />
<?php
//DB接続
$conn = pg_connect("dbname=db_3836 user=d33836 host=192.168.109.210");
if($conn){
	print("DB OK!<br />");
}else{
	print("Not OK<br />");
}

$result = pg_query("select * from tbl_namae");
if($result) print("sqlok<br />");
else		print("sqlno<br />");


//SQLで取得した行と列
$cntRows = pg_numRows($result);
$cntFields = pg_numFields($result);
print($cntRows."<br>");
print($cntFields."<br>");

print("<table border='1'><tr>");
print("<caption>名前テーブル</caption>");

for($k=0;$k<$cntFields;$k++){
	print("<th align='center' width='30' height='30'>".pg_field_name($result,$k)."</th>");
}

print("</tr>");
for($i=0;$i<$cntRows;$i++){
	print("<tr>");
	for($j=0;$j<$cntFields;$j++){
		print("<td align='center' width='30' height='30'>".pg_result($result,$i,$j)."</td>");
	}
	print("</tr>");
}
print("</table>");

pg_close($conn);
?>
</body>
</html>