<html>
  
   <head>
    <title>Страница отзывов</title>
    <style>
        div, h1 {
            text-align: center;
        }

        .message,
        .username {
            text-align: left;
        }

        .message {
            font-style: italic;
        }

    </style>
</head>

<body>
    <h1>Отзывы о нашей работе</h1>
        <div><?
        include "msgshow.php";
           // echo $num;
        ?></div>
    <div>
        <h2>Оставьте ваш отзыв</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <p>Введите ваше имя</p>
            <input id="fio" type="text" name="username" required placeholder="Иван Иванов">
            <p>Введите текст ниже</p>
            <textarea id="message" name="msg" rows="5" cols="200" required placeholder="Введите текст"></textarea>
            <br>
            <input type="submit" id="button" name="button" value="Отправить">
        </form>
        <?
        if (isset($_POST["button"])){
            include "msgupdate.php";
        }
        ?>
        </div>
</body>

</html>
