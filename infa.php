<?php
session_start();
function role(){
  if ((isset($_SESSION['username'])) and  ($_SESSION['username'] == 'admin') and (($_SESSION['role']) == 'admin')) 
    {return true;} 
  else {return false;}}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="ИИ, BUSINESS, TECH, cоздаём, внедряем, искусственный, интеллект, технологические, решения, бизнеса, предприятий">
    <meta name="description" content="ИИ BUSINESS TECH | Создаём и внедряем искусственный интеллект в технологические решения бизнеса и предприятий">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link type="image/x-icon" rel="shortcut icon" href="Главная.jpg">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>ИИ BUSINESS TECH | Создаём и внедряем искусственный интеллект в технологические решения бизнеса и предприятий</title>
    <style>html {
        scroll-behavior: smooth;
      }
    input[type="text"],
    input[type="password"] {
    color: rgb(98, 98, 98);
    padding: 12px;
    border: 2px solid rgba(169, 169, 169, 0.7);
    width: 97%;
    margin-bottom: 10px; border-radius: 5px;
}
    input[type="text"]::placeholder,
    input[type="password"]::placeholder,
    textarea::placeholder {
        color: rgba(169, 169, 169, 0.7);
        font-family: 'Gotham Pro'; 
        }
      </style>
</head>
<body>
<?php if (role()===false): 
header("Location: logout.php");
exit;?>
<?php else:?>
  <style> @import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700'); 
              .menu ul{
  list-style: none;
  margin: 0;
  padding: 0;
  text-align: center;
}
.menu div{display: inline-block;
  margin: 0 36px; 
}
.menu a{
  font-size: 17px;
  text-transform: uppercase;
  text-decoration: none;
  color: #1d55a6;
  display: block;
  position: relative;
  padding: 8px 15px;
}
.menu a::before{
  content: "";
  width: 100%;
  height: 4px;
  position: absolute;
  left: 0;
  bottom: -5px;
  background: #1d55a6;
  transition: 0.5s transform ease;
  transform: scale3d(0,1,1);
  transform-origin: 0 50%;
}
.headerr * {padding-top: 15px; padding-bottom: 15px; padding-right: 2vw;}

.accordion-item {
    border-bottom: 1px solid #ddd;
}

.accordion-title {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: #333;
    font-family: 'Gotham Pro';
    font-size: 1.1vw;
}

.accordion-content {
    display: none;
    padding: 10px;
}

.accordion-item.active .accordion-content {
    display: block;
}

</style>
<div>
    <b> 
    <div class="menu">
            <ul class="headerr" style="display: flex; flex-direction: row; text-align: center; align-items: center; justify-content: center;">
                <li><a class="v3" style="font-size: 1.1vw; font-family: 'Gotham Pro';">Добро пожаловать, admin!</a></li> 
                <li><a class="v3" id="admin_reg" style="font-size: 1.1vw; font-family: 'Gotham Pro'; color: green; display: none;">Новый admin успешно зарегистрирован!</a></li> 
                <li><a class="v3" id="admin_reg_no" style="font-size: 1.1vw; font-family: 'Gotham Pro'; color: red; display: none;">Пользователь с таким логином уже зарегистрирован!</a></li> 
                <li><a class="v3" id="admin_del" style="font-size: 1.1vw; font-family: 'Gotham Pro'; color: green; display: none;">Запись об adminе успешно удалена!</a></li> 
                <li><a class="v3" id="admin_del_no" style="font-size: 1.1vw; font-family: 'Gotham Pro'; color: red; display: none;">Adminа с таким логином не существует!</a></li> 
                <li><a class="v3" id="admin_requests" style="font-size: 1.1vw; font-family: 'Gotham Pro'; color: green; display: none;">Заявка(и) успешно обработана(ы) и находится(ятся) в рассмотренных заявках!</a></li> 
                <li><a class="v3" id="admin_requests_no" style="font-size: 1.1vw; font-family: 'Gotham Pro'; color: red; display: none;">Заполните все обязательные поля для каждой заявки!</a></li>
                <li><a class="v3" id="admin_reviews_no" style="font-size: 1.1vw; font-family: 'Gotham Pro'; color: red; display: none;">Заполните все обязательные поля для каждого отзыва!</a></li>
                <li><form style="padding-bottom: 20px; font-size: 1.1vw;" action="logout_admin.php" style="display: flex; flex-direction: row; align-items: left;" method="post">
                <input type="submit" value="Вернуться на страницу авторизации" class="custom-button form439 form429" style=" border-radius: 5px;  line-height: 1.8; text-align: center;  font-size: 17px;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 7px; padding-left: 10px; padding-right: 10px; font-family: 'Gotham Pro';">
                </form></li>
            </ul>
        </div>
    </b>
     <div style="background-color: #1d55a6; height: 4px;">
    </div>  
