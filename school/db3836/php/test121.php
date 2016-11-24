<html>
<head>
<title>test109.php</title>
</head>
<body>
<h1>第6章　Function</h1>
<h2>Call by Reference</h2>
<hr />

<form method="post" action="test121.php">
数値を入力してください。<br />
数　学 : <input type="text" name="sugaku"><br />
国　語 : <input type="text" name="kokugo"><br />
英　語 : <input type="text" name="eigo"><br />
<br />
<input type="submit" value="SEND">
<input type="reset" value="Clear">
</form>




<?php

function fncSeiki($funNum){
	if (!preg_match("/^[0-9]+$/",$funNum)) {
		$funNum = 0;
		print("入力された文字が数字ではありません<br />");
	}
	return $funNum;
}

	/*------------------------------------------------
	               テキストボックス
	------------------------------------------------*/
require_once("test121common.php");

if((isset($_POST["sugaku"]) && $_POST["sugaku"] != null) && (isset($_POST["kokugo"]) && $_POST["kokugo"] != null) && (isset($_POST["eigo"]) && $_POST["eigo"] != null)){

	if(isset($_POST["sugaku"]) || $_POST["sugaku"] != null) $i = fncSeiki($_POST["sugaku"]);
	if(isset($_POST["kokugo"]) || $_POST["kokugo"] != null) $j = fncSeiki($_POST["kokugo"]);
	if(isset($_POST["eigo"]) || $_POST["eigo"] != null) $k = fncSeiki($_POST["eigo"]);

	fncHeikin($i,$j,$k);

	require_once("test121common.php");

}
?>
</body>
</html>
