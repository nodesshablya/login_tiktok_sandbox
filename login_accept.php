<?php
// login_accept.php

// Получаем параметры из URL
$code = isset($_GET['code']) ? $_GET['code'] : null;
$error = isset($_GET['error']) ? $_GET['error'] : null;
$error_type = isset($_GET['error_type']) ? $_GET['error_type'] : null;
$errCode = isset($_GET['errCode']) ? $_GET['errCode'] : null;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спасибо за вход</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 500px;
            margin: 0 20px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            color: #666;
            font-size: 16px;
        }
        .error {
            color: #d8000c;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($error): ?>
            <h1>Ошибка авторизации</h1>
            <p class="error">Ошибка: <?php echo htmlspecialchars($error); ?></p>
            <?php if ($error_type): ?>
                <p>Тип ошибки: <?php echo htmlspecialchars($error_type); ?></p>
            <?php endif; ?>
            <?php if ($errCode): ?>
                <p>Код ошибки: <?php echo htmlspecialchars($errCode); ?></p>
            <?php endif; ?>
            <p>Пожалуйста, попробуйте снова.</p>
        <?php elseif ($code): ?>
            <h1>Спасибо за вход!</h1>
            <p>Вы успешно авторизовались через TikTok.</p>
            <p>Ваш код авторизации: <strong><?php echo htmlspecialchars($code); ?></strong></p>
            <!-- Здесь можно добавить обмен кода на токен и дальнейшую обработку -->
        <?php else: ?>
            <h1>Неправильный запрос</h1>
            <p>Похоже, что при авторизации что-то пошло не так.</p>
        <?php endif; ?>
    </div>
</body>
</html>
