<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン画面</title>
</head>

<body>
  <h1>sleeping together ログインして下さい</h1>
  <form action="21-login_create.php" method="POST">
    <fieldset>
      <legend>[ログイン画面]</legend>
      <div>
        username: <input type="text" name="username" required>
      </div>
      <div>
        email: <input type="email" name="email" required>
      </div>
      <div>
        password: <input type="password" name="password" minlength="6" placeholder="6文字以上" required>
      </div>
      <div>
        <input type="submit" value="ログイン">
      </div>
    </fieldset>
  </form>

  <p><a href="">mail/passwordを忘れた方はこちら</a></p>

  <p><a href="10-register.php">新規登録</a></p>

</body>

</html>