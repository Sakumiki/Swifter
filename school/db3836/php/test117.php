<html>
<head>
<title>test109.php</title>
</head>
<body>
<h1>第6章　Function</h1>
<h2>Basic</h2>
<hr />

<form method="post" action="test117.php">

点数入力<br />
国語<input type="text" name="kokugo"><br />
数学<input type="text" name="sugaku"><br />
英語<input type="text" name="eigo"><br />
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
	$numHeikin = ($a+$b+$c)/3;
	print("平均 : ".$numHeikin);
}

if((isset($_POST["sugaku"]) && $_POST["sugaku"] != null) && (isset($_POST["kokugo"]) && $_POST["kokugo"] != null) && (isset($_POST["eigo"]) && $_POST["eigo"] != null)){

	if(isset($_POST["sugaku"]) || $_POST["sugaku"] != null) $i = fncSeiki($_POST["sugaku"]);
	if(isset($_POST["kokugo"]) || $_POST["kokugo"] != null) $j = fncSeiki($_POST["kokugo"]);
	if(isset($_POST["eigo"]) || $_POST["eigo"] != null) $k = fncSeiki($_POST["eigo"]);

	print("国語 : ".$i."<br />");
	print("数学 : ".$j."<br />");
	print("英語 : ".$k."<br />");

	fncHeikin($i,$j,$k);

}

?>
</body>
</html>
