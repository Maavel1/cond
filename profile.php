<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="logo_nav">
                    <a href="index.html" class="logo_title">лица</a>
                    <img src="img/candidates_lable.png" alt="" class="logo_img">
                    <a href="index.html" class="pre_title_header">Кандидаты</a>
                    <div class="nav_link">
                        <a href="#" class="link_nav">Найти кандидата</a>
                        <a href="#" class="link_nav" >Попасть в базу</a>
                        <a href="#" class="link_nav">О сервисе</a>
                        <a href="#" class="link_nav">Портал</a>
                    </div>
                </div>
                <a href="index.php" class="cabinet">
                   <div class="cabinet">
                    <a href="index.php" class="link_cabinet">Личный кабинет</a>
                    <img src="img/user.png" alt="Avataer" class="avatar_img" width="30px" height="30px">
                   </div>
                </a>
            </nav>
        </div>
    </header>
    <!-- Профиль -->

   <div class="block_pdsds">
        <div class="container">
            <div class="setka_pdpd">
                <div class="block_form">
                    <div class="container">
                        <form class="form_ss">
                            <div class="setka_form">
                              <div class="block_img">
                                  <img src="<?= $_SESSION['user']['avatar'] ?>" width="300px" alt="">
                                 </div>
                               <div class="name_form">
                                  <h2 class="name_prf" style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
                                  <a class="email_s" href="#"><?= $_SESSION['user']['email'] ?></a>
                                  <div class="block_pod">
                                    <p class="pod_text">Подписка не активна</p>
                                  </div>
                               </div>
                            </div>
                              <a class="logout_form" href="vendor/logout.php" class="logout">Выход</a>
                          </form>
                    </div>
                 </div>
                 <div class="podpiska">
                    <div class="container">
                        <p class="title_Pod">Оформить подписку</p>
                        <div class="block_setla_pd">
                            <div class="block_pd">
                                <div class="mes">
                                    <p>1 месяц</p>
                                </div>
                                <div class="price_pd">
                                    <p>4 900 ₽</p>
                                </div>
                                <div class="btn_link">
                                    <a href="#popup" class="link_btn_pd">Оформить</a>
                                </div>
                            </div>
                
                            <div class="block_pd">
                                <div class="mes">
                                    <p>1 месяц</p>
                                </div>
                                <div class="price_pd">
                                    <p>4 900 ₽</p>
                                </div>
                                <div class="btn_link">
                                    <a href="#popup" class="link_btn_pd">Оформить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                 
            </div>
        </div>
        </div>
    </div>
   <div class="popup" id="popup">
        <div class="container">
            <div class="block_inner">
                <div class="logo">
                    <a href="#" class="logo_title">лица</a>
                    <img src="img/candidates_lable.png" alt="" class="logo_img" width="30px" height="22px">
                    <a href="#" class="pre_title_header">Кандидаты</a>
                 </div>
                 <div class="block_derc_popup">
                    <p class="decr_popup">В подписку включено</p>
                 </div>
                 <div class="plus_pods_popup">
                    <div class="block_Plus_1">
                        <img src="img/yes.svg" alt="" width="24px" height="24px">
                        <p class="ops_popup">Полная база, все направления</p>
                    </div>
                    <div class="block_Plus_1">
                        <img src="img/yes.svg" alt="" width="24px" height="24px">
                        <p class="ops_popup">50 открытий контактов</p>
                    </div>
                 </div>
                    <div class="btn_popup">
                    <a href="#" class="close_popup">Закрыть</a>
                    <a href="#popup_pod" class="yes_popup">Активировать</a>
                 </div>
            </div>
        </div>
    </div>
    <div class="popup" id="popup_pod">
        <div class="container">
            <div class="block_inner">
                <div class="logo">
                    <a href="#" class="logo_title">лица</a>
                    <img src="img/candidates_lable.png" alt="" class="logo_img" width="30px" height="22px">
                    <a href="#" class="pre_title_header">Кандидаты</a>
                 </div>
                 <div class="block_derc_popup">
                    <p class="decr_popup">Выберите подписку</p>
                 </div>
                 <div class="plus_pods_popup s">
                    <div class="block_Plus_3">
                        <div class="check">
                            <input class="radio_pds" type="radio" id="mes" name="drone" value="huey" checked="">
                            <label for="mes">1 месяц</label>
                        </div>
                         <label class="price_pd" for="mes">4 900 ₽</label>
                    </div>
                    <div class="block_Plus_4">
                    <div class="check">
                            <input class="radio_pds" type="radio" id="god" name="drone" value="huey" checked="">
                            <label for="god">1 год</label>
                        </div>
                         <label class="price_pd" for="god">49 000 ₽</label>
                    </div>
                 </div>
                    <div class="btn_popup">
                    <a href="#" class="close_popup">Закрыть</a>
                    <a onclick="changeText();" href="#" class="yes_popup">Активировать</a>
                 </div>
            </div>
        </div>
    </div>

 
<footer class="footer">
        <div class="container">
            <div class="rows_footer">
                <div class="link_setka">
                    <ul>
                        <li class="title_text_footer">ЛИЦА.Кандидаты</li>
                        <li><a class="link_decr_footer" href="#">Найти кандидата</a></li>
                        <li><a class="link_decr_footer" href="#">Попасть в базу</a></li>
                        <li><a class="link_decr_footer" href="#">О сервисе</a></li>
                    </ul>
                </div>
                <div class="link_setka">
                    <ul>
                        <li class="title_text_footer">ЛИЦА.Работа</li>
                        <li><a class="link_decr_footer" href="#">Рекрутинг</a></li>
                        <li><a class="link_decr_footer" href="#">Конструктор подбора</a></li>
                        <li><a  class="link_decr_footer"href="#">Аналитика подбора</a></li>
                    </ul>
                </div>
                <div class="link_setka">
                    <ul>
                        <li class="title_text_footer">О портале</li>
                        <li><a  class="link_decr_footer"href="#">Поддержка</a></li>
                        <li><a class="link_decr_footer" href="#">Обновления</a></li>
                        <li><a  class="link_decr_footer"href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <hr class="line_footer">
            <div class="block_avtor">
                <p class="name_copany">ООО «ЛИЦА» </p>
            <div class="block_company">
                <p class="recr_footer">
                    <a href="#">Реквизиты</a>
                </p>
                <p class="prova_footer">
                   <a href="#"> Правовая информация</a>
                </p>
            </div>
            </div>
        </div>
    </footer>
  <script>
       const changeText = () => {
  // Выбираем элемент на странице, и меняем содержимое нужного поля
  document.getElementsByClassName('pod_text')[0].textContent = "подписка активна";
}       
    </script>
</body>
</html>