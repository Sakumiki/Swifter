<html>
<head>
<title>test201.php</title>
</head>
<body>
<h1>��P�� Web-DB�A�g�̓���m�F</h1>
<h2>�u���E�U����f�[�^�x�[�X�iDB�j�ւ̐ڑ��m�F</h2>
<hr />
<?php
//DB�ڑ�
$conn = pg_connect("dbname=db_3836 user=d33836 host=192.168.109.210");
if($conn){
	print("DB OK!<br />");
}else{
	print("Not OK<br />");
}

$result = pg_query("select * from tbl_namae");
if($result) print("sqlok<br />");
else		print("sqlno<br />");


//SQL�Ŏ擾�����s�Ɨ�
$cntRows = pg_numRows($result);
$cntFields = pg_numFields($result);
//print($cntRows."<br>");
//print($cntFields."<br>");

print("<table border='1'><tr>");

for($k=0;$k<$cntFields;$k++){
	print("<th align='center' width='30' height='30'>".pg_field_name($result,$k)."</th>");
}
print("</tr>");
for($i=0;$i<$cntRows;$i++){
	print("<tr>");
	for($j=0;$j<$cntFields;$j++){
		print("<td align='center' width='30' height='30'>".pg_result($result,$i,$j)."</td>");
	}
	print("</tr><br />");
}
print("</table>");

pg_close($conn);
?>
</body>
</html>