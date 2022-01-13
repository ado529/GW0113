<?php

session_start();
include('functions.php');

//var_dump($_POST);
//exit();

// POSTデータ確認
if (
  !isset($_POST['username']) || $_POST['username'] == '' ||
  !isset($_POST['mail']) || $_POST['mail']==='' ||
  !isset($_POST['password']) || $_POST['password']===''
) {
  exit('ParamError');
}

$username = $_POST['username'];
$email=$_POST['email'];
$password = $_POST['password'];


// DB接続
$pdo = connect_to_db();

// SQL呼び出し
$sql = 'SELECT * FROM login_table WHERE username=:username AND email = :email AND password=:password AND is_deleted=0';

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$member = $stmt->fetch();

//指定したハッシュがパスワードにマッチしているかチェック
if (password_verify($_POST['password'], $member['password'])) {
    //DBのユーザー情報をセッションに保存
    $_SESSION['mail'] = $member['mail'];
    $msg = 'ログインしました。';
    $link = '<a href="60-welcome.php">ホーム</a>';
} else {
    $msg = 'メールアドレスもしくはパスワードが間違っています。';
    $link = '<a href="20-login_input.php">戻る</a>';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sleeping together(ログイン完了画面)</title>
</head>

<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>