//<?php
//  $dbh = new PDO('mysql:host=176.126.165.65; port=3306; dbname=user105050_planirovka_a;', 'user105050_root', 'nJ9xZ9rK2u');
//  $array = [];
//
//
//  foreach($dbh->query('SELECT * from planirovka_d') as $row) {
//    if ($query = $dbh->query("SELECT * FROM `planirovka_d`")){
//        $array = $query->fetchAll(PDO::FETCH_ASSOC);
//    } else{
//        print_r ($db->errorInfo);
//    };
//}




$dbh = new PDO('mysql:host=localhost; dbname=user105050_planirovka_a;', 'root', '');
$array = [];

foreach ($dbh->query('SELECT * from planirovka_a') as $row) {
  if ($query = $dbh->query("SELECT * FROM `planirovka_a`")) {
    $array = $query->fetchAll(PDO::FETCH_ASSOC);
  } else {
    print_r($db->errorInfo);
  }
  ;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- fontawesome//////////////////////////////////////////// -->
  <script src="https://kit.fontawesome.com/58a9a0347e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- fontawesome//////////////////////////////////////////// -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- model-viewer ////////////////////////// -->
  <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
  <!-- model-viewer ////////////////////////// -->
  <!-- font////////////////////////////////// -->
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <!-- font////////////////////////////////// -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/media.css">
  <link rel="stylesheet" href="./new/block_C.css">
  <link rel="stylesheet" href="./new/block_C_media.css">
  <link rel="icon" href="./images/logo-title.png" type="image/png">
  <title>Блок Г</title>

  <script>
    window.addEventListener('click', function (event) {
      if (event.target.hasAttribute('data-win_print')) {
        window.print();
      }
    });

  </script>
</head>

<body>

  <div id="image_focus">
    <div class="none_js">
      <a class="close" href="#ll" id="button_a">
        <div class="image_focus_bg"></div>
      </a>
      <img src="./images/Planirovca_1/Cvartira_A/cvartira_3d/cvartira_3d-1.png" alt="">
    </div>
  </div>

  <div id="image_focus_1">
    <div class="none_js_1">
      <a class="close" href="#ll" id="button_a">
        <div class="image_focus_bg"></div>
      </a>
      <img src="./images/Planirovca_1/Cvartira_A/cvartira_1.png" alt="">
    </div>
  </div>
  <div class="print_screan"><img src="images/logo.png" width="250px" alt=""></div>

  <div class="follow-cursor_1">
    <p class="follow-cursor_1__p1" data-indicator_span_room></p>
    <div class="follow-cursor_1_block">
      <p data-indicator_span_square></p>
      <p data-indicator_span_price></p>
    </div>
  </div>
  </div>

  <style>
    @media (max-width:420px) {
      .follow-cursor_1 {
        display: none !important;
      }
    }
  </style>

  <div class="nav-">
    <nav class="nav">
      <div class="nav__logo">
        <a href="./index.html"><img src="./images/logo.png" alt=""></a>
      </div>
      <div class="lang" data-ru data-lang="0">
        <div class="nav__center">
          <li class="nav__link"><a href="./index.html" class="nav_link__a">Главное</a></li>
          <li class="nav__link"><a href="./about.html" class="nav_link__a">О нас</a></li>
          <li class="nav__link"><a href="./doc.html" class="nav_link__a">Документы</a></li>
          <li class="nav__link"><a href="./prisentation.html" class="nav_link__a">Презентация</a></li>
          <li class="nav__link"><a href="#contact" class="nav_link__a">Контакты</a></li>
          <li class="nav__link"><a href="tel:+996 776 905 905" class="nav_link__a nav_link__icon"><i
                class="fa-solid fa-phone"></i> </a></li>
          <li class="btn-lang" data-lang-btn="2">kg</li>
        </div>
      </div>
      <div class="lang" data-kg data-lang="1">
        <div class="nav__center">
          <li class="nav__link"><a href="./index.html" class="nav_link__a">Башкы </a></li>
          <li class="nav__link"><a href="./about.html" class="nav_link__a">Биз жөнүндө</a></li>
          <li class="nav__link"><a href="./doc.html" class="nav_link__a">Документтер</a></li>
          <li class="nav__link"><a href="./prisentation.html" class="nav_link__a">Презентация</a></li>
          <li class="nav__link"><a href="#contact" class="nav_link__a">Байланыштар</a></li>
          <li class="nav__link"><a href="tel:+996 776 905 905" class="nav_link__a nav_link__icon"><i
                class="fa-solid fa-phone"></i> </a></li>
          <li class="btn-lang" data-lang-btn="1">ru</li>
        </div>
      </div>
      <div class="nav_2">
        <div class="menu">
          <button id="btn"><span></span><span></span><span></span></button>
        </div>
      </div>
      <div class="lang" data-ru data-lang="0">
        <div class="nav__contacts">
          <div class="nav__contacts_button">
            <a href="tel:+996 776 905 905"><button class=""><i class="fa-solid fa-phone"></i> &nbsp; Связяться
                снами</button></a>
          </div>
        </div>
      </div>

      <div class="lang" data-kg data-lang="1">
        <div class="nav__contacts">
          <div class="nav__contacts_button">
            <a href="tel:+996 776 905 905"><button class=""><i class="fa-solid fa-phone"></i> &nbsp; Биз менен
                байланышуу</button></a>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div class="shtorka">
    <div class="shtorka_div">
      <div class="lang" data-ru data-lang="0">
        <button class="shtorka_div_button deff__btn" data-shtorka-x><i class="fa-solid fa-arrow-left-long"></i>
          назад</button>
      </div>
      <div class="lang" data-kg data-lang="1">
        <button class="shtorka_div_button deff__btn" data-shtorka-x><i class="fa-solid fa-arrow-left-long"></i>
          артка</button>
      </div>
      <div class="shtorka__content">
        <div class="shtorka__left">
          <!-- <div class="shtorka__header">3Д планировка квартир</div> -->
          <div class="shtorka__left__img"><a href="#image_focus"><img src="" alt=""></a></div>
          <div class="shtoka__info">
            <div class="shtoka__info__left">
              <div class="shtoka__info__left_l">
                <div class="lang" data-ru data-lang="0">
                  <li class="shtoka__info__left__li">Этаж</li>
                  <li class="shtoka__info__left__li">Комнат</li>
                  <li class="shtoka__info__left__li">Площадь</li>
                  <li class="shtoka__info__left__li">цена, м2</li>
                </div>
                <div class="lang" data-kg data-lang="1">
                  <li class="shtoka__info__left__li">Кабат</li>
                  <li class="shtoka__info__left__li">бөлмөлөр</li>
                  <li class="shtoka__info__left__li">Аянт</li>
                  <li class="shtoka__info__left__li">Баасы, м2</li>
                </div>
              </div>
              <div class="shtoka__info__left_r">
                <li class="shtoka__info__left__li_etag">g</li>
                <li class="shtoka__info__left__li_room">g</li>
                <li class="shtoka__info__left__li_scale">g</li>
                <li class="shtoka__info__left__li_price">g</li>
              </div>
            </div>
            <div class="shtoka__info__right">
              <p class="shtoka__info__right_title">ОНЛАЙН КАЛЬКУЛЯТОР</p>
              <div class="shtoka__info__right__input shtoka__info__right__input1">
                <div class="lang" data-ru data-lang="0">
                  <p class="info__rght__hint info__right__block">общaя сумма</p>
                </div>
                <div class="lang" data-kg data-lang="1">
                  <p class="info__rght__hint info__right__block">жалпы суммасы</p>
                </div>
                <div class="info__right__block">
                  <input class="sum-total-ru" type="text" disabled>
                  <input class="cjv" type="text" value="som" disabled>
                </div>
              </div>
              <div class="shtoka__info__right__input shtoka__info__right__input2">

                <p class="info__rght__hint info__right__block" data-info_vzno>

                </p>

                <div class="info__right__block">
                  <input type="text" value="0" class="info__right__block_vzno_sum">
                  <input class="cjv" type="text" value="som" disabled>
                </div>
              </div>
              <div class="shtoka__info__right__input shtoka__info__right__input3">
                <p class="info__rght__hint info__right__block" data-info_month></p>
                <div class="info__right__block">
                  <input id="info__right__block_month" value="0" type="text" class="" disabled>
                  <input class="cjv" type="text" value="som" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="shtorka__left_button">
            <div class="lang" data-ru data-lang="0">
              <button data-raschet-btn-ru class="deff__btn print__btn">расчет</button>
            </div>
            <div class="lang" data-kg data-lang="1">
              <button data-raschet-btn-ru class="deff__btn print__btn">эсептөө</button>
            </div>
<!-- TELEPORT /////////////////////////// -->

<div class="lang" data-ru data-lang="0">
              <button data-win_print="" class="deff__btn">Сохранить</button>
            </div>
            <div class="lang" data-kg data-lang="1">
              <button data-win_print="" class="deff__btn">Сактоо</button>
            </div>
            
            <div class="lang" data-ru data-lang="0">
              <button class="bronirovat deff__btn " data-bron_KV>Забронировать</button>
            </div>
            <div class="lang" data-kg data-lang="1">
              <button class="bronirovat deff__btn " data-bron_KV>бронь кылу</button>
            </div>

<!-- TELEPORT /////////////////////////// -->


          </div>
        </div>
        <div class="shtorka__rght">
          <div class="lang" data-ru data-lang="1">
            <div class="shtorka__header">2Д планировка квартир</div>
          </div>
          <div class="lang" data-kg data-lang="0">
            <div class="shtorka__header">Батирлердин 2D макети</div>
          </div>
          <div class="shtorka__rght__img"><a href="#image_focus_1"><img src="" alt=""></a></div>
        </div>
      </div>

    </div>
  </div>

  <div class="lang" data-ru data-lang="0">
    <div class="roma__nav"> <a href="./index.html" class="roma__nav_a">Главное</a> <a href="./about.html"
        class="roma__nav_a">о нас</a> <a href="./doc.html" class="roma__nav_a">Документы</a> <a
        href="./prisentation.html" class="roma__nav_a">Презентация</a> <a href="#main_3"
        class="roma__nav_a">контакты</a>
      <li class="btn-lang" data-lang-btn="2">kg</li>
      <div class="roma__nav__icons">
        <div class="roma__nav__icon"> <i class="fa-brands fa-facebook-f"></i> </div>
        <div class="roma__nav__icon"> <i class="fa-brands fa-whatsapp"></i> </div>
        <div class="roma__nav__icon"> <i class="fa-brands fa-instagram"></i> </div>
        <div class="roma__nav__icon"> <i class="fa-brands fa-youtube"></i> </div>
      </div>
    </div>
  </div>
  <div class="lang" data-kg data-lang="1">
    <div class="roma__nav">
      <a href="./index.html" class="roma__nav_a">Башкы </a>
      <a href="./about.html" class="roma__nav_a">Биз жөнүндө</a>
      <a href="./doc.html" class="roma__nav_a">Документтер</a>
      <a href="./prisentation.html" class="roma__nav_a">Презентация</a>
      <a href="#main_3" class="roma__nav_a">байланыштар</a>
      <li class="btn-lang" data-lang-btn="1">ru</li>
      <div class="roma__nav__icons">
        <div class="roma__nav__icon"> <i class="fa-brands fa-facebook-f"></i> </div>
        <div class="roma__nav__icon"> <i class="fa-brands fa-whatsapp"></i> </div>
        <div class="roma__nav__icon"> <i class="fa-brands fa-instagram"></i> </div>
        <div class="roma__nav__icon"> <i class="fa-brands fa-youtube"></i> </div>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="content">
      <div class="name_page">
        <p>Блок <span>"Г"</span></p>
      </div>
      
<!-- TELEPORT /////////////////////////// -->
  <div class="form_wrapper">
    <div class="form_wrapper__fon"></div>
    <div class="form-container">
        <div class="scene_1">
            <p>Заполните поля</p>
            <form id="dealForm"> <!-- Добавлен идентификатор "dealForm" для формы -->
                <div class="mb-3">
                    <label for="name" class="form-label">Имя</label> <!-- Изменен "for" и "id" для соответствия JS -->
                    <input type="text" class="form-control name" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Телефон</label> <!-- Изменен "for" и "id" для соответствия JS -->
                    <input type="tel" class="form-control phone" id="phone" name="phone" required>
                </div>
                <div class="form__button">
                    <button type="submit" data-submit-post="" class="submit-btn btn btn-primary">Отправить</button> <!-- Заменен "type" на "submit" -->
                    <button type="button" class="btn btn-primary form-close" data-close-form>Закрыть</button>
                </div>
            </form>
        </div>

        <div class="scene_2 none">
        <div class="close_form" data-close-form><i class="fa-solid fa-xmark" data-close-form></i></div>
            <div class="romajon-container">
                <svg class="romajon-svg" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path class="romajon-path" d="M 18 32.34 l -8.34 -8.34 -2.83 2.83 11.17 11.17 24 -24 -2.83 -2.83 z" stroke="#3da35a" fill="transparent"/>
                </svg>
            </div>
            <span>Мы получили заявку!<br>Наши специалисты с вами свяжутся.</span>
        </div>
    </div>
</div>

<!-- TELEPORT /////////////////////////// -->

      <div class="content__block">
        <div class="content__block__item Content__block__left">
          <div class="lang" data-ru data-lang="0">
            <div class="content__block__item__header">
              <p class="content__block__item__header_p">Выберите этаж</p>
            </div>
          </div>
          <div class="lang" data-kg data-lang="1">
            <div class="content__block__item__header">
              <p class="content__block__item__header_p">Кабат тандоо</p>
            </div>
          </div>
          <div class="content__left__block">
            <div class="content__left__block_3d">
              <img src="./images/block/Г.png" alt="" class="content__left__block_3d_img">

              <svg class="content__left__block_3d__svg" width="100%" viewBox="0 0 2610 2155" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="filter__btn content__left__block_3d_path_1 content_path_active" data-etaj="0"
                  d="M2376 2098.5H2601.5V1963L2376 1933.5L25.5 1986V2098.5H2376Z" fill="#19BBB9" fill-opacity="0.5"
                  stroke="#0BD8D5" stroke-width="10" />
                <path class="filter__btn content__left__block_3d_path_2" data-etaj="1"
                  d="M2376 1933.5L2601.5 1963V1800L2376 1731L25.5 1859.5V1986L2376 1933.5Z" fill="#19BBB9"
                  fill-opacity="0.5" stroke="#0BD8D5" stroke-width="10" />
                <path class="filter__btn content__left__block_3d_path_3" data-etaj="2"
                  d="M2376 1731L2601.5 1800V1617L2376 1517L25.5 1713V1859.5L2376 1731Z" fill="#19BBB9"
                  fill-opacity="0.5" stroke="#0BD8D5" stroke-width="10" />
                <path class="filter__btn content__left__block_3d_path_4" data-etaj="3"
                  d="M2376 1517L2601.5 1617V1434L2376 1303.5L25.5 1584.5V1713L2376 1517Z" fill="#19BBB9"
                  fill-opacity="0.5" stroke="#0BD8D5" stroke-width="10" />
                <path class="filter__btn content__left__block_3d_path_5" data-etaj="4"
                  d="M25.5 1584.5L2376 1303.5L2601.5 1434V1281.5L2376 1085L25.5 1439.5V1584.5Z" fill="#19BBB9"
                  fill-opacity="0.5" stroke="#0BD8D5" stroke-width="10" />
                <path class="filter__btn content__left__block_3d_path_6" data-etaj="5"
                  d="M2376 1085L2601.5 1281.5L2595.5 1073.5L2376 856L25.5 1303.5V1439.5L2376 1085Z" fill="#19BBB9"
                  fill-opacity="0.5" stroke="#0BD8D5" stroke-width="10" />
                <path class="filter__btn content__left__block_3d_path_7" data-etaj="6"
                  d="M25.5 1303.5L2376 856L2595.5 1073.5V926.5L2376 660L25.5 1166V1303.5Z" fill="#19BBB9"
                  fill-opacity="0.5" stroke="#0BD8D5" stroke-width="10" />
                <path class="filter__btn content__left__block_3d_path_8" data-etaj="7"
                  d="M2376 660L2595.5 926.5V740.5L2376 439.5L25.5 1038V1166L2376 660Z" fill="#19BBB9" fill-opacity="0.5"
                  stroke="#0BD8D5" stroke-width="10" />
                <path class="filter__btn content__left__block_3d_path_9" data-etaj="8"
                  d="M25.5 1038L2376 439.5L2595.5 740.5V571L2601.5 439.5L2376 1.5L2232.5 50L2192 1.5L1718 158.5L1685 121.5L1381 227V246L1390 255.5V268L655.5 514.5L612 491L409 559.5V574L418 577.5V592.5L397.5 599.5V610.5L407.5 615.5V635.5L382.5 644L332 621.5L20 725.5V734L30.5 738V757.5L11.5 763.5V772.5L20 777L25.5 856V1038Z"
                  fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="10" />
                <path
                  d="M2601.5 1963V2098.5H2376H25.5V1986M2601.5 1963L2376 1933.5L25.5 1986M2601.5 1963V1800M25.5 1986V1859.5M2601.5 1800L2376 1731L25.5 1859.5M2601.5 1800V1617M25.5 1859.5V1713M2601.5 1617L2376 1517L25.5 1713M2601.5 1617V1434M25.5 1713V1584.5M25.5 1584.5L2376 1303.5L2601.5 1434M25.5 1584.5V1439.5M2601.5 1434V1281.5M2601.5 1281.5L2376 1085L25.5 1439.5M2601.5 1281.5L2595.5 1073.5M25.5 1439.5V1303.5M25.5 1303.5L2376 856L2595.5 1073.5M25.5 1303.5V1166M2595.5 1073.5V926.5M2595.5 926.5L2376 660L25.5 1166M2595.5 926.5V740.5M25.5 1166V1038M25.5 1038L2376 439.5L2595.5 740.5M25.5 1038V856L20 777L11.5 772.5V763.5L30.5 757.5V738L20 734V725.5L332 621.5L382.5 644L407.5 635.5V615.5L397.5 610.5V599.5L418 592.5V577.5L409 574V559.5L612 491L655.5 514.5L1390 268V255.5L1381 246V227L1685 121.5L1718 158.5L2192 1.5L2232.5 50L2376 1.5L2601.5 439.5L2595.5 571V740.5M2610 2154H0.0664062"
                  stroke="white" stroke-opacity="0.05" />
              </svg>



            </div>
            <div class="content__left__block_btns">
              <ul class="content__left__block__ul">
                <li class="content__left__block__li content__left__block__li_9">
                  <button data-etaj="8"
                    class="content__left__block_btn content__left__block_btn9 content__left__block_btn-active"></button>
                  <p>9</p>
                </li>
                <li class="content__left__block__li content__left__block__li_8">
                  <button data-etaj="7" class="content__left__block_btn content__left__block_btn8"></button>
                  <p>8</p>
                </li>
                <li class="content__left__block__li content__left__block__li_7">
                  <button data-etaj="6" class="content__left__block_btn content__left__block_btn7"></button>
                  <p>7</p>
                </li>
                <li class="content__left__block__li content__left__block__li_6 ">
                  <button data-etaj="5" class="content__left__block_btn content__left__block_btn6"></button>
                  <p>6</p>
                </li>
                <li class="content__left__block__li content__left__block__li_5">
                  <button data-etaj="4" class="content__left__block_btn content__left__block_btn5"></button>
                  <p>5</p>
                </li>
                <li class="content__left__block__li content__left__block__li_4">
                  <button data-etaj="3" class="content__left__block_btn content__left__block_btn4"></button>
                  <p>4</p>
                </li>
                <li class="content__left__block__li content__left__block__li_3">
                  <button data-etaj="2" class="content__left__block_btn content__left__block_btn3"></button>
                  <p>3</p>
                </li>
                <li class="content__left__block__li content__left__block__li_2">
                  <button data-etaj="1" class="content__left__block_btn content__left__block_btn2"></button>
                  <p>2</p>
                </li>
                <li class="content__left__block__li content__left__block__li_1 content_li_active">
                  <button data-etaj="0" class="content__left__block_btn content__left__block_btn1"></button>
                  <p>1</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="content__block__item Content__block__right">
          <div class="content__block__item__header">
            <div class="lang" data-ru data-lang="0">
              <p class="content__block__item__header_p">Выберите квартиру</p>
            </div>
            <div class="lang" data-kg data-lang="1">
              <p class="content__block__item__header_p">Баатир тандоо</p>
            </div>
          </div>
          <div class="content__right__block">
            <section class="Planirovca">
              <img class="planirovca_color_D plan_1" src="./images/Planirovca_1/planirovca_color_D_1.png" alt="">


              <img class="planirovca_color_D plan_2 plan_3 plan_4 plan_5 anime"
                src="./images/Planirovca_1/planirovca_color_D_3.png" alt="">
              <img class="planirovca_color_D plan_6 plan_7 anime" src="./images/Planirovca_1/planirovca_color_D_2.png"
                alt="">


              <img class="planirovca_color_D plan_8 plan_9 anime" src="./images/Planirovca_1/planirovca_color_D_4.png"
                alt="">



              <svg class="planirovca_item_svg et_1" width="100%" viewBox="0 0 1487 521" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="planirovca_item_path" data-room="0"
                  d="M10 256.5V49.5H69.5V10.5H234.5V181.5H240V208H234.5V256.5H10Z" />
                <path class="planirovca_item_path" data-room="1"
                  d="M10 471H70V510H234V480H230V466H234V351H284.5V298.5H234V264.5H10V471Z" />
                <path class="planirovca_item_path" data-room="2"
                  d="M293 298.5H299.5V290.5H325V298.5H399V339H396.5V353H398V428.5H396V480H398.5V509.5H242V480H244V466H242V358.5H293V298.5Z" />
                <path class="planirovca_item_path" data-room="3"
                  d="M407.5 298.5H475V290.5H501V298.5H566.5V339H561V350H563V352.5H565.5V466H563V480H565.5V509.5H407V480H410V466H408V339H407.5V298.5Z" />
                <path class="planirovca_item_path" data-room="4"
                  d="M567.5 289.5H575V339.5H576V352.5H573.5V466.5H576.5V480H573V509.5H739.5V480H737V467H739V353.5H737V340H739.5V264H570V266H567.5V289.5Z" />
                <path class="planirovca_item_path" data-room="5"
                  d="M573.5 10.5V169H576.5V181.5H574.5V230H567.5V256.5H739.5V181.5H737V168.5H738.5V41.5H739.5V10.5H573.5Z" />
                <path class="planirovca_item_path" data-room="6"
                  d="M407.5 10.5H565.5V181H567V222.5H516.5V225.5H490.5V222.5H480.5V170.5H408.5V42H407.5V10.5Z" />
                <path class="planirovca_item_path" data-room="7"
                  d="M920.5 222.5H970.5V224H996.5V222.5H1006.5V170.5H1046V169H1078V54.5H1077V41H1081V10H921.5V41H924V54H921.5V168.5H924.5V181H920.5V222.5Z" />
                <path class="planirovca_item_path" data-room="8"
                  d="M747.5 10.5H913.5V203.5V230.5H915V256.5H747.5V181.5H750.5V168.5H748.5V41.5H747.5V10.5Z" />
                <path class="planirovca_item_path" data-room="9"
                  d="M747.5 340H750V353H748.5V467H750V480H747.5V509.5H992V298.5H912.5V290.5H915V264.5H747.5V340Z" />
                <path class="planirovca_item_path" data-room="10"
                  d="M1000.5 298.5H1159V293.5H1185.5V298.5H1244.5V352.5H1246V467H1243.5V480H1246V510H1000V298.5H1000.5Z" />
                <path class="planirovca_item_path" data-room="11"
                  d="M1247.5 264.5V290.5H1252.5V339.5H1256.5V352.5H1254V467H1256.5V480H1254V510C1308.5 510.167 1417.5 510.4 1417.5 510V480H1412.5V467H1413.5H1425.5V471.5H1477.5V264.5H1247.5Z" />
                <path class="planirovca_item_path" data-room="12"
                  d="M1252.5 256.5H1477.5V49.5H1424.5V54.5H1412V41H1418V10.5H1252.5V41H1256.5V54.5H1252.5V166H1256.5V181.5H1252.5V210H1254.5V229.5H1252.5V256.5Z" />
                <path
                  d="M1417.5 510C1417.5 510.4 1308.5 510.167 1254 510V480H1256.5V467H1254V352.5H1256.5V339.5H1252.5V290.5H1247.5V264.5H1477.5V471.5H1425.5V467H1413.5H1412.5V480H1417.5M1417.5 510C1417.5 509.6 1417.5 489.833 1417.5 480M1417.5 510V480M10 471H70V510H234V480H230V466H234V351H284.5V298.5H234V264.5H10V471ZM10 256.5V49.5H69.5V10.5H234.5V181.5H240V208H234.5V256.5H10ZM407.5 10.5H565.5V181H567V222.5H516.5V225.5H490.5V222.5H480.5V170.5H408.5V42H407.5V10.5ZM573.5 10.5V169H576.5V181.5H574.5V230H567.5V256.5H739.5V181.5H737V168.5H738.5V41.5H739.5V10.5H573.5ZM747.5 10.5H913.5V203.5V230.5H915V256.5H747.5V181.5H750.5V168.5H748.5V41.5H747.5V10.5ZM293 298.5H299.5V290.5H325V298.5H399V339H396.5V353H398V428.5H396V480H398.5V509.5H242V480H244V466H242V358.5H293V298.5ZM407.5 298.5H475V290.5H501V298.5H566.5V339H561V350H563V352.5H565.5V466H563V480H565.5V509.5H407V480H410V466H408V339H407.5V298.5ZM567.5 289.5H575V339.5H576V352.5H573.5V466.5H576.5V480H573V509.5H739.5V480H737V467H739V353.5H737V340H739.5V264H570V266H567.5V289.5ZM747.5 264.5V340H750V353H748.5V467H750V480H747.5V509.5H992V298.5H912.5V290.5H915V264.5H747.5ZM920.5 222.5H970.5V224H996.5V222.5H1006.5V170.5H1046V169H1078V54.5H1077V41H1081V10H921.5V41H924V54H921.5V168.5H924.5V181H920.5V222.5ZM1000.5 298.5H1159V293.5H1185.5V298.5H1244.5V352.5H1246V467H1243.5V480H1246V510H1000V298.5H1000.5ZM1252.5 256.5H1477.5V49.5H1424.5V54.5H1412V41H1418V10.5H1252.5V41H1256.5V54.5H1252.5V166H1256.5V181.5H1252.5V210H1254.5V229.5H1252.5V256.5ZM0.5 0.5V520.5H1486.5V0.5H0.5Z"
                  stroke="black" stroke-opacity="0.11" stroke-width="0.01" />
              </svg>



              <svg class="planirovca_item_svg et_2 anime" width="100%" viewBox="0 0 1483 520" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="planirovca_item_path" data-room="13"
                  d="M11 256V50H62V54.5H75V41.5H70.5V10H322.5V222H275V225.5H248.5V222H234.5V256H11Z" />
                <path class="planirovca_item_path" data-room="14"
                  d="M11 264.5H235.5V290H234.5V298H284.5V351C271 351.167 244 351.4 244 351V338.5H230.5V352H233.5V465.5H230.5V479H233.5V509.5H70.5V479H75.5V465.5H62V469.5H11V264.5Z" />
                <path class="planirovca_item_path" data-room="15"
                  d="M300 290.5V293H298.5V298H292V355V358.5H241V465.5H244V479H241V509.5H399V479H396V467.5H395.5V427.5H397.5V352H396.5V339H399V298H325V293H324V290.5H300Z" />
                <path class="planirovca_item_path" data-room="16"
                  d="M406.5 298H474.5V290.5H500.5V298H565.5V338.5H560V349.5H562V352H564.5V465.5H562V479H564.5V509.5H406.5V479H409.5V465.5H407.5V352H409.5V339H406.5V298Z" />
                <path class="planirovca_item_path" data-room="17"
                  d="M572.5 510V479H575V465.5H572.5V352H575V338.5H573.5V290H568V265H568.5V264H573.5V181.5H575V168H572.5V54.5H575V41H572.5V11H738V41H735V54.5H736.5V168H735V181H738.5V338.5H735.5V352H736.5V465.5H735V479H738V510H572.5Z" />
                <path class="planirovca_item_path" data-room="18"
                  d="M406.5 11H564.5V41H562V54.5H564.5V168H562V181.5H566C566.167 194.833 566.4 221.6 566 222C565.6 222.4 532.167 222.167 515.5 222V226H489.5V222H480V170.5H440.5V169.5H407.5V54.5H409.5V41H406.5V11Z" />
                <path class="planirovca_item_path" data-room="19"
                  d="M918 222H968V224H994V222H1004V170H1043.5V169H1075.5V54.5H1074.5V41H1080V11H919V41H922V54H919V168H921.5V181H918V222Z" />
                <path class="planirovca_item_path" data-room="20"
                  d="M746 11V41H748.5V54.5H747V168H749V181.5H745.5V338.5H748.5V352H746.5V465.5H748.5V479H745.5V510H989.5V298H913.5V230H909.5V181.5H908.5V168H911.5V54.5H908.5V41H911.5V11H746Z" />
                <path class="planirovca_item_path" data-room="21"
                  d="M997.5 298V510H1243V479H1240V465.5H1243V351.5H1240V339H1242V297.5H1182.5V293H1156.5V297.5H997.5V298Z" />
                <path class="planirovca_item_path" data-room="22"
                  d="M1246.5 264.5H1473.5V469.5H1422V466H1408.5V479H1413.5V510H1250.5V479H1253.5V465.5H1250.5V351.5H1253.5V339H1249.5V290H1246.5V264.5Z" />
                <path class="planirovca_item_path" data-room="23"
                  d="M1182 228V227H1181V222H1161.5V11H1413.5V41H1409V54H1410H1422V49.5H1473.5V256H1249.5V222H1207.5V228H1182Z" />
                <path
                  d="M248.5 222V225.5H275V222H322.5V10H70.5V41.5H75V54.5H62V50H11V256H234.5V222M248.5 222C243.833 222 234.5 222 234.5 222M248.5 222H234.5M244 351C244 351.4 271 351.167 284.5 351V298H234.5V290H235.5V264.5H11V469.5H62V465.5H75.5V479H70.5V509.5H233.5V479H230.5V465.5H233.5V352H230.5V338.5H244M244 351C244 350.6 244 342.5 244 338.5M244 351V338.5M997.5 298C997.5 380.791 997.5 510 997.5 510M997.5 298V297.5H1156.5V293H1182.5V297.5H1242V339H1240V351.5H1243V465.5H1240V479H1243V510H997.5M997.5 298V510M406.5 11H564.5V41H562V54.5H564.5V168H562V181.5H566C566.167 194.833 566.4 221.6 566 222C565.6 222.4 532.167 222.167 515.5 222V226H489.5V222H480V170.5H440.5V169.5H407.5V54.5H409.5V41H406.5V11ZM300 290.5V293H298.5V298H292V355V358.5H241V465.5H244V479H241V509.5H399V479H396V467.5H395.5V427.5H397.5V352H396.5V339H399V298H325V293H324V290.5H300ZM406.5 298H474.5V290.5H500.5V298H565.5V338.5H560V349.5H562V352H564.5V465.5H562V479H564.5V509.5H406.5V479H409.5V465.5H407.5V352H409.5V339H406.5V298ZM572.5 510V479H575V465.5H572.5V352H575V338.5H573.5V290H568V265H568.5V264H573.5V181.5H575V168H572.5V54.5H575V41H572.5V11H738V41H735V54.5H736.5V168H735V181H738.5V338.5H735.5V352H736.5V465.5H735V479H738V510H572.5ZM746 11V41H748.5V54.5H747V168H749V181.5H745.5V338.5H748.5V352H746.5V465.5H748.5V479H745.5V510H989.5V298H913.5V230H909.5V181.5H908.5V168H911.5V54.5H908.5V41H911.5V11H746ZM918 222H968V224H994V222H1004V170H1043.5V169H1075.5V54.5H1074.5V41H1080V11H919V41H922V54H919V168H921.5V181H918V222ZM1182 228V227H1181V222H1161.5V11H1413.5V41H1409V54H1410H1422V49.5H1473.5V256H1249.5V222H1207.5V228H1182ZM1246.5 264.5H1473.5V469.5H1422V466H1408.5V479H1413.5V510H1250.5V479H1253.5V465.5H1250.5V351.5H1253.5V339H1249.5V290H1246.5V264.5ZM1 0.5V519.5H1482.5V0.5H1Z"
                  stroke-width="0.1" />
              </svg>
              <svg class="planirovca_item_svg et_3 anime" width="100%" viewBox="0 0 1483 520" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="planirovca_item_path" data-room="24"
                  d="M11 256V50H62V54.5H75V41.5H70.5V10H322.5V222H275V225.5H248.5V222H234.5V256H11Z" />
                <path class="planirovca_item_path" data-room="25"
                  d="M11 264.5H235.5V290H234.5V298H284.5V351C271 351.167 244 351.4 244 351V338.5H230.5V352H233.5V465.5H230.5V479H233.5V509.5H70.5V479H75.5V465.5H62V469.5H11V264.5Z" />
                <path class="planirovca_item_path" data-room="26"
                  d="M300 290.5V293H298.5V298H292V355V358.5H241V465.5H244V479H241V509.5H399V479H396V467.5H395.5V427.5H397.5V352H396.5V339H399V298H325V293H324V290.5H300Z" />
                <path class="planirovca_item_path" data-room="27"
                  d="M406.5 298H474.5V290.5H500.5V298H565.5V338.5H560V349.5H562V352H564.5V465.5H562V479H564.5V509.5H406.5V479H409.5V465.5H407.5V352H409.5V339H406.5V298Z" />
                <path class="planirovca_item_path" data-room="28"
                  d="M572.5 510V479H575V465.5H572.5V352H575V338.5H573.5V290H568V265H568.5V264H573.5V181.5H575V168H572.5V54.5H575V41H572.5V11H738V41H735V54.5H736.5V168H735V181H738.5V338.5H735.5V352H736.5V465.5H735V479H738V510H572.5Z" />
                <path class="planirovca_item_path" data-room="29"
                  d="M406.5 11H564.5V41H562V54.5H564.5V168H562V181.5H566C566.167 194.833 566.4 221.6 566 222C565.6 222.4 532.167 222.167 515.5 222V226H489.5V222H480V170.5H440.5V169.5H407.5V54.5H409.5V41H406.5V11Z" />
                <path class="planirovca_item_path" data-room="30"
                  d="M918 222H968V224H994V222H1004V170H1043.5V169H1075.5V54.5H1074.5V41H1080V11H919V41H922V54H919V168H921.5V181H918V222Z" />
                <path class="planirovca_item_path" data-room="31"
                  d="M746 11V41H748.5V54.5H747V168H749V181.5H745.5V338.5H748.5V352H746.5V465.5H748.5V479H745.5V510H989.5V298H913.5V230H909.5V181.5H908.5V168H911.5V54.5H908.5V41H911.5V11H746Z" />
                <path class="planirovca_item_path" data-room="32"
                  d="M997.5 298V510H1243V479H1240V465.5H1243V351.5H1240V339H1242V297.5H1182.5V293H1156.5V297.5H997.5V298Z" />
                <path class="planirovca_item_path" data-room="33"
                  d="M1246.5 264.5H1473.5V469.5H1422V466H1408.5V479H1413.5V510H1250.5V479H1253.5V465.5H1250.5V351.5H1253.5V339H1249.5V290H1246.5V264.5Z" />
                <path class="planirovca_item_path" data-room="34"
                  d="M1182 228V227H1181V222H1161.5V11H1413.5V41H1409V54H1410H1422V49.5H1473.5V256H1249.5V222H1207.5V228H1182Z" />
                <path
                  d="M248.5 222V225.5H275V222H322.5V10H70.5V41.5H75V54.5H62V50H11V256H234.5V222M248.5 222C243.833 222 234.5 222 234.5 222M248.5 222H234.5M244 351C244 351.4 271 351.167 284.5 351V298H234.5V290H235.5V264.5H11V469.5H62V465.5H75.5V479H70.5V509.5H233.5V479H230.5V465.5H233.5V352H230.5V338.5H244M244 351C244 350.6 244 342.5 244 338.5M244 351V338.5M997.5 298C997.5 380.791 997.5 510 997.5 510M997.5 298V297.5H1156.5V293H1182.5V297.5H1242V339H1240V351.5H1243V465.5H1240V479H1243V510H997.5M997.5 298V510M406.5 11H564.5V41H562V54.5H564.5V168H562V181.5H566C566.167 194.833 566.4 221.6 566 222C565.6 222.4 532.167 222.167 515.5 222V226H489.5V222H480V170.5H440.5V169.5H407.5V54.5H409.5V41H406.5V11ZM300 290.5V293H298.5V298H292V355V358.5H241V465.5H244V479H241V509.5H399V479H396V467.5H395.5V427.5H397.5V352H396.5V339H399V298H325V293H324V290.5H300ZM406.5 298H474.5V290.5H500.5V298H565.5V338.5H560V349.5H562V352H564.5V465.5H562V479H564.5V509.5H406.5V479H409.5V465.5H407.5V352H409.5V339H406.5V298ZM572.5 510V479H575V465.5H572.5V352H575V338.5H573.5V290H568V265H568.5V264H573.5V181.5H575V168H572.5V54.5H575V41H572.5V11H738V41H735V54.5H736.5V168H735V181H738.5V338.5H735.5V352H736.5V465.5H735V479H738V510H572.5ZM746 11V41H748.5V54.5H747V168H749V181.5H745.5V338.5H748.5V352H746.5V465.5H748.5V479H745.5V510H989.5V298H913.5V230H909.5V181.5H908.5V168H911.5V54.5H908.5V41H911.5V11H746ZM918 222H968V224H994V222H1004V170H1043.5V169H1075.5V54.5H1074.5V41H1080V11H919V41H922V54H919V168H921.5V181H918V222ZM1182 228V227H1181V222H1161.5V11H1413.5V41H1409V54H1410H1422V49.5H1473.5V256H1249.5V222H1207.5V228H1182ZM1246.5 264.5H1473.5V469.5H1422V466H1408.5V479H1413.5V510H1250.5V479H1253.5V465.5H1250.5V351.5H1253.5V339H1249.5V290H1246.5V264.5ZM1 0.5V519.5H1482.5V0.5H1Z"
                  stroke-width="0.1" />
              </svg>
              <svg class="planirovca_item_svg et_4 anime" width="100%" viewBox="0 0 1483 520" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="planirovca_item_path" data-room="35"
                  d="M11 256V50H62V54.5H75V41.5H70.5V10H322.5V222H275V225.5H248.5V222H234.5V256H11Z" />
                <path class="planirovca_item_path" data-room="36"
                  d="M11 264.5H235.5V290H234.5V298H284.5V351C271 351.167 244 351.4 244 351V338.5H230.5V352H233.5V465.5H230.5V479H233.5V509.5H70.5V479H75.5V465.5H62V469.5H11V264.5Z" />
                <path class="planirovca_item_path" data-room="37"
                  d="M300 290.5V293H298.5V298H292V355V358.5H241V465.5H244V479H241V509.5H399V479H396V467.5H395.5V427.5H397.5V352H396.5V339H399V298H325V293H324V290.5H300Z" />
                <path class="planirovca_item_path" data-room="38"
                  d="M406.5 298H474.5V290.5H500.5V298H565.5V338.5H560V349.5H562V352H564.5V465.5H562V479H564.5V509.5H406.5V479H409.5V465.5H407.5V352H409.5V339H406.5V298Z" />
                <path class="planirovca_item_path" data-room="39"
                  d="M572.5 510V479H575V465.5H572.5V352H575V338.5H573.5V290H568V265H568.5V264H573.5V181.5H575V168H572.5V54.5H575V41H572.5V11H738V41H735V54.5H736.5V168H735V181H738.5V338.5H735.5V352H736.5V465.5H735V479H738V510H572.5Z" />
                <path class="planirovca_item_path" data-room="40"
                  d="M406.5 11H564.5V41H562V54.5H564.5V168H562V181.5H566C566.167 194.833 566.4 221.6 566 222C565.6 222.4 532.167 222.167 515.5 222V226H489.5V222H480V170.5H440.5V169.5H407.5V54.5H409.5V41H406.5V11Z" />
                <path class="planirovca_item_path" data-room="41"
                  d="M918 222H968V224H994V222H1004V170H1043.5V169H1075.5V54.5H1074.5V41H1080V11H919V41H922V54H919V168H921.5V181H918V222Z" />
                <path class="planirovca_item_path" data-room="42"
                  d="M746 11V41H748.5V54.5H747V168H749V181.5H745.5V338.5H748.5V352H746.5V465.5H748.5V479H745.5V510H989.5V298H913.5V230H909.5V181.5H908.5V168H911.5V54.5H908.5V41H911.5V11H746Z" />
                <path class="planirovca_item_path" data-room="43"
                  d="M997.5 298V510H1243V479H1240V465.5H1243V351.5H1240V339H1242V297.5H1182.5V293H1156.5V297.5H997.5V298Z" />
                <path class="planirovca_item_path" data-room="44"
                  d="M1246.5 264.5H1473.5V469.5H1422V466H1408.5V479H1413.5V510H1250.5V479H1253.5V465.5H1250.5V351.5H1253.5V339H1249.5V290H1246.5V264.5Z" />
                <path class="planirovca_item_path" data-room="45"
                  d="M1182 228V227H1181V222H1161.5V11H1413.5V41H1409V54H1410H1422V49.5H1473.5V256H1249.5V222H1207.5V228H1182Z" />
                <path
                  d="M248.5 222V225.5H275V222H322.5V10H70.5V41.5H75V54.5H62V50H11V256H234.5V222M248.5 222C243.833 222 234.5 222 234.5 222M248.5 222H234.5M244 351C244 351.4 271 351.167 284.5 351V298H234.5V290H235.5V264.5H11V469.5H62V465.5H75.5V479H70.5V509.5H233.5V479H230.5V465.5H233.5V352H230.5V338.5H244M244 351C244 350.6 244 342.5 244 338.5M244 351V338.5M997.5 298C997.5 380.791 997.5 510 997.5 510M997.5 298V297.5H1156.5V293H1182.5V297.5H1242V339H1240V351.5H1243V465.5H1240V479H1243V510H997.5M997.5 298V510M406.5 11H564.5V41H562V54.5H564.5V168H562V181.5H566C566.167 194.833 566.4 221.6 566 222C565.6 222.4 532.167 222.167 515.5 222V226H489.5V222H480V170.5H440.5V169.5H407.5V54.5H409.5V41H406.5V11ZM300 290.5V293H298.5V298H292V355V358.5H241V465.5H244V479H241V509.5H399V479H396V467.5H395.5V427.5H397.5V352H396.5V339H399V298H325V293H324V290.5H300ZM406.5 298H474.5V290.5H500.5V298H565.5V338.5H560V349.5H562V352H564.5V465.5H562V479H564.5V509.5H406.5V479H409.5V465.5H407.5V352H409.5V339H406.5V298ZM572.5 510V479H575V465.5H572.5V352H575V338.5H573.5V290H568V265H568.5V264H573.5V181.5H575V168H572.5V54.5H575V41H572.5V11H738V41H735V54.5H736.5V168H735V181H738.5V338.5H735.5V352H736.5V465.5H735V479H738V510H572.5ZM746 11V41H748.5V54.5H747V168H749V181.5H745.5V338.5H748.5V352H746.5V465.5H748.5V479H745.5V510H989.5V298H913.5V230H909.5V181.5H908.5V168H911.5V54.5H908.5V41H911.5V11H746ZM918 222H968V224H994V222H1004V170H1043.5V169H1075.5V54.5H1074.5V41H1080V11H919V41H922V54H919V168H921.5V181H918V222ZM1182 228V227H1181V222H1161.5V11H1413.5V41H1409V54H1410H1422V49.5H1473.5V256H1249.5V222H1207.5V228H1182ZM1246.5 264.5H1473.5V469.5H1422V466H1408.5V479H1413.5V510H1250.5V479H1253.5V465.5H1250.5V351.5H1253.5V339H1249.5V290H1246.5V264.5ZM1 0.5V519.5H1482.5V0.5H1Z"
                  stroke-width="0.1" />
              </svg>
              <svg class="planirovca_item_svg et_5 anime" width="100%" viewBox="0 0 1483 520" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="planirovca_item_path" data-room="46"
                  d="M11 256V50H62V54.5H75V41.5H70.5V10H322.5V222H275V225.5H248.5V222H234.5V256H11Z" />
                <path class="planirovca_item_path" data-room="47"
                  d="M11 264.5H235.5V290H234.5V298H284.5V351C271 351.167 244 351.4 244 351V338.5H230.5V352H233.5V465.5H230.5V479H233.5V509.5H70.5V479H75.5V465.5H62V469.5H11V264.5Z" />
                <path class="planirovca_item_path" data-room="48"
                  d="M300 290.5V293H298.5V298H292V355V358.5H241V465.5H244V479H241V509.5H399V479H396V467.5H395.5V427.5H397.5V352H396.5V339H399V298H325V293H324V290.5H300Z" />
                <path class="planirovca_item_path" data-room="49"
                  d="M406.5 298H474.5V290.5H500.5V298H565.5V338.5H560V349.5H562V352H564.5V465.5H562V479H564.5V509.5H406.5V479H409.5V465.5H407.5V352H409.5V339H406.5V298Z" />
                <path class="planirovca_item_path" data-room="50"
                  d="M572.5 510V479H575V465.5H572.5V352H575V338.5H573.5V290H568V265H568.5V264H573.5V181.5H575V168H572.5V54.5H575V41H572.5V11H738V41H735V54.5H736.5V168H735V181H738.5V338.5H735.5V352H736.5V465.5H735V479H738V510H572.5Z" />
                <path class="planirovca_item_path" data-room="51"
                  d="M406.5 11H564.5V41H562V54.5H564.5V168H562V181.5H566C566.167 194.833 566.4 221.6 566 222C565.6 222.4 532.167 222.167 515.5 222V226H489.5V222H480V170.5H440.5V169.5H407.5V54.5H409.5V41H406.5V11Z" />
                <path class="planirovca_item_path" data-room="52"
                  d="M918 222H968V224H994V222H1004V170H1043.5V169H1075.5V54.5H1074.5V41H1080V11H919V41H922V54H919V168H921.5V181H918V222Z" />
                <path class="planirovca_item_path" data-room="53"
                  d="M746 11V41H748.5V54.5H747V168H749V181.5H745.5V338.5H748.5V352H746.5V465.5H748.5V479H745.5V510H989.5V298H913.5V230H909.5V181.5H908.5V168H911.5V54.5H908.5V41H911.5V11H746Z" />
                <path class="planirovca_item_path" data-room="54"
                  d="M997.5 298V510H1243V479H1240V465.5H1243V351.5H1240V339H1242V297.5H1182.5V293H1156.5V297.5H997.5V298Z" />
                <path class="planirovca_item_path" data-room="55"
                  d="M1246.5 264.5H1473.5V469.5H1422V466H1408.5V479H1413.5V510H1250.5V479H1253.5V465.5H1250.5V351.5H1253.5V339H1249.5V290H1246.5V264.5Z" />
                <path class="planirovca_item_path" data-room="56"
                  d="M1182 228V227H1181V222H1161.5V11H1413.5V41H1409V54H1410H1422V49.5H1473.5V256H1249.5V222H1207.5V228H1182Z" />
                <path
                  d="M248.5 222V225.5H275V222H322.5V10H70.5V41.5H75V54.5H62V50H11V256H234.5V222M248.5 222C243.833 222 234.5 222 234.5 222M248.5 222H234.5M244 351C244 351.4 271 351.167 284.5 351V298H234.5V290H235.5V264.5H11V469.5H62V465.5H75.5V479H70.5V509.5H233.5V479H230.5V465.5H233.5V352H230.5V338.5H244M244 351C244 350.6 244 342.5 244 338.5M244 351V338.5M997.5 298C997.5 380.791 997.5 510 997.5 510M997.5 298V297.5H1156.5V293H1182.5V297.5H1242V339H1240V351.5H1243V465.5H1240V479H1243V510H997.5M997.5 298V510M406.5 11H564.5V41H562V54.5H564.5V168H562V181.5H566C566.167 194.833 566.4 221.6 566 222C565.6 222.4 532.167 222.167 515.5 222V226H489.5V222H480V170.5H440.5V169.5H407.5V54.5H409.5V41H406.5V11ZM300 290.5V293H298.5V298H292V355V358.5H241V465.5H244V479H241V509.5H399V479H396V467.5H395.5V427.5H397.5V352H396.5V339H399V298H325V293H324V290.5H300ZM406.5 298H474.5V290.5H500.5V298H565.5V338.5H560V349.5H562V352H564.5V465.5H562V479H564.5V509.5H406.5V479H409.5V465.5H407.5V352H409.5V339H406.5V298ZM572.5 510V479H575V465.5H572.5V352H575V338.5H573.5V290H568V265H568.5V264H573.5V181.5H575V168H572.5V54.5H575V41H572.5V11H738V41H735V54.5H736.5V168H735V181H738.5V338.5H735.5V352H736.5V465.5H735V479H738V510H572.5ZM746 11V41H748.5V54.5H747V168H749V181.5H745.5V338.5H748.5V352H746.5V465.5H748.5V479H745.5V510H989.5V298H913.5V230H909.5V181.5H908.5V168H911.5V54.5H908.5V41H911.5V11H746ZM918 222H968V224H994V222H1004V170H1043.5V169H1075.5V54.5H1074.5V41H1080V11H919V41H922V54H919V168H921.5V181H918V222ZM1182 228V227H1181V222H1161.5V11H1413.5V41H1409V54H1410H1422V49.5H1473.5V256H1249.5V222H1207.5V228H1182ZM1246.5 264.5H1473.5V469.5H1422V466H1408.5V479H1413.5V510H1250.5V479H1253.5V465.5H1250.5V351.5H1253.5V339H1249.5V290H1246.5V264.5ZM1 0.5V519.5H1482.5V0.5H1Z"
                  stroke-width="0.1" />
              </svg>











              <svg class="planirovca_item_svg et_6 anime" width="100%" viewBox="0 0 1487 521" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="planirovca_item_path" data-room="57"
                  d="M10 256.405V50.2685H68.966V10H322.568V221.889H275.107V226.683H248.74V221.889H237.235H234.358V256.405H10Z" />
                <path class="planirovca_item_path" data-room="58"
                  d="M10 264.075H234.358V297.152H284.695V351.323H234.358V509.521H69.4454V471.17H10V264.075Z" />
                <path class="planirovca_item_path" data-room="59"
                  d="M299.557 290.92H324.965V297.152H398.792V429.463H395.916V479.319H398.792V509.521H237.235V479.319H242.988V466.855H241.549V358.993H292.366V297.152H299.557V290.92Z" />
                <path class="planirovca_item_path" data-room="60"
                  d="M406.942 297.152H475.016V291.4H501.383V297.152H566.102V339.338H562.746V352.761H565.623V466.376H562.746V479.319H565.623V510H406.942V479.319H409.339V466.376H406.942V297.152Z" />
                <path class="planirovca_item_path" data-room="61"
                  d="M573.293 510H739.165V479.799H736.768V466.376H739.165V352.282H736.768V339.338H739.165V181.141H736.768V168.198H739.165V53.6242H736.768V40.2013H739.165V10H572.814V40.6807H575.69V53.6242H572.814V167.718H575.69V181.141H574.731V264.075H567.061V289.962H574.731V339.338H575.69V352.282H573.293V466.376H576.169V479.319H573.293V510Z" />
                <path class="planirovca_item_path" data-room="62"
                  d="M566.581 221.889H516.245V226.683H490.357V221.889H480.769V170.115H406.942V54.1035H409.818V41.1601H406.942V10.9588H565.143V40.6807H562.746V53.6242H565.143V167.718H562.746V181.141H566.581V221.889Z" />
                <path class="planirovca_item_path" data-room="63"
                  d="M920.857 10V40.6807H923.733V54.1035H920.857V168.198H923.254V181.62H919.898V221.889H969.755V225.244H995.643V221.889H1005.23V170.115H1076.18V167.239H1079.06V54.1035H1076.18V40.6807H1081.93V10H920.857Z" />
                <path class="planirovca_item_path" data-room="64"
                  d="M747.315 10V40.6807H750.191V54.1035H747.315V168.198H750.191V181.141H747.315V256.405H914.625V230.518H911.269V181.62H909.831V168.198H913.666V54.1035H910.31V40.6807H913.666V10H747.315Z" />
                <path class="planirovca_item_path" data-room="65"
                  d="M747.315 264.075H914.625V298.591H991.328V510H746.835V479.799H749.712V466.376H746.835V352.282H750.191V339.338H747.315V264.075Z" />
                <path class="planirovca_item_path" data-room="66"
                  d="M999.478 298.591V510H1244.93V479.799H1242.53V466.376H1244.93V352.282H1242.53V338.859H1243.97V298.591H1184.53V294.756H1158.64V298.591H999.478Z" />
                <path class="planirovca_item_path" data-room="67"
                  d="M1248.29 264.075H1476V470.69H1425.18V466.855H1411.28V479.319H1416.55V510H1253.08V479.799H1255.96V466.376H1253.08V352.282H1255.96V338.859H1251.64V289.962H1248.29V264.075Z" />
                <path class="planirovca_item_path" data-room="68"
                  d="M1163.43 10H1416.55V40.6807H1410.8V54.1035H1424.22V50.2685H1476V256.405H1351.36V254.008H1339.85V256.405H1251.64V221.889H1209.45V228.6H1183.57V221.889H1163.43V10Z" />
                <path
                  d="M1158.64 294.756H1184.53V298.591H1243.97V338.859H1242.53V352.282H1244.93V466.376H1242.53V479.799H1244.93V510H999.478V298.591H1158.64M1158.64 294.756C1158.64 296.034 1158.64 298.591 1158.64 298.591M1158.64 294.756V298.591M10 256.405V50.2685H68.966V10H322.568V221.889H275.107V226.683H248.74V221.889H237.235H234.358V256.405H10ZM10 264.075H234.358V297.152H284.695V351.323H234.358V509.521H69.4454V471.17H10V264.075ZM299.557 290.92H324.965V297.152H398.792V429.463H395.916V479.319H398.792V509.521H237.235V479.319H242.988V466.855H241.549V358.993H292.366V297.152H299.557V290.92ZM406.942 297.152H475.016V291.4H501.383V297.152H566.102V339.338H562.746V352.761H565.623V466.376H562.746V479.319H565.623V510H406.942V479.319H409.339V466.376H406.942V297.152ZM573.293 510H739.165V479.799H736.768V466.376H739.165V352.282H736.768V339.338H739.165V181.141H736.768V168.198H739.165V53.6242H736.768V40.2013H739.165V10H572.814V40.6807H575.69V53.6242H572.814V167.718H575.69V181.141H574.731V264.075H567.061V289.962H574.731V339.338H575.69V352.282H573.293V466.376H576.169V479.319H573.293V510ZM566.581 221.889H516.245V226.683H490.357V221.889H480.769V170.115H406.942V54.1035H409.818V41.1601H406.942V10.9588H565.143V40.6807H562.746V53.6242H565.143V167.718H562.746V181.141H566.581V221.889ZM747.315 10V40.6807H750.191V54.1035H747.315V168.198H750.191V181.141H747.315V256.405H914.625V230.518H911.269V181.62H909.831V168.198H913.666V54.1035H910.31V40.6807H913.666V10H747.315ZM920.857 10V40.6807H923.733V54.1035H920.857V168.198H923.254V181.62H919.898V221.889H969.755V225.244H995.643V221.889H1005.23V170.115H1076.18V167.239H1079.06V54.1035H1076.18V40.6807H1081.93V10H920.857ZM1163.43 10H1416.55V40.6807H1410.8V54.1035H1424.22V50.2685H1476V256.405H1351.36V254.008H1339.85V256.405H1251.64V221.889H1209.45V228.6H1183.57V221.889H1163.43V10ZM747.315 264.075H914.625V298.591H991.328V510H746.835V479.799H749.712V466.376H746.835V352.282H750.191V339.338H747.315V264.075ZM1248.29 264.075H1476V470.69H1425.18V466.855H1411.28V479.319H1416.55V510H1253.08V479.799H1255.96V466.376H1253.08V352.282H1255.96V338.859H1251.64V289.962H1248.29V264.075ZM2 2V519H1484V2H2Z"
                  stroke-width="0.1" />
              </svg>
              <svg class="planirovca_item_svg et_7 anime" width="100%" viewBox="0 0 1487 521" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="planirovca_item_path" data-room="69"
                  d="M10 256.405V50.2685H68.966V10H322.568V221.889H275.107V226.683H248.74V221.889H237.235H234.358V256.405H10Z" />
                <path class="planirovca_item_path" data-room="70"
                  d="M10 264.075H234.358V297.152H284.695V351.323H234.358V509.521H69.4454V471.17H10V264.075Z" />
                <path class="planirovca_item_path" data-room="71"
                  d="M299.557 290.92H324.965V297.152H398.792V429.463H395.916V479.319H398.792V509.521H237.235V479.319H242.988V466.855H241.549V358.993H292.366V297.152H299.557V290.92Z" />
                <path class="planirovca_item_path" data-room="72"
                  d="M406.942 297.152H475.016V291.4H501.383V297.152H566.102V339.338H562.746V352.761H565.623V466.376H562.746V479.319H565.623V510H406.942V479.319H409.339V466.376H406.942V297.152Z" />
                <path class="planirovca_item_path" data-room="73"
                  d="M573.293 510H739.165V479.799H736.768V466.376H739.165V352.282H736.768V339.338H739.165V181.141H736.768V168.198H739.165V53.6242H736.768V40.2013H739.165V10H572.814V40.6807H575.69V53.6242H572.814V167.718H575.69V181.141H574.731V264.075H567.061V289.962H574.731V339.338H575.69V352.282H573.293V466.376H576.169V479.319H573.293V510Z" />
                <path class="planirovca_item_path" data-room="74"
                  d="M566.581 221.889H516.245V226.683H490.357V221.889H480.769V170.115H406.942V54.1035H409.818V41.1601H406.942V10.9588H565.143V40.6807H562.746V53.6242H565.143V167.718H562.746V181.141H566.581V221.889Z" />
                <path class="planirovca_item_path" data-room="75"
                  d="M920.857 10V40.6807H923.733V54.1035H920.857V168.198H923.254V181.62H919.898V221.889H969.755V225.244H995.643V221.889H1005.23V170.115H1076.18V167.239H1079.06V54.1035H1076.18V40.6807H1081.93V10H920.857Z" />
                <path class="planirovca_item_path" data-room="76"
                  d="M747.315 10V40.6807H750.191V54.1035H747.315V168.198H750.191V181.141H747.315V256.405H914.625V230.518H911.269V181.62H909.831V168.198H913.666V54.1035H910.31V40.6807H913.666V10H747.315Z" />
                <path class="planirovca_item_path" data-room="77"
                  d="M747.315 264.075H914.625V298.591H991.328V510H746.835V479.799H749.712V466.376H746.835V352.282H750.191V339.338H747.315V264.075Z" />
                <path class="planirovca_item_path" data-room="78"
                  d="M999.478 298.591V510H1244.93V479.799H1242.53V466.376H1244.93V352.282H1242.53V338.859H1243.97V298.591H1184.53V294.756H1158.64V298.591H999.478Z" />
                <path class="planirovca_item_path" data-room="79"
                  d="M1248.29 264.075H1476V470.69H1425.18V466.855H1411.28V479.319H1416.55V510H1253.08V479.799H1255.96V466.376H1253.08V352.282H1255.96V338.859H1251.64V289.962H1248.29V264.075Z" />
                <path class="planirovca_item_path" data-room="80"
                  d="M1163.43 10H1416.55V40.6807H1410.8V54.1035H1424.22V50.2685H1476V256.405H1351.36V254.008H1339.85V256.405H1251.64V221.889H1209.45V228.6H1183.57V221.889H1163.43V10Z" />
                <path
                  d="M1158.64 294.756H1184.53V298.591H1243.97V338.859H1242.53V352.282H1244.93V466.376H1242.53V479.799H1244.93V510H999.478V298.591H1158.64M1158.64 294.756C1158.64 296.034 1158.64 298.591 1158.64 298.591M1158.64 294.756V298.591M10 256.405V50.2685H68.966V10H322.568V221.889H275.107V226.683H248.74V221.889H237.235H234.358V256.405H10ZM10 264.075H234.358V297.152H284.695V351.323H234.358V509.521H69.4454V471.17H10V264.075ZM299.557 290.92H324.965V297.152H398.792V429.463H395.916V479.319H398.792V509.521H237.235V479.319H242.988V466.855H241.549V358.993H292.366V297.152H299.557V290.92ZM406.942 297.152H475.016V291.4H501.383V297.152H566.102V339.338H562.746V352.761H565.623V466.376H562.746V479.319H565.623V510H406.942V479.319H409.339V466.376H406.942V297.152ZM573.293 510H739.165V479.799H736.768V466.376H739.165V352.282H736.768V339.338H739.165V181.141H736.768V168.198H739.165V53.6242H736.768V40.2013H739.165V10H572.814V40.6807H575.69V53.6242H572.814V167.718H575.69V181.141H574.731V264.075H567.061V289.962H574.731V339.338H575.69V352.282H573.293V466.376H576.169V479.319H573.293V510ZM566.581 221.889H516.245V226.683H490.357V221.889H480.769V170.115H406.942V54.1035H409.818V41.1601H406.942V10.9588H565.143V40.6807H562.746V53.6242H565.143V167.718H562.746V181.141H566.581V221.889ZM747.315 10V40.6807H750.191V54.1035H747.315V168.198H750.191V181.141H747.315V256.405H914.625V230.518H911.269V181.62H909.831V168.198H913.666V54.1035H910.31V40.6807H913.666V10H747.315ZM920.857 10V40.6807H923.733V54.1035H920.857V168.198H923.254V181.62H919.898V221.889H969.755V225.244H995.643V221.889H1005.23V170.115H1076.18V167.239H1079.06V54.1035H1076.18V40.6807H1081.93V10H920.857ZM1163.43 10H1416.55V40.6807H1410.8V54.1035H1424.22V50.2685H1476V256.405H1351.36V254.008H1339.85V256.405H1251.64V221.889H1209.45V228.6H1183.57V221.889H1163.43V10ZM747.315 264.075H914.625V298.591H991.328V510H746.835V479.799H749.712V466.376H746.835V352.282H750.191V339.338H747.315V264.075ZM1248.29 264.075H1476V470.69H1425.18V466.855H1411.28V479.319H1416.55V510H1253.08V479.799H1255.96V466.376H1253.08V352.282H1255.96V338.859H1251.64V289.962H1248.29V264.075ZM2 2V519H1484V2H2Z"
                  stroke-width="0.1" />
              </svg>



              <svg class="planirovca_item_svg et_8 anime" width="100%" viewBox="0 0 1482 522" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="planirovca_item_path" data-room="81"
                  d="M10 49.5H61.5V54.5H74.5V41H69.5V11H322.5V223H275V226H249V223H237.5H234.5V256.5H145.5V254.5H135.5V256.5H121.5H10V49.5Z" />
                <path class="planirovca_item_path" data-room="82"
                  d="M10 265H237V291H234.5V299H284.5V352C270.667 351.833 243 351.6 243 352V340.5H230.5V353.5H233.5V467.5H231V481H233.5V512H69.5V481H74.5V468H61.5V472H10V265Z" />
                <path class="planirovca_item_path" data-room="83"
                  d="M297 291.5H322V299H399V340.5H396.5V353.5H399.5V427.5H396.5V481H399V512H241V481H243V467.5H241V360H292V299H296V294H297V291.5Z" />
                <path class="planirovca_item_path" data-room="84"
                  d="M407.5 299H475V290H501.5V299H567V340.5H563V353.5H566V467.5H563V481H566V512C513.167 514 407.5 516.8 407.5 512V480.5H410V468H407.5V353.5C408.167 353.833 409.5 354.3 409.5 353.5V340.5H407.5V299Z" />
                <path class="planirovca_item_path" data-room="85"
                  d="M573.5 512V481H576V467.5H573.5V353.5H575.5V340H574.5V291.5H568.5V265.5H739.5V340.5H737V353.5H739.5V467.5H737V480.5H739.5V512H573.5Z" />
                <path class="planirovca_item_path" data-room="86"
                  d="M568.5 257V231H574.5V181.5H576V169H573.5V54H576.5V41H573.5V11H739.5V41.5H737V54H739.5V168.5H737V181.5H739.5V257H568.5Z" />
                <path class="planirovca_item_path" data-room="87"
                  d="M407 168.5H409.5V171.5H480.5V223H490.5V225.5H517V223H567V181.5H563V168H566V54H563V41H566V11H408V41H409.5V54H407V168.5Z" />
                <path class="planirovca_item_path" data-room="88"
                  d="M920.5 223V182H924V168.5H921.5V54H924V41H921.5V11H1083V41H1077.5V54H1080V168.5H1077.5V171.5H1006.5V223H996.5V224.5H970.5V223H920.5Z" />
                <path class="planirovca_item_path" data-room="89"
                  d="M747.5 257V181.5H750V168.5H747.5V54H750V41.5H747.5V11H913.5V41H911.5V54H913.5V169H911.5V182H913V231H914V257H747.5Z" />
                <path class="planirovca_item_path" data-room="90"
                  d="M747.5 512V480.5H750V468H747.5V353.5H750V341H747.5V265.5H914V291.5H912V298.5H992.5V512H747.5Z" />
                <path class="planirovca_item_path" data-room="91"
                  d="M1000 299H1159.5V293.5H1186V299H1245V341H1244V353.5H1247V467.5H1244V481H1247V512H1000V299Z" />
                <path class="planirovca_item_path" data-room="92"
                  d="M1254 512V481H1256.5V468H1254V353.5H1256.5V341H1253V291.5H1247V265.5H1478V472.5H1425.5V467.5H1412.5V481H1418V512H1254Z" />
                <path class="planirovca_item_path" data-room="93"
                  d="M1164.5 223H1184.5V228.5H1210V223H1253V257H1341.5V255H1352V257H1478V49H1425.5V53.5H1412.5V41.5H1418V11H1164.5V223Z" />
                <path
                  d="M243 352C243 351.6 270.667 351.833 284.5 352V299H234.5V291H237V265H10V472H61.5V468H74.5V481H69.5V512H233.5V481H231V467.5H233.5V353.5H230.5V340.5H243M243 352C243 352.4 243 344.5 243 340.5M243 352V340.5M407.5 512C407.5 516.8 513.167 514 566 512V481H563V467.5H566V353.5H563V340.5H567V299H501.5V290H475V299H407.5V340.5H409.5M407.5 512C407.5 507.2 407.5 489 407.5 480.5M407.5 512V480.5M407.5 480.5H410V468H407.5V353.5C408.167 353.833 409.5 354.3 409.5 353.5M409.5 353.5C409.5 352.7 409.5 344.5 409.5 340.5M409.5 353.5V340.5M10 49.5H61.5V54.5H74.5V41H69.5V11H322.5V223H275V226H249V223H237.5H234.5V256.5H145.5V254.5H135.5V256.5H121.5H10V49.5ZM297 291.5H322V299H399V340.5H396.5V353.5H399.5V427.5H396.5V481H399V512H241V481H243V467.5H241V360H292V299H296V294H297V291.5ZM407 168.5H409.5V171.5H480.5V223H490.5V225.5H517V223H567V181.5H563V168H566V54H563V41H566V11H408V41H409.5V54H407V168.5ZM573.5 512V481H576V467.5H573.5V353.5H575.5V340H574.5V291.5H568.5V265.5H739.5V340.5H737V353.5H739.5V467.5H737V480.5H739.5V512H573.5ZM747.5 512V480.5H750V468H747.5V353.5H750V341H747.5V265.5H914V291.5H912V298.5H992.5V512H747.5ZM568.5 257V231H574.5V181.5H576V169H573.5V54H576.5V41H573.5V11H739.5V41.5H737V54H739.5V168.5H737V181.5H739.5V257H568.5ZM747.5 257V181.5H750V168.5H747.5V54H750V41.5H747.5V11H913.5V41H911.5V54H913.5V169H911.5V182H913V231H914V257H747.5ZM920.5 223V182H924V168.5H921.5V54H924V41H921.5V11H1083V41H1077.5V54H1080V168.5H1077.5V171.5H1006.5V223H996.5V224.5H970.5V223H920.5ZM1000 299H1159.5V293.5H1186V299H1245V341H1244V353.5H1247V467.5H1244V481H1247V512H1000V299ZM1254 512V481H1256.5V468H1254V353.5H1256.5V341H1253V291.5H1247V265.5H1478V472.5H1425.5V467.5H1412.5V481H1418V512H1254ZM1164.5 223H1184.5V228.5H1210V223H1253V257H1341.5V255H1352V257H1478V49H1425.5V53.5H1412.5V41.5H1418V11H1164.5V223ZM0.5 0.5V521.5H1481.5V0.5H0.5Z"
                  stroke-width="0.1" />
              </svg>

              <svg class="planirovca_item_svg et_9 anime" width="100%" viewBox="0 0 1482 522" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="planirovca_item_path" data-room="94"
                  d="M10 49.5H61.5V54.5H74.5V41H69.5V11H322.5V223H275V226H249V223H237.5H234.5V256.5H145.5V254.5H135.5V256.5H121.5H10V49.5Z" />
                <path class="planirovca_item_path" data-room="95"
                  d="M10 265H237V291H234.5V299H284.5V352C270.667 351.833 243 351.6 243 352V340.5H230.5V353.5H233.5V467.5H231V481H233.5V512H69.5V481H74.5V468H61.5V472H10V265Z" />
                <path class="planirovca_item_path" data-room="96"
                  d="M297 291.5H322V299H399V340.5H396.5V353.5H399.5V427.5H396.5V481H399V512H241V481H243V467.5H241V360H292V299H296V294H297V291.5Z" />
                <path class="planirovca_item_path" data-room="97"
                  d="M407.5 299H475V290H501.5V299H567V340.5H563V353.5H566V467.5H563V481H566V512C513.167 514 407.5 516.8 407.5 512V480.5H410V468H407.5V353.5C408.167 353.833 409.5 354.3 409.5 353.5V340.5H407.5V299Z" />
                <path class="planirovca_item_path" data-room="98"
                  d="M573.5 512V481H576V467.5H573.5V353.5H575.5V340H574.5V291.5H568.5V265.5H739.5V340.5H737V353.5H739.5V467.5H737V480.5H739.5V512H573.5Z" />
                <path class="planirovca_item_path" data-room="99"
                  d="M568.5 257V231H574.5V181.5H576V169H573.5V54H576.5V41H573.5V11H739.5V41.5H737V54H739.5V168.5H737V181.5H739.5V257H568.5Z" />
                <path class="planirovca_item_path" data-room="100"
                  d="M407 168.5H409.5V171.5H480.5V223H490.5V225.5H517V223H567V181.5H563V168H566V54H563V41H566V11H408V41H409.5V54H407V168.5Z" />
                <path class="planirovca_item_path" data-room="101"
                  d="M920.5 223V182H924V168.5H921.5V54H924V41H921.5V11H1083V41H1077.5V54H1080V168.5H1077.5V171.5H1006.5V223H996.5V224.5H970.5V223H920.5Z" />
                <path class="planirovca_item_path" data-room="102"
                  d="M747.5 257V181.5H750V168.5H747.5V54H750V41.5H747.5V11H913.5V41H911.5V54H913.5V169H911.5V182H913V231H914V257H747.5Z" />
                <path class="planirovca_item_path" data-room="103"
                  d="M747.5 512V480.5H750V468H747.5V353.5H750V341H747.5V265.5H914V291.5H912V298.5H992.5V512H747.5Z" />
                <path class="planirovca_item_path" data-room="104"
                  d="M1000 299H1159.5V293.5H1186V299H1245V341H1244V353.5H1247V467.5H1244V481H1247V512H1000V299Z" />
                <path class="planirovca_item_path" data-room="105"
                  d="M1254 512V481H1256.5V468H1254V353.5H1256.5V341H1253V291.5H1247V265.5H1478V472.5H1425.5V467.5H1412.5V481H1418V512H1254Z" />
                <path class="planirovca_item_path" data-room="106"
                  d="M1164.5 223H1184.5V228.5H1210V223H1253V257H1341.5V255H1352V257H1478V49H1425.5V53.5H1412.5V41.5H1418V11H1164.5V223Z" />
                <path
                  d="M243 352C243 351.6 270.667 351.833 284.5 352V299H234.5V291H237V265H10V472H61.5V468H74.5V481H69.5V512H233.5V481H231V467.5H233.5V353.5H230.5V340.5H243M243 352C243 352.4 243 344.5 243 340.5M243 352V340.5M407.5 512C407.5 516.8 513.167 514 566 512V481H563V467.5H566V353.5H563V340.5H567V299H501.5V290H475V299H407.5V340.5H409.5M407.5 512C407.5 507.2 407.5 489 407.5 480.5M407.5 512V480.5M407.5 480.5H410V468H407.5V353.5C408.167 353.833 409.5 354.3 409.5 353.5M409.5 353.5C409.5 352.7 409.5 344.5 409.5 340.5M409.5 353.5V340.5M10 49.5H61.5V54.5H74.5V41H69.5V11H322.5V223H275V226H249V223H237.5H234.5V256.5H145.5V254.5H135.5V256.5H121.5H10V49.5ZM297 291.5H322V299H399V340.5H396.5V353.5H399.5V427.5H396.5V481H399V512H241V481H243V467.5H241V360H292V299H296V294H297V291.5ZM407 168.5H409.5V171.5H480.5V223H490.5V225.5H517V223H567V181.5H563V168H566V54H563V41H566V11H408V41H409.5V54H407V168.5ZM573.5 512V481H576V467.5H573.5V353.5H575.5V340H574.5V291.5H568.5V265.5H739.5V340.5H737V353.5H739.5V467.5H737V480.5H739.5V512H573.5ZM747.5 512V480.5H750V468H747.5V353.5H750V341H747.5V265.5H914V291.5H912V298.5H992.5V512H747.5ZM568.5 257V231H574.5V181.5H576V169H573.5V54H576.5V41H573.5V11H739.5V41.5H737V54H739.5V168.5H737V181.5H739.5V257H568.5ZM747.5 257V181.5H750V168.5H747.5V54H750V41.5H747.5V11H913.5V41H911.5V54H913.5V169H911.5V182H913V231H914V257H747.5ZM920.5 223V182H924V168.5H921.5V54H924V41H921.5V11H1083V41H1077.5V54H1080V168.5H1077.5V171.5H1006.5V223H996.5V224.5H970.5V223H920.5ZM1000 299H1159.5V293.5H1186V299H1245V341H1244V353.5H1247V467.5H1244V481H1247V512H1000V299ZM1254 512V481H1256.5V468H1254V353.5H1256.5V341H1253V291.5H1247V265.5H1478V472.5H1425.5V467.5H1412.5V481H1418V512H1254ZM1164.5 223H1184.5V228.5H1210V223H1253V257H1341.5V255H1352V257H1478V49H1425.5V53.5H1412.5V41.5H1418V11H1164.5V223ZM0.5 0.5V521.5H1481.5V0.5H0.5Z"
                  stroke-width="0.1" />
              </svg>

            </section>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="lang" data-ru data-lang="0">
    <footer>
      <div class="footer_wrap">
        <div class="footer__content">
          <div class="ft_block">
            <h3>Меню</h3>
            <a href="./index.html">Главная</a>
            <a href="./about.html">О нас</a>
            <a href="#contact">Контакты</a>
          </div>
          <div class="ft_block">
            <h3>СОЦ СЕТИ</h3>
            <p>
              <a target="_blank" href="https://www.facebook.com/profile.php?id=100081629928519"><i
                  class="fa-brands fa-facebook-f"></i></a>
              <a target="_blank" href="https://api.whatsapp.com/message/QDVP4TLWLY23J1?autoload=1&app_absent=0"><i
                  class="fa-brands fa-whatsapp"></i></a>
              <a target="_blank" href="https://www.instagram.com/karagay_kurulush/"><i
                  class="fa-brands fa-instagram"></i></a>
              <a target="_blank" href="https://youtube.com/channel/UCuzRSphmwd7dfu_j8pzsRDg"><i
                  class="fa-brands fa-youtube"></i></a>
            </p>
          </div>
          <div class="ft_block">
            <h3>АДРЕС</h3>
            <p>Ош, ул. Авиценна, 10</p>
          </div>
          <div class="ft_block">
            <h3>КОНТАКТЫ</h3>
            <a href="tel:+996 776 905 905"><i class="fa-solid fa-phone  ft_i"></i>+996 776 905 905</a>
            <a href="tel:+996 556 905 905"><i class="fa-solid fa-phone  ft_i"></i>+996 556 905 905</a>
            <a href="tel:+996 706 905 905"><i class="fa-solid fa-phone  ft_i"></i>+996 706 905 905</a>
            <h3>EMAIL</h3>
            <a href=""><i class="fa-solid fa-envelope ft_i"></i> karagaykurulush@gmail.com</a>
          </div>
        </div>
        <a name="contact"></a>
        <div class="footer__content__down">
          <div class="footer__phone">
            <a href="https://www.instagram.com/karagay_kurulush/">
              <div id="footer__phone">
                <div>
                  <img class="footer__phone__fon" src="./images/phonefon.png" alt="">
                </div>
              </div>
              <img class="footer__phone__phone" src="./images/footer__phone.png" alt="">
            </a>
          </div>
          <div class="map__wrapper">
            <iframe class="map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d966.0443267532014!2d72.80695382925364!3d40.556026017641244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x45f6ab6d6896cec7!2zNDDCsDMzJzIxLjciTiA3MsKwNDgnMjcuMCJF!5e1!3m2!1sru!2skg!4v1660016822643!5m2!1sru!2skg"
              style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="logo_ssb">
        <h3>Сайт разработан компанией:</h3>
        <img width="130px" src="images/logo_ssb.png" alt="">
      </div>
    </footer>
  </div>
  <div class="lang" data-kg data-lang="1">
    <footer>
      <div class="footer_wrap">
        <div class="footer__content">
          <div class="ft_block">
            <h3>Меню</h3>
            <a href="./index.html">Башкы</a>
            <a href="./about.html">Биз жөнүндө</a>
            <a href="#contact">Байланыштар</a>
          </div>
          <div class="ft_block">
            <h3>социалдык тармак</h3>
            <p>
              <a target="_blank" href="https://www.facebook.com/profile.php?id=100081629928519"><i
                  class="fa-brands fa-facebook-f"></i></a>
              <a target="_blank" href="https://api.whatsapp.com/message/QDVP4TLWLY23J1?autoload=1&app_absent=0"><i
                  class="fa-brands fa-whatsapp"></i></a>
              <a target="_blank" href="https://www.instagram.com/karagay_kurulush/"><i
                  class="fa-brands fa-instagram"></i></a>
              <a target="_blank" href="https://youtube.com/channel/UCuzRSphmwd7dfu_j8pzsRDg"><i
                  class="fa-brands fa-youtube"></i></a>
            </p>
          </div>
          <div class="ft_block">
            <h3>АДРЕС</h3>
            <p>Ош, ул. Авиценна, 10</p>
          </div>
          <div class="ft_block">
            <h3>Байланыштар</h3>
            <a href="tel:+996 776 905 905"><i class="fa-solid fa-phone  ft_i"></i>+996 776 905 905</a>
            <a href="tel:+996 556 905 905"><i class="fa-solid fa-phone  ft_i"></i>+996 556 905 905</a>
            <a href="tel:+996 706 905 905"><i class="fa-solid fa-phone  ft_i"></i>+996 706 905 905</a>
            <h3>EMAIL</h3>
            <a href=""><i class="fa-solid fa-envelope ft_i"></i> karagaykurulush@gmail.com</a>
          </div>
        </div>
        <a name="contact"></a>
        <div class="footer__content__down">
          <div class="footer__phone">
            <a href="https://www.instagram.com/karagay_kurulush/">
              <div id="footer__phone">
                <div>
                  <img class="footer__phone__fon" src="./images/phonefon.png" alt="">
                </div>
              </div>
              <img class="footer__phone__phone" src="./images/footer__phone.png" alt="">
            </a>
          </div>
          <div class="map__wrapper">
            <iframe class="map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d966.0443267532014!2d72.80695382925364!3d40.556026017641244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x45f6ab6d6896cec7!2zNDDCsDMzJzIxLjciTiA3MsKwNDgnMjcuMCJF!5e1!3m2!1sru!2skg!4v1660016822643!5m2!1sru!2skg"
              style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="logo_ssb">
        <h3>Компания тарабынан <br> иштелип чыккан сайт:</h3>
        <img width="130px" src="images/logo_ssb.png" alt="">
      </div>
    </footer>
  </div>

</body>

<script>
  fetch('https://www.cbr-xml-daily.ru/daily_json.js').then(async (result) => {
    if (result.status === 200 && result.ok) {
      return result.json()
    }
  }).then((JSON_DATA) => {
    kurs_USD = (10 / JSON_DATA.Valute.KGS.Value) * JSON_DATA.Valute.USD.Value
    return kurs_USD
  })
  var CV = <?= json_encode($array); ?>;


  var roma__navs = document.querySelectorAll('.roma__nav');
  roma__navs.forEach(roma__nav => {
    var e = document.getElementById('btn');
    e.addEventListener('click', function () {
      if (this.className == 'on') this.classList.remove('on');
      else this.classList.add('on');
      roma__nav.classList.toggle('roma__nav-active');
      document.body.classList.toggle('body__hidden');

    });
  })

  window.addEventListener('mouseover', function (e) {
    if (e.target.hasAttribute('data-etaj')) {
      data_3 = e.target.getAttribute('data-etaj')
      llll = document.querySelectorAll('[data-etaj="' + data_3 + '"]')
      llll.forEach(e => {
        if (e.classList.contains('content__left__block_btn')) {
          e.closest('.content__left__block__li').classList.add('content__left__block__li-active')
        }
        else {
          e.style.opacity = 1
        }
      })
    }
  })
  window.addEventListener('mouseout', function (e) {
    if (e.target.hasAttribute('data-etaj')) {
      data_3 = e.target.getAttribute('data-etaj')
      llll = document.querySelectorAll('[data-etaj="' + data_3 + '"]')
      llll.forEach(e => {
        if (e.classList.contains('content__left__block_btn')) {
          e.closest('.content__left__block__li').classList.remove('content__left__block__li-active')
        }
        else {
          e.style.opacity = 0
        }
      })
    }
  })
  window.addEventListener('click', function (event) {
    if (event.target.hasAttribute('data-lang-btn')) {
      const data = event.target.getAttribute('data-lang-btn')
      let data_1 = $('[data-ru]')
      let data_2 = $('[data-kg]')

      if (data == 1) {
        data_1.attr('data-lang', 0)
        data_2.attr('data-lang', 1)
      }
      else if (data == 2) {
        data_1.attr('data-lang', 1)
        data_2.attr('data-lang', 0)
      }
    }
  })



  let data_etaj = 1;
  all_data = new Date()
  month_data = all_data.getMonth()
  year_data = all_data.getYear()
  let data_1 = 1

  const reserveBtn = document.querySelector('[data-bron_KV]');
  const formContainer = document.querySelector('.form-container');
  const closeButton = document.querySelector('.form-close');
  const submitBtn = document.querySelector('.submit-btn');
  const confirmationBox = document.querySelector('.confirmation-box');
  const form_wrapper = document.querySelector('.form_wrapper')
  
  var name = document.querySelector('.name').value;
  var phone = document.querySelector('.phone').value;
  
  
      var romajonButton = document.querySelector('.romajon-button');
      var romajonContainer = document.querySelector('.romajon-container');
      var romajonCheckmark = document.querySelector('.romajon-svg');
      var romajonClassName = "animate";
      var scene_1 = document.querySelector('.scene_1');
      var scene_2 = document.querySelector('.scene_2');

  window.addEventListener('click', function (event) {
    if (event.target.hasAttribute('data-etaj')) {
      l = document.querySelector('.content_li_active')
      l_1 = document.querySelector('.content_path_active')
      l.classList.remove('content_li_active')
      l_1.classList.remove('content_path_active')
      data_etaj = event.target.getAttribute('data-etaj')
      llll = document.querySelectorAll('[data-etaj="' + data_etaj + '"]')
      llll.forEach(e => {
        if (e.classList.contains('content__left__block_btn')) {
          e.closest('.content__left__block__li').classList.add('content_li_active')
        } else {
          e.classList.add('content_path_active')
        }
      })


      ll = document.querySelectorAll('.planirovca_item_svg')
      ll.forEach(a => {
        a.classList.add('anime')
        b = Number(data_etaj) + 1
        if (a.classList.contains('et_' + b)) {
          a.classList.remove('anime')
        }
      })
      planirovca_D_All = document.querySelectorAll('.planirovca_color_D')
      planirovca_D_All.forEach(a => {
        a.classList.add('anime')
        b = Number(data_etaj) + 1
        if (a.classList.contains(`plan_${b}`)) {
          a.classList.remove('anime')
        }
      })

      return data_etaj;
    }
    if (event.target.hasAttribute('data-shtorka-x')) {
      $('.shtorka').css('display', 'none')
      document.querySelector('body').classList.remove('body')
    }
    if (CV[data_1].vznos == 100) {
      document.querySelector('.info__right__block_vzno_sum').setAttribute('disabled', 'disabled')
    } else {
      document.querySelector('.info__right__block_vzno_sum').removeAttribute('disabled', 'disabled')
    }
    if (event.target.hasAttribute('data-room')) {
      data_1 = event.target.getAttribute('data-room')
      const info_kart = `
          ${-month_data + 23 + '&nbsp;'}<div class="lang" data-ru data-lang="0"> месяцев</div><div class="lang" data-kg data-lang="1"> ай</div>
          `
      const info_kart1 = `
          <div class="lang" data-ru data-lang="0">перв.взн</div><div class="lang" data-kg data-lang="1">башкы төлөм</div>${'&nbsp' + CV[data_1].vznos + '%'}
          `
      window.scrollTo(0, 0)
      const infoCart = `<img src="${CV[data_1].image3D}" alt="">`
      const infoCart1 = `<img src="${CV[data_1].image}" alt="">`
      document.querySelector('.shtorka__left__img img').remove()
      document.querySelector('.shtorka__rght__img img').remove()
      // document.querySelector('.shtorka__left__img a').insertAdjacentHTML("beforeend", infoCart);
      document.querySelector('.shtorka__rght__img a').insertAdjacentHTML("beforeend", infoCart1);
      $('.shtorka').css('display', 'block')
      $('.shtoka__info__left__li_etag').html(Number(data_etaj) + 1)
      $('.shtoka__info__left__li_room').html(CV[data_1].room)
      $('.shtoka__info__left__li_scale').html(CV[data_1].square + ' m²')
      $('.shtoka__info__left__li_price').html(Math.floor(CV[data_1].price) + ' $')
      document.querySelector('.info__right__block input').value = Math.floor((CV[data_1].price * kurs_USD) * CV[data_1].square)
      document.querySelector('.info__right__block_vzno_sum').value = Math.floor((CV[data_1].price * kurs_USD) * CV[data_1].square / 100 * (CV[data_1].vznos))

      document.querySelector('#info__right__block_month').value = Math.floor(((CV[data_1].price * kurs_USD) * CV[data_1].square - ((((CV[data_1].price * kurs_USD) * CV[data_1].square / 100 * (CV[data_1].vznos))))) / (23 - month_data))
      document.querySelector('[data-info_month]').innerHTML = info_kart;
      document.querySelector('[data-info_vzno]').innerHTML = info_kart1;
      document.querySelector('body').classList.add('body');

      const infoCart_1 = `
            <div class="none_js">
              <a class="close" href="#ll" id="button_a"><div class="image_focus_bg"></div></a>
              <img src="${CV[data_1].image3D}" alt="">
            </div>
            `;
      const infoCart_2 = `
              <div class="none_js_1">
                <a class="close" href="#ll" id="button_a"><div class="image_focus_bg"></div></a>
                <img src="${CV[data_1].image}" alt="">
              </div>
            `;

      document.querySelector('.none_js').remove()
      document.querySelector('.none_js_1').remove()
      document.querySelector('#image_focus').insertAdjacentHTML("beforeend", infoCart_1);
      document.querySelector('#image_focus_1').insertAdjacentHTML("beforeend", infoCart_2);
    }

    // ***********************************************************************************************************************//
   
    if(event.target.hasAttribute('data-bron_KV')){
      form_wrapper.classList.add('show');
    }
    if(event.target.hasAttribute('data-close-form')){
      form_wrapper.classList.remove('show');
    }
      // ***********************************************************************************************************************//


    //    калькулятор///////////////
    calculator_input_month = document.querySelector('#info__right__block_month')
    calculator_input_vznos = document.querySelector('.info__right__block_vzno_sum')
    calculator_kol_vo_month = document.querySelector('.info__right__block_month')
    data_inp_vznos = document.querySelector('.info__right__block_vzno_sum');
    if (event.target.hasAttribute('data-raschet-btn-ru')) {
      // data_inp_vznos.value='';
      if (data_inp_vznos.value < ((CV[data_1].price * kurs_USD) * CV[data_1].square / 100 * (CV[data_1].vznos) - 1)) {
        alert('Вы ввели число меньше ' + CV[data_1].vznos + "%!!" + ' Введите число больше чем ' + Math.floor((CV[data_1].price * kurs_USD) * CV[data_1].square / 100 * (CV[data_1].vznos)) + "сом")
      }
      if (data_inp_vznos.value > (CV[data_1].price * kurs_USD) * CV[data_1].square) {
        // data_inp_vznos.value='';
        alert('Вы ввели слишком много')
      }
      // if(data_inp_vznos.value){

      // }
      else {
        calk_square = CV[data_1].square
        input_month = -month_data + 23;
        p = (CV[data_1].price * kurs_USD) * CV[data_1].square;
        vznos = calculator_input_vznos.value;
        m = (p - vznos) / input_month
        document.querySelector('.sum-total-ru').value = Math.floor(p);
        document.querySelector('#info__right__block_month').value = Math.floor(m);
      }
    }
  });

  document.getElementById('dealForm').addEventListener('submit', function(e) {

e.preventDefault();

const name = document.getElementById('name').value;
const phone = document.getElementById('phone').value;

// Данные для создания контакта в Битрикс24
const contactData = {
    fields: {
        NAME: name,
        PHONE: [{VALUE: phone, VALUE_TYPE: 'WORK'}],
      }
    };

    console.log(CV[data_1].room, CV[data_1].square + ' m²', Number(data_etaj) + 1);
    // Отправка запроса на создание контакта через веб-хук
    fetch('https://karagay.bitrix24.kz/rest/67/w6wdjmh0srod9jsi/crm.contact.add', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(contactData)
    })
    .then(response => response.json())
    .then(data => {
      if (data.result) {
        // Контакт успешно создан, теперь создаем сделку и связываем с контактом
        const contactId = data.result;
        const dealData = {
          fields: {
            TITLE: 'Заявка на бронирование',
            CONTACT_ID: contactId,
            COMMENTS:`Блок: Г > Этадж: ${Number(data_etaj) + 1} > плошадь ${CV[data_1].square + ' m²'} | ${CV[data_1].room} комнаты`,
            UF_CRM_1693401463:"A",
            UF_CRM_1693590597: Number(data_etaj) + 1, // Можете заполнить значениями
        UF_CRM_1693590626: CV[data_1].room, // Можете заполнить значениями
        UF_CRM_1693736225: CV[data_1].square + ' m²', // Можете заполнить значениями
            }
        };
        
        // Отправка запроса на создание сделки через веб-хук
        fetch('https://karagay.bitrix24.kz/rest/67/w6wdjmh0srod9jsi/crm.deal.add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(dealData)
        })
        .then(response => response.json())
        .then(dealResult => {
      
        })
        .catch(error => {
            console.error('Ошибка:', error);
        });
    } else {
        alert('Произошла ошибка при создании контакта.');
    }
})
.catch(error => {
    console.error('Ошибка:', error);
});

if (!romajonCheckmark.classList.contains(romajonClassName)) {
  romajonCheckmark.classList.add(romajonClassName);
     scene_1.classList.add('none')
     scene_2.classList.remove('none')

      setTimeout(function(){      
        form_wrapper.classList.remove('show');
      }, 7000);  
   } 
});



  const el1 = document.querySelector('.follow-cursor_1')
  window.addEventListener('mousemove', e => {
    const target = e.target
    if (!target) return
    var data_10 = e.target.getAttribute('data-room')
    if (e.target.hasAttribute('data-room')) {
      let data_5 = document.querySelector('[data-indicator_span_room]')
      let data_6 = document.querySelector('[data-indicator_span_square]')
      let data_7 = document.querySelector('[data-indicator_span_price]')
      data_5.innerHTML = CV[data_10].room + "-комнат";
      data_6.innerHTML = CV[data_10].square + '&#178;'
      data_7.innerHTML = CV[data_10].price + ' $'
      el1.classList.add('follow-cursor_active')
    } else {
      el1.classList.remove('follow-cursor_active')
    }
    el1.style.left = e.pageX + 'px'
    el1.style.top = e.pageY + 'px'
  })

  

  CV.forEach(CVs => {
    if (CVs.bron == true) {
      lll = CVs.id - 1
      ll = document.querySelector('[data-room="' + lll + '"]')
      ll.classList.add('bron')
    } else if (CVs.bron == false) {
      lll = CVs.id - 1
      ll = document.querySelector('[data-room="' + lll + '"]')
      ll.classList.remove('bron')
    }
    if (CVs.sold == true) {
      lll = CVs.id - 1
      ll = document.querySelector('[data-room="' + lll + '"]')
      ll.classList.add('sold')
    } else if (CVs.sold == false) {
      lll = CVs.id - 1
      ll = document.querySelector('[data-room="' + lll + '"]')
      ll.classList.remove('sold')
    }
  })
