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


        .popup-overlay {
            position: fixed;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.53); /* Небольшое затемнение на фоне */
  z-index: 1000; /* Поверх всех окон */
  width: 100%;
  height: 100%;
  display: none;  
  justify-content: center;
  align-items: center; 
  user-select: none; 
        }

        .popup-overlay.active {
            display: flex;
        }

        .popup-overlay-in {
            width: 90%;
           height: 70%;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            
        }

      @import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700'); 
      .menu ul{display: inline-block;
  list-style: none;
  margin: 0;
  padding: 0;
  text-align: center;
}
.menu li{
  display: inline-block;
  margin: 0 10px;
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
.menu a:hover::before{
  transform: scale3d(1,1,1);
}
.menu-1 a::before{
  background: #1d55a6;
  transform-origin: 100% 50%;
}
.menu-1 a:hover::before{
  transform-origin: 0 50%;
}

form{padding-right: 30px; 
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align:justify; }

input[type="text"],
input[type="email"],
input[type="tel"] {
    color: rgb(98, 98, 98);
    padding: 20px;
    border: 2px solid rgba(169, 169, 169, 0.7);
    width: 100%;
    margin-bottom: 10px; border-radius: 5px;
}

textarea {
        color: rgb(98, 98, 98);
        padding: 20px;
        border: 2px solid rgba(169, 169, 169, 0.7);
        width: 100%;
        margin-bottom: 10px; border-radius: 5px;
}

input[type="text"]::placeholder,
input[type="tel"]::placeholder,
input[type="email"]::placeholder,
textarea::placeholder {
    color: rgba(169, 169, 169, 0.7);
    font-family: 'Gotham Pro'; 
    }
.popup_container {
  display: flex;
  flex-direction: column;
  justify-content: space-between; /* Распределяем элементы внутри равномерно */
  width: 100%;
  max-width: 800px;
  min-height: 255px;
  background-color: #fff;
  box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.1);
  border-radius: 4px;
  position: relative;
}
 .popup_close {
  position: absolute;
  cursor: pointer;
  bottom: 20px;
  right: 20px;

}
.popup_in {
  position: absolute;
  cursor: pointer;
  bottom: 20px;
  left: 20px;
}
.popup {
  position: fixed;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.53); /* Небольшое затемнение на фоне */
  z-index: 1000; /* Поверх всех окон */
  width: 100%;
  height: 100%;
  display: none;  
  justify-content: center;
  align-items: center;
  user-select: none;
}
.popup_open {
  display:flex;
} 
.headerr * {padding-top: 10px; padding-bottom: 10px; padding-right: 0.4vw;}