<div style="display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('Images/top1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;">
  <div style="display: flex; flex-direction: column; background-color: white; border: 2px solid #333;
    padding: 20px; width: 140vh;">


<div class="accordion">
    <div class="accordion-item">
        <a class="accordion-title" >Поступившие заявки</a>
        <div class="accordion-content">
            <!-- Содержимое для "Поступившие заявки" -->
            <p style="padding-top: 20px; font-size: 1.3vw; font-family: 'Gotham Pro';">Поступившие на рассмотрение заявки</p><br><br>

        <?php
error_reporting(0);
ini_set('display_errors', 0);
include 'connection_db.php';

$sql = "SELECT * FROM application_form";
$result = $conn->query($sql);

echo '<style>';
echo 'table { border-collapse: collapse; width: 100%; }';
echo 'th, td { border: 1px solid black; padding: 8px; text-align: left; }';
echo '</style>';
echo '<form method="post" onsubmit="return validateForm()">'; // Open the form here
echo '<table border="1">';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Имя пользователя</th>';
echo '<th>Номер телефона</th>';
echo '<th>Email</th>';
echo '<th>Текст сообщения</th>';
echo '<th>Добавить комментарий</th>';
echo '<th>Выбрать заявку</th>';
echo '</tr>';

while($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row["id"] . '</td>';
    echo '<td>' . $row["user_name"] . '</td>';
    echo '<td>' . $row["phone_number"] . '</td>';
    echo '<td>' . $row["email_address"] . '</td>';
    echo '<td>' . wordwrap($row["message_text"], 30, "\n", true) . '</td>';
    echo '<td><input type="text" name="comment' . $row["id"] . '" style="margin-top: 8px; width: 145px; height: 32px;"></td>'; // Unique name for comment
    echo '<td><input type="checkbox" name="process' . $row["id"] . '" style="margin-left: 39px; width: 22px; height: 22px; background-color: green;"></td>'; // Unique name for process
    echo '</tr>';
}

echo '</table>';
echo '<br><br><style> .button_shrift {font-family: "Gotham Pro";} </style>';
echo '<input class="custom-button form439 form429 button_shrift" style=" border-radius: 5px;  line-height: 1.8; text-align: center;  font-size: 1.2vw;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 7px; padding-left: 10px; padding-right: 10px;" type="submit" value="Обработать выбранные заявки">';
echo '<br><br></form>'; // Close the form here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'process') !== false && $value == 'on') {
            $id = substr($key, 7); // Extract the ID from the key
            $comment = $_POST['comment' . $id];
            // Adjust your SQL query for proper insertion into application_form_moder
            $insert_sql = "INSERT INTO application_form_moder (id, user_name, phone_number, email_address, message_text, comment) 
                          SELECT id, user_name, phone_number, email_address, message_text, '$comment'
                          FROM application_form
                          WHERE id = $id";
            if ($conn->query($insert_sql) === TRUE) {
                $delete_sql = "DELETE FROM application_form WHERE id = $id";
                if ($conn->query($delete_sql) === TRUE) {
                    //echo "Заявка успешно обработана и удалена из application_form";
                    echo '<script>
                        document.addEventListener("DOMContentLoaded", function() {
                            document.getElementById("admin_requests").style.display = "block";
                        });
                        </script>';
                } else {
                   // echo "Ошибка при удалении данных из application_form: " . $conn->error;
                }
            } else {
                //echo "Ошибка при добавлении данных в application_form_moder: " . $conn->error;
            }
            echo '<script>window.location.href = window.location.href;</script>';
            
        }
    }
}
    ?>


        </div>
    </div>
    <div class="accordion-item">
        <a class="accordion-title">Рассмотренные заявки</a>
        <div class="accordion-content">
            <!-- Содержимое для "Рассмотренные заявки" -->
            <p style="padding-top: 20px; font-size: 1.3vw; font-family: 'Gotham Pro';">Рассмотренные заявки</p><br><br>
            <?php 
            $sql = "SELECT * FROM application_form_moder";
            $result = $conn->query($sql);
            
            echo '<style>';
            echo 'table { border-collapse: collapse; width: 100%; }';
            echo 'th, td { border: 1px solid black; padding: 8px; text-align: left; }';
            echo '</style>';
            echo '<table border="1">';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Имя пользователя</th>';
            echo '<th>Номер телефона</th>';
            echo '<th>Email</th>';
            echo '<th>Текст сообщения</th>';
            echo '<th>Комментарий рассмотревшего заявку</th>';
            echo '</tr>';
            
            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["id"] . '</td>';
                echo '<td>' . $row["user_name"] . '</td>';
                echo '<td>' . $row["phone_number"] . '</td>';
                echo '<td>' . $row["email_address"] . '</td>';
                echo '<td>' . wordwrap($row["message_text"], 30, "\n", true) . '</td>';
                echo '<td>' . wordwrap($row["comment"], 30, "\n", true) . '</td>';
                echo '</tr>';
            }
            echo '</table>';
            ?>
        </div>
    </div>
    <div class="accordion-item">
        <a class="accordion-title" >Модерация отзывов</a>
        <div class="accordion-content">
            <!-- Содержимое для "Модерация отзывов" -->
            <p style="padding-top: 20px; font-size: 1.3vw; font-family: 'Gotham Pro';">Поступившие на модерацию отзывы</p><br><br>
