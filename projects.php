<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="бизнес, индустриальный, парки, строительный, техника, проекты, портфолио, мировой, команда">
    <meta name="description" content="Эта HTML-страница является лендинг-страницей сайта. На ней размещена полезная информация об услугах строительной компании.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link type="image/x-icon" rel="shortcut icon" href="Главная.jpg">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>ИИ BUSINESS TECH | Создаём и внедряем искусственный интеллект в технологические решения бизнеса и предприятий</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image">
<input type="submit" value="Upload" name="submit">
</form>

        <?php

if(isset($_POST["submit"])) {
    $target_dir = "upload/"; // папка, куда будет загружено изображение
    #$target_file = $target_dir . basename($_FILES["image"]["name"]); // путь к файлу
    $target_file = $target_dir . "input.jpg";
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // получить тип файла

    // Проверка, является ли файл изображением
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    /* Проверка размера файла
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }*/

    // Разрешенные форматы файлов
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Загрузка файла
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            
            // Отображение загруженного изображения
            echo "<h2>Uploaded Image</h2>";
            echo "<img src='". $target_file ."' width='300' />";
            
            $command = "C:\Users\mag_i\AppData\Local\Programs\Python\Python311\python.exe C:\ospanel\domains\localhost\main.py 2>&1";
            $output = shell_exec($command);
            #echo $output;
            echo "<img src='photo_with_ages/photo_with_ages.jpg'>";

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}


?>

</body>
</html>