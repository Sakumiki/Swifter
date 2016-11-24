<html>
<head>
<title>test201.php</title>
</head>
<body>

<?php

//general
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


//quiestion

function fncInq($ban,$one,$two,$thr,$four,$fiv){

	$result = pg_query("insert into tbl_data values('".$ban."','" .$one. "','" .$two. "','" .$thr. "','" .$four. "','" .$fiv."');");
	if($result)	print("okあああ");
	else		print("no");
}

function fncUpq($ban,$one,$two,$thr,$four,$fiv){

	$result = pg_query("update tbl_data set one = '" .$ge. "', two ='" .$bl. "', three ='" .$bir. "', four='" .$se."', five='".$fiv."' where bango ='". $ban ."';");
	if($result)	print("okいい");
	else		print("no");
}

?>

</body>

</html>