</script>
<style>
  @media (min-width:1450px) {

  .shtorka__left{
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: initial;
  }
  .shtorka__left__img{
    height: 0px;
  }
  .shtorka__left_button{
    left: auto;
    column-gap: 20px;
  }
}
.shtorka__content::after{
  display: none;
}
@media (max-width:800px) {
  
  .shtorka__left__img{
    height: 0px;
  }
  .shtorka__content {
    height: 950px;
    justify-content: flex-end;
  }
  .shtorka__left_button{
    left: auto;

}
  }
.print_screan {
    position: absolute;
    top: 0;
    left: 0;
    display: none;
  }


  @media print {

    /* html,
    body {
      height: 297mm;
      width: 210mm;
    } */

    .calculator__headr {
      margin-top: 200px;
    }

    .content {
      margin-top: -100px;
    }

    .shtorka {
      height: 1800px !important;
    }
    .form_wrapper{
      display: none;
    }
  }

  @media print {
    .shtorka__left_button,.shtorka_div_button,
    .shtorka__rght__btn,
    .wrapper,
    footer,
    .b24-widget-button-wrapper,
    .nav-,
    footer,
    .shtorka__header,
    .left,
    .glavnoe_content,
    [data-lang="1"],
    .do-footer,
    .calculator__content_button,
    [data-b24-crm-button-cont] {
      display: none !important;
    }

    .print_screan {
      display: block;
    }

    .calculator__otvet input {
      border-color: var(--content);
    }

    .shtorka__left {
      margin-top: -30px;
    }

    .shtorka__rght img,
    .shtorka__left img {
      /* width: 620px; */
    }

    .shtoka__info__left {
      margin: 70px 0 0;
      background-color: black !important;
    }

    [data-raschet-btn-ru] {
      display: none;
    }

    .shtoka__info__right,
    .shtoka__info__right input {
      background-color: red !important;
      color: black !important;
    }

    .shtoka__info__left {
      justify-content: space-between;
    }

    .shtoka__info__right_title.c1 {
      background: black;
      display: block !important;
    }
    .shtorka__content{
      top: 0 !important;
      bottom: 0 !important;
      margin: 0 !important;
      /* padding-top: 50px !important; */
      height: 1500px!important;
    }
    .shtorka__header{
      display: none !important;
    }
    .shtorka__left__img{
      border:solid 2px #000;
      margin-left: 70px !important;
    }
    .shtorka__right__img{
      margin-top: 120px !important;
      margin-left: 70px !important;
      
    }
  }
</style>

</html>