<?php
$sql = "SELECT * FROM reviews";
$result = $conn->query($sql);

echo '<style>';
echo 'table { border-collapse: collapse; width: 100%; }';
echo 'th, td { border: 1px solid black; padding: 8px; text-align: left; }';
echo '</style>';
echo '<form method="post" onsubmit="return validateForm1()">'; // Open the form here
echo '<table border="1">';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Фамилия пользователя</th>';
echo '<th>Имя пользователя</th>';
echo '<th>Отчество пользователя</th>';
echo '<th>Занимаемая должность</th>';
echo '<th>Название организации</th>';
echo '<th>Текст отзыва</th>';
echo '<th>Опубликовать на сайте</th>';
echo '<th>Выбрать отзыв</th>';
echo '</tr>';

while($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row["id"] . '</td>';
    echo '<td>' . $row["user_surname"] . '</td>';
    echo '<td>' . $row["user_name"] . '</td>';
    echo '<td>' . $row["user_patronymic"] . '</td>';
    echo '<td>' . $row["company_position"] . '</td>';
    echo '<td>' . $row["organization"] . '</td>';
    echo '<td>' . wordwrap($row["message_text"], 30, "\n", true) . '</td>';
    echo '<td><input type="checkbox" name="comment_1' . $row["id"] . '" style="margin-top: 8px; width: 22px; height: 22px;"></td>'; // Checkbox for comment
    echo '<td><input type="checkbox" name="process_1' . $row["id"] . '" style="margin-left: 39px; width: 22px; height: 22px; background-color: green;"></td>'; // Unique name for process
    echo '</tr>';
}

echo '</table>';
echo '<br><br><style> .button_shrift {font-family: "Gotham Pro";} </style>';
echo '<input class="custom-button form439 form429 button_shrift" style=" border-radius: 5px;  line-height: 1.8; text-align: center;  font-size: 1.2vw;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 7px; padding-left: 10px; padding-right: 10px;" type="submit" value="Обработать выбранные отзывы">';
echo '<br><br></form>'; // Close the form here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'process_1') !== false && $value == 'on') {
            $id = substr($key, 9); // Extract the ID from the key
            $comment = isset($_POST['comment_1' . $id]) ? 1 : 0;

            // Adjust your SQL query for proper insertion into reviews_moder
            $insert_sql = "INSERT INTO reviews_moder (id, user_surname, user_name, user_patronymic, company_position, organization, message_text, comment) 
                           SELECT id, user_surname, user_name, user_patronymic, company_position, organization, message_text, ? 
                           FROM reviews 
                           WHERE id = ?";
            
            $delete_sql = "DELETE FROM reviews WHERE id = ?";

            // Prepare and bind parameters
            $stmtInsert = $conn->prepare($insert_sql);
            $stmtInsert->bind_param('si', $comment, $id);

            $stmtDelete = $conn->prepare($delete_sql);
            $stmtDelete->bind_param('i', $id);

            // Execute the insert query
            if ($stmtInsert->execute()) {
                // Execute the delete query
                if ($stmtDelete->execute()) {
                    // Both queries executed successfully
                    /*echo '<script>
                            document.addEventListener("DOMContentLoaded", function() {
                                document.getElementById("admin_requests").style.display = "block";
                            });
                          </script>';*/
                } else {
                    echo "Ошибка при удалении данных из reviews: " . $stmtDelete->error;
                }
            } else {
                echo "Ошибка при добавлении данных в reviews_moder: " . $stmtInsert->error;
            }

            // Close prepared statements
            $stmtInsert->close();
            $stmtDelete->close();

            echo '<script>window.location.href = window.location.href;</script>';
        }
    }
}
    ?>
        </div>
    </div>
    <div class="accordion-item">
        <a class="accordion-title" >Регистрация adminов</a>
        <div class="accordion-content">
            <!-- Содержимое для "Регистрация adminов" -->
            <p style="padding-top: 20px; font-size: 1.3vw; font-family: 'Gotham Pro';">Регистрация новых adminов</p><br><br>
