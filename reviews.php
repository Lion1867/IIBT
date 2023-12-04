<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Отзывы</title>
    <link rel="stylesheet" href="style1.css">
    <link type="image/x-icon" rel="shortcut icon" href="Главная.jpg">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
    input[type="text"], 
    textarea{ 
    color: rgb(98, 98, 98);
    padding: 12px;
    border: 2px solid rgba(169, 169, 169, 0.7);
    width: 97%;
    margin-bottom: 10px; border-radius: 5px;
}
    input[type="text"]::placeholder,
    textarea::placeholder {font-size: 1.45vh;
        color: rgba(169, 169, 169, 0.7);
        font-family: 'Gotham Pro'; 
        }
    #searchButton_1{ display: flex; flex-direction:column; text-align: center; align-items: center; justify-content: center; height: 42px; 
    background-color: #1d55a6;  font-family: 'Gotham Pro';
    color: #fff; 
    border: none; padding-left: 20px; padding-right: 20px;
    border-radius: 5px; cursor: pointer;
  }
    #searchButton_1:hover {background-color: #f8af5b;}
    #searchButton { display: flex; flex-direction:column; text-align: center; align-items: center; justify-content: center; height: 42px; width: 15%;
    background-color: #1d55a6;  font-family: 'Gotham Pro';
    color: #fff; 
    border: none; padding-left: 20px; padding-right: 20px;
    border-radius: 5px; 
  }
  #fast_search:hover{text-decoration: underline;}
  #full_search:hover{text-decoration: underline;}
  #fast_search{font-family: 'Gotham Pro'; font-size: 14px; color: #1d55a6;}
  #full_search{font-family: 'Gotham Pro'; font-size: 14px; color: #1d55a6;}
    </style>
</head>
<body style="display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 10vh;
    margin-bottom: 10vh;
    background-image: url('Images/top1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;">
    <div style="border: 2px solid #333;
    padding: 9vw; padding-top: 1vw; 
    background-color: #ffffff;">
    <h1 class="form102"  id="reviews_form"  style="text-align: center;  position: relative; font-size: 28px;  margin-bottom: 45px; text-transform: uppercase; font-family: 'Gotham Pro';">Наши отзывы</h1>
    
    <div id="review_send" style='display:none; flex-direction:column; text-align:center; margin-top: 10px; margin-bottom: 35px; font-size: 20px; font-family: "Gotham Pro";'>Отзыв от данного отправителя уже отправлен.</div>
    <div id="review_send_no" style='display:none; flex-direction:column; text-align:center; margin-top: 10px; margin-bottom: 35px; font-size: 20px; font-family: "Gotham Pro";'>Благодарим за ваш отзыв!</div>
    <div id="fam_no" style='color: red; display:none; flex-direction:column; text-align:center; margin-top: 10px; margin-bottom: 35px; font-size: 20px; font-family: "Gotham Pro";'>Фамилия должна содержать только буквы.</div>
    <div id="name_no" style='color: red; display:none; flex-direction:column; text-align:center; margin-top: 10px; margin-bottom: 35px; font-size: 20px; font-family: "Gotham Pro";'>Имя должно содержать только буквы.</div>
    <div id="patr_no" style='color: red; display:none; flex-direction:column; text-align:center; margin-top: 10px; margin-bottom: 35px; font-size: 20px; font-family: "Gotham Pro";'>Отчество должно содержать только буквы.</div>
    <div id="pos_no" style='color: red; display:none; flex-direction:column; text-align:center; margin-top: 10px; margin-bottom: 35px; font-size: 20px; font-family: "Gotham Pro";'>Должность должна содержать только буквы и пробелы.</div>
    <div id="comp_no" style='color: red; display:none; flex-direction:column; text-align:center; margin-top: 10px; margin-bottom: 35px; font-size: 20px; font-family: "Gotham Pro";'>Название компании должно содержать только буквы, пробелы и кавычки.</div>
    <div id="mess_no" style='color: red; display:none; flex-direction:column; text-align:center; margin-top: 10px; margin-bottom: 35px; font-size: 20px; font-family: "Gotham Pro";'>Текст отзыва должен содержать только буквы, пробелы и кавычки.</div>
    
    <form id="searchForm_1" style="display: none;">
    <div style="display: flex; flex=direction: row;">
        <input type="text" id="searchSurname" placeholder="Фамилия">
        <input type="text" id="searchName" placeholder="Имя">
        <input type="text" id="searchPatronymic" placeholder="Отчество">
        <input type="text" id="searchPosition" placeholder="Должность">
        <input type="text" id="searchOrganization" placeholder="Компания">
        <div id="searchButton_1" onclick="searchReviews_1()">Поиск</div>
    </div><div id="fast_search" onclick="showFastSearch()">Вернуться к быстрому поиску</div>
</form>


    <form id="searchForm">
    <div style="display: flex; flex-direction: row;">
    <div id="searchButton">Быстрый поиск</div>
    <input type="text" id="searchInput" name="searchInput" placeholder="ФИО, должность, компания, текст" oninput="searchReviews();">
    </div><div id="full_search" onclick="showDetailedSearch()">Войти в карточку поиска</div>
    </form>
    
    
    <div id="searchResults_1"></div>

    <div id="searchResults"></div>

    <div id="reviewsContainer"></div>

    <h1 class="form102"  id="reviews_form"  style="text-align: center;  position: relative; font-size: 28px;  margin-bottom: 45px; margin-top: 28px; text-transform: uppercase; font-family: 'Gotham Pro';">Оставьте свой отзыв</h1>

    <form method="post">
        <input type="text" name="user_surname" id="user_surname" placeholder="Ваша фамилия" required><br> 
        <input type="text" name="user_name" id="user_name" placeholder="Ваше имя" required><br> 
        <input type="text" name="user_patronymic" id="user_patronymic" placeholder="Ваше отчество" required><br> 
        <input type="text" name="company_position" id="company_position" placeholder="Ваша должность в организации" required><br> 
        <input type="text" name="organization" id="organization" placeholder="Название вашей организации" required><br> 
        <textarea name="message_text" id="message_text" required maxlength="1000" rows="7" cols="138" placeholder="Текст вашего отзыва"></textarea>
        <br><br>
        <div style="display: flex; flex-direction: row; justify-content: center;"><input class="custom-button form439 form429" name="submit" style="margin-right: 30px; border-radius: 10px;  line-height: 1.8; text-align: center;  font-size: 17px;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 7px; padding-left: 10px; padding-right: 10px; font-family: 'Gotham Pro';" type="submit" value="Опубликовать отзыв">
        <a class="custom-button form439 form429" style="border-radius: 10px;  line-height: 1.8; text-align: center;  font-size: 17px;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 12px; padding-bottom: 13px; padding-top: 13px; padding-left: 10px; padding-right: 10px; font-family: 'Gotham Pro';" href="index.php#main5_adapt">ВЕРНУТЬСЯ НА ГЛАВНУЮ СТРАНИЦУ САЙТА</a>
        </div> 
</form>
<br>
<?php
error_reporting(0);
ini_set('display_errors', 0);
include 'connection_db.php';

function add($conn, $user_surname, $user_name, $user_patronymic, $company_position, $organization,  $message_text) {
    $sql = "SELECT 1 FROM reviews WHERE company_position = ? AND organization = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $company_position, $organization);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("review_send").style.display = "flex";
        });
        </script>';
    } else {
        $sql = "INSERT INTO reviews (user_surname, user_name, user_patronymic, company_position, organization, message_text) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $user_surname, $user_name, $user_patronymic, $company_position, $organization,  $message_text);

        if ($stmt->execute()) {
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("review_send_no").style.display = "flex";
            });
            </script>';
        } else {
            //echo "<div style='grid-column: 1/3; display:flex; flex-direction:column; text-align:center; margin-top: 35px;'>Ошибка при отправлении заявки: " . $stmt->error . "</div>";
        }
    }
}

