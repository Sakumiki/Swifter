<html>
<head>
<title>test105.php</title>
</head>
<body>
<h1>第２章　条件によって処理を分ける</h1>
<h2>if文　else文　elseif文</h2>
<hr />
<?php
$strKa = "D";

switch($strKa){

	case"L":
		print("神港高校普通科です！<br />\n");
		break;
	case"C":
		print("神港高校商業科です！<br />\n");
		break;
	case"D":
		print("神港高校情報処理科です！<br />\n");
		break;
	default:
		print("間違っています<br />\n");

}

?>
</body>
</html>