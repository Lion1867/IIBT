<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/view.css">
    <link rel="stylesheet" href="styles/arrow.css">
    <link rel="stylesheet" href="styles/sticky-footer.css">
    <link rel="icon" href="favicon.png" rel="icon">
    <title>Lustra</title>
    <style>         #toTop_1 {
            display: block;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1;
            border: none;
            outline: none;
            background-color: #f8af5b;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 10px;
            font-size: 18px;
            scroll-behavior: smooth;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        #toTop_1:hover {
            background-color: #d3715e;
            transition: background-color 0.3s;
        }
         html {
        scroll-behavior: smooth;
      }
      .form-container-full {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
        }
              .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .form-container h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="file"] {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px; 
            margin-bottom: 25px;
        }

        input[type="submit"] {
            background-color: #f8af5b;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
           
        }

        input[type="submit"]:hover {
            background-color: #4c2748;
        }
        .output-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .output-container img {
            margin-bottom: 30px;
            max-width: 980px;
            max-height: 780px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .about-container-full {  display: flex;
            flex-direction: row; justify-content: center; align-items: center;}
        .about-container { 
            background-color: #fff;
            padding: 20px; padding-right: 88px; padding-left: 88px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 800px;
            margin: 20px;
            color:rgb(0, 0, 0);
        }

        .about-container h2 {
            text-align: center;
            color: #333;
        }

        .about-container p {
            text-align: justify;
            color: #333;
        }

        .h2_beautiful {
  font-size: 25px;
  text-transform: uppercase;
  text-decoration: none;
  color: #4c2748;
  display: block;
  position: relative;
  padding: 8px 15px;
}
.h2_beautiful::before{
  content: "";
  width: 100%;
  height: 4px;
  position: absolute;
  left: 0;
  bottom: -5px;
  background: #f8af5b;
  transition: 0.5s transform ease;
  transform: scale3d(0,1,1);
  transform-origin: 0 50%;
}
.h2_beautiful:hover::before{
  transform: scale3d(1,1,1);
}
.h2_beautiful::before{
  background: #f8af5b;
  transform-origin: 100% 50%;
}
.h2_beautiful:hover::before{
  transform-origin: 0 50%;
}

.custom-file-input::-webkit-file-upload-button {
  display: none;
}
.custom-file-input::before {
  content: 'Выбрать файл';
  display: inline-block;
  background:  #4c2748;
  color: #fff;
  border: 1px solid #4c2748;
  padding: 8px 12px;
  border-radius: 5px;
  cursor: pointer;
  margin-right: 10px;
}
.custom-file-input:hover::before {
  background: #f8af5b;
}

        </style>
  </head>
  <body>
    <header class="header" id="top">
      <div class="header-wrapper center">
        <a class="logo" href="#"></a>
        <div class="header__box">
          <span>
            Lustra — стоковые фотографии
          </span>
        </div>
      </div>
    </header>

    <main class="main">
   <!-- <div class="about-container-full">
        <div class="about-container">
        <h2><a href="#gallery" class="h2_beautiful">О нас - Фотосток бесплатных ярких фото</a></h2>
        <p>Добро пожаловать в Фотосток, ваш источник высококачественных и разнообразных стоковых фотографий. Мы понимаем силу визуального контента в современной цифровой эпохе, и наша миссия - предоставить вам обширную коллекцию изображений, которые соответствуют вашим творческим потребностям.</p>

        <p>Наша команда в Фотостоке увлечена фотографией и посвящена созданию библиотеки, охватывающей различные темы, стили и объекты. Будь вы дизайнером, маркетологом, блогером или владельцем бизнеса - наши стоковые фотографии предназначены для улучшения ваших проектов и коммуникации.</p>

        <p>Почему выбирают именно наш Фотосток?</p>
        <ul>
            <li>Обширная Коллекция: Исследуйте обширную и разнообразную коллекцию высокоразрешенных изображений.</li>
            <li>Гарантия Качества: Наши изображения проходят тщательную проверку качества для обеспечения высокого стандарта.</li>
            <li>Простая Лицензия: Прозрачные и простые варианты лицензирования для вашего удобства.</li>
            <li>Сообщество Авторов: Присоединяйтесь к нашему сообществу талантливых фотографов и вносите свой вклад в мировой креативный ландшафт.</li>
            <li>Поддержка Клиентов: Наша служба поддержки всегда готова помочь вам с любыми вопросами или запросами.</li>
        </ul>

        <p>В Фотостоке мы верим в силу визуальных образов для рассказа увлекательных историй. Присоединяйтесь к нам в этом визуальном путешествии и раскройте потенциал завораживающих изображений для ваших проектов.</p>
    </div></div> -->
      <div class="main-wrapper center">
        <ul class="gallery" id="gallery"></ul>
      </div>
      <div class="form-container-full">
      <div class="form-container" id="form_file">
        <h2>Определите возраст людей на фото в один клик!</h2>
      <form action="#real_new_img" method="post" enctype="multipart/form-data">
<input class="custom-file-input" type="file" name="image" required>
<input type="submit" value="Загрузить" name="submit">
</form> <p style="font-size: 12px;">Создано при поддержке ООО «ИИ Business Tech»</p>
</div> </div>

        <?php

if(isset($_POST["submit"])) {
    $target_dir = "upload/"; // папка, куда будет загружено изображение
    #$target_file = $target_dir . basename($_FILES["image"]["name"]); // путь к файлу
    $target_file = $target_dir . "input.jpg";
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // получить тип файла

    // Проверка, является ли файл изображением
    if (!empty($_FILES["image"]["name"])) {
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            //echo "File is not an image.";
            $uploadOk = 0;
        }
    }
  }
  else {
    //echo "Файл не выбран!";
}
    /* Проверка размера файла
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }*/

    // Разрешенные форматы файлов
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Загрузка файла
    if ($uploadOk == 0) {
       // echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            //echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            
            // Отображение загруженного изображения
            //echo "<h2>Uploaded Image</h2>";
            //echo "<div class='output-container'> <img src='". $target_file ."'/>";
            echo "<div class='output-container'>";
            $command = "C:\Users\mag_i\AppData\Local\Programs\Python\Python311\python.exe C:\ospanel\domains\localhost\Lustra\main.py 2>&1";
            $output = shell_exec($command);
            #echo $output;
            echo "<img id='real_new_img' src='photo_new/photo_new.jpg'> </div>";

        } else {
           // echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
    </main>
    <footer class="footer">
      <div class="footer-wrapper center">
        <a class="logo" href="#"></a>
        <div class="contacts" style="  justify-content: center;">
          <a href="https://vk.com/avoideyecontact" target="_blank" class="contacts__link">ВКонтакте</a>
          <a href="https://github.com/avoideyecontact" target="_blank" class="contacts__link">github</a>
        </div>
      </div>
    </footer>
  </body>

  <template id="gallery-item">
    <li class="gallery-item">
      <img src="" alt="Фото">
    </li>
  </template>

  <div id="view">
    <div id="view-content"></div>
  </div>
  
  <button onclick="topFunction()" id="toTop" title="Go to top">Наверх</button>
   <a href="#form_file" id="toTop_1" title="Go to Neiro">Возраст по фото  <span style="color: #4c2748;"><b>BETA</span></b></a>
  <script src="js/fetch-data.js"></script>
  <script src="js/view.js"></script>
  <script src="js/arrow.js"></script>
</html>
