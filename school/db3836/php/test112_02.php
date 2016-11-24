<html>
<head>
<title>test112-02.php</title>
</head>
<body bgcolor="#f281b7">
<h1>第3章　フォームの操作</h1>
<h2>他ページからのデータ受信</h2>
<hr />

<?php

if((isset($_POST["frmName"]) == false || $_POST["frmName"] == null)&&(isset($_POST["frmSeibetu"]) == false || $_POST["frmSeibetu"] == null)&&(isset($_POST["frmTabemono"]) == false || $_POST["frmTabemono"] == null)&&(isset($_POST["frmJusyo"]) == false || $_POST["frmJusyo"] == null)){
	print("test112_01で入力をしてください。");

}else{

	

	/*------------------------------------------------
	               テキストボックス
	------------------------------------------------*/
	$strMoji1 = "<";
	$strMoji2 = "&lt;";
	$strMoji3 = ">";
	$strMoji4 = "&gt;";

	if(isset($_POST["frmName"]) == false || $_POST["frmName"] == null){

		print("名前が入力されていません<br />");

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

		print("性別が選択されていません<br />");

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

		for($i=0;$i<3;$i++){
			if(isset($_POST["frmTabemono"][$i])) print($_POST["frmTabemono"][$i]."<br />"); 
		}

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

?>
</body>
</html>