if (isset($_POST['submit'])) {
    $user_surname = htmlspecialchars($_POST['user_surname']);
    $user_name = htmlspecialchars($_POST['user_name']);
    $user_patronymic = htmlspecialchars($_POST['user_patronymic']);
    $company_position = htmlspecialchars($_POST['company_position']);
    $organization = $_POST['organization'];
    $message_text = $_POST['message_text'];

    // Паттерны для валидации
    $namePattern = '/^[a-zA-Zа-яА-Я]+$/u';
    $positionPattern = '/^[a-zA-Zа-яА-Я\s]+$/u';
    $organizationPattern = '/^[a-zA-Zа-яА-Я\s"]+$/u';

    // Проверка наличия данных в обязательных полях
    if (empty($user_surname) || empty($user_name) || empty($user_patronymic) || empty($company_position) || empty($organization) || empty($message_text)) {
        echo "Заполните все обязательные поля.";

    } else {
        // Проверка паттернов
        if (!preg_match($namePattern, $user_surname)) {
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("fam_no").style.display = "flex";
            });
            </script>';

        } elseif (!preg_match($namePattern, $user_name)) {
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("name_no").style.display = "flex";
            });
            </script>';


        } elseif (!preg_match($namePattern, $user_patronymic)) {
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("patr_no").style.display = "flex";
            });
            </script>';


        } elseif (!preg_match($positionPattern, $company_position)) {
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("pos_no").style.display = "flex";
            });
            </script>';
         
   
        } elseif (!preg_match($organizationPattern, $organization)) {
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("comp_no").style.display = "flex";
            });
            </script>';
           
  
        } elseif (!preg_match($organizationPattern, $message_text)) {
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("mess_no").style.display = "flex";
            });
            </script>';
        

        } else {
            // Все поля заполнены и соответствуют паттернам, вызываем функцию add
            add($conn, $user_surname, $user_name, $user_patronymic, $company_position, $organization, $message_text);
   
        }
    }
}
?>

