<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    
<!-- Форма авторизации -->

    <form action="vendor/signin.php" method="post">
       <div class="logo">
        <a href="index.html" class="logo_title">лица</a>
        <img src="img/candidates_lable.png" alt="" class="logo_img" width="30px" height="22px">
        <a href="index.html" class="pre_title_header">Кандидаты</a>
     </div>
     <div class="decr_logo">
        <p class="decr">Получить доступ к базе <br> проверенных кандидатов</p>
     </div>
        <label>Логин</label>
        <input require type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input require type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>