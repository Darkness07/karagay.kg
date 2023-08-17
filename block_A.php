<?php
//   $dbh = new PDO('mysql:host=176.126.165.65; port=3306; dbname=user105050_planirovka_a;', 'user105050_root', 'nJ9xZ9rK2u');
//   $array = [];
//   $array_1 = [];
//   $curs = [];

//   foreach($dbh->query('SELECT * from planirovka_a') as $row) {
//     if ($query = $dbh->query("SELECT * FROM `planirovka_a`")){
//         $array = $query->fetchAll(PDO::FETCH_ASSOC);
//     } else{
//         print_r ($db->errorInfo);
//     };
// }
//   foreach($dbh->query('SELECT * from dollar_som') as $row) {
//       if ($query = $dbh->query("SELECT * FROM `dollar_som`")){
//           $curs = $query->fetchAll(PDO::FETCH_ASSOC);
//       } else{
//           print_r ($db->errorInfo);
//       };
//   }
// foreach($dbh->query('SELECT * from этажи_B/C') as $row) {
//     if ($query = $dbh->query("SELECT * FROM `этажи_A`")){
//         $array_1 = $query->fetchAll(PDO::FETCH_ASSOC);
//     } else{
//         print_r ($db->errorInfo);
//     };
// }



$dbh = new PDO('mysql:host=localhost; dbname=lol;', 'root', '');
$array = [];
$array_1 = [];
$curs = [];

