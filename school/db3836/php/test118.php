<html>
<head>
<title>test109.php</title>
</head>
<body>
<h1>第6章　Function</h1>
<h2>Basic</h2>
<hr />

<form method="post" action="test118.php">

好きな食べ物を選択してください。<br />
国語<input type="text" name="frmKokugo"><br />
数学<input type="text" name="frmSugaku"><br />
英語<input type="text" name="frmEigo"><br />
<br />

<input type="submit" value="SEND">
<input type="reset" value="Clear">
</form>




<?php

	/*------------------------------------------------
	               テキストボックス
	------------------------------------------------*/
function fncSeiki($funNum){
	if (!preg_match("/^([1-9]?[0-9]|100)$/",$funNum)) {
		$funNum = 0;
	}
	return $funNum;
}

function fncHeikin($a,$b,$c){
	$d = ($a+$b+$c)/3;
	return $d;
}

if(isset($_POST["frmKokugo"])&&isset($_POST["frmSugaku"])&&isset($_POST["frmEigo"])){

	if($_POST["frmKokugo"] != null &&$_POST["frmSugaku"] != null &&$_POST["frmEigo"] != null){

		if(isset($_POST["frmKokugo"])||$_POST["frmKokugo"] != null) $i = $_POST["frmKokugo"];
		if(isset($_POST["frmSugaku"])||$_POST["frmSugaku"] != null) $j = $_POST["frmSugaku"];
		if(isset($_POST["frmEigo"])||$_POST["frmEigo"] != null) $k = $_POST["frmEigo"];

$kokugo = fncSeiki($i);
$sugaku = fncSeiki($j);
$eigo = fncSeiki($k);
$numHeikin = fncHeikin($kokugo,$sugaku,$eigo);

print("国語 : ".$kokugo."<br />");
print("数学 : ".$sugaku."<br />");
print("英語 : ".$eigo."<br />");
print("平均 : ".$numHeikin);

	}
}
?>
</body>
</html>
