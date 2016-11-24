<html>
<head>
<title>test109.php</title>
</head>
<body>
<h1>第6章　Function</h1>
<h2>Call by Reference</h2>
<hr />

<form method="post" action="test120.php">
数値を入力してください。<br />
数　字 : <input type="text" name="frmSu">
<br />
<input type="submit" value="SEND">
<input type="reset" value="Clear">
</form>




<?php

	/*------------------------------------------------
	               テキストボックス
	------------------------------------------------*/
function fncAtai($a){
	$a = $a * 5;
	return $a;
}

function fncSansho(&$b){
	$b = $b * 5;
	return $b;
}

if(isset($_POST["frmSu"])&&$_POST["frmSu"] != null){
	if(isset($_POST["frmSu"])||$_POST["frmSu"] != null) $i = $_POST["frmSu"];

	$j = $i;

	$retatai = fncAtai($i);
	$retsansho = fncSansho($j);

	print("値渡し 入力した数値 : ".$i."です<br />");
	print("値渡し : ".$retatai."です<br />");
	print("参照渡し 入力した数値 : ".$j."です<br />");
	print("参照渡し".$retsansho."です<br />");

}
?>
</body>
</html>
