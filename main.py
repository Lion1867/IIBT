import cv2
import matplotlib.pyplot as plt
image_path = "upload/input.jpg"

face_cascade_db = cv2.CascadeClassifier("haarcascade_frontalface_default.xml")

img = cv2.imread(image_path)
img_gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)

faces = face_cascade_db.detectMultiScale(img_gray, 1.1, 19)

for i, (x, y, w, h) in enumerate(faces):
    # Извлечение каждого лица в отдельности
    face_img = img[y-57:y+h+57, x-30:x+w+30]

    # Сохранение каждого лица в отдельный файл
    cv2.imwrite(f"marked_faces/face_{i+1}.jpg", face_img)

import os
from tensorflow.keras.preprocessing import image
from keras.models import load_model
import numpy as np

# Путь к директории с изображениями
image_dir = "marked_faces/"

# Загрузка обученной модели
loaded_model = load_model('Regression_model.h5')

ages=[]
# Цикл для прохода по всем изображениям в директории
for i, filename in enumerate(os.listdir(image_dir)):
    if filename.endswith(".jpg"):
        img_path = os.path.join(image_dir, filename)
        img = image.load_img(img_path, target_size=(224, 224))  # загрузка изображения и изменение размера до 224x224
        #plt.imshow(img)
        #plt.title('Просматриваемое изображение')
        #plt.show()

        # Предобработка изображения
        img_array = image.img_to_array(img)
        img_array = np.expand_dims(img_array, axis=0)  # преобразование в массив с одной картинкой
        img_array = img_array / 255.  # нормализация пикселей

        # Предсказание возраста с помощью обученной модели
        predicted_age = loaded_model.predict(img_array)[0][0]  # предсказанный возраст

        # Получение реального возраста из исходных данных
        real_age = 18  # Замените это значение на реальный возраст из ваших данных

        # Печать предсказанного и реального возраста
        print(f"Предсказанный возраст: {predicted_age} лет")
        print(f"Реальный возраст: {real_age} лет")

        ages.append(predicted_age)

img = cv2.imread(image_path)
img = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)  # Преобразование изображения из BGR в RGB

for i, (x, y, w, h) in enumerate(faces):
    # Извлечение каждого лица в отдельности
    face_img = img[y-70:y+h+70, x-70:x+w+70]
    # Нарисовать прямоугольник вокруг лица на исходном изображении
    cv2.rectangle(img, (x, y), (x + w, y + h), (0, 255, 0), 2)

    # Добавить подпись с возрастом
    cv2.putText(img, f"Age: {ages[i]:.1f}", (x, y+h+25), cv2.FONT_HERSHEY_SIMPLEX, 1, (0,255,0), 2, cv2.LINE_AA)

#plt.imshow(img)
#plt.title('Фотография с подписями возраста')
#plt.show()

cv2.imwrite(f"photo_with_ages/photo_with_ages.jpg", cv2.cvtColor(img, cv2.COLOR_BGR2RGB))

# код для очищения директории
for filename in os.listdir(image_dir):
    file_path = os.path.join(image_dir, filename)
    if os.path.isfile(file_path):
        os.remove(file_path)