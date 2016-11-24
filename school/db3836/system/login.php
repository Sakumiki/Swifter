<?php

require_once __DIR__ . '/func.php';
require_unlogined_session();

$conn = pg_connect("dbname=db_3836 user=d33836 host=192.168.109.210");

// ユーザから受け取ったユーザ名
$ban = filter_input(INPUT_POST, 'bango');

$bango = "d338".$ban;
$result = pg_query("select * from tbl_namae where bango ='".$bango."';");

// POSTメソッドのときのみ実行

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($result) {
        // 認証が成功したとき
        // セッションIDの追跡を防ぐ
        session_regenerate_id(true);
         // ユーザ名をセット
        $_SESSION['username'] = $username;
		$_SESSION['id'] = $bango;
        // ログイン完了後に / に遷移
		$result = pg_query("select * from tbl_data where bango ='".$bango."'"); 
		if($result)			header('Location: general.php');
        else if(!$result)	header('Location: general.php');
        exit;
    }
    // 認証が失敗したとき
    // 「403 Forbidden」
//    http_response_code(403);
}

header('Content-Type: text/html; charset=UTF-8');

?>
<!DOCTYPE html>
<title>ログインページ[?W</title>
<body>
<h1>>ログインしてください</h1>
<form method="post" action="">
    ユーザ名: <input type="text" name="bango" value="">
    <input type="hidden" name="token" value="<?=h(generate_token())?>">
    <input type="submit" value="ログイン">
</form>
<!--
<?php  if (http_response_code() === 403): ?>
<p style="color: red;">ユーザ名またはパスワードが違います</p>
<?php endif; ?>
--></body>
</html>