<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
        <?php require_once "blocks/header.php"; ?>

          <div class="class feedback">
            <h2>Вход</h2>
            <p>Страница входа пользователей </p>

            <form method="post" action="/lib/auth.php">
                <div class="class inline">
                    <div>
                        <label>Логин</label>
                        <input type="text" name="login">
                    </div>
                    <div>
                        <label>Пароль</label>
                        <input type="password" name="password">
                    </div>
                </div>
                <button type="submit">Войти</button>
            </form>
        </div>

        <?php require_once "blocks/footer.php"; ?>

</body>
</html>