<?php

function add($conn, $username, $password) {
  $query = "SELECT 1 FROM admin_base WHERE login = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param('s', $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
      //echo "Пользователь с таким логином уже зарегистрирован!";
      echo '<script>
      document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("admin_reg_no").style.display = "block";
      });
    </script>';
  } else {
      // Генерация соли
      $salt = bin2hex(random_bytes(16));

      // Хеширование пароля с использованием password_hash
      $hashed_password = password_hash($password . $salt, PASSWORD_BCRYPT);

      $query = "INSERT INTO admin_base (login, parol, hash) VALUES (?, ?, ?)";
      $stmt = $conn->prepare($query);
      $stmt->bind_param('sss', $username, $hashed_password, $salt);

      if ($stmt->execute()) {
          //echo "Новый admin успешно зарегистрирован.";
          echo '<script>
              document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("admin_reg").style.display = "block";
              });
            </script>';
      } else {
          //echo "Ошибка: " . $stmt->error;
      }

      $stmt->close();
  }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ((!empty($username)) and (!empty($password))) {
  add($conn, $username, $password);}
}
?>
<form method="post">
        <input type="text" name="username" id="username" placeholder="Имя adminа" required><br>
        <br><br>
        <input type="text" name="password" id="password" placeholder="Пароль" required><br>
        <br><br>
        <input class="custom-button form439 form429" style=" border-radius: 5px;  line-height: 1.8; text-align: center;  font-size: 1.2vw;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 7px; padding-left: 10px; padding-right: 10px; font-family: 'Gotham Pro';" type="submit" value="Выдать право доступа новому adminу">
        <br><br>
      </form>
        </div>
    </div>
    <div class="accordion-item">
        <a class="accordion-title">Удаление adminов</a>
        <div class="accordion-content">
            <!-- Содержимое для "Удаление adminов" -->
            <p style="padding-top: 20px; font-size: 1.3vw; font-family: 'Gotham Pro';">Удаление adminов</p><br><br>
<?php

function deleteAdminByUsername($conn, $username_del) {
    $query = "DELETE FROM admin_base WHERE login = '$username_del'";
    $result = $conn->query("SELECT * FROM admin_base WHERE login = '$username_del'");

    if ($result->num_rows > 0) {
        if ($conn->query($query) === TRUE) {
            //echo "Запись об admin успешно удалена.";
            echo '<script>
              document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("admin_del").style.display = "block";
              });
            </script>';
        } else {
            //echo "Ошибка: " . $query . "<br>" . $conn->error;
        }
    } else {
        //echo "Админа с таким логином не существует!";
        echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
          document.getElementById("admin_del_no").style.display = "block";
        });
      </script>';

    }
    $query = "DELETE FROM admin_base WHERE login = ''";
    $result = $conn->query($query);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_del = $_POST['username_del'];
    if (!empty($username_del)) {
    deleteAdminByUsername($conn, $username_del);}
}
?>
<form method="post">
    <input type="text" name="username_del" id="username_del" placeholder="Имя adminа" required><br>
    <br><br>
    <input class="custom-button form439 form429" style=" border-radius: 5px;  line-height: 1.8; text-align: center;  font-size: 1.2vw;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 7px; padding-left: 10px; padding-right: 10px; font-family: 'Gotham Pro';" type="submit" value="Удалить запись об adminе">
    <br><br>
</form>
        </div>
    </div>
</div>


</div> 
</div> 
<?php endif; ?>  
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var accordionItems = document.querySelectorAll('.accordion-item');

        accordionItems.forEach(function (item) {
            item.addEventListener('click', function (event) {
                if (!event.target.closest('.accordion-content')) {
                    accordionItems.forEach(function (otherItem) {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                        }
                    });

                    item.classList.toggle('active');
                }
            });
        });
    });
</script>
<script>
  function validateForm() {
  var comments = document.querySelectorAll('input[type="text"]');
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var errorMessage = document.getElementById("admin_requests_no");

  for (var i = 0; i < comments.length; i++) {
    if (comments[i].value.trim() === '' && checkboxes[i].checked) {
      errorMessage.style.display = "block";
      return false;
    } else if (comments[i].value.trim() !== '' && !checkboxes[i].checked) {
      errorMessage.style.display = "block";
      return false;
    }
  }
  return true;
}

function validateForm1() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var errorMessage = document.getElementById("admin_reviews_no");
  for (var i = 0; i < checkboxes.length; i += 2) {
  if ((checkboxes[0].checked && !checkboxes[1].checked)) {
    errorMessage.style.display = "block";
    return false;
  }
}
  return true;
}
</script>
</html>
