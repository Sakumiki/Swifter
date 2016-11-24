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
	Public $han;

	Public $kotae;

	function Menseki(){
		$this->kotae=$this->han * $this->han * $this->PAI;

		return $this->kotae;
	}

}

class Enchu extends En{
	Public $takasa;
	Public $result;

	function Taiseki(){
		$this->result = parent::Menseki() * $this->takasa;
		return $this->result;
	}
}
class Ensui extends Enchu{
	Public $resulta;

	function Taisekia(){
		$this->resulta = intval(parent::Taiseki() / 3);
		return $this->resulta;
	}
}



$chu = new Ensui();

$chu->han = 10;
$chu->takasa = 10;
print("円錐の体積は".$chu->Taisekia()."です。");
?>
</body>
</html>
