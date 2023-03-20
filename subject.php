<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список Предметов</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Список Предметов</h1>
    <form action="addsubject.php" method="POST">
      <input type="text" name="title" placeholder="Введите предмет" required><br>
            <input type="submit" >

    </form>


  <?php
    require("config.php");
    $connect = new mysqli(HOST, USER, PASS, DB);
    $connect ->set_charset("UTF8");

    $sql = "SELECT * FROM `subjects` ";
    $result = $connect->query($sql);
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo " <div>
                $row[title] 
                
              </div>";
      } 
   
  ?>
  <a href='index.php'>Студенты</a>
    
</body>
</html>