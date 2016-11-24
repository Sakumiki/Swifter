x<html>
<head>
<title>test109.php</title>
</head>
<body>
<h1>第6章　Function</h1>
<h2>Call by Reference</h2>
<hr />



<?php

class En{
	Public $PAI = 3.14;
	Public $han = 10;

	Public $kotae;

	function Menseki(){
		$this->kotae=$this->han * $this->han * $this->PAI;

		return $this->kotae;
	}

}

$obj = new En();
print($obj->han."<br />");
print($obj->PAI."<br />");
print("半径".$obj->han."の面積は".$obj->Menseki()."です。");

?>
</body>
</html>
