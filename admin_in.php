<?php
error_reporting(0);
ini_set('display_errors', 0);
include 'connection_db.php';
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo '<script>
              document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("parol_no").style.display = "block";
              });
            </script>';
}

setcookie("PHPSESSID", "", time() - 3600, "/");
function role($conn,$username,$password) {
  /* if ($username === 'admin' and $password === 'admin') {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'admin';
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'guest';
    }*/
         $query = "SELECT * FROM admin_base WHERE login = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            // Если пользователь найден в базе данных
            $row = $result->fetch_assoc();
            $hashedPassword = $row['parol'];
    
            // Проверяем пароль
            if (password_verify($password . $row['hash'], $hashedPassword)) {
                $_SESSION['username'] = 'admin';
                $_SESSION['role'] = 'admin';
                echo "Авторизация успешна.";
            } else {
                $_SESSION['username'] = $username;
                $_SESSION['role'] = 'guest';
                echo "Неверный пароль.";
            }
        } else {
            // Если пользователя нет в базе данных
            $_SESSION['username'] = $username;
            $_SESSION['role'] = 'guest';
            echo "Пользователь с таким логином не найден.";
        }
    
        $stmt->close();
}
if (isset($_POST['username']) and isset($_POST['password'])) {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    role($conn,$username,$password);
    header('Location: infa.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Авторизация</title>
    <link rel="stylesheet" href="style1.css">
    <style>
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
<body style="display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('Images/top1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;">
    <div style="border: 2px solid #333;
    padding: 20px; 
    background-color: #ffffff;">

    <h1 class="form102"   style="text-align: center;  position: relative; font-size: 25px;  margin-bottom: 45px; margin-top: 5px;">Войти как админ</h1>
    <form method="post">
        <input type="text" name="username" id="username" placeholder="Имя adminа" required><br>
        <br><br>
        <input type="password" name="password" id="password" placeholder="Пароль" required><br>
        <br><br>
        <p id="parol_no" style='color: red; margin-bottom: 50px; display: none;'>Введены неверные логин или пароль!</p>
        <input class="custom-button form439 form429" style=" border-radius: 5px;  line-height: 1.8; text-align: center;  font-size: 17px;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 7px; padding-left: 10px; padding-right: 10px; font-family: 'Gotham Pro';" type="submit" value="Войти в административную панель">
        <a class="custom-button form439 form429" style=" border-radius: 5px;  line-height: 1.8; text-align: center;  font-size: 17px;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 12px; padding-bottom: 13px; padding-top: 13px; padding-left: 10px; padding-right: 10px; font-family: 'Gotham Pro';" href="index.php">ВЕРНУТЬСЯ НА ГЛАВНУЮ СТРАНИЦУ САЙТА</a>
    </form>
    <br>
</body>
</html>
