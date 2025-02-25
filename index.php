<?php
// Если форма отправлена, перенаправляем пользователя на страницу авторизации TikTok
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $client_key = "sbawho4u8ndgdepir6";
    $redirect_uri = "https://nodesshablya.github.io/login_tiktok_sandbox/login_accept.php";
    $auth_url = "https://www.tiktok.com/auth/authorize/?client_key=" . urlencode($client_key) .
                "&scope=user.info.basic&response_type=code&redirect_uri=" . urlencode($redirect_uri);
    header("Location: " . $auth_url);
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход через TikTok</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
            background-color: #f8f8f8;
        }
        h2 {
            color: #333;
            margin-bottom: 30px;
        }
        button {
            background-color: #fe2c55;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #e62a4d;
        }
        .info {
            margin-top: 30px;
            font-size: 14px;
            color: #666;
            text-align: left;
            background-color: #fff;
            padding: 15px;
            border-radius: 4px;
            border-left: 3px solid #fe2c55;
        }
    </style>
</head>
<body>
    <h2>Вход через TikTok</h2>
    <form method="post">
        <button type="submit" name="login">Войти с TikTok</button>
    </form>
    
    <div class="info">
        <p><strong>Важно:</strong> Перед использованием этого кода вам необходимо:</p>
        <ol>
            <li>Зарегистрировать приложение в <a href="https://developers.tiktok.com/" target="_blank">консоли разработчика TikTok</a></li>
            <li>Получить Client Key для вашего приложения</li>
            <li>Зарегистрировать допустимый URL перенаправления</li>
        </ol>
    </div>
</body>
</html>
