<?php
    $fname = stripcslashes(htmlspecialchars(trim($_POST['fname'])));
    $lname = stripcslashes(htmlspecialchars(trim($_POST['lname'])));
    $age = stripcslashes(htmlspecialchars(trim($_POST['age'])));
    require("config.php");
    $connect = new mysqli(HOST, USER, PASS, DB);
    $connect ->set_charset("UTF8");

    $sql ="INSERT INTO `students`( `fname`, `lname`, `age`, `group_id`) VALUES ('$fname','$lname',$age,1)";
    $connect -> query($sql);
    $result = $connect -> query($sql);
    if ($result) {
        echo "Данные записаны";
        header("Location:./");
            } else { echo "Ошибка";}