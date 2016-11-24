<html>
<head>
<title>test109.php</title>
</head>
<body>
<h1>第3章　フォームの操作</h1>
<h2>テキストボックス</h2>
<hr />

<form method="post" action="test115.php">

動物を選択してください。<br /><br />
<select name="frmAnimal">
	<option value="">
	<option value="dog">dog
	<option value="cat">cat
	<option value="bird">bird
	<option value="cow">cow
	<option value="rat">rat
</select>
<br /><br />

<input type="submit" value="SEND">
<input type="reset" value="Clear">
</form>
<?php

if(isset($_POST["frmAnimal"])){

	$selAnimal = $_POST["frmAnimal"];
	if($selAnimal == null){
		print("選択されていません");
	}else{
		$tblAnimal = array("dog"=>"犬","cat"=>"猫","bird"=>"鳥","cow"=>"牛","rat"=>"鼠");
		print($selAnimal."月は英語で「".$tblAnimal[$selAnimal]."」です。<br />\n");
	}
}

?>
</body>
</html>
