<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>English Tochka</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <div class="first">
      <div class="container">
        <header class="header">
          <div class="menu_wrap">
            <img src="img/logo_english.svg" alt="" class="header_logo" />
            <img src="img/logo_small.png" alt="" class="header_logo_mobile" />
          </div>
          <div class="main">
            <div class="main_left">
              <h1 class="main_title">
                Вкладывайте незначительные деньги каждый день в копилку своих
                знаний.
              </h1>
              <p class="main_text">
                Следующий курс для вас будет стоить
                <span> всего 178 рублей в день</span>
              </p>
              <div class="main_data">
                <div class="main_data_left main_data_rect">
                  <div class="main_number_wrap">
                    <p class="main_number_text">01</p>
                    <div class="main_number">
                      <p class="month">Ноября</p>
                      <p class="start">Ближайший старт</p>
                    </div>
                  </div>
                </div>
                <div class="main_data_right main_data_rect">
                  <div class="main_number_wrap">
                    <p class="main_number_text">02</p>
                    <div class="main_number">
                      <p class="month">Октября</p>
                      <p class="start">Конец акции</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="main_btn_wrap">
                <a href="#price"
                  ><button class="btn btn_call">Узнать</button></a>
                <a href="#cons"
                  ><button class="btn btn_consult">
                    Бесплатная консультация
                  </button></a>
              </div>
            </div>
            <img src="img/main.png" alt="" class="main_img" />
          </div>
        </header>
      </div>
    </div>
    <div id="price" class="second">
      <div class="container">
        <h2 class="second_title">Выберите свой вариант обучения</h2>
        <div class="second_wrap">
        <?php 

$conn = new mysqli("localhost", "root", "", "EnglishTest");
if($conn->connect_error){ die("Ошибка: " .$conn->connect_error); } 
$sql = "SELECT * FROM promo_prices ORDER BY months";
$result = $conn->query($sql);
$rowsCount = $result->num_rows;
foreach($result as $row){ 
  echo "<div class='type'>"; 
  echo "<h4 class='type_title'>" . $row["title"] . "</h4>"; 
  echo "<p class='price'>" . $row["price"] . "</p>";
  $oldprice = $row["oldprice"];
  $oldprice = (int)$oldprice;
  $cost = $row["price"];
  $cost = (int)$cost;
  $discount = round($cost/$oldprice*100);
  $discount = (string)$discount;
  echo "<p class='discount'>-" .  $discount . "%</p>"; 
  echo "<div class='cost'>" . $row["oldprice"] . "</div>";
  echo "<ul class='advantage'><li class='item'><span>" . $row["months"] . " месяца обучения</span></li>";
  echo "<li class='item'>Грамматическая выжимка</li>
  <li class='item'>Разговорный тренажёр</li>
  <li class='item'>Слова с ассоциациями</li>
  <li class='item'>Регулярные мини-задания</li>
  <li class='item'>Персональный куратор</li>
  <li class='item'>Сертификат об обучении</li>
  <li class='item'>Best Teachers</li>
  <li class='item'><span> Звонки от Second Teacher</span></li>
</ul>" ;
  echo "<div class='prepayment_text'>Предоплата</div>
  <div class='prepayment'>". $row["prepay"] . "</div>"; 
  echo "<div class='payment_btn payment_inside'>
  внести предоплату из рф
</div>
<div class='payment_btn payment_outside'>
  внести предоплату из-за границы
</div>
</div>"; 
} 
$result->free(); 
$conn->close(); 

?>


        </div>
        <div class="gift"></div>
      </div>
    </div>
    <div id="cons" class="third">
      <div class="container">
        <h2 class="third_title">Еще думаете?</h2>
        <p class="third_text">
          Записывайтесь на бесплатный урок и попробуйте сами, это поможет
          принять решение
        </p>


        <form id="feedBack" action="" method="post" class="order" onsubmit="return false">
          <input
            name="name"
            type="text"
            class="name input_field"
            placeholder="Введите ваше имя"
          />
          <input
            name="phone"
            type="tel"
            class="phone input_field"
            placeholder="Введите ваш телефон"
          />
          <input
            name="email"
            type="text"
            class="email input_field"
            placeholder="Введите ваш email"
          />
          <button class="btn_order" >записаться</button>
        </form>
        <h3 id="success">Данные успешно записаны</h3>

        
        <p class="confidential">
          Нажимая на кнопку, вы даете согласие на обработку персональных данных
          и соглашаетесь с политикой конфиденциальности
        </p>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        <div class="footer_wrap">
          <div class="footer_logo">
            <img src="img/logo_footer.svg" alt="footer_logo_img" />
          </div>

          <p class="footer_text">
            2015 - 2021 © English. Все права защищены. Политика
            конфиденциальности Соглашение об обработке персональных данных
          </p>
          <p class="legal">
            ООО "Инглиш", юридический адрес: 000000, Санкт-Петербург, ул. Улица,
            д. 0/00 лит. 0, пом. 0 ОГРН: 000000000000 | ИНН: 000000000 | КПП:
            000000000
          </p>
        </div>
        <div class="social">
          <img src="img/vk.svg" alt="" class="vk" />
          <img src="img/telegram.png" alt="" class="tg" />
        </div>
      </div>
    </div>
    
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
