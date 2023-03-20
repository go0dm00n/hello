<?php
    $title = stripcslashes(htmlspecialchars(trim($_POST['title'])));
    require("config.php");
    $connect = new mysqli(HOST, USER, PASS, DB);
    $connect ->set_charset("UTF8");

    $sql ="INSERT INTO `subjects`( `title`) VALUES ('$title')";
    
    $result = $connect -> query($sql);
    if ($result) {
        echo "Данные записаны";
        header("Location:./subject.php");
            } else { echo "Ошибка";}