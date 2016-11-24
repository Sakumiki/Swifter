<?php
require_once __DIR__ . '/func.php';
require_unlogined_session();
$conn = pg_connect("dbname=db_3836 user=d33836 host=192.168.109.210");
$bango = $_SESSION['id'];
?>
<html>
<head>
<title>test201.php</title>



</head>
<body>
<h1>登録</h1>
<hr />

<div class="row">
	<div class="col-md-6 col-sm-6 point-box">
		<h3></h3>
		<p></p>
		<a href="./q1.php" class="btn btn-success btn-lg">質問</a>
		<br /><br /><br /><br />
	</div>
	<div class="col-md-6 col-sm-6 point-box">
		<h3></h3>
		<p></p>
		<a href="./general.php" class="btn btn-info btn-lg">編集</a>
	</div>

</div>


<!--------------------------------------------------------------------
							PHP
--------------------------------------------------------------------->
<?php

function fncNseiki($funNum){
	if (!preg_match("/(?<!\d)\d{1,2}(?!\d)/",$funNum)) {
		$funNum = 0;
	}
	return $funNum;
}



/*------------------------------------------------
               テキストボックス
------------------------------------------------*/
$strMoji1 = "<";
$strMoji2 = "&lt;";
$strMoji3 = ">";
$strMoji4 = "&gt;";
	
if(isset($_POST["frmName"]) && $_POST["frmName"]){

	$se = fncNseiki($_POST["frmName"]);
	if($se == 0){
		print("半角英数字で入力してください。");
		//fncErr();

	}else{
		$txtName = str_replace($strMoji1,$strMoji2,$se);
		$txtName = str_replace($strMoji3,$strMoji4,$txtName);
	
		print($txtName."<br />");
	
	
	
	
	
	
	/*----------------------------------------------------
							DB
	-----------------------------------------------------*/
		//DB接続
		if($conn){
			print("DB OK!<br />");
		}else{
			print("Not OK<br />");
		}
		
		
		$bango = "d338".$txtName;
		
		$result = pg_query("select * from tbl_namae where bango ='".$bango."'");
		if($result){
			print($bango."<br />sqlok<br />");
			header( "Location: general.php" ) ;
		}
		else		print("sqlno<br />");
	
	
	
	
		//SQLで取得した行と列
		$cntRows = pg_numRows($result);
		$cntFields = pg_numFields($result);
		//print($cntRows."<br>");
		//print($cntFields."<br>");
	
	
		pg_close($conn);

	}
	$_SESSION['id'] = $bango;
}


?>

</body>

</html>