<script>
// jQuery для выполнения AJAX запроса
$(document).ready(function () {
    // AJAX запрос
    $.ajax({
        type: "GET",
        url: "get_reviews.php", // Путь к серверному скрипту
        success: function (data) {
            // Вставляем полученные отзывы в контейнер
            $("#reviewsContainer").html(data);
        },
        error: function (error) {
            console.error("Произошла ошибка при получении отзывов:", error);
        }
    });
});

function searchReviews() {
    var searchInput = document.getElementById("searchInput").value;

    searchInput = htmlspecialchars(searchInput); 

    validateForm_1(searchInput);

    var reviewsContainer = document.getElementById("reviewsContainer");
    reviewsContainer.style.display = "none";
    // Отправка AJAX-запроса на сервер для поиска
    $.ajax({
        type: "POST",
        url: "search_reviews.php", // Путь к серверному скрипту для обработки поискового запроса
        data: { searchInput: searchInput },
        success: function (data) {
            // Вставляем полученные результаты в контейнер
            $("#searchResults").html(data);
        },
        error: function (error) {
            console.error("Произошла ошибка при выполнении поискового запроса:", error);
        }
    });
}


function searchReviews_1() {
    var searchSurname = document.getElementById("searchSurname").value;
    var searchName = document.getElementById("searchName").value;
    var searchPatronymic = document.getElementById("searchPatronymic").value;
    var searchPosition = document.getElementById("searchPosition").value;
    var searchOrganization = document.getElementById("searchOrganization").value;

    searchSurname = htmlspecialchars(searchSurname);
    searchName = htmlspecialchars(searchName);
    searchPatronymic = htmlspecialchars(searchPatronymic);
    searchPosition = htmlspecialchars(searchPosition);
    searchOrganization = htmlspecialchars(searchOrganization);

    // Вызов функции валидации без привязки к событию
    validateForm(searchSurname, searchName, searchPatronymic, searchPosition, searchOrganization);

    var reviewsContainer = document.getElementById("reviewsContainer");
    reviewsContainer.style.display = "none";

    var searchData = [searchSurname, searchName, searchPatronymic, searchPosition, searchOrganization];

    // Отправка AJAX-запроса на сервер для поиска
    $.ajax({
        type: "POST",
        url: "strong_search_reviews.php",
        data: { searchData: searchData },
        success: function (data) {
            $("#searchResults").html(data);
        },
        error: function (error) {
            console.error("Произошла ошибка при выполнении поискового запроса:", error);
        }
    });
}

function showDetailedSearch() {
        document.getElementById("searchForm").style.display = "none";
        document.getElementById("searchForm_1").style.display = "block";
    }

function showFastSearch() {
    document.getElementById("searchForm").style.display = "block";
    document.getElementById("searchForm_1").style.display = "none";
}

// Функция для валидации формы
function validateForm(searchSurname, searchName, searchPatronymic, searchPosition, searchOrganization) {
    document.addEventListener("DOMContentLoaded", function () {
        var namePattern = /^[a-zA-Zа-яА-Я]+$/;
        var positionPattern = /^[a-zA-Zа-яА-Я\s]+$/;
        var organizationPattern = /^[a-zA-Zа-яА-Я\s"']+$/;
        // Валидация Фамилии
        if (!namePattern.test(searchSurname)) {
            alert("Фамилия должна содержать только буквы.");
            return;
        }

        // Валидация Имени
        if (!namePattern.test(searchName)) {
            alert("Имя должно содержать только буквы.");
            return;
        }

        // Валидация Отчества
        if (!namePattern.test(searchPatronymic)) {
            alert("Отчество должно содержать только буквы.");
            return;
        }

        // Валидация Должности
        if (!positionPattern.test(searchPosition)) {
            alert("Должность должна содержать только буквы и пробелы.");
            return;
        }

        // Валидация Компании
        if (!organizationPattern.test(searchOrganization)) {
            alert("Компания должна содержать только буквы, пробелы, кавычки и апострофы.");
            return;
        }
    });
}

// Функция для валидации формы
function validateForm_1(searchInput) {
    document.addEventListener("DOMContentLoaded", function () {
        var fullPattern = /^[a-zA-Zа-яА-Я\s"']+$/;
        // Валидация общего поля
        if (!fullPattern.test(searchInput)) {
            alert("Поле должно содержать только буквы, пробелы, кавычки и апострофы.");
            return;
        }
    });
}

function htmlspecialchars(str) {
    var map = {
        "&": "&amp;",
        "<": "&lt;",
        ">": "&gt;",
        '"': "&quot;",
        "'": "&#039;"
    };
    return str.replace(/[&<>"']/g, function (m) {
        return map[m];
    });
}
</script>
</body>
</html>
