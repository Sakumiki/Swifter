<html>
<head>
<title>test109-4.php</title>
</head>
<body>
<h1>第5章　テーブル(配列・表)</h1>
<h2>テキストボックスのセキュリティ対策</h2>
<hr />

<form method="post" action="test114.php">
月を入力<br /><br />
<input type="text" name="frmTuki"><br /><br />
<input type="submit" value="SEND">
<input type="reset" value="Clear">
</form>
<?php

$strMoji1 = "<";
$strMoji2 = "&lt;";
$strMoji3 = ">";
$strMoji4 = "&gt;";
if(isset($_POST["frmTuki"])){

	$txtTuki = $_POST["frmTuki"];
	if($txtTuki == null){
		print("月が入力されていません");
	}elseif(preg_match("/^[1-12]+$/", $txtTuki)){
		$tblTukimei = array("","Jan","Feb","Mar","Apr","May","June","July","Aug","Sep","Oct","Nov","Dec");
		print($txtTuki."月は英語で「".$tblTukimei[$txtTuki]."」です。<br />\n");
	}else{
		print("半角数字 1～12で入力してください。");
	}
}

?>
</body>
</html>
