<?php
error_reporting(0);
ini_set('display_errors', 0);
include 'connection_db.php';

// SQL-запрос для выборки отзывов, где поле comment равно 1
$sql = "SELECT * FROM reviews_moder WHERE comment = 1";

// Выполнение запроса
$result = $conn->query($sql);

function print_reviews($result) {
// Проверка наличия результатов
if ($result->num_rows > 0) {
    // Цикл по результатам запроса
    while ($row = $result->fetch_assoc()) {
        // Вывод данных, например:
        echo '<style> * {font-family: "Gotham Pro";} </style>';
        echo '<div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">';
        echo '  <img src="Images/del_people_rev.png" style="margin-top: 28px; padding: 4px; border-radius: 50%; border: 3px solid #f8af5b; overflow: hidden; width: 100px; height: 100px; width: 10%; height: 10%; object-fit: cover;" alt="Изображение">';
        
        echo "<b><p style='text-align: center; padding-top: 10px; color: #1d55a6; font-size: 25px;'>" . $row["user_surname"] . " " . $row["user_name"]  . " " . $row["user_patronymic"] . "</p></b>";
        echo "<p style='text-align: center; padding-top: 10px; font-size: 22px;'>" . $row["company_position"] . "</p>";
        echo "<p style='text-align: center; color: #f8af5b; padding-top: 10px; font-size: 22px;'>" . $row["organization"] . "</p></b>";
        echo "<p style='text-align: center; padding-top: 28px; padding-bottom: 28px; font-size: 18px;'>" . $row["message_text"] . "</p>";
echo '</div>';
        // Можете добавить дополнительные теги и стили по вашему усмотрению
        echo "<hr>"; // Разделитель между отзывами
    }
} else {
    // Если результатов нет
    echo "Нет отзывов для вывода на экран.";
}
}

print_reviews($result);

// Закрытие соединения с базой данных
$conn->close();
?>