@media (max-width: 900px) {
    .menu-items {
        display: none; /* Скрываем обычное меню на мобильных устройствах */
    }
    .hamburger-menu {
        display: block; /* Показываем иконку гамбургера на мобильных устройствах */
        cursor: pointer;
    }

    .hamburger-icon {
    width: 30px;
    height: 30px; 
    object-fit: contain; 
    cursor: pointer;
    transition: 0.4s; margin-right: 20px;
}
.headerr * {padding-top: 0px; padding-bottom: 0px; padding-right: 0.4vw;}
.form101, .form209, .form100, .form309 {font-size: 25px;}

}
@media (max-width: 500px) {
.form101, .form209, .form100, .form309 {font-size: 17px; margin-left:10px;} 
}
@media (min-width: 901px) {
    .hamburger-menu {
        display: none; 
    }}


    @media (max-width: 1408px) {.form409 {display: none;}
    .main_benefit_2 {grid-template-columns: 1fr;}
    .main_benefit_2_pr1, .main_benefit_2_pr2, .main_benefit_2_pr3 {margin: 0px;}
    .main_benefit_2_form1 { font-size:22px; }
    .main_benefit_2_form2 { font-size:19px; }
}
@media (min-width: 1600px) {.form409 {display: none;}
    .main_benefit_2_form1 { font-size:22px; }
    .main_benefit_2_form2 { font-size:19px; }
}
.form419 {font-size: 22px;}
#top_banner {font-size: 45px;  padding-top: 23vh; padding-bottom: 18vh;}
@media (max-width: 600px) { #top_banner {padding-top: 15vh; padding-bottom: 15vh;}}
@media (max-width: 600px) { .form419 {font-size: 14px;} #top_banner {font-size: 17px;}}
@media (max-width: 370px) { .form419 {font-size: 11px;} #top_banner {font-size: 14px;}}
@media (max-width: 290px) { .form419 {font-size: 9px;} #top_banner {font-size: 12px;}}
@media (max-width: 250px) { .form419 {font-size: 7px;} #top_banner {font-size: 10px;}}
@media (min-width: 1000px) {.main_about_us_in_digits_3_form1 {font-size: 20px;}}
@media (min-width: 1900px) {.main_about_us_in_digits_3_form1 {font-size: 25px;}}
@media (max-width: 1100px) {.main_about_us_in_digits_3 {grid-template-columns: repeat(2, 1fr);}}
@media (max-width: 462px) {.main_about_us_in_digits_3 {grid-template-columns: 1fr;}}
@media (max-width: 700px) {.main4 {grid-template-columns: 1fr; } .main4 img {width: 70%;} .main4 * {padding-top: 30px;}}
@media (max-width: 1020px) { .main2, .main8 {grid-column: 1/3;}}
@media (max-width: 462px) {.main8 {font-size: 17px;}}
@media (max-width: 500px) {#img_operator {margin-bottom: 70px;} #img_operator_1 {width: 25%;}}
#footer_inn{padding-left: 165px;}
@media (max-width: 875px) {#footer_inn{padding-left: 25px;}}
@media (max-width: 500px) {#footer_inn{padding-left: 5px;} }
.up{position: fixed; padding: 7px; padding-left: 9px; padding-right: 9px;
    right: 35px; border-radius: 150%; 
    bottom: 35px;
text-decoration: none; color: rgb(255, 255, 255); background-color: #1d55a6; transition: background-color 0.7s ease;  box-shadow: 3px 3px 8px rgba(0, 0, 0, 1.2); }
@media (max-width: 500px) {.up{right: 15px;  bottom: 15px;  padding: 4px; padding-left: 8px; padding-right: 8px;} }
#main5_adapt {flex-direction: row;}
@media (max-width: 520px) {#main5_adapt {flex-direction: column;} #main5_adapt * {padding-top: 20px;}}
.form13{font-size: 14px;} .form14{font-size: 15px;}
@media (min-width: 1500px) {.form13, .form14{font-size: 1vw;}}
.main3 {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  grid-auto-rows: minmax(55px, auto);
}
.pr1 {grid-column: 1/4;}
@media (max-width: 1100px) {
    .main3 {
  grid-template-columns: 1fr;
} 
.pr1 {grid-column: 1/2;}}

#logo_adapt {width: 22vw; height: 12.5vh; object-fit: contain; padding-left: 3vw;}
@media (min-width: 492px) and (max-width: 900px) {#logo_adapt {width: 94%; object-fit: cover;}}
@media (min-width: 492px) and (max-width: 640px) {#logo_adapt {width: 100%;  height: 9.3vh; object-fit: cover;}}
@media (min-width: 425px) and (max-width: 492px) {.hamburger-icon {margin-top: 17px; margin-bottom: 17px; } #logo_adapt {width: 50%;  height: 50%; padding-left: 0vw; margin-right: 88px; margin-top: 17px; margin-bottom: 17px;} }
@media (min-width: 340px) and (max-width: 425px) {.hamburger-icon {margin-top: 18px; margin-bottom: 18px;} #logo_adapt {width: 50%;  height: 50%; padding-left: 0vw; margin-right: 88px; margin-top: 18px; margin-bottom: 18px;} }
@media (max-width: 340px) {.hamburger-icon {margin-top: 29px; margin-bottom: 29px;} #logo_adapt {width: 70%;  height: 70%; padding-left: 0vw; margin-right: 88px; margin-top: 29px; margin-bottom: 29px;} }
    </style>
</head>
<body>
    <div class="site">

    <div class="menu" style="grid-column: 1/3; position: fixed; z-index: 1; color: black;
background-color: rgb(255, 255, 255); border-bottom: 5px solid #1d55a6; color: #1d55a6;  left: 0; right: 0;">
            <ul class="headerr" style="display: flex; flex-direction: row; text-align: space-between; align-items: center; justify-content: space-between; ">
                <li class="logo-container"><img id="logo_adapt" src="Images/logo.png" alt="Logo"></li> 
                <b class="menu-items"><li> <a class="v3" style="font-size: 1.1vw; font-family: 'Gotham Pro';" href="#">ГЛАВНАЯ</a></li>
                <li><a class="v3" style="font-size: 1.1vw; font-family: 'Gotham Pro';" href="#rel1_id">О НАС</a></li> 
                <li><a class="v3" style="font-size: 1.1vw; font-family: 'Gotham Pro';" href="#main3_id">УСЛУГИ</a></li>
                <li><a class="v3" style="font-size: 1.1vw; font-family: 'Gotham Pro';" href="#main5_id">ПРОЕКТЫ</a></li>
                <li><a class="v3" style="font-size: 1.1vw; font-family: 'Gotham Pro';" href="#contacts">КОНТАКТЫ</a></li>
                <li><a class="v3" style="font-size: 1.1vw; font-family: 'Gotham Pro';"href="#calculation">РАСЧЁТ</a></li></b>
                <div class="hamburger-menu">
               <img class="hamburger-icon" src="Images/gamburger.png" alt="Hamburger Icon">
                </div>
            </ul>
        </div>
        
        <div class="popup-overlay">
    <div class="popup-overlay-in" style="border-color:#1d55a6; border-style: solid; border-width: 5px; border-radius: 15px;">
    <ul class="headerr menu" style="display: flex; flex-direction: column; text-align: center; align-items: center; justify-content:  center; line-height: 1.6;">
        <b>
        <li> <br><br><a class="v3" style="font-size: 4.1vw; font-family: 'Gotham Pro';" href="#">ГЛАВНАЯ</a></li> <br>
                <li><a class="v3" style="font-size: 4.1vw; font-family: 'Gotham Pro';" href="#rel1_id">О НАС</a></li> <br>
                <li><a class="v3" style="font-size: 4.1vw; font-family: 'Gotham Pro';" href="#main3_id">УСЛУГИ</a></li> <br>
                <li><a class="v3" style="font-size: 4.1vw; font-family: 'Gotham Pro';" href="#main5_id">ПРОЕКТЫ</a></li> <br>
                <li><a class="v3" style="font-size: 4.1vw; font-family: 'Gotham Pro';" href="#contacts">КОНТАКТЫ</a></li> <br>
                <li><a class="v3" style="font-size: 4.1vw; font-family: 'Gotham Pro';"href="#calculation">РАСЧЁТ</a></li></b>
        </b>
        </ul>
    </div>
</div>


    <div class="top" style="grid-column: 1/3; display: flex; flex-direction: column; padding-top: 6vh;">
        <div id="top_banner" style=" color:rgb(255, 255, 255); line-height: 1.8; background-image: url('Images/top1.jpg'); 
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;  width: 100vw; padding-left: 26px;"><b>СОЗДАЁМ И ВНЕДРЯЕМ <br> ИСКУССТВЕННЫЙ ИНТЕЛЛЕКТ <br> В ТЕХНОЛОГИЧЕСКИЕ РЕШЕНИЯ <br> МАЛОГО И СРЕДНЕГО <br> БИЗНЕСА И ПРЕДПРИЯТИЙ</b><br>
            <a href="#calculation" style="text-decoration: none;"><span class="form419" style="cursor: pointer;">Оценить стоимость</span></a>
        <a style="text-decoration: none;" href="https://t.me/mmolodoymma" target="_blank"><span class="form419">Мы в Telegram</span></a></div>
    </div>

    <div class="main_benefit_2">
        <div class="main_benefit_2_pr1" data-aos="fade-right" data-aos-duration="1800"> 
        <img src="Images/solution_icon_237381.png" alt="top" width="15%">
        <span class="main_benefit_2_form1">Принятие сбалансированных решений<br></span>
        <span class="main_benefit_2_form2" style="color:rgb(148, 148, 148);">Обеспечение высокоточными данными, <br> более глубокое понимание контекста и трендов<br></span>
        </div>
        <div class="main_benefit_2_pr2" data-aos="fade-right" data-aos-duration="1800"> 
            <img src="Images/3702385-back-cash-money_108728.svg" alt="top" width="15%">  
        <span class="main_benefit_2_form1">Снижение издержек и увеличение прибыли<br></span>
        <span class="main_benefit_2_form2">Автоматизация рутинных задач, <br> максимальная оптимизация рабочих процессов<br></span>
        </div>
        <div class="main_benefit_2_pr3" data-aos="fade-right" data-aos-duration="1800"> 
            <img src="Images/businessperson_men_money_dollar_businessman_banker_financial_manager_business_investor_icon_258642.svg" alt="top" width="15%">
        <span class="main_benefit_2_form1">Повышение эффективности бизнеса<br></span>
        <span class="main_benefit_2_form2">Сокращение временных затрат, обеспечение <br>конкурентоспособности компании на рынке<br></span>
        </div>
    </div>
    
    <div class="rel1" id="rel1_id" style="background-image: url('Images/great1.gif'); grid-column: 1/3; display: flex; flex-direction: column;" alt="great">
        
        <div class="glav1">
        <span class="form101" style="text-align: center;  position: relative; color:rgb(255, 255, 255); font-size: 32px;"><b>О НАС</b></span>
        <span class="form209" data-aos="fade-up" data-aos-duration="1800"><b><br><br><br>Добро пожаловать в мир Искусственного Интеллекта,<br><br> будущее уже наступило!<br></b></span>
        <span class="form100" data-aos="fade-up" data-aos-duration="1800"><b>с ООО «ИИ Business Tech»</b></span>
        <span class="form309" data-aos="fade-up" data-aos-duration="1800">Мы — ведущая российская компания, специализирующаяся на создании и внедрении<br> 
            передовых  технологий искусственного интеллекта для малого и среднего бизнеса, а также предприятий. <br> 
            Наша миссия — привнести инновационные решения в ваш бизнес, 
            обеспечивая конкурентное преимущество и эффективное управление.</span> 
           <span class="form409" style="border-radius: 5px; cursor:pointer; margin-left: 571px; margin-right: 571px;"> <a id="read_bol" style="text-decoration: none; color: white;" href="#main3_id">Читать больше</a></span>
        </div>
           
    </div>


    <div class="glav1" style="grid-column: 1/3;">
    <span class="form102" style="text-align: center;  position: relative; font-size: 32px;"><b>О КОМПАНИИ В ЦИФРАХ</b></span>
    </div>
    <div class="main_about_us_in_digits_3">        
        <div class="main_about_us_in_digits_3_pr3"> 
        <div class="cart1">    
        <div class="number" id="scrollingNumber2" style="font-size: 60px; transition: transform 0.8s ease-in-out;">61</div>
        <div class="cart1_symbol" style="padding-left: 5px;">%</div>
        </div>
        <span class="main_about_us_in_digits_3_form1">уровень удовлетворенности<br> клиентов их решениями<br></span>
        </div>
        <div class="main_about_us_in_digits_3_pr1"> 
        <div class="cart1">
        <div class="number" id="scrollingNumber" style="font-size: 60px; transition: transform 0.8s ease-in-out;">2</div>
        <div class="cart1_symbol" style="padding-left: 5px;">+</div>
        </div>
        <span class="main_about_us_in_digits_3_form1">успешно внедрённых <br>проектов в области ИИ<br></span>
        </div>
        <div class="main_about_us_in_digits_3_pr2"> 
        <div class="cart1">    
        <div class="number" id="scrollingNumber1" style="font-size: 60px; transition: transform 0.8s ease-in-out;">1</div>
        <div class="cart1_symbol" style="padding-left: 5px;">лет</div>
        </div>
        <span class="main_about_us_in_digits_3_form1">минимальный стаж экспертов,<br> работающих в компании<br><br></span>
        </div>
        <div class="main_about_us_in_digits_3_pr4"> 
        <div class="cart1">    
        <div class="number" id="scrollingNumber3" style="font-size: 60px; transition: transform 0.8s ease-in-out;">69</div>
        <div class="cart1_symbol" style="padding-left: 5px;">%</div>
        </div>
        <span class="main_about_us_in_digits_3_form1">сокращение времени на принятие<br> обоснованных решений<br></span>
        </div>
    </div>
    <div style="grid-column: 1/3;"></div>   
     <div class="main2" data-aos="fade-right" data-aos-duration="1800" style="padding-bottom: 0; margin-bottom: 30px;">
        <img style="box-shadow: 8px 8px 8px #b9b7b7;" src="Images/Ivanov.jpg" width=65% alt="Генеральный директор компании">
    </div>
    <div class="main8" data-aos="fade-left" data-aos-duration="1800">
        <span class="form2"><b>Иванов Илья Игоревич, <br> Генеральный директор <br></b></span>
        <span class="form1"><b> ООО «ИИ Business Tech» <br> </b> </span>
      
    <span class="form3">  «Наша компания успешно разрабатывает мобильные приложения с использованием нейросетей, <br>
        Программы аналитики бизнеса и производства, <br>
        Искусственные нейронные сети, <br>
        Системы с искусственным интеллектом, <br>
        Системы видео и аудио контроля.<br>
        Наши компании-клиенты характеризуют нас как профессиональных и надёжных партнёров!»<br></span>
        <a class="form4" style="text-decoration: none;" href="#main5_id"><span >Читать больше</span></a>
    </div>

    <div id="main3_id" style="grid-column: 1/3;"></div>
        <div class="main3">
            <div class="pr1" data-aos="flip-up">   
            <span class="form11" style="font-size:18px;">Инновации с Искусственным Интеллектом от <br></span>
            <span class="form12" style="font-size:24px;">ООО «ИИ Business Tech»<br></span>
            <span class="form14">Наша компания уже успешно применяет искусственный интеллект в различных сферах, предоставляя<br> клиентам высокотехнологичные решения, которые до недавнего времени казались недостижимыми.<br>
                Наши авторские нейросети предоставляют возможность создавать индивидуальные решения, <br>заменяя сотни рабочих мест и обеспечивая высокую степень автоматизации. <br></span>
            </div>
            <div class="pr2" data-aos="fade-right" data-aos-duration="1800"> 
                <img src="Images/1.jpg" weight="2400" height="1600" alt="Картинка_1">  
            <span class="form12">Инновационные Решения <br>в Области Здравоохранения<br></span>
            <span class="form13" >В сфере здравоохранения компания создает уникальные нейросетевые системы, <br>
                революционизируя процессы диагностики и предоставления медицинских услуг. <br>
                Наша команда разработала специализированную нейросетевую систему, которая не только сокращает время диагностики,<br> 
                но и эффективно выявляет случаи мошенничества в системе медицинского страхования.<br></span>
            </div>
            <div class="pr3" data-aos="zoom-in" data-aos-duration="1800" style="margin-bottom: 20px;"> 
                <img src="Images/2.jpg" weight="2400" height="1600" alt="Картинка_2">  
                <span class="form12">Эволюция среднего и высшего образования<br></span>
            <span class="form13" >Наша компания предлагает эволюционные инновации в области образования, <br>
            ставя передовые технологии искусственного интеллекта в центр обучения. <br>
            Мы активно применяем искусственный интеллект, преобразуя образовательные методы и <br>
            создавая интеллектуальные решения для лучшего усвоения знаний.<br></span>
            </div>
            <div class="pr4" data-aos="fade-left" data-aos-duration="1800" style="margin-top: 27px;"> 
                <img src="Images/3.jpg" weight="2400" height="1600" alt="Картинка_3">  
                <span class="form12">Робототехника для <br>Интеллектуальных Помощников<br></span>
            <span class="form13" >В области робототехники наша команда предлагает интеллектуальных помощников, <br>
            способных обрабатывать информацию и облегчать взаимодействие пользователей с компьютерами. <br>
            Наши решения в робототехнике направлены на создание интеллектуальных агентов,<br>
             которые станут надежными компаньонами в работе с информацией и общении с вычислительными устройствами.<br></span>
            </div>
            <div class="pr5" data-aos="fade-right" data-aos-duration="1800"> 
                <img src="Images/4.jpg" weight="2400" height="1600" alt="Картинка_4">  
                <span class="form12">Нейронные Сети в <br>Экономике и Финансах<br></span>
            <span class="form13" >В сфере экономики и финансов наши нейронные сети активно используются для прогнозирования и принятия решений. <br>
            Например, мы разработали систему для финансового учреждения, <br>
            которая с использованием нейросетевых предсказаний позволяет принимать обоснованные решения в реальном времени, <br>
            обеспечивая доходность до 25% годовых.<br></span>
            </div>
            <div class="pr6" data-aos="zoom-in" data-aos-duration="1800" style="margin-bottom: 20px;"> 
                <img src="Images/5.jpg" weight="2400" height="1600" alt="Картинка_5">  
                <span class="form12">Искусственный Интеллект <br>в Рекламе и Маркетинге<br></span>
            <span class="form13" >В области рекламы и маркетинга наша компания, <br>
            сотрудничая с маркетинговыми агентствами, успешно реализовывала стратегию прямой рассылки с использованием искусственных нейронных сетей. <br>
            Этот инновационный подход позволяет максимизировать эффективность маркетинговых кампаний, <br>
            опираясь на анализ реакций потребителей.<br></span>
            </div>
            <div class="pr7" data-aos="fade-left" data-aos-duration="1800" style="margin-top: 27px;"> 
                <img src="Images/6.jpg" weight="240" height="160" alt="Картинка_6">  
                <span class="form12">Интеграция Нейросетей <br>в Технику и Телекоммуникации<br></span>
            <span class="form13">Наша компания играет ведущую роль в сфере техники и телекоммуникаций, <br>
            предлагая уникальные решения, интегрированные с использованием нейросетей.<br>
            В частности, наша команда разработала интеллектуальную систему автопилотирования, которая<br>
            обеспечивает высокую точность в управлении беспилотником и сборе им различной информации.<br></span>
            </div>  
        </div>
        <div></div>
        <div class="main5"  style="background-color: white; color: black;">
    <span class="form5" data-aos="fade-right" data-aos-duration="1800" style="font-size: 17px;">
        Мы подготовили для Вас пример выполненных работ, <br>
        а также отзывы благодарных нам компаний-клиентов<br>
    </span>
    <div id="main5_adapt" data-aos="fade-right" data-aos-duration="1800" style="display: flex; justify-content: center; margin-top: 20px;">
        <span style="border-radius: 5px; cursor:pointer; margin: 0 10px;">
            <a class="form439" style="text-decoration: none; margin-top: 17px; margin-bottom: 10px;" href="/Lustra/lustra.php" target="_blank"><span class="form429" style="border-radius: 5px; margin-top: 50px; line-height: 1.8; text-align: center;  font-size: 17px;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 7px; padding-left: 10px; padding-right: 10px;">Посмотреть демо</span></a>
        </span>
        <span style="border-radius: 5px; cursor:pointer; margin: 0 10px;">
            <a class="form439" style="text-decoration: none; margin-bottom: 10px;" href="reviews.php"><span class="form429" style="border-radius: 5px; margin-top: 50px; line-height: 1.8; text-align: center;  font-size: 17px;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 7px; padding-left: 10px; padding-right: 10px;">Читать отзывы</span></a>
        </span>
    </div>
</div>
        <div id="main5_id"></div>
        <div class="glav1" style="grid-column: 1/3;" data-aos="zoom-in" data-aos-duration="1800">
        <span class="form102"   style="text-align: center;  position: relative; font-size: 32px;  "><b>УСПЕШНО ВНЕДРЁННЫЕ ИИ-РЕШЕНИЯ НАШЕЙ КОМПАНИИ</b></span>
        </div>
        <div class="main4" >
           <div class="par1" data-aos="fade-right" data-aos-duration="1800"> 
            <img src="Images/8.jpg" weight="120" height="70" alt="Картинка_8">  
            <span class="form15"><b>ИНТЕЛЛЕКТУАЛЬНЫЙ ПОМОЩНИК+</b></span></div>
            <div class="par2" data-aos="zoom-in" data-aos-duration="1800"> 
                <img src="Images/7.jpg" alt="Картинка_7">
                <span class="form15"><b>ТЕХНОЛОГИЧЕСКИЙ КОМПАНЬОН</b></span>    
            </div>
            <div class="par3">
                <img data-aos="zoom-in" data-aos-duration="1800" src="Images/9.jpg" weight="120" height="70" alt="Картинка_9"> 
                <span class="form15" data-aos="zoom-in" data-aos-duration="1800"> <b>СМАРТСФЕРА 360-OFF</b> </span>
                <span class="form15" data-aos="zoom-in" data-aos-duration="1800" style="padding-bottom: 0px;"> <img src="Images/10.jpg" weight="120" height="70" alt="Картинка_10"> </span>
                <span class="form15"><b>НЕЙРОСЕТЕВОЙ АНАЛИТИК+</b> </span></div>
        </div>
        <div id="contacts"></div>
        <div class="glav1" style="margin-top: -28px; grid-column: 1/3;" data-aos="zoom-in" data-aos-duration="1800">
        <span class="form102"   style="text-align: center;  position: relative; font-size: 32px;  "><b>КОНТАКТЫ</b></span>
        </div>
         <div class="glav1" style="margin-top: -32px; grid-column: 1/3; font-size: 19px; text-align: center;  color: rgb(98, 98, 98);  line-height: 1.8;" data-aos="zoom-in" data-aos-duration="1800">ООО «ИИ Business Tech»<br>
            Свидетельство о государственной регистрации № 071.544 <br>
            Выдано Инспекцией Федеральной налоговой службы по г. Магнитогорску <br> 25.11.2023 г. <br>
            Идентификационный Номер Налогоплательщика (ИНН) — 4332070451 <br>
            Адрес: <br>
            Россия, г. Магнитогорск, ТРК Континент, просп. Ленина, 83 (2 этаж, офис №3)<br>
            <a class="form439" style="text-decoration: none; margin-top: 17px; margin-bottom: 10px;" href="https://t.me/mmolodoymma" target="_blank"><span class="form429" style="border-radius: 5px; margin-top: 50px; line-height: 1.8; text-align: center;  font-size: 17px;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 7px; padding-left: 10px; padding-right: 10px;">Мы в Telegram</span></a>
            <a class="form439" style="text-decoration: none; margin-bottom: 10px;" href="https://vk.com/mmolodoymma" target="_blank"><span class="form429" style="border-radius: 5px; margin-top: 50px; line-height: 1.8; text-align: center;  font-size: 17px;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 7px; padding-left: 10px; padding-right: 10px;">Мы в ВКонтакте</span></a>

                
           <b><span class="form103" style="position: relative; font-size: 29px; color:#1d55a6; margin-top: 17px;"> 8 (919) 343-81-77 <br></span></b>
           <span id="calculation" style="cursor: pointer; margin-top: 37px; margin-bottom: 30px; color: black;">EMAIL: <span class="form500" style="color:#1d55a6;">lion022014@mail.ru </span><br></span>
        </div>
        <br>
        <div class="glav1" style="grid-column: 1/3; margin-top: -95px;">
        <span id="img_operator" class="form102" style="text-align: center;  position: relative; font-size: 32px;"><b>
            МЫ ГОТОВЫ ВНЕДРИТЬ<br>ИСКУССТВЕННЫЙ ИНТЕЛЛЕКТ В ВАШ БИЗНЕС!</b></span>
        </div>
       <div class="glav1" style="grid-column: 1/3; font-size: 19px; text-align: center; align-items: center; margin-top: -45px; color: rgb(47, 47, 47);">
        <img id="img_operator_1" src="Images/operator.webp" alt="operator" width="15%">
        <span style="font-size: 18px; margin-top: 5px;">Создать и внедрить ИИ-решение. Автоматически генерировать стандартные отчёты. Разработать <br>системы управления вашим бизнесом, доступные с любых устройств. <br></span>
       <span style="font-size: 29px; margin-top: 27px; margin-bottom: 57px;">Оставить заявку</span>
       </div>

       <div class="glav1" style="grid-column: 1/3; align-items: center;  text-align: center;" data-aos="zoom-in" data-aos-duration="1000">
        <form method="post" style="color: rgb(98, 98, 98); width: 70%;" action="#calculation_send">
        <input id="calculation_send" type="text" name="user_name" id="user_name" placeholder="Ваше имя" required> 
        <input type="tel" name="phone_number" id="phone_number" placeholder="Ваш номер телефона" required>
        <input type="email" name="email_address" id="email_address" placeholder="Ваш адрес электронной почты" required>
        <textarea name="message_text" id="message_text" required maxlength="1000" rows="7" cols="138" placeholder="Текст вашего сообщения"></textarea>
        <br>
        <input  type="submit" id="glav1_2" name="add" value="ОТПРАВИТЬ" class="custom-button form439 form429" style=" border-radius: 5px; margin-top: 40px; line-height: 1.8; text-align: center;  font-size: 17px;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 7px; padding-left: 10px; padding-right: 10px;">
        </form>
        </div>
        <div id="name_no" style='padding-top: 15px; color: red; display:none; grid-column: 1/3; flex-direction:column; text-align:center; margin-top: 10px; margin-bottom: 35px; font-size: 20px; font-family: "Gotham Pro";'>Имя должно содержать только буквы.</div>
        <div id="phone_no" style='padding-top: 15px; color: red; display:none; grid-column: 1/3; flex-direction:column; text-align:center; margin-top: 10px; margin-bottom: 35px; font-size: 20px; font-family: "Gotham Pro";'>Номер телефона должен содержать только цифры и может начинаться с "+".</div>
        <div id="email_no" style='padding-top: 15px; color: red; display:none; grid-column: 1/3; flex-direction:column; text-align:center; margin-top: 10px; margin-bottom: 35px; font-size: 20px; font-family: "Gotham Pro";'>Некорректный формат электронной почты.</div>
        <div id="mess_no" style='padding-top: 15px; color: red; display:none; grid-column: 1/3; flex-direction:column; text-align:center; margin-top: 10px; margin-bottom: 35px; font-size: 20px; font-family: "Gotham Pro";'>Текст заявки должен содержать только буквы, пробелы и кавычки.</div>
             
        <?php
        error_reporting(0);
        ini_set('display_errors', 0);

        include 'connection_db.php';

        function add($conn, $user_name, $phone_number, $email_address, $message_text) {
            $sql = "SELECT 1 FROM application_form WHERE phone_number = ? OR email_address = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $phone_number, $email_address);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if ($result->num_rows > 0) {
                echo "<div style='grid-column: 1/3; display:flex; flex-direction:column; text-align:center; margin-top: 35px;'>Заявка от данного отправителя уже отправлена.</div>";
            } else {
                $sql = "INSERT INTO application_form (user_name, phone_number, email_address, message_text) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssss", $user_name, $phone_number, $email_address, $message_text);
        
                if ($stmt->execute()) {
                    echo "<div style='grid-column: 1/3; display:flex; flex-direction:column; text-align:center; margin-top: 35px;'>Заявка успешно отправлена.</div>";
                } else {
                    //echo "<div style='grid-column: 1/3; display:flex; flex-direction:column; text-align:center; margin-top: 35px;'>Ошибка при отправлении заявки: " . $stmt->error . "</div>";
                }
            }
        }

        if (isset($_POST['add'])) {

            $user_name = htmlspecialchars($_POST['user_name']);
            $phone_number = htmlspecialchars($_POST['phone_number']);
            $email_address = htmlspecialchars($_POST['email_address']);
            $message_text = $_POST['message_text'];
            					
            // Паттерны для валидации
            $namePattern = '/^[a-zA-Zа-яА-Я]+$/u';
            /*$organizationPattern = '/^[a-zA-Zа-яА-Я\s"]+$/u';*/
            $emailPattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
            $phonePattern = '/^\+?[0-9]+$/';

            // Проверка наличия данных в обязательных полях
        if (empty($user_name) || empty($phone_number) || empty($email_address) || empty($message_text)) {
            echo "Заполните все обязательные поля.";

        } else {
        // Проверка паттернов
        if (!preg_match($namePattern, $user_name)) {
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("name_no").style.display = "flex";
            });
            </script>';

        } elseif (!preg_match($phonePattern, $phone_number)) {
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("phone_no").style.display = "flex";
            });
            </script>';

        } elseif (!preg_match($emailPattern, $email_address)) {
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("email_no").style.display = "flex";
            });
            </script>';

        /*} elseif (!preg_match($organizationPattern, $message_text)) {
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("mess_no").style.display = "flex";
            });
            </script>';*/
        } else {
            // Все поля заполнены и соответствуют паттернам, вызываем функцию add
            add($conn, $user_name, $phone_number, $email_address, $message_text);
        }
    }
            } 
            header("Location: #glav1_2");
            ?>
        
        <div id="footer" style="margin-top: 50px; font-size: 15px; background-color: #1e1e1e; color:rgb(255, 255, 255); grid-column: 1/3; display: flex; flex-direction: column; text-align: left; align-items: left; justify-content: left; line-height: 1.8;">
            <span id="footer_inn" style="line-height: 2.1;   text-transform: uppercase; padding-top: 65px; padding-bottom: 65px; ">
           <span style="color: rgb(98, 98, 98);"> COPYRIGHT © 2023-2024. ВСЕ ПРАВА <br>ЗАЩИЩЕНЫ ООО «ИИ Business Tech». <br></span>
           <span style="color: #1d55a6;">Мобильные приложения<br>
            Программы аналитики бизнеса <br>
            Искусственные нейронные сети <br>
            Системы с искусственным интеллектом <br>
            Системы видео и аудио контроля <br></span></span>
        <div style="background-color: #1d55a6; height: 4px;">
        </div>
        </div>
        <a  class="up" href="#"><img src="Images/up.jpg" alt="up"></a> 
        <!--попап для Админки-->
        <div class="popup">
        <div class="popup_container">
        <div class="form102"   style="text-align: center;  position: relative; font-size: 25px;  margin-bottom: 15px;">О, похоже вам известно это замечательное сочетание клавиш! Давайте проверим, являетесь ли вы adminом или любопытным userом-хакером! </div>
        <button class="popup_in custom-button form439 form429" style=" border-radius: 5px;  line-height: 1.8; text-align: center;  font-size: 17px;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 7px; padding-left: 10px; padding-right: 10px; font-family: 'Gotham Pro';" onclick="redirectToAdmin()">Войти в административную панель</button>            
        <button class="popup_close custom-button form439 form429" style=" border-radius: 5px;  line-height: 1.8; text-align: center;  font-size: 17px;  text-decoration: none;   text-transform: uppercase;  border-color:#1d55a6; border-style: solid; border-width: 2px; padding: 7px; padding-left: 10px; padding-right: 10px; font-family: 'Gotham Pro';">Продолжить работу с сайтом</button>
        </div>
        </div> 
       
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
        document.addEventListener("DOMContentLoaded", function() {
            // Получаем элементы чисел по их идентификаторам
            let scrollingNumber = document.getElementById("scrollingNumber");
            let scrollingNumber1 = document.getElementById("scrollingNumber1");
            let scrollingNumber2 = document.getElementById("scrollingNumber2");
            let scrollingNumber3 = document.getElementById("scrollingNumber3");
        
            // Флаг для отслеживания, было ли значение уже увеличено
            let hasIncreased = false;
        
            // Начальные значения чисел
            let currentValue = 2;
            let currentValue1 = 1;
            let currentValue2 = 61;
            let currentValue3 = 69;
        
            // Обработчик события прокрутки окна
            window.addEventListener("scroll", function() {
                // Запускаем анимацию, когда элементы в зоне видимости и значения еще не увеличены
                if (isElementVisible(scrollingNumber) && !hasIncreased) {
                    // Устанавливаем флаг в true
                    hasIncreased = true;
                    // Запускаем анимации пошагового увеличения значений
                    increaseValue(scrollingNumber, currentValue, 27);
                    increaseValue(scrollingNumber1, currentValue1, 8);
                    increaseValue(scrollingNumber2, currentValue2, 86);
                    increaseValue(scrollingNumber3, currentValue3, 94);
                }
            });
        
            // Функция для проверки видимости элемента
            function isElementVisible(element) {
                let rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }
        
            // Функция для увеличения значения числа
            function increaseValue(element, startValue, endValue) {
                let currentValue = startValue;
                // Увеличиваем значение каждые 100 миллисекунд (настраиваем по необходимости)
                let interval = setInterval(function() {
                    currentValue += 1; // Увеличиваем значение на 1 (настраиваем по необходимости)
                    element.textContent = currentValue;
        
                    // Останавливаем интервал при достижении желаемого значения
                    if (currentValue >= endValue) {
                        clearInterval(interval);
                        element.style.transform = "scale(1)";
                    }
                }, 100); // Настройка длительности интервала
            }
        });

        // Вход в Админку - сочетание клавиш - Alt + Q + M - только в таком порядке работает на всех раскладках клавиатуры!
        var keyCombination = [];
        const popup = document.querySelector(".popup"); 
        const popupClose = document.querySelector(".popup_close"); 
        document.addEventListener("keydown", function (e) {
        if (e.altKey && e.keyCode === 81) {
        keyCombination.push('Q');
        } else if (e.altKey && e.keyCode === 77 && keyCombination.includes('Q')) {
        keyCombination.push('M');
        popup.classList.add("popup_open");
        popupClose.onclick = function(e2){
        e2.preventDefault();
        popup.classList.remove("popup_open");}
        keyCombination.length = 0;
        } else {
        keyCombination.length = 0;
        }
        });
        
        function redirectToAdmin() {
            // Перенаправление на страницу admin_in.php
            window.location.href = 'admin_in.php';
        }

</script>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            const hamburgerMenu = document.querySelector('.hamburger-menu');
            const popupOverlay = document.querySelector('.popup-overlay');

            hamburgerMenu.addEventListener('click', function () {
                popupOverlay.classList.toggle('active');
            });

            // Закрываем попап при клике вне его области
            popupOverlay.addEventListener('click', function (event) {
                if (event.target === this) {
                    popupOverlay.classList.remove('active');
                }
            });

            // Закрываем попап при клике на каждую ссылку в меню
            const popupMenuLinks = document.querySelectorAll('.popup-overlay-in a');
            popupMenuLinks.forEach(function (link) {
                link.addEventListener('click', function () {
                    popupOverlay.classList.remove('active');
                });
            });
        });
    </script>
</body>
</html>