<html>
<head>
<title>test109.php</title>
</head>
<body>
<h1>第6章　Function</h1>
<h2>Basic</h2>
<hr />

<form method="post" action="test119.php">

半径を入力し単位を選択してください。<br />
<p>
半　径 : <input type="text" name="frmHankei">
<select name="Tani">
	<option value="km">km</option>
	<option value="m">m</option>
	<option value="cm">cm</option>
	<option value="mm">mm</option>
</select>
</p>
<br />
<input type="submit" value="SEND">
<input type="reset" value="Clear">
</form>




<?php

	/*------------------------------------------------
	               テキストボックス
	------------------------------------------------*/
function fncSeiki($funNum){
	if (!preg_match("/^[0-9]+$/",$funNum)) {
		$funNum = 0;
		print("入力された文字が数字ではありません");
	}
	return $funNum;
}

function fncMen($han,$pai=3.14){
	$men = round(pow($han,2) * $pai,2);
	return $men;
}

if((isset($_POST["frmHankei"])&&$_POST["frmHankei"] != null) && isset($_POST["Tani"])&&$_POST["Tani"] != null){
	if(isset($_POST["frmHankei"])||$_POST["frmHankei"] != null) $i = $_POST["frmHankei"];
	if(isset($_POST["Tani"])||$_POST["Tani"] != null) $tani = $_POST["Tani"];

	$hankei = fncSeiki($i);
	$men = fncMen($hankei);

	print("この円の面積は".$men.$tani."です<br />");

}
?>
</body>
</html>
