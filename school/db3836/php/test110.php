<html>
<head>
<title>test109.php</title>
</head>
<body>
<h1>第3章　フォームの操作</h1>
<h2>テキストボックス</h2>
<hr />

<form method="post" action="test110.php">
名前を入力してさい。<br /><br />
<input type="text" name="frmName">
<br /><br />

性別を選択してください。<br /><br />
<input type="radio" name="frmSeibetu" value="男">男性の方<br />
<input type="radio" name="frmSeibetu" value="女">女性の方<br />
<br />
<input type="submit" value="SEND">
</form>
<?php

$strMoji1 = "<";
$strMoji2 = "&lt;";
$strMoji3 = ">";
$strMoji4 = "&gt;";

if(isset($_POST["frmName"]) == false || $_POST["frmName"] == null){

	print("名前が入力されていません"."<br /><br />");

}else{

	$txtName = $_POST["frmName"];
	$txtName = str_replace($strMoji1,$strMoji2,$txtName);
	$txtName = str_replace($strMoji3,$strMoji4,$txtName);

	print($txtName."<br /><br />");

}


if(isset($_POST["frmSeibetu"]) == false || $_POST["frmSeibetu"] == null){

	print("性別が入力されていません"."<br /><br />");

}else{

	$redSeibetu = $_POST["frmSeibetu"];
	print($redSeibetu."<br /><br />");

}


?>
</body>
</html>
