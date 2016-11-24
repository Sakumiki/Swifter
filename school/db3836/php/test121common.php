
<?php
function fncHeikin($fsugaku,$fkokugo,$feigo){
	$heikin = round(($fsugaku + $fkokugo + $feigo) / 3,2);
	print("数学は".$fsugaku."点です。<br />\n");
	print("国語は".$fkokugo."点です。<br />\n");
	print("英語は".$feigo."点です。<br />\n");
	print("平均は".$heikin."点です。");
}

?>
