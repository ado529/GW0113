<?php
include('functions.php');

//var_dump($_POST);
//exit();

// POSTデータ確認
if (
  !isset($_POST['username']) || $_POST['username'] == '' ||
  !isset($_POST['email']) || $_POST['email']==='' ||
  !isset($_POST['password']) || $_POST['password']===''
) {
  exit('ParamError');
}

//フォームからの値をそれぞれ変数に代入
$username = $_POST["username"];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//DB接続
$pdo = connect_to_db();

$sql = 'SELECT COUNT(*) FROM login_table WHERE username=:username';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

if ($stmt->fetchColumn() > 0) {
  echo '<p>すでに登録されているユーザです．</p>';
  echo '<a href="20-login_input.php">login</a>';
  exit();
}

//if ($member['email'] === $email) {
//    $msg = '同じメールアドレスが存在します。';
//    $link = '<a href="signup.php">戻る</a>';
//} else {
//    //登録されていなければinsert 
//    $sql = "INSERT INTO users(name, mail, pass) VALUES (:name, :mail, :pass)";
//    $stmt = $dbh->prepare($sql);
//    $stmt->bindValue(':name', $name);
//    $stmt->bindValue(':mail', $mail);
//    $stmt->bindValue(':pass', $pass);
//    $stmt->execute();
//    $msg = '会員登録が完了しました';
//    $link = '<a href="login.php">ログインページ</a>';
//}

// SQL作成&実行
$sql = 'INSERT INTO login_table (id, username, email, password, is_admin, is_deleted, created_at, updated_at) VALUES (NULL, :username, :email, :password, 0, 0, now(), now())';

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

header('Location:60-welcome.php');
exit();

?>

// <h1><?php echo $msg; ?></h1><!--メッセージの出力-->
// <?php echo $link; ?>

