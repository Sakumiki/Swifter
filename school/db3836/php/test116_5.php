<html>
<head>
<title>test109.php</title>
</head>
<body>
<h1>第5章　Table</h1>
<h2>Foreach</h2>
<hr />

<form method="post" action="test116_5.php">

好きな食べ物を選択してください。<br />
<input type="checkbox" name="frmTabemono[]" value="カレーライス">カレーライス<br />
<input type="checkbox" name="frmTabemono[]" value="ハンバーグ">ハンバーグ<br />
<input type="checkbox" name="frmTabemono[]" value="オムライス">オムライス<br />
<input type="checkbox" name="frmTabemono[]" value="ラーメン">ラーメン<br />
<input type="checkbox" name="frmTabemono[]" value="コロッケ">コロッケ<br />
<br />

<input type="submit" value="SEND">
<input type="reset" value="Clear">
</form>

<?php


	/*------------------------------------------------
    	           チェックボックス
	------------------------------------------------*/
if(isset($_POST["frmTabemono"]) == false || $_POST["frmTabemono"] == null){

	print("好きな食べ物が選択されていません<br />");

}else{
	$tblTabemono = $_POST["frmTabemono"];
	foreach($tblTabemono as $tabemono){
	print($tabemono."<br />\n");
}
}
	

?>
</body>
</html>