foreach ($dbh->query('SELECT * from lol') as $row) {
  if ($query = $dbh->query("SELECT * FROM `lol`")) {
    $array = $query->fetchAll(PDO::FETCH_ASSOC);
  } else {
    print_r($db->errorInfo);
  }
  ;
}
foreach ($dbh->query('SELECT * from lol') as $row) {
  if ($query = $dbh->query("SELECT * FROM `etaj`")) {
    $array_1 = $query->fetchAll(PDO::FETCH_ASSOC);
  } else {
    print_r($db->errorInfo);
  }
  ;
}
//   foreach($dbh->query('SELECT * from dollar_som') as $row) {
//       if ($query = $dbh->query("SELECT * FROM `dollar_som`")){
//           $curs = $query->fetchAll(PDO::FETCH_ASSOC);
//       } else{
//           print_r ($db->errorInfo);
//       };
//   }
// foreach($dbh->query('SELECT * from этажи_B/C') as $row) {
//     if ($query = $dbh->query("SELECT * FROM `этажи_A`")){
//         $array_1 = $query->fetchAll(PDO::FETCH_ASSOC);
//     } else{
//         print_r ($db->errorInfo);
//     };
// }
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
  <link rel="stylesheet" href="./new/block_A.css">
  <link rel="stylesheet" href="./new/block_A_media.css">
  <link rel="icon" href="./images/logo-title.png" type="image/png">
  <title>Блок А</title>

  <script>
    window.addEventListener('click', function (event) {
      if (event.target.hasAttribute('data-win_print')) {
        window.print();
      }
    });

  </script>
  <script src="html2pdf.bundle.min.js"></script>


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

  <style>
    @media (max-width:420px) {
      .follow-cursor_1 {
        display: none !important;
      }
    }
  </style>
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
          <div class="shtorka__header">3Д планировка квартир</div>
          <div class="shtorka__left__img"><a href="#image_focus"><img src="" alt=""></a></div>
          <div class="shtoka__info">
            <p class="shtoka__info__right_title c1">О КВАРТИРЕ</p>
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
          <div class="shtorka__rght__btn">
            <button data-win_print class="deff__btn">печать</button>
            <a href="https://drive.google.com/u/0/uc?id=1rAIgEHH6z9fVJ12XRchwUeWwSnpbACDb&export=download" >
              <button class="PDF_BTN deff__btn">скачать PDF</button> </a>
              <button class="bronirovat deff__btn ">Забронировать</button>
          </div>
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
        <p>Блок <span>"A"</span></p>
      </div>
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
              <img src="./images/block/А.png" alt="" class="content__left__block_3d_img">
              <svg class="content__left__block_3d__svg" width="700" height="700" viewBox="0 0 702 702" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-etaj="8" class="filter__btn content__left__block_3d_path_9" opacity="0.01"
                  d="M298.5 220.5L535 254L534 180L423 156L414 160V135L387 129L343.5 148.5L332 146V137L285 127L274 133L259 128L176.5 175.5L174.5 252.5L257 221.5L273 224L283.5 220L298.5 220.5Z"
                  fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="1.5" />
                <path data-etaj="7" class="filter__btn content__left__block_3d_path_8" opacity="0.01"
                  d="M535 254L298.5 220.5L283.5 220L273 224L257 221.5L174.5 252.5L173.5 289L257 265L272.5 266.5L283.5 264L298.5 265L535.5 290L535 254Z"
                  fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="1.5" />
                <path data-etaj="6" class="filter__btn content__left__block_3d_path_7" opacity="0.01"
                  d="M298.5 265L535.5 290L536.5 326L297.5 308.5L282.5 307L272 309L256.5 307.5L173.5 323V289L257 265L272.5 266.5L283.5 264C284.7 264 294 264.667 298.5 265Z"
                  fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="1.5" />
                <path data-etaj="5" class="filter__btn content__left__block_3d_path_6" opacity="0.01"
                  d="M297.5 308.5L536.5 326L537.5 362.5L282 353.5L271.5 354L255.5 353.5L172.5 362.5L173.5 323L256.5 307.5L272 309L282.5 307L297.5 308.5Z"
                  fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="1.5" />
                <path data-etaj="4" class="filter__btn content__left__block_3d_path_5" opacity="0.01"
                  d="M282 353.5L537.5 362.5V393.5L282 391.5H271H255.5L172 393L172.5 362.5L255.5 353.5L271.5 354L282 353.5Z"
                  fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="1.5" />
                <path data-etaj="3" class="filter__btn content__left__block_3d_path_4" opacity="0.01"
                  d="M285.156 392L541 394V398H537.996V431L281.651 438H270.637H255.116L169 431.5V430.838H171.003L172.004 398H170.383L170.502 393.5H172.004L255.616 392H271.137H285.156Z"
                  fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="1.5" />
                <path data-etaj="2" class="filter__btn content__left__block_3d_path_3" opacity="0.01"
                  d="M281.5 437.943L541 431V435.463H538L538.5 474.642L281.5 492L271 490.016L254 491.008L169.5 478.61L170.5 435.959H169V431.496H169.5L255 437.943H270.5H281.5Z"
                  fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="1.5" />
                <path data-etaj="1" class="filter__btn content__left__block_3d_path_2" opacity="0.01"
                  d="M281.5 492.368L538.5 475L539 513.211L280.5 541L270 539.511L253.5 540.008L169 519.165L169.5 478.97L254 491.376L271 490.383L281.5 492.368Z"
                  fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="1.5" />
                <path data-etaj="0" class="filter__btn content__left__block_3d_path_1 content_path_active"
                  opacity="0.01"
                  d="M280.5 541L539 513L540 556.5L280.5 596L269.5 591L253 595L168 559L169 519L253.5 540L270 539.5L280.5 541Z"
                  fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="1.5" />
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
              <img src="./images/Planirovca_1/Planirovca_color_A_NEW.png" alt="">

              <svg class="planirovca_item_svg et_1" width="720" viewBox="0 0 1026 726" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="0" class="planirovca_item_path" d="M41.2059 387.287V367H161.451H166.392H259.046H308.874V392.876H320V361C354 363.5 350 394 350 394H354.583V463.674H408.117V510.872V515.426H418V673.168H317.727H305.785V680H221.367V673.168H209.219H176.481H98.6516V634.458H107.093V617.069H89.592V625.763H41V476.301V472.161V436.762L41.2059 387.287Z"fill="#D9D9D9" />
                <path data-room="1" class="planirovca_item_path" d="M107.345 93.427H99.4871V55.1943H210.326V102.471H238.035V90.5492H222.319V48H307.93V93.6325L304.001 93.8381V110.488H305.862V169.07H308.136V239.985H304.207V267.324H320.75V254.785H371V318.506H350.5V326.728C350.5 326.728 348.5 357 319.923 357V326.728V316.451H310.618V359H239.896H161.937H42L42 295.013L42 102.471H90.1816V110.282H107.345V93.427Z"fill="#D9D9D9" />
                <path data-room="2" class="planirovca_item_path" d="M316.18 54.8142L316.18 92.5H320.5V109.639H318.649V169.829H316.5L316.5 247.056H378V318.5H391.064V328V357C422.5 354.5 421.5 328 421.5 328H423.364V319.74H518.001V267.5H513.474V236.525H518.001V169.416H515.532V110.36H513.001V92.5H518.001V48H433.239V54.8142H316.18Z"fill="#D9D9D9" />
                <path data-room="3" class="planirovca_item_path" d="M728 54.5855V93.4798H723.658V110.651H725.519V169.82H727.793V247.195V250.919H725.519V247.195H665.56V320.018L637.028 319.398L637 327.5L635.79 327.455L636.291 357.963C619.891 358.821 604.154 344.732 604.154 327.455V320.018H526V268.711H530.549V252.16V250.933H526V236.644V169.406H528.481V110.237H530.135V93.8936H526V47.7583H611.183V54.4386L623.175 54.3786L653.568 54.4386V43H702.776V54.4386H728V54.5855Z"fill="#D9D9D9" />
                <path data-room="4" class="planirovca_item_path" d="M735.768 54V93.1554H740.282V110.054H737.82V168.581H735.768V250.189H737.82H740.282V254.105V267.5H722.634V255.135H674V318.608H692.674V326.645C692.674 343.935 708.35 358.034 724.686 357.175V326.645V315.723H733.51V359H782.965H797.945H875.719H881.26H1000.49V222.574H1005V148.179H999.254V145.912H953.698V230.818H950.415V250.189H952.056V267.5H935.229V265.645H876.745V252.044H935.229V250.189H937.281V211.034H942.001V109.642H935.024V93.1554H942.001V54H914.298H865.254H832.626H828.727H810.053H761.213H735.768Z"fill="#D9D9D9" />
                <path data-room="5" class="planirovca_item_path" d="M725.205 368H783.258H787.787H865.808H880.836H1001.26V501.681H1006V579.783H1000.65V583.915H954.328V497.5H951V477H953V460.5H935.595V462.5H876.5V476H935.595V477H937V516.5H942.594V617.8H935.595V635.156H942.594V674H914.803H833.488H828.753H736.115V635.156H740.439V617.8H738.586V558.914H735.704V518.624H737.557V474H740.439V471.309V459.945H733.645V400.646L724.999 400.646C695.5 399.5 693.001 368 694.5 368C700 368 724.999 368 724.999 368H725.205Z"fill="#D9D9D9" />
                <path data-room="6" class="planirovca_item_path" d="M727 673.5L623.037 674.153H611.26V682H522V634.5H529.5V626.5V617H528.405V559.13H526.132V487.885L525.926 477H530.265V473.223V460.42H525.926V409H603.5V400C603.5 400 608 370.5 635 370.5C634.5 378 636 409 636 409H725.314V460.42H723.248V473.017H727.587V487.885V559.336H725.314L724.5 617.5H722.5V634.5H727V673.5Z"fill="#D9D9D9" />
              </svg>
              <svg class="planirovca_item_svg et_2 anime" width="720" viewBox="0 0 1026 726" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="7" class="planirovca_item_path" d="M41.2059 387.287V367H161.451H166.392H259.046H308.874V392.876H320V361C354 363.5 350 394 350 394H354.583V463.674H408.117V510.872V515.426H418V673.168H317.727H305.785V680H221.367V673.168H209.219H176.481H98.6516V634.458H107.093V617.069H89.592V625.763H41V476.301V472.161V436.762L41.2059 387.287Z"fill="#D9D9D9" />
                <path data-room="8" class="planirovca_item_path" d="M107.345 93.427H99.4871V55.1943H210.326V102.471H238.035V90.5492H222.319V48H307.93V93.6325L304.001 93.8381V110.488H305.862V169.07H308.136V239.985H304.207V267.324H320.75V254.785H371V318.506H350.5V326.728C350.5 326.728 348.5 357 319.923 357V326.728V316.451H310.618V359H239.896H161.937H42L42 295.013L42 102.471H90.1816V110.282H107.345V93.427Z"fill="#D9D9D9" />
                <path data-room="9" class="planirovca_item_path" d="M316.18 54.8142L316.18 92.5H320.5V109.639H318.649V169.829H316.5L316.5 247.056H378V318.5H391.064V328V357C422.5 354.5 421.5 328 421.5 328H423.364V319.74H518.001V267.5H513.474V236.525H518.001V169.416H515.532V110.36H513.001V92.5H518.001V48H433.239V54.8142H316.18Z"fill="#D9D9D9" />
                <path data-room="10" class="planirovca_item_path" d="M728 54.5855V93.4798H723.658V110.651H725.519V169.82H727.793V247.195V250.919H725.519V247.195H665.56V320.018L637.028 319.398L637 327.5L635.79 327.455L636.291 357.963C619.891 358.821 604.154 344.732 604.154 327.455V320.018H526V268.711H530.549V252.16V250.933H526V236.644V169.406H528.481V110.237H530.135V93.8936H526V47.7583H611.183V54.4386L623.175 54.3786L653.568 54.4386V43H702.776V54.4386H728V54.5855Z"fill="#D9D9D9" />
                <path data-room="11" class="planirovca_item_path" d="M735.768 54V93.1554H740.282V110.054H737.82V168.581H735.768V250.189H737.82H740.282V254.105V267.5H722.634V255.135H674V318.608H692.674V326.645C692.674 343.935 708.35 358.034 724.686 357.175V326.645V315.723H733.51V359H782.965H797.945H875.719H881.26H1000.49V222.574H1005V148.179H999.254V145.912H953.698V230.818H950.415V250.189H952.056V267.5H935.229V265.645H876.745V252.044H935.229V250.189H937.281V211.034H942.001V109.642H935.024V93.1554H942.001V54H914.298H865.254H832.626H828.727H810.053H761.213H735.768Z"fill="#D9D9D9" />
                <path data-room="12" class="planirovca_item_path" d="M725.205 368H783.258H787.787H865.808H880.836H1001.26V501.681H1006V579.783H1000.65V583.915H954.328V497.5H951V477H953V460.5H935.595V462.5H876.5V476H935.595V477H937V516.5H942.594V617.8H935.595V635.156H942.594V674H914.803H833.488H828.753H736.115V635.156H740.439V617.8H738.586V558.914H735.704V518.624H737.557V474H740.439V471.309V459.945H733.645V400.646L724.999 400.646C695.5 399.5 693.001 368 694.5 368C700 368 724.999 368 724.999 368H725.205Z"fill="#D9D9D9" />
                <path data-room="13" class="planirovca_item_path" d="M727 673.5L623.037 674.153H611.26V682H522V634.5H529.5V626.5V617H528.405V559.13H526.132V487.885L525.926 477H530.265V473.223V460.42H525.926V409H603.5V400C603.5 400 608 370.5 635 370.5C634.5 378 636 409 636 409H725.314V460.42H723.248V473.017H727.587V487.885V559.336H725.314L724.5 617.5H722.5V634.5H727V673.5Z"fill="#D9D9D9" />
              </svg>
              <svg class="planirovca_item_svg anime et_3" width="720" viewBox="0 0 1026 726" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="14" class="planirovca_item_path" d="M41.2059 387.287V367H161.451H166.392H259.046H308.874V392.876H320V361C354 363.5 350 394 350 394H354.583V463.674H408.117V510.872V515.426H418V673.168H317.727H305.785V680H221.367V673.168H209.219H176.481H98.6516V634.458H107.093V617.069H89.592V625.763H41V476.301V472.161V436.762L41.2059 387.287Z"fill="#D9D9D9" />
                <path data-room="15" class="planirovca_item_path" d="M107.345 93.427H99.4871V55.1943H210.326V102.471H238.035V90.5492H222.319V48H307.93V93.6325L304.001 93.8381V110.488H305.862V169.07H308.136V239.985H304.207V267.324H320.75V254.785H371V318.506H350.5V326.728C350.5 326.728 348.5 357 319.923 357V326.728V316.451H310.618V359H239.896H161.937H42L42 295.013L42 102.471H90.1816V110.282H107.345V93.427Z"fill="#D9D9D9" />
                <path data-room="16" class="planirovca_item_path" d="M316.18 54.8142L316.18 92.5H320.5V109.639H318.649V169.829H316.5L316.5 247.056H378V318.5H391.064V328V357C422.5 354.5 421.5 328 421.5 328H423.364V319.74H518.001V267.5H513.474V236.525H518.001V169.416H515.532V110.36H513.001V92.5H518.001V48H433.239V54.8142H316.18Z"fill="#D9D9D9" />
                <path data-room="17" class="planirovca_item_path" d="M728 54.5855V93.4798H723.658V110.651H725.519V169.82H727.793V247.195V250.919H725.519V247.195H665.56V320.018L637.028 319.398L637 327.5L635.79 327.455L636.291 357.963C619.891 358.821 604.154 344.732 604.154 327.455V320.018H526V268.711H530.549V252.16V250.933H526V236.644V169.406H528.481V110.237H530.135V93.8936H526V47.7583H611.183V54.4386L623.175 54.3786L653.568 54.4386V43H702.776V54.4386H728V54.5855Z"fill="#D9D9D9" />
                <path data-room="18" class="planirovca_item_path" d="M735.768 54V93.1554H740.282V110.054H737.82V168.581H735.768V250.189H737.82H740.282V254.105V267.5H722.634V255.135H674V318.608H692.674V326.645C692.674 343.935 708.35 358.034 724.686 357.175V326.645V315.723H733.51V359H782.965H797.945H875.719H881.26H1000.49V222.574H1005V148.179H999.254V145.912H953.698V230.818H950.415V250.189H952.056V267.5H935.229V265.645H876.745V252.044H935.229V250.189H937.281V211.034H942.001V109.642H935.024V93.1554H942.001V54H914.298H865.254H832.626H828.727H810.053H761.213H735.768Z"fill="#D9D9D9" />
                <path data-room="19" class="planirovca_item_path" d="M725.205 368H783.258H787.787H865.808H880.836H1001.26V501.681H1006V579.783H1000.65V583.915H954.328V497.5H951V477H953V460.5H935.595V462.5H876.5V476H935.595V477H937V516.5H942.594V617.8H935.595V635.156H942.594V674H914.803H833.488H828.753H736.115V635.156H740.439V617.8H738.586V558.914H735.704V518.624H737.557V474H740.439V471.309V459.945H733.645V400.646L724.999 400.646C695.5 399.5 693.001 368 694.5 368C700 368 724.999 368 724.999 368H725.205Z"fill="#D9D9D9" />
                <path data-room="20" class="planirovca_item_path" d="M727 673.5L623.037 674.153H611.26V682H522V634.5H529.5V626.5V617H528.405V559.13H526.132V487.885L525.926 477H530.265V473.223V460.42H525.926V409H603.5V400C603.5 400 608 370.5 635 370.5C634.5 378 636 409 636 409H725.314V460.42H723.248V473.017H727.587V487.885V559.336H725.314L724.5 617.5H722.5V634.5H727V673.5Z"fill="#D9D9D9" />
              </svg>
              <svg class="planirovca_item_svg anime et_4" width="720" viewBox="0 0 1026 726" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="21" class="planirovca_item_path" d="M41.2059 387.287V367H161.451H166.392H259.046H308.874V392.876H320V361C354 363.5 350 394 350 394H354.583V463.674H408.117V510.872V515.426H418V673.168H317.727H305.785V680H221.367V673.168H209.219H176.481H98.6516V634.458H107.093V617.069H89.592V625.763H41V476.301V472.161V436.762L41.2059 387.287Z"fill="#D9D9D9" />
                <path data-room="22" class="planirovca_item_path" d="M107.345 93.427H99.4871V55.1943H210.326V102.471H238.035V90.5492H222.319V48H307.93V93.6325L304.001 93.8381V110.488H305.862V169.07H308.136V239.985H304.207V267.324H320.75V254.785H371V318.506H350.5V326.728C350.5 326.728 348.5 357 319.923 357V326.728V316.451H310.618V359H239.896H161.937H42L42 295.013L42 102.471H90.1816V110.282H107.345V93.427Z"fill="#D9D9D9" />
                <path data-room="23" class="planirovca_item_path" d="M316.18 54.8142L316.18 92.5H320.5V109.639H318.649V169.829H316.5L316.5 247.056H378V318.5H391.064V328V357C422.5 354.5 421.5 328 421.5 328H423.364V319.74H518.001V267.5H513.474V236.525H518.001V169.416H515.532V110.36H513.001V92.5H518.001V48H433.239V54.8142H316.18Z"fill="#D9D9D9" />
                <path data-room="24" class="planirovca_item_path" d="M728 54.5855V93.4798H723.658V110.651H725.519V169.82H727.793V247.195V250.919H725.519V247.195H665.56V320.018L637.028 319.398L637 327.5L635.79 327.455L636.291 357.963C619.891 358.821 604.154 344.732 604.154 327.455V320.018H526V268.711H530.549V252.16V250.933H526V236.644V169.406H528.481V110.237H530.135V93.8936H526V47.7583H611.183V54.4386L623.175 54.3786L653.568 54.4386V43H702.776V54.4386H728V54.5855Z"fill="#D9D9D9" />
                <path data-room="25" class="planirovca_item_path" d="M735.768 54V93.1554H740.282V110.054H737.82V168.581H735.768V250.189H737.82H740.282V254.105V267.5H722.634V255.135H674V318.608H692.674V326.645C692.674 343.935 708.35 358.034 724.686 357.175V326.645V315.723H733.51V359H782.965H797.945H875.719H881.26H1000.49V222.574H1005V148.179H999.254V145.912H953.698V230.818H950.415V250.189H952.056V267.5H935.229V265.645H876.745V252.044H935.229V250.189H937.281V211.034H942.001V109.642H935.024V93.1554H942.001V54H914.298H865.254H832.626H828.727H810.053H761.213H735.768Z"fill="#D9D9D9" />
                <path data-room="26" class="planirovca_item_path" d="M725.205 368H783.258H787.787H865.808H880.836H1001.26V501.681H1006V579.783H1000.65V583.915H954.328V497.5H951V477H953V460.5H935.595V462.5H876.5V476H935.595V477H937V516.5H942.594V617.8H935.595V635.156H942.594V674H914.803H833.488H828.753H736.115V635.156H740.439V617.8H738.586V558.914H735.704V518.624H737.557V474H740.439V471.309V459.945H733.645V400.646L724.999 400.646C695.5 399.5 693.001 368 694.5 368C700 368 724.999 368 724.999 368H725.205Z"fill="#D9D9D9" />
                <path data-room="27" class="planirovca_item_path" d="M727 673.5L623.037 674.153H611.26V682H522V634.5H529.5V626.5V617H528.405V559.13H526.132V487.885L525.926 477H530.265V473.223V460.42H525.926V409H603.5V400C603.5 400 608 370.5 635 370.5C634.5 378 636 409 636 409H725.314V460.42H723.248V473.017H727.587V487.885V559.336H725.314L724.5 617.5H722.5V634.5H727V673.5Z"fill="#D9D9D9" />
              </svg>
              <svg class="planirovca_item_svg anime et_5" width="720" viewBox="0 0 1026 726" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="28" class="planirovca_item_path" d="M41.2059 387.287V367H161.451H166.392H259.046H308.874V392.876H320V361C354 363.5 350 394 350 394H354.583V463.674H408.117V510.872V515.426H418V673.168H317.727H305.785V680H221.367V673.168H209.219H176.481H98.6516V634.458H107.093V617.069H89.592V625.763H41V476.301V472.161V436.762L41.2059 387.287Z"fill="#D9D9D9" />
                <path data-room="29" class="planirovca_item_path" d="M107.345 93.427H99.4871V55.1943H210.326V102.471H238.035V90.5492H222.319V48H307.93V93.6325L304.001 93.8381V110.488H305.862V169.07H308.136V239.985H304.207V267.324H320.75V254.785H371V318.506H350.5V326.728C350.5 326.728 348.5 357 319.923 357V326.728V316.451H310.618V359H239.896H161.937H42L42 295.013L42 102.471H90.1816V110.282H107.345V93.427Z"fill="#D9D9D9" />
                <path data-room="30" class="planirovca_item_path" d="M316.18 54.8142L316.18 92.5H320.5V109.639H318.649V169.829H316.5L316.5 247.056H378V318.5H391.064V328V357C422.5 354.5 421.5 328 421.5 328H423.364V319.74H518.001V267.5H513.474V236.525H518.001V169.416H515.532V110.36H513.001V92.5H518.001V48H433.239V54.8142H316.18Z"fill="#D9D9D9" />
                <path data-room="31" class="planirovca_item_path" d="M728 54.5855V93.4798H723.658V110.651H725.519V169.82H727.793V247.195V250.919H725.519V247.195H665.56V320.018L637.028 319.398L637 327.5L635.79 327.455L636.291 357.963C619.891 358.821 604.154 344.732 604.154 327.455V320.018H526V268.711H530.549V252.16V250.933H526V236.644V169.406H528.481V110.237H530.135V93.8936H526V47.7583H611.183V54.4386L623.175 54.3786L653.568 54.4386V43H702.776V54.4386H728V54.5855Z"fill="#D9D9D9" />
                <path data-room="32" class="planirovca_item_path" d="M735.768 54V93.1554H740.282V110.054H737.82V168.581H735.768V250.189H737.82H740.282V254.105V267.5H722.634V255.135H674V318.608H692.674V326.645C692.674 343.935 708.35 358.034 724.686 357.175V326.645V315.723H733.51V359H782.965H797.945H875.719H881.26H1000.49V222.574H1005V148.179H999.254V145.912H953.698V230.818H950.415V250.189H952.056V267.5H935.229V265.645H876.745V252.044H935.229V250.189H937.281V211.034H942.001V109.642H935.024V93.1554H942.001V54H914.298H865.254H832.626H828.727H810.053H761.213H735.768Z"fill="#D9D9D9" />
                <path data-room="33" class="planirovca_item_path" d="M725.205 368H783.258H787.787H865.808H880.836H1001.26V501.681H1006V579.783H1000.65V583.915H954.328V497.5H951V477H953V460.5H935.595V462.5H876.5V476H935.595V477H937V516.5H942.594V617.8H935.595V635.156H942.594V674H914.803H833.488H828.753H736.115V635.156H740.439V617.8H738.586V558.914H735.704V518.624H737.557V474H740.439V471.309V459.945H733.645V400.646L724.999 400.646C695.5 399.5 693.001 368 694.5 368C700 368 724.999 368 724.999 368H725.205Z"fill="#D9D9D9" />
                <path data-room="34" class="planirovca_item_path" d="M727 673.5L623.037 674.153H611.26V682H522V634.5H529.5V626.5V617H528.405V559.13H526.132V487.885L525.926 477H530.265V473.223V460.42H525.926V409H603.5V400C603.5 400 608 370.5 635 370.5C634.5 378 636 409 636 409H725.314V460.42H723.248V473.017H727.587V487.885V559.336H725.314L724.5 617.5H722.5V634.5H727V673.5Z"fill="#D9D9D9" />
              </svg>
              <svg class="planirovca_item_svg anime et_6" width="720" viewBox="0 0 1026 726" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="35" class="planirovca_item_path" d="M41.2059 387.287V367H161.451H166.392H259.046H308.874V392.876H320V361C354 363.5 350 394 350 394H354.583V463.674H408.117V510.872V515.426H418V673.168H317.727H305.785V680H221.367V673.168H209.219H176.481H98.6516V634.458H107.093V617.069H89.592V625.763H41V476.301V472.161V436.762L41.2059 387.287Z"fill="#D9D9D9" />
                <path data-room="36" class="planirovca_item_path" d="M107.345 93.427H99.4871V55.1943H210.326V102.471H238.035V90.5492H222.319V48H307.93V93.6325L304.001 93.8381V110.488H305.862V169.07H308.136V239.985H304.207V267.324H320.75V254.785H371V318.506H350.5V326.728C350.5 326.728 348.5 357 319.923 357V326.728V316.451H310.618V359H239.896H161.937H42L42 295.013L42 102.471H90.1816V110.282H107.345V93.427Z"fill="#D9D9D9" />
                <path data-room="37" class="planirovca_item_path" d="M316.18 54.8142L316.18 92.5H320.5V109.639H318.649V169.829H316.5L316.5 247.056H378V318.5H391.064V328V357C422.5 354.5 421.5 328 421.5 328H423.364V319.74H518.001V267.5H513.474V236.525H518.001V169.416H515.532V110.36H513.001V92.5H518.001V48H433.239V54.8142H316.18Z"fill="#D9D9D9" />
                <path data-room="38" class="planirovca_item_path" d="M728 54.5855V93.4798H723.658V110.651H725.519V169.82H727.793V247.195V250.919H725.519V247.195H665.56V320.018L637.028 319.398L637 327.5L635.79 327.455L636.291 357.963C619.891 358.821 604.154 344.732 604.154 327.455V320.018H526V268.711H530.549V252.16V250.933H526V236.644V169.406H528.481V110.237H530.135V93.8936H526V47.7583H611.183V54.4386L623.175 54.3786L653.568 54.4386V43H702.776V54.4386H728V54.5855Z"fill="#D9D9D9" />
                <path data-room="39" class="planirovca_item_path" d="M735.768 54V93.1554H740.282V110.054H737.82V168.581H735.768V250.189H737.82H740.282V254.105V267.5H722.634V255.135H674V318.608H692.674V326.645C692.674 343.935 708.35 358.034 724.686 357.175V326.645V315.723H733.51V359H782.965H797.945H875.719H881.26H1000.49V222.574H1005V148.179H999.254V145.912H953.698V230.818H950.415V250.189H952.056V267.5H935.229V265.645H876.745V252.044H935.229V250.189H937.281V211.034H942.001V109.642H935.024V93.1554H942.001V54H914.298H865.254H832.626H828.727H810.053H761.213H735.768Z"fill="#D9D9D9" />
                <path data-room="40" class="planirovca_item_path" d="M725.205 368H783.258H787.787H865.808H880.836H1001.26V501.681H1006V579.783H1000.65V583.915H954.328V497.5H951V477H953V460.5H935.595V462.5H876.5V476H935.595V477H937V516.5H942.594V617.8H935.595V635.156H942.594V674H914.803H833.488H828.753H736.115V635.156H740.439V617.8H738.586V558.914H735.704V518.624H737.557V474H740.439V471.309V459.945H733.645V400.646L724.999 400.646C695.5 399.5 693.001 368 694.5 368C700 368 724.999 368 724.999 368H725.205Z"fill="#D9D9D9" />
                <path data-room="41" class="planirovca_item_path" d="M727 673.5L623.037 674.153H611.26V682H522V634.5H529.5V626.5V617H528.405V559.13H526.132V487.885L525.926 477H530.265V473.223V460.42H525.926V409H603.5V400C603.5 400 608 370.5 635 370.5C634.5 378 636 409 636 409H725.314V460.42H723.248V473.017H727.587V487.885V559.336H725.314L724.5 617.5H722.5V634.5H727V673.5Z"fill="#D9D9D9" />
              </svg>
              <svg class="planirovca_item_svg anime et_7" width="720" viewBox="0 0 1026 726" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="42" class="planirovca_item_path" d="M41.2059 387.287V367H161.451H166.392H259.046H308.874V392.876H320V361C354 363.5 350 394 350 394H354.583V463.674H408.117V510.872V515.426H418V673.168H317.727H305.785V680H221.367V673.168H209.219H176.481H98.6516V634.458H107.093V617.069H89.592V625.763H41V476.301V472.161V436.762L41.2059 387.287Z"fill="#D9D9D9" />
                <path data-room="43" class="planirovca_item_path" d="M107.345 93.427H99.4871V55.1943H210.326V102.471H238.035V90.5492H222.319V48H307.93V93.6325L304.001 93.8381V110.488H305.862V169.07H308.136V239.985H304.207V267.324H320.75V254.785H371V318.506H350.5V326.728C350.5 326.728 348.5 357 319.923 357V326.728V316.451H310.618V359H239.896H161.937H42L42 295.013L42 102.471H90.1816V110.282H107.345V93.427Z"fill="#D9D9D9" />
                <path data-room="44" class="planirovca_item_path" d="M316.18 54.8142L316.18 92.5H320.5V109.639H318.649V169.829H316.5L316.5 247.056H378V318.5H391.064V328V357C422.5 354.5 421.5 328 421.5 328H423.364V319.74H518.001V267.5H513.474V236.525H518.001V169.416H515.532V110.36H513.001V92.5H518.001V48H433.239V54.8142H316.18Z"fill="#D9D9D9" />
                <path data-room="45" class="planirovca_item_path" d="M728 54.5855V93.4798H723.658V110.651H725.519V169.82H727.793V247.195V250.919H725.519V247.195H665.56V320.018L637.028 319.398L637 327.5L635.79 327.455L636.291 357.963C619.891 358.821 604.154 344.732 604.154 327.455V320.018H526V268.711H530.549V252.16V250.933H526V236.644V169.406H528.481V110.237H530.135V93.8936H526V47.7583H611.183V54.4386L623.175 54.3786L653.568 54.4386V43H702.776V54.4386H728V54.5855Z"fill="#D9D9D9" />
                <path data-room="46" class="planirovca_item_path" d="M735.768 54V93.1554H740.282V110.054H737.82V168.581H735.768V250.189H737.82H740.282V254.105V267.5H722.634V255.135H674V318.608H692.674V326.645C692.674 343.935 708.35 358.034 724.686 357.175V326.645V315.723H733.51V359H782.965H797.945H875.719H881.26H1000.49V222.574H1005V148.179H999.254V145.912H953.698V230.818H950.415V250.189H952.056V267.5H935.229V265.645H876.745V252.044H935.229V250.189H937.281V211.034H942.001V109.642H935.024V93.1554H942.001V54H914.298H865.254H832.626H828.727H810.053H761.213H735.768Z"fill="#D9D9D9" />
                <path data-room="47" class="planirovca_item_path" d="M725.205 368H783.258H787.787H865.808H880.836H1001.26V501.681H1006V579.783H1000.65V583.915H954.328V497.5H951V477H953V460.5H935.595V462.5H876.5V476H935.595V477H937V516.5H942.594V617.8H935.595V635.156H942.594V674H914.803H833.488H828.753H736.115V635.156H740.439V617.8H738.586V558.914H735.704V518.624H737.557V474H740.439V471.309V459.945H733.645V400.646L724.999 400.646C695.5 399.5 693.001 368 694.5 368C700 368 724.999 368 724.999 368H725.205Z"fill="#D9D9D9" />
                <path data-room="48" class="planirovca_item_path" d="M727 673.5L623.037 674.153H611.26V682H522V634.5H529.5V626.5V617H528.405V559.13H526.132V487.885L525.926 477H530.265V473.223V460.42H525.926V409H603.5V400C603.5 400 608 370.5 635 370.5C634.5 378 636 409 636 409H725.314V460.42H723.248V473.017H727.587V487.885V559.336H725.314L724.5 617.5H722.5V634.5H727V673.5Z"fill="#D9D9D9" />
              </svg>
              <svg class="planirovca_item_svg anime et_8" width="720" viewBox="0 0 1026 726" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="49" class="planirovca_item_path" d="M41.2059 387.287V367H161.451H166.392H259.046H308.874V392.876H320V361C354 363.5 350 394 350 394H354.583V463.674H408.117V510.872V515.426H418V673.168H317.727H305.785V680H221.367V673.168H209.219H176.481H98.6516V634.458H107.093V617.069H89.592V625.763H41V476.301V472.161V436.762L41.2059 387.287Z"fill="#D9D9D9" />
                <path data-room="50" class="planirovca_item_path" d="M107.345 93.427H99.4871V55.1943H210.326V102.471H238.035V90.5492H222.319V48H307.93V93.6325L304.001 93.8381V110.488H305.862V169.07H308.136V239.985H304.207V267.324H320.75V254.785H371V318.506H350.5V326.728C350.5 326.728 348.5 357 319.923 357V326.728V316.451H310.618V359H239.896H161.937H42L42 295.013L42 102.471H90.1816V110.282H107.345V93.427Z"fill="#D9D9D9" />
                <path data-room="51" class="planirovca_item_path" d="M316.18 54.8142L316.18 92.5H320.5V109.639H318.649V169.829H316.5L316.5 247.056H378V318.5H391.064V328V357C422.5 354.5 421.5 328 421.5 328H423.364V319.74H518.001V267.5H513.474V236.525H518.001V169.416H515.532V110.36H513.001V92.5H518.001V48H433.239V54.8142H316.18Z"fill="#D9D9D9" />
                <path data-room="52" class="planirovca_item_path" d="M728 54.5855V93.4798H723.658V110.651H725.519V169.82H727.793V247.195V250.919H725.519V247.195H665.56V320.018L637.028 319.398L637 327.5L635.79 327.455L636.291 357.963C619.891 358.821 604.154 344.732 604.154 327.455V320.018H526V268.711H530.549V252.16V250.933H526V236.644V169.406H528.481V110.237H530.135V93.8936H526V47.7583H611.183V54.4386L623.175 54.3786L653.568 54.4386V43H702.776V54.4386H728V54.5855Z"fill="#D9D9D9" />
                <path data-room="53" class="planirovca_item_path" d="M735.768 54V93.1554H740.282V110.054H737.82V168.581H735.768V250.189H737.82H740.282V254.105V267.5H722.634V255.135H674V318.608H692.674V326.645C692.674 343.935 708.35 358.034 724.686 357.175V326.645V315.723H733.51V359H782.965H797.945H875.719H881.26H1000.49V222.574H1005V148.179H999.254V145.912H953.698V230.818H950.415V250.189H952.056V267.5H935.229V265.645H876.745V252.044H935.229V250.189H937.281V211.034H942.001V109.642H935.024V93.1554H942.001V54H914.298H865.254H832.626H828.727H810.053H761.213H735.768Z"fill="#D9D9D9" />
                <path data-room="54" class="planirovca_item_path" d="M725.205 368H783.258H787.787H865.808H880.836H1001.26V501.681H1006V579.783H1000.65V583.915H954.328V497.5H951V477H953V460.5H935.595V462.5H876.5V476H935.595V477H937V516.5H942.594V617.8H935.595V635.156H942.594V674H914.803H833.488H828.753H736.115V635.156H740.439V617.8H738.586V558.914H735.704V518.624H737.557V474H740.439V471.309V459.945H733.645V400.646L724.999 400.646C695.5 399.5 693.001 368 694.5 368C700 368 724.999 368 724.999 368H725.205Z"fill="#D9D9D9" />
                <path data-room="55" class="planirovca_item_path" d="M727 673.5L623.037 674.153H611.26V682H522V634.5H529.5V626.5V617H528.405V559.13H526.132V487.885L525.926 477H530.265V473.223V460.42H525.926V409H603.5V400C603.5 400 608 370.5 635 370.5C634.5 378 636 409 636 409H725.314V460.42H723.248V473.017H727.587V487.885V559.336H725.314L724.5 617.5H722.5V634.5H727V673.5Z"fill="#D9D9D9" />
              </svg>
              <svg class="planirovca_item_svg anime et_9" width="720" viewBox="0 0 1026 726" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="56" class="planirovca_item_path" d="M41.2059 387.287V367H161.451H166.392H259.046H308.874V392.876H320V361C354 363.5 350 394 350 394H354.583V463.674H408.117V510.872V515.426H418V673.168H317.727H305.785V680H221.367V673.168H209.219H176.481H98.6516V634.458H107.093V617.069H89.592V625.763H41V476.301V472.161V436.762L41.2059 387.287Z"fill="#D9D9D9" />
                <path data-room="57" class="planirovca_item_path" d="M107.345 93.427H99.4871V55.1943H210.326V102.471H238.035V90.5492H222.319V48H307.93V93.6325L304.001 93.8381V110.488H305.862V169.07H308.136V239.985H304.207V267.324H320.75V254.785H371V318.506H350.5V326.728C350.5 326.728 348.5 357 319.923 357V326.728V316.451H310.618V359H239.896H161.937H42L42 295.013L42 102.471H90.1816V110.282H107.345V93.427Z"fill="#D9D9D9" />
                <path data-room="58" class="planirovca_item_path" d="M316.18 54.8142L316.18 92.5H320.5V109.639H318.649V169.829H316.5L316.5 247.056H378V318.5H391.064V328V357C422.5 354.5 421.5 328 421.5 328H423.364V319.74H518.001V267.5H513.474V236.525H518.001V169.416H515.532V110.36H513.001V92.5H518.001V48H433.239V54.8142H316.18Z"fill="#D9D9D9" />
                <path data-room="59" class="planirovca_item_path" d="M728 54.5855V93.4798H723.658V110.651H725.519V169.82H727.793V247.195V250.919H725.519V247.195H665.56V320.018L637.028 319.398L637 327.5L635.79 327.455L636.291 357.963C619.891 358.821 604.154 344.732 604.154 327.455V320.018H526V268.711H530.549V252.16V250.933H526V236.644V169.406H528.481V110.237H530.135V93.8936H526V47.7583H611.183V54.4386L623.175 54.3786L653.568 54.4386V43H702.776V54.4386H728V54.5855Z"fill="#D9D9D9" />
                <path data-room="60" class="planirovca_item_path" d="M735.768 54V93.1554H740.282V110.054H737.82V168.581H735.768V250.189H737.82H740.282V254.105V267.5H722.634V255.135H674V318.608H692.674V326.645C692.674 343.935 708.35 358.034 724.686 357.175V326.645V315.723H733.51V359H782.965H797.945H875.719H881.26H1000.49V222.574H1005V148.179H999.254V145.912H953.698V230.818H950.415V250.189H952.056V267.5H935.229V265.645H876.745V252.044H935.229V250.189H937.281V211.034H942.001V109.642H935.024V93.1554H942.001V54H914.298H865.254H832.626H828.727H810.053H761.213H735.768Z"fill="#D9D9D9" />
                <path data-room="61" class="planirovca_item_path" d="M725.205 368H783.258H787.787H865.808H880.836H1001.26V501.681H1006V579.783H1000.65V583.915H954.328V497.5H951V477H953V460.5H935.595V462.5H876.5V476H935.595V477H937V516.5H942.594V617.8H935.595V635.156H942.594V674H914.803H833.488H828.753H736.115V635.156H740.439V617.8H738.586V558.914H735.704V518.624H737.557V474H740.439V471.309V459.945H733.645V400.646L724.999 400.646C695.5 399.5 693.001 368 694.5 368C700 368 724.999 368 724.999 368H725.205Z"fill="#D9D9D9" />
                <path data-room="62" class="planirovca_item_path" d="M727 673.5L623.037 674.153H611.26V682H522V634.5H529.5V626.5V617H528.405V559.13H526.132V487.885L525.926 477H530.265V473.223V460.42H525.926V409H603.5V400C603.5 400 608 370.5 635 370.5C634.5 378 636 409 636 409H725.314V460.42H723.248V473.017H727.587V487.885V559.336H725.314L724.5 617.5H722.5V634.5H727V673.5Z"fill="#D9D9D9" />
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
  fetch('https://www.cbr-xml-daily.ru/daily_json.js').then(async(result) => {
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
        console.log(b)
        if (a.classList.contains('et_' + b)) {
          a.classList.remove('anime')
        }
      })





      return data_etaj;

    }
    if (event.target.hasAttribute('data-shtorka-x')) {
      $('.shtorka').css('display', 'none')
      document.querySelector('body').classList.remove('body')
    }
    if (event.target.hasAttribute('data-room')) {
      data_1 = event.target.getAttribute('data-room')
      if (CV[data_1].vznos == 100) {
        document.querySelector('.info__right__block_vzno_sum').setAttribute('disabled', 'disabled')
      } else {
        document.querySelector('.info__right__block_vzno_sum').removeAttribute('disabled', 'disabled')
      }
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
      document.querySelector('.shtorka__left__img a').insertAdjacentHTML("beforeend", infoCart);
      document.querySelector('.shtorka__rght__img a').insertAdjacentHTML("beforeend", infoCart1);
      $('.shtorka').css('display', 'block')
      $('.shtoka__info__left__li_etag').html(Number(data_etaj) + 1)
      $('.shtoka__info__left__li_room').html(CV[data_1].room)
      $('.shtoka__info__left__li_scale').html(CV[data_1].square + ' m²')
      $('.shtoka__info__left__li_price').html(Math.floor(CV[data_1].price) + ' $')
      document.querySelector('.info__right__block input').value = Math.floor((CV[data_1].price * kurs_USD) * CV[data_1].square)
      document.querySelector('.info__right__block_vzno_sum').value = Math.floor((CV[data_1].price * kurs_USD) * CV[data_1].square / 100 * (CV[data_1].vznos))

      document.querySelector('#info__right__block_month').value = Math.floor(((CV[data_1].price * kurs_USD) * CV[data_1].square - ((((CV[data_1].price * kurs_USD) * CV[data_1].square / 100 * (CV[data_1].vznos))))) / 23 - month_data)
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
  .print_screan {
    position: absolute;
    top: 0;
    left: 0;
    display: none;
  }

  @media print {

    html,
    body {
      height: 297mm;
      width: 210mm;
    }

    .calculator__headr {
      margin-top: 200px;
    }

    .content {
      margin-top: -100px;
    }

    .shtorka {
      height: 1800px !important;
    }
  }

  @media print {

    .shtorka_div_button,
    .shtorka__rght__btn,
    .wrapper,
    footer,
    .b24-widget-button-wrapper,
    .nav-,
    footer,
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
      width: 620px;
    }

    .shtoka__info__left {
      margin: 70px 0 0;
      background-color: black!important;
    }

    [data-raschet-btn-ru] {
      display: none;
    }
    .shtoka__info__right, .shtoka__info__right input{
      background-color: red!important;
      color: black!important;
    }
    .shtoka__info__left{
      justify-content: space-between;
    }
    .shtoka__info__right_title.c1{
      display: block!important;
    }
  }
</style>

<script>
  // $('.PDF_BTN').click(function(){
  //   var pdf = new jsPDF('a', 'mm', 'a4');
  //   var firstPage;
  //   var secondPage;

  //   // html2canvas($('#first-page'), {
  //   //   onrendered: function(canvas) {
  //   //     firstPage = canvas.toDataURL('image/jpeg', 1.0);
  //   //   }
  //   // });

  //   // html2canvas($('#second-page'), {
  //   //   onrendered: function(canvas) {
  //   //     secondPage = canvas.toDataURL('image/jpeg', 1.0);
  //   //   }
  //   // });


  //   setTimeout(function(){
  //     // pdf.addImage(firstPage, 'JPEG', 5, 5, 200, 0);
  //     // pdf.addPage();
  //     // pdf.addImage(secondPage, 'JPEG', 5, 5, 200, 0);
  //     pdf.save("export.pdf");
  //   }, 150);
  // });
  $('.PDF_BTN').on('click', function () {
    var link = document.createElement('');
    link.setAttribute('href', '/download.pdf');
    link.setAttribute('download', 'download.pdf');
    link.click();
    return false;
  });
</script>

</html>