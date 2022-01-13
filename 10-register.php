<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規登録画面</title>
</head>

<body>
  <h1>sleeping together</h1>
  <form action="11-register_act.php" method="POST">
    <fieldset>
      <legend>[新規会員登録]</legend>
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
        <input type="submit" value="新規登録">
      </div>
    </fieldset>
  </form>

  <p>すでに登録済の方は <a href="20-login_input.php">こちら</a></p>

</body>

</html>