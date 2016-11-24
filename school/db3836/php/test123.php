<html>
<head>
<title>test109.php</title>
</head>
<body>
<h1>第6章　Function</h1>
<h2>Regular Expression</h2>
<hr />

<form method="post" action="test123.php">
文字を入力してください。<br />
<!--               テキストボックスを表示させるPHP                      -->
<?php
	/*------------------------------------------------
	               テキストボックス
	------------------------------------------------*/
$i = "";
if(isset($_POST["moji"]) && $_POST["moji"] != null){
	if(isset($_POST["moji"]) || $_POST["moji"] != null) $i = $_POST["moji"];
}
print("文　字 : <input type='text' name='moji' value=".$i."><br />");
print("<input type='submit' value='SEND'><input type='reset' value='Clear'></form>");

?>

</form>

<!--        正規表現処理のPHP           -->
<?php

function fncSeiki1($funStr){
	if(preg_match("/PHP/",$funStr)) {
		print("OK　　//どこかにPHP<br />");
	}else{
		print("NO　　//どこかにPHP<br />");
	}
	fncSeiki2($funStr);
}
function fncSeiki2($funStr){
	if(preg_match("/^PHP/",$funStr)) {
		print("OK　　//先頭にPHP<br />");
	}else{
		print("NO　　//先頭にPHP<br />");
	}
	fncSeiki3($funStr);
}
function fncSeiki3($funStr){
	if(preg_match("/PHP$/",$funStr)) {
		print("OK　　//後ろにPHP<br />");
	}else{
		print("NO　　//後ろにPHP<br />");
	}
	fncSeiki4($funStr);
}
function fncSeiki4($funStr){
	if(preg_match("/^[a-z]+$/",$funStr)) {
		print("OK　　//小文字のみ<br />");
	}else{
		print("NO　　//小文字のみ<br />");
	}
	fncSeiki5($funStr);
}
function fncSeiki5($funStr){
	if(preg_match("/^[0-9]+$/",$funStr)) {
		print("OK　　//数字のみ<br />");
	}else{
		print("NO　　//数字のみ<br />");
	}
	fncSeiki6($funStr);
}
function fncSeiki6($funStr){
	if(preg_match("/^\d{3}$/",$funStr)) {
		print("OK　　//3桁数字のみ<br />");
	}else{
		print("NO　　//3桁数字のみ<br />");
	}
	fncSeiki7($funStr);
}
function fncSeiki7($funStr){
	if(preg_match("/^\d{3}\-\d{4}$/",$funStr) || preg_match("/^\d{7}$/",$funStr)) {
		print($funStr."　　//郵便番号<br />");
	}else{
		print("NO　　//郵便番号<br />");
	}
}

if(isset($_POST["moji"]) && $_POST["moji"] != null){
	if(isset($_POST["moji"]) || $_POST["moji"] != null) $i = $_POST["moji"];
	fncSeiki1($_POST["moji"]);
}



?>
</body>
</html>
