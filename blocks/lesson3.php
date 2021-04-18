<?php 
    include_once "../config.php";
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="shortcut icon" type="image/png" href="../media/logo.png"/>
        <title>GoGame</title>
    </head>
<body>
    
    <?php require "../header.php"?>

    <main class="content-wrapper">
        <div class="container-fluid">
            <h1 class="text_main-title">День 3 лагеря GoGame</h1>
            <hr>
                <h4>в 19:00 | Лекция "Unity VS Unreal Engine, C++ VS C#"</h4>
                <br>
                <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Rny_QaWsmDU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <br>
                <br> 
                <br>  
                <h4>В 20:00 | Практика "Программирование в Unity ЧАСТЬ 1"</h4>
                <br> 
                <h5></h5>
                <b>Теория по С# <a href="https://metanit.com/sharp/tutorial/" target="_blank" style="color:blue;">Metanit C#</a></b> 
                <br>
                <br>
                <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bbLDj1PlO60" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <br>
                <h4>Практика "Программирование проекта в Unity ЧАСТЬ 2"</h4>
                <br>  
                <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/yU6sRCDEDik" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <br>        
                    <!--<?php require "../test1.php"?>-->

                    <div class="jumbotron">
                        <h3>Домашнее задание</h3>
                        <p class="text-left">
                        <!--<br>Домашнее задание будет доступно в <kbd>В 20:00</kbd>-->
                        <br>1) Написать свой скрипт управления шариком, только стрелочками клавиатуры. Как сделать управление одновременно стрелочками и кнопками? 
                        <br> Прислать фотографии скрипта управления + скрипт <kbd>1 балл</kbd>
                        <br>2) Написать движение платформы так же, как и описывалось в видео. Значение координаты отнимаются и становятся меньше заданных. После чего начинают увеличиваться, пока не становятся меньше начальных значений. 
                        <br>  Прислать фото скрипта + скрипт      <kbd>2 балла</kbd>
                        <br>
                        <br><strong>Повышенная сложность:</strong> Придумать свое припятствие с подвижными частями, разрешается взять картинки из любого источника. Прислать видео/скрины + .unitypackage <kbd>2 балла</kbd>
                        <br> Самому креативному дз в команде <kbd>2 балла</kbd>
                        </p>
                        
                    </div>
                    <br>
                    <div class="jumbotron">
                        <h3>Как загрузить домашнее задание?</h3>
                        <p>ДЗ отправить на почту <a href="#" style="color: #007bff;">"gogame_school@mail.ru"</a></p>
                        <p class="text-left">
                            <b>Пример письма:</b>  
                            <br>1) Имя и фамилия
                            <br>2) Название компании
                            <br>3) Описание ДЗ
                            <br>4) 3-4 фото вашего ДЗ (лучше видео)
                            <br>5) .unitypackage файл с вашим ассетом
                            <br>
                        
                            <br>Как создать .unitypackage для отправки ДЗ:
                            <br>
                            1) В Unity выбрать вкладку <kbd>Assets</kbd>
                            <br>
                            2) Нажать на <kbd>Export Package</kbd>
                            <br>
                            3) Нажать кнопку <kbd>Export</kbd>
                            <br>
                        </p>
                        <br>
                        <h3 class="lvl-stats" style="margin-right:10px;">Награда за домашнее задание</h3>
                        <br>
                        <div class="d-flex text-center priz" style="justify-content: center; ">

                            <h5 class="lvl-stats" style="margin-right:10px;">Уровень +1</h5>
                            
                            <img class="box-img-hed" src="../media/pngwave.png" alt="">
                            <h5 class="gem-stats">+600</h5>
                            <!--<img class="box-img-hed" src="../media/box.png" alt="">
                            <h5 class="gem-stats last-stats">1</h5>-->
                        </div>
                        <!--<a href="https://cloud.mail.ru/public/4LHH%2FnH1JwN8UU"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                            Скачать ассет-->
                        </button></a>
                        <!--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                            Получить награду
                        </button>-->
                        
                    </div>
                   
                </div>
        </div>
        
    </main>

    <?php require "../footer.php"?>
    
</body>
</html>