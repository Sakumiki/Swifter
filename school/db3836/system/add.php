<html>
<head>
<title>test201.php</title>
</head>
<body>

<?php


function fncIn($ban,$ge,$bl,$bir,$se){

	$result = pg_query("insert into tbl_data values('" .$ban. "','" .$ge. "','" .$bl. "','" .$bir. "','" .$se."');");
	if($result)	print("okあああ");
	else		print("no");
}

function fncUp($ban,$ge,$bl,$bir,$se){

	$result = pg_query("update tbl_data set gender = '" .$ge. "', blood ='" .$bl. "', birth ='" .$bir. "', seiza='" .$se."' where bango ='". $ban ."';");
	if($result)	print("okいい");
	else		print("no");
}


?>

</body>

</html>