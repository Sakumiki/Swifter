<html>
<head>
<title>test109.php</title>
</head>
<body>
<h1>第3章　フォームの操作</h1>
<h2>テキストボックス</h2>
<hr />

<form method="post" action="test111.php">
名前を入力してさい。<br />
<input type="text" name="frmName">
<br /><br />

性別を選択してください。<br />
<input type="radio" name="frmSeibetu" value="男">男性の方<br />
<input type="radio" name="frmSeibetu" value="女">女性の方<br />
<br /><br />

好きな食べ物を選択してください。<br />
<input type="checkbox" name="frmTabemono[]" value="親子丼">親子丼<br />
<input type="checkbox" name="frmTabemono[]" value="カレーライス">カレーライス<br />
<input type="checkbox" name="frmTabemono[]" value="天ぷらうどん">天ぷらうどん<br />
<br />

住所を選択してください。<br />
<select name="frmJusyo">
	<option value="">
	<option value="神戸市">神戸市
	<option value="尼崎市">尼崎市
	<option value="西宮市">西宮市
	<option value="芦屋市">芦屋市
	<option value="宝塚市">宝塚市
	<option value="明石市">明石市
	<option value="加古川市">加古川市
	<option value="姫路市">姫路市
</select>
<br /><br />

<input type="submit" value="SEND">
<input type="reset" value="Clear">
</form>
<?php


if((isset($_POST["frmName"]) == false && isset($_POST["frmSeibetu"]) == false && isset($_POST["frmTabemono"]) == false && isset($_POST["frmJusyo"]) == false)){

	print("何も入力されていません。");

}else{

	if($_POST["frmName"] == null && $_POST["frmSeibetu"] == null && $_POST["frmTabemono"] == "" && $_POST["frmJusyo"] == null){
		print("何も入力されていません。");
	}else{

	/*------------------------------------------------
	               テキストボックス
	------------------------------------------------*/
	$strMoji1 = "<";
	$strMoji2 = "&lt;";
	$strMoji3 = ">";
	$strMoji4 = "&gt;";

	if(isset($_POST["frmName"]) == false || $_POST["frmName"] == null){

		print("名前が入力されていません"."<br />");

	}else{

		$txtName = $_POST["frmName"];
		$txtName = str_replace($strMoji1,$strMoji2,$txtName);
		$txtName = str_replace($strMoji3,$strMoji4,$txtName);

		print($txtName."<br />");

	}

	/*------------------------------------------------
    	           ラジオボタン
	------------------------------------------------*/
	if(isset($_POST["frmSeibetu"]) == false || $_POST["frmSeibetu"] == null){

		print("性別が選択されていません"."<br />");

	}else{

		$redSeibetu = $_POST["frmSeibetu"];
		print($redSeibetu."<br />");

	}

	/*------------------------------------------------
    	           チェックボックス
	------------------------------------------------*/
	if(isset($_POST["frmTabemono"]) == false || $_POST["frmTabemono"] == null){

		print("好きな食べ物が選択されていません<br />");

	}else{

		$chkTabemono = $_POST["frmTabemono"];
		print($chkTabemono."<br />");

	}

	/*------------------------------------------------
	               リストボックス
	------------------------------------------------*/
	if(isset($_POST["frmJusyo"]) == false || $_POST["frmJusyo"] == null){

		print("住所が選択されていません<br />");

	}else{

		$selJusyo = $_POST["frmJusyo"];
		print($selJusyo."<br />");

	}

}
}
?>
</body>
</html>
