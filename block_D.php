 <?php
$dbh = new PDO('mysql:host=176.126.165.65; port=3306; dbname=user105050_planirovka_a;', 'user105050_root', 'nJ9xZ9rK2u');
$array = [];
$array_1 = [];
$curs = [];

foreach($dbh->query('SELECT * from planirovka_c') as $row) {
  if ($query = $dbh->query("SELECT * FROM `planirovka_c`")){
      $array = $query->fetchAll(PDO::FETCH_ASSOC);
  } else{
      print_r ($db->errorInfo);
  };
}
foreach($dbh->query('SELECT * from этажи_B/C') as $row) {
    if ($query = $dbh->query("SELECT * FROM `этажи_B/C`")){
        $array_1 = $query->fetchAll(PDO::FETCH_ASSOC);
    } else{
        print_r ($db->errorInfo);
    };
}
foreach($dbh->query('SELECT * from dollar_som') as $row) {
      if ($query = $dbh->query("SELECT * FROM `dollar_som`")){
          $curs = $query->fetchAll(PDO::FETCH_ASSOC);
      } else{
          print_r ($db->errorInfo);
      };
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
    <title>Блок В</title>

    <script>
          window.addEventListener('click', function (event) {
      if(event.target.hasAttribute('data-win_print')){
        window.print();
      }
    });
    
    </script>
</head>

<body>

  <div id="image_focus">
    <div class="none_js">
      <a class="close" href="#ll" id="button_a"><div class="image_focus_bg"></div></a>
      <img src="./images/Planirovca_1/Cvartira_A/cvartira_3d/cvartira_3d-1.png" alt="">
    </div>
  </div>

  <div id="image_focus_1">
    <div class="none_js_1">
      <a class="close" href="#ll" id="button_a"><div class="image_focus_bg"></div></a>
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
        .follow-cursor_1{
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
            <svg width="2578" height="1891" viewBox="0 0 2578 1891" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2351.5 1890H2577V1754.5L2351.5 1725L1 1777.5V1890H2351.5Z" fill="#D9D9D9"/>
              <path d="M2351.5 1725L2577 1754.5V1591.5L2351.5 1522.5L1 1651V1777.5L2351.5 1725Z" fill="#D9D9D9"/>
              <path d="M2351.5 1522.5L2577 1591.5V1408.5L2351.5 1308.5L1 1504.5V1651L2351.5 1522.5Z" fill="#D9D9D9"/>
              <path d="M2351.5 1308.5L2577 1408.5V1225.5L2351.5 1095L1 1376V1504.5L2351.5 1308.5Z" fill="#D9D9D9"/>
              <path d="M1 1376L2351.5 1095L2577 1225.5V1073L2351.5 876.5L1 1231V1376Z" fill="#D9D9D9"/>
              <path d="M2351.5 876.5L2577 1073L2571 865L2351.5 647.5L1 1095V1231L2351.5 876.5Z" fill="#D9D9D9"/>
              <path d="M1 1095L2351.5 647.5L2571 865V718L2351.5 451.5L1 957.5V1095Z" fill="#D9D9D9"/>
              <path d="M2351.5 451.5L2571 718V532L2351.5 231L1 829.5V957.5L2351.5 451.5Z" fill="#D9D9D9"/>
              <path d="M1 829.5L2351.5 231L2571 532V362.5L2351.5 1L1 647.5V829.5Z" fill="#D9D9D9"/>
              <path d="M2577 1754.5V1890H2351.5H1V1777.5M2577 1754.5L2351.5 1725L1 1777.5M2577 1754.5V1591.5M1 1777.5V1651M2577 1591.5L2351.5 1522.5L1 1651M2577 1591.5V1408.5M1 1651V1504.5M2577 1408.5L2351.5 1308.5L1 1504.5M2577 1408.5V1225.5M1 1504.5V1376M1 1376L2351.5 1095L2577 1225.5M1 1376V1231M2577 1225.5V1073M2577 1073L2351.5 876.5L1 1231M2577 1073L2571 865M1 1231V1095M1 1095L2351.5 647.5L2571 865M1 1095V957.5M2571 865V718M2571 718L2351.5 451.5L1 957.5M2571 718V532M1 957.5V829.5M1 829.5L2351.5 231L2571 532M1 829.5V647.5L2351.5 1L2571 362.5V532" stroke="black"/>
            </svg>
            <svg width="2610" height="2155" viewBox="0 0 2610 2155" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2376 2098.5H2601.5V1963L2376 1933.5L25.5 1986V2098.5H2376Z" fill="white" fill-opacity="0.01"/>
              <path d="M2376 1933.5L2601.5 1963V1800L2376 1731L25.5 1859.5V1986L2376 1933.5Z" fill="white" fill-opacity="0.01"/>
              <path d="M2376 1731L2601.5 1800V1617L2376 1517L25.5 1713V1859.5L2376 1731Z" fill="white" fill-opacity="0.01"/>
              <path d="M2376 1517L2601.5 1617V1434L2376 1303.5L25.5 1584.5V1713L2376 1517Z" fill="white" fill-opacity="0.01"/>
              <path d="M25.5 1584.5L2376 1303.5L2601.5 1434V1281.5L2376 1085L25.5 1439.5V1584.5Z" fill="white" fill-opacity="0.01"/>
              <path d="M2376 1085L2601.5 1281.5L2595.5 1073.5L2376 856L25.5 1303.5V1439.5L2376 1085Z" fill="white" fill-opacity="0.01"/>
              <path d="M25.5 1303.5L2376 856L2595.5 1073.5V926.5L2376 660L25.5 1166V1303.5Z" fill="white" fill-opacity="0.01"/>
              <path d="M2376 660L2595.5 926.5V740.5L2376 439.5L25.5 1038V1166L2376 660Z" fill="white" fill-opacity="0.01"/>
              <path d="M25.5 1038L2376 439.5L2595.5 740.5V571L2376 209.5L25.5 856V1038Z" fill="white" fill-opacity="0.01"/>
              <path d="M2376 209.5L2595.5 571L2601.5 439.5L2376 1.5L2232.5 50L2192 1.5L1718 158.5L1685 121.5L1381 227V246L1390 255.5V268L655.5 514.5L612 491L409 559.5V574L418 577.5V592.5L397.5 599.5V610.5L407.5 615.5V635.5L382.5 644L332 621.5L20 725.5V734L30.5 738V757.5L11.5 763.5V772.5L20 777L25.5 856L2376 209.5Z" fill="white" fill-opacity="0.01"/>
              <path d="M2601.5 1963V2098.5H2376H25.5V1986M2601.5 1963L2376 1933.5L25.5 1986M2601.5 1963V1800M25.5 1986V1859.5M2601.5 1800L2376 1731L25.5 1859.5M2601.5 1800V1617M25.5 1859.5V1713M2601.5 1617L2376 1517L25.5 1713M2601.5 1617V1434M25.5 1713V1584.5M25.5 1584.5L2376 1303.5L2601.5 1434M25.5 1584.5V1439.5M2601.5 1434V1281.5M2601.5 1281.5L2376 1085L25.5 1439.5M2601.5 1281.5L2595.5 1073.5M25.5 1439.5V1303.5M25.5 1303.5L2376 856L2595.5 1073.5M25.5 1303.5V1166M2595.5 1073.5V926.5M2595.5 926.5L2376 660L25.5 1166M2595.5 926.5V740.5M25.5 1166V1038M25.5 1038L2376 439.5L2595.5 740.5M25.5 1038V856M2595.5 740.5V571M2595.5 571L2376 209.5L25.5 856M2595.5 571L2601.5 439.5L2376 1.5L2232.5 50L2192 1.5L1718 158.5L1685 121.5L1381 227V246L1390 255.5V268L655.5 514.5L612 491L409 559.5V574L418 577.5V592.5L397.5 599.5V610.5L407.5 615.5V635.5L382.5 644L332 621.5L20 725.5V734L30.5 738V757.5L11.5 763.5V772.5L20 777L25.5 856M2610 2154H0.0664062" stroke="white" stroke-opacity="0.06"/>
            </svg>

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
            <button class="shtorka_div_button deff__btn" data-shtorka-x><i class="fa-solid fa-arrow-left-long"></i> назад</button>
          </div>
          <div class="lang" data-kg data-lang="1">
            <button class="shtorka_div_button deff__btn" data-shtorka-x><i class="fa-solid fa-arrow-left-long"></i> артка</button>
          </div>
            <div class="shtorka__content">
                <div class="shtorka__left">
                    <div class="shtorka__header">3Д планировка квартир</div>
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
                      <a href="https://drive.google.com/file/d/1rAIgEHH6z9fVJ12XRchwUeWwSnpbACDb/view?usp=share_link"> <button class="PDF_BTN deff__btn">скачать PDF</button> </a>
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
        <a href="./about.html"class="roma__nav_a">Биз жөнүндө</a> 
        <a href="./doc.html" class="roma__nav_a">Документтер</a> 
        <a href="./prisentation.html" class="roma__nav_a">Презентация</a> 
        <a href="#main_3"class="roma__nav_a">байланыштар</a>
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
                <p>Блок <span>"В"</span></p>
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
                          <img src="./images/block/В.png" alt="" class="content__left__block_3d_img">
                            <svg class="content__left__block_3d__svg" width="702" height="702" viewBox="0 0 702 702" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path data-etaj="8" class="filter__btn content__left__block_3d_path_9" d="M619 272.5L205.5 211.5L189 217L167 214.5L120.5 236.5L122.5 175L169.5 137L190.5 141.5V138.5L208 126L295.5 143.5L318.5 130.5L347 136.5V162L358 157.5L453 176.5V182.5L471.5 186V182.5L476.5 181.5L486.5 184L513.5 174.5L533 178.5L533.5 201L546.5 197L617 212L619 272.5Z" fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="1.5"/>
                              <path data-etaj="7" class="filter__btn content__left__block_3d_path_8" d="M619 272.5L205.5 211.5L189 217L167 214.5L120.5 236.5L119 278L167 256.5L188 259L204.5 255.5L620 302.5L619 272.5Z" fill="#19BBB9" fill-opacity="0.5"/>
                              <path data-etaj="6" class="filter__btn content__left__block_3d_path_7" d="M204.5 255.5L620 302.5L621 334L203.5 299.5C198.167 300.333 187.4 302 187 302C186.6 302 172.5 300.667 165.5 300L117.5 316L119 278L167 256.5L188 259L204.5 255.5Z" fill="#19BBB9" fill-opacity="0.5"/>
                              <path data-etaj="5" class="filter__btn content__left__block_3d_path_6" d="M203.5 299.5L621 334L622 365.5L202.5 345L185.5 346.5L164.5 346L115.5 359L117.5 316L165.5 300C172.5 300.667 186.6 302 187 302C187.4 302 198.167 300.333 203.5 299.5Z" fill="#19BBB9" fill-opacity="0.5"/>
                              <path data-etaj="4" class="filter__btn content__left__block_3d_path_5" d="M622 365.5L202.5 345L185.5 346.5L164.5 346L115.5 359L114 391L161.5 383.5H185L201.5 380.5L622.5 392L622 365.5Z" fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="1.5"/>
                              <path data-etaj="3" class="filter__btn content__left__block_3d_path_4" d="M201.5 380.5L622.5 392H627.5V396H623.5V424H628.5V429L200.5 432.5H183.5H160.5L112.5 435.5L114 391L161.5 383.5H185L201.5 380.5Z" fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="1.5"/>
                              <path data-etaj="2" class="filter__btn content__left__block_3d_path_3" d="M183.5 432.5H200.5L624 429.037L624.5 461L199 480H192H159L111 482L112.5 435.5L160.5 432.5H183.5Z" fill="#19BBB9" fill-opacity="0.5"/>
                              <path data-etaj="1" class="filter__btn content__left__block_3d_path_2" d="M199 480L624.5 461L625.5 494L199 530L181 524L157.5 525H109L111 482L159 480H192H199Z" fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="1.5"/>
                              <path data-etaj="0" class="filter__btn content__left__block_3d_path_1 content_path_active" d="M199 530L625.5 494L627 530L196.5 580.5L181 570.5L156 576.5L108 554.5L109 525H157.5L181 524L199 530Z" fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-width="1.5"/>
                              <path d="M14 1H1V14" stroke="#0BD8D5"/>
                              <path d="M1 688L1 701H14" stroke="#0BD8D5"/>
                              <path d="M688 701H701V688" stroke="#0BD8D5"/>
                              <path d="M701 14V1L688 1" stroke="#0BD8D5"/>
                              <path d="M619 272.5L205.5 211.5L189 217L167 214.5L120.5 236.5L119 278L167 256.5L188 259L204.5 255.5L620 302.5L619 272.5ZM619 272.5L617 212" stroke="#0BD8D5" stroke-width="1.5"/>
                              <path d="M620 302.5L621 334M621 334L203.5 299.5C198.167 300.333 187.4 302 187 302C186.6 302 172.5 300.667 165.5 300L117.5 316L115.5 359L164.5 346L185.5 346.5L202.5 345L622 365.5L621 334Z" stroke="#0BD8D5" stroke-width="1.5"/>
                              <path d="M628.5 429L624 429.037M624 429.037L200.5 432.5H183.5H160.5L112.5 435.5L111 482L159 480H192H199L624.5 461L624 429.037Z" stroke="#0BD8D5" stroke-width="1.5"/>
                              <path d="M619 272.5L620 302.5M620 302.5L204.5 255.5L188 259L167 256.5L119 278L117.5 316L165.5 300C172.5 300.667 186.6 302 187 302C187.4 302 198.167 300.333 203.5 299.5L621 334L620 302.5Z" stroke="#0BD8D5" stroke-width="1.5"/>
                            </svg> 
                        </div>
                        <div class="content__left__block_btns">
                            <ul class="content__left__block__ul">
                                <li class="content__left__block__li content__left__block__li_9">
                                    <button data-etaj="8" class="content__left__block_btn content__left__block_btn9 content__left__block_btn-active"></button>
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
                            <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
                            <svg class="planirovca_item_svg et_1" width="722" height="511" viewBox="0 0 722 511" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" fill="white" fill-opacity="0.01"/>
                              <path d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" fill="white" fill-opacity="0.01"/>
                              <path d="M370.81 121H409V207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409V259.183V279.296V294.344H389.607L380.208 294.199V296.225H402.585V300.711H407.21V305.92H409V366.547H407.061V370.453H367.528V294.534H365.738V391H329.338H318V293.621H346.643V272.206H344.703V287.399H318V227.206H344.852V248.042H346.792V220.839H318V123.605H365.738L365.589 144.296H369.02V222.72H370.81V144.296H377.97V139.087H370.81V121Z" fill="white" fill-opacity="0.01"/>
                              <path opacity="0.01" d="M14 1H1V10" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M1 501L1 510H14" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M708 510H721V501" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M721 10V1L708 1" stroke="#0BD8D5"/>
                              <path class="planirovca_item_path" data-room="0" d="M38.8092 312.456H18V258H70.5324V281.797H99.6362V280.045H76.7897V258H110.987V281.797H112.733V258H134.561V269.825H154.206V300.046H182V317.711H155.952V310.266H154.206V322.237H150.568V324.135H182V391H138.199V374.065H139.072V366.473H138.199V305.594H138.926V298.148H131.505V305.594H136.016V349.392H132.232V366.473H131.359V374.065H136.161V391H86.685V304.864H112.296V303.112H84.7933V372.021H74.7524V374.211H84.7933V391H43.6114V373.919H46.3762V366.765H45.7941V349.392H43.6114V305.302H46.3762V304.864H71.9876V298.732H46.3762V298.148H39.1003V305.302H39.9734V312.456H38.8092Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="1" d="M91.0369 124H43.6066L43.7521 140.808H46.6619V148.342H46.0799V165.15H43.7521V170.946H44.4795V208.474H46.6619V209.344H72.2684V219.921H69.9406V215.284H46.6619V216.299H38.8053V208.474H39.6783V201.809H18V256H70.2316V232.092H95.6926V234.266H72.5594V256H134.393V237.164H138.031V238.033H151.998H160V210.793H139.195V216.299H131.338V210.793H105.295V208.474H112.279V203.693H133.375V165.005H132.357V148.198H131.775V140.663H133.375V124H93.2193V211.372H91.0369V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="2" d="M181.571 123.751H137V140.403H139.143V147.933H138.429V165.02H137.143V206.939H163.571V238H182.714V233.946H223V215.909H220.857V208.605H197.925V223.864H196.143V206.868H199.143V202.089H222.714V147.933H221V140.403H223V121H186.857V138.955H193.286V144.458H183.571V208.895H181.571V123.751Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="3" d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="4" d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="5" d="M457.379 391H412V310.398L438.88 310.106V286.494H437.291V308.357H412V276H492.641V298.883H480.068V303.839H475.877V286.203H473.998V303.839H471.975V305.588H479.49V310.398H499V370.303H458.968V303.839H457.379V391Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="6" d="M409 207.961V121H370.81V139.087H377.97V144.296H370.81V222.72H369.02V144.296H365.589L365.738 123.605H318V220.839H346.792V248.042H344.852V227.206H318V287.399H344.703V272.206H346.643V293.621H318V391H329.338H365.738V294.534H367.528V370.453H407.061V366.547H409V305.92H407.21V300.711H402.585V296.225H380.208V294.199L389.607 294.344H409V279.296V259.183V220.26M409 207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409M409 207.961V220.26" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="7" d="M457.379 124H412V203.901L438.88 204.19V227.597H437.291V205.924H412V238H492.641V215.316H480.068V210.403H475.877V227.886H473.998V210.403H471.975V208.669H479.49V202.167H499V144.517H458.968V210.403H457.379V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="8" d="M502 148.243H504.003V144.491H541.351V208.851H543.211V124H588V140.595H585.854V148.387H586.855V165.271H587.857V206.83H561.384V238H502V215.922H504.146V209.139H527.185V228.187H528.902V206.975H525.897V202.357H502V148.243Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="9" d="M632.233 124H591.806L592.096 204.417H614.12V208.764H619.192V210.793H592.096H565V238.323H590.937V256H654.692H707V201.809H686.714V200.65H684.831V208.764H685.845V216.443H678.31V215.574H652.953V209.633H678.31V208.764H681.498V124H634.116V211.517H632.233V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="10" d="M590.524 269.692V258H707V312.808H686.154V298.923H653.062V304.915H678.428V305.792H681.78V391H588.628V374.338H593.731V366.592H592.856V349.346H588.628V305.792H593.731V297.9H586.004V305.792H586.733V366.592H586.004V374.338H586.879V391H543V322.892H574.488V320.554H570.989V309.592H569.24V320.554H547.373V299.946H570.989V269.692H590.524Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                            </svg>
                            <svg class="planirovca_item_svg et_2 anime" width="722" height="511" viewBox="0 0 722 511" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" fill="white" fill-opacity="0.01"/>
                              <path d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" fill="white" fill-opacity="0.01"/>
                              <path d="M370.81 121H409V207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409V259.183V279.296V294.344H389.607L380.208 294.199V296.225H402.585V300.711H407.21V305.92H409V366.547H407.061V370.453H367.528V294.534H365.738V391H329.338H318V293.621H346.643V272.206H344.703V287.399H318V227.206H344.852V248.042H346.792V220.839H318V123.605H365.738L365.589 144.296H369.02V222.72H370.81V144.296H377.97V139.087H370.81V121Z" fill="white" fill-opacity="0.01"/>
                              <path opacity="0.01" d="M14 1H1V10" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M1 501L1 510H14" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M708 510H721V501" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M721 10V1L708 1" stroke="#0BD8D5"/>
                              <path class="planirovca_item_path" data-room="11" d="M38.8092 312.456H18V258H70.5324V281.797H99.6362V280.045H76.7897V258H110.987V281.797H112.733V258H134.561V269.825H154.206V300.046H182V317.711H155.952V310.266H154.206V322.237H150.568V324.135H182V391H138.199V374.065H139.072V366.473H138.199V305.594H138.926V298.148H131.505V305.594H136.016V349.392H132.232V366.473H131.359V374.065H136.161V391H86.685V304.864H112.296V303.112H84.7933V372.021H74.7524V374.211H84.7933V391H43.6114V373.919H46.3762V366.765H45.7941V349.392H43.6114V305.302H46.3762V304.864H71.9876V298.732H46.3762V298.148H39.1003V305.302H39.9734V312.456H38.8092Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="12" d="M91.0369 124H43.6066L43.7521 140.808H46.6619V148.342H46.0799V165.15H43.7521V170.946H44.4795V208.474H46.6619V209.344H72.2684V219.921H69.9406V215.284H46.6619V216.299H38.8053V208.474H39.6783V201.809H18V256H70.2316V232.092H95.6926V234.266H72.5594V256H134.393V237.164H138.031V238.033H151.998H160V210.793H139.195V216.299H131.338V210.793H105.295V208.474H112.279V203.693H133.375V165.005H132.357V148.198H131.775V140.663H133.375V124H93.2193V211.372H91.0369V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="13" d="M181.571 123.751H137V140.403H139.143V147.933H138.429V165.02H137.143V206.939H163.571V238H182.714V233.946H223V215.909H220.857V208.605H197.925V223.864H196.143V206.868H199.143V202.089H222.714V147.933H221V140.403H223V121H186.857V138.955H193.286V144.458H183.571V208.895H181.571V123.751Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="14" d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="15" d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="16" d="M457.379 391H412V310.398L438.88 310.106V286.494H437.291V308.357H412V276H492.641V298.883H480.068V303.839H475.877V286.203H473.998V303.839H471.975V305.588H479.49V310.398H499V370.303H458.968V303.839H457.379V391Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="17" d="M409 207.961V121H370.81V139.087H377.97V144.296H370.81V222.72H369.02V144.296H365.589L365.738 123.605H318V220.839H346.792V248.042H344.852V227.206H318V287.399H344.703V272.206H346.643V293.621H318V391H329.338H365.738V294.534H367.528V370.453H407.061V366.547H409V305.92H407.21V300.711H402.585V296.225H380.208V294.199L389.607 294.344H409V279.296V259.183V220.26M409 207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409M409 207.961V220.26" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="18" d="M457.379 124H412V203.901L438.88 204.19V227.597H437.291V205.924H412V238H492.641V215.316H480.068V210.403H475.877V227.886H473.998V210.403H471.975V208.669H479.49V202.167H499V144.517H458.968V210.403H457.379V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="19" d="M502 148.243H504.003V144.491H541.351V208.851H543.211V124H588V140.595H585.854V148.387H586.855V165.271H587.857V206.83H561.384V238H502V215.922H504.146V209.139H527.185V228.187H528.902V206.975H525.897V202.357H502V148.243Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="20" d="M632.233 124H591.806L592.096 204.417H614.12V208.764H619.192V210.793H592.096H565V238.323H590.937V256H654.692H707V201.809H686.714V200.65H684.831V208.764H685.845V216.443H678.31V215.574H652.953V209.633H678.31V208.764H681.498V124H634.116V211.517H632.233V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="21" d="M590.524 269.692V258H707V312.808H686.154V298.923H653.062V304.915H678.428V305.792H681.78V391H588.628V374.338H593.731V366.592H592.856V349.346H588.628V305.792H593.731V297.9H586.004V305.792H586.733V366.592H586.004V374.338H586.879V391H543V322.892H574.488V320.554H570.989V309.592H569.24V320.554H547.373V299.946H570.989V269.692H590.524Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                            </svg>
                            <svg class="planirovca_item_svg et_3 anime" width="722" height="511" viewBox="0 0 722 511" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" fill="white" fill-opacity="0.01"/>
                              <path d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" fill="white" fill-opacity="0.01"/>
                              <path d="M370.81 121H409V207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409V259.183V279.296V294.344H389.607L380.208 294.199V296.225H402.585V300.711H407.21V305.92H409V366.547H407.061V370.453H367.528V294.534H365.738V391H329.338H318V293.621H346.643V272.206H344.703V287.399H318V227.206H344.852V248.042H346.792V220.839H318V123.605H365.738L365.589 144.296H369.02V222.72H370.81V144.296H377.97V139.087H370.81V121Z" fill="white" fill-opacity="0.01"/>
                              <path opacity="0.01" d="M14 1H1V10" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M1 501L1 510H14" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M708 510H721V501" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M721 10V1L708 1" stroke="#0BD8D5"/>
                              <path class="planirovca_item_path" data-room="22" d="M38.8092 312.456H18V258H70.5324V281.797H99.6362V280.045H76.7897V258H110.987V281.797H112.733V258H134.561V269.825H154.206V300.046H182V317.711H155.952V310.266H154.206V322.237H150.568V324.135H182V391H138.199V374.065H139.072V366.473H138.199V305.594H138.926V298.148H131.505V305.594H136.016V349.392H132.232V366.473H131.359V374.065H136.161V391H86.685V304.864H112.296V303.112H84.7933V372.021H74.7524V374.211H84.7933V391H43.6114V373.919H46.3762V366.765H45.7941V349.392H43.6114V305.302H46.3762V304.864H71.9876V298.732H46.3762V298.148H39.1003V305.302H39.9734V312.456H38.8092Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="23" d="M91.0369 124H43.6066L43.7521 140.808H46.6619V148.342H46.0799V165.15H43.7521V170.946H44.4795V208.474H46.6619V209.344H72.2684V219.921H69.9406V215.284H46.6619V216.299H38.8053V208.474H39.6783V201.809H18V256H70.2316V232.092H95.6926V234.266H72.5594V256H134.393V237.164H138.031V238.033H151.998H160V210.793H139.195V216.299H131.338V210.793H105.295V208.474H112.279V203.693H133.375V165.005H132.357V148.198H131.775V140.663H133.375V124H93.2193V211.372H91.0369V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="24" d="M181.571 123.751H137V140.403H139.143V147.933H138.429V165.02H137.143V206.939H163.571V238H182.714V233.946H223V215.909H220.857V208.605H197.925V223.864H196.143V206.868H199.143V202.089H222.714V147.933H221V140.403H223V121H186.857V138.955H193.286V144.458H183.571V208.895H181.571V123.751Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="25" d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="26" d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="27" d="M457.379 391H412V310.398L438.88 310.106V286.494H437.291V308.357H412V276H492.641V298.883H480.068V303.839H475.877V286.203H473.998V303.839H471.975V305.588H479.49V310.398H499V370.303H458.968V303.839H457.379V391Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="28" d="M409 207.961V121H370.81V139.087H377.97V144.296H370.81V222.72H369.02V144.296H365.589L365.738 123.605H318V220.839H346.792V248.042H344.852V227.206H318V287.399H344.703V272.206H346.643V293.621H318V391H329.338H365.738V294.534H367.528V370.453H407.061V366.547H409V305.92H407.21V300.711H402.585V296.225H380.208V294.199L389.607 294.344H409V279.296V259.183V220.26M409 207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409M409 207.961V220.26" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="29" d="M457.379 124H412V203.901L438.88 204.19V227.597H437.291V205.924H412V238H492.641V215.316H480.068V210.403H475.877V227.886H473.998V210.403H471.975V208.669H479.49V202.167H499V144.517H458.968V210.403H457.379V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="30" d="M502 148.243H504.003V144.491H541.351V208.851H543.211V124H588V140.595H585.854V148.387H586.855V165.271H587.857V206.83H561.384V238H502V215.922H504.146V209.139H527.185V228.187H528.902V206.975H525.897V202.357H502V148.243Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="31" d="M632.233 124H591.806L592.096 204.417H614.12V208.764H619.192V210.793H592.096H565V238.323H590.937V256H654.692H707V201.809H686.714V200.65H684.831V208.764H685.845V216.443H678.31V215.574H652.953V209.633H678.31V208.764H681.498V124H634.116V211.517H632.233V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="32" d="M590.524 269.692V258H707V312.808H686.154V298.923H653.062V304.915H678.428V305.792H681.78V391H588.628V374.338H593.731V366.592H592.856V349.346H588.628V305.792H593.731V297.9H586.004V305.792H586.733V366.592H586.004V374.338H586.879V391H543V322.892H574.488V320.554H570.989V309.592H569.24V320.554H547.373V299.946H570.989V269.692H590.524Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                            </svg>
                            <svg class="planirovca_item_svg et_4 anime" width="722" height="511" viewBox="0 0 722 511" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" fill="white" fill-opacity="0.01"/>
                              <path d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" fill="white" fill-opacity="0.01"/>
                              <path d="M370.81 121H409V207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409V259.183V279.296V294.344H389.607L380.208 294.199V296.225H402.585V300.711H407.21V305.92H409V366.547H407.061V370.453H367.528V294.534H365.738V391H329.338H318V293.621H346.643V272.206H344.703V287.399H318V227.206H344.852V248.042H346.792V220.839H318V123.605H365.738L365.589 144.296H369.02V222.72H370.81V144.296H377.97V139.087H370.81V121Z" fill="white" fill-opacity="0.01"/>
                              <path opacity="0.01" d="M14 1H1V10" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M1 501L1 510H14" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M708 510H721V501" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M721 10V1L708 1" stroke="#0BD8D5"/>
                              <path class="planirovca_item_path" data-room="33" d="M38.8092 312.456H18V258H70.5324V281.797H99.6362V280.045H76.7897V258H110.987V281.797H112.733V258H134.561V269.825H154.206V300.046H182V317.711H155.952V310.266H154.206V322.237H150.568V324.135H182V391H138.199V374.065H139.072V366.473H138.199V305.594H138.926V298.148H131.505V305.594H136.016V349.392H132.232V366.473H131.359V374.065H136.161V391H86.685V304.864H112.296V303.112H84.7933V372.021H74.7524V374.211H84.7933V391H43.6114V373.919H46.3762V366.765H45.7941V349.392H43.6114V305.302H46.3762V304.864H71.9876V298.732H46.3762V298.148H39.1003V305.302H39.9734V312.456H38.8092Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="34" d="M91.0369 124H43.6066L43.7521 140.808H46.6619V148.342H46.0799V165.15H43.7521V170.946H44.4795V208.474H46.6619V209.344H72.2684V219.921H69.9406V215.284H46.6619V216.299H38.8053V208.474H39.6783V201.809H18V256H70.2316V232.092H95.6926V234.266H72.5594V256H134.393V237.164H138.031V238.033H151.998H160V210.793H139.195V216.299H131.338V210.793H105.295V208.474H112.279V203.693H133.375V165.005H132.357V148.198H131.775V140.663H133.375V124H93.2193V211.372H91.0369V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="35" d="M181.571 123.751H137V140.403H139.143V147.933H138.429V165.02H137.143V206.939H163.571V238H182.714V233.946H223V215.909H220.857V208.605H197.925V223.864H196.143V206.868H199.143V202.089H222.714V147.933H221V140.403H223V121H186.857V138.955H193.286V144.458H183.571V208.895H181.571V123.751Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="36" d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="37" d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="38" d="M457.379 391H412V310.398L438.88 310.106V286.494H437.291V308.357H412V276H492.641V298.883H480.068V303.839H475.877V286.203H473.998V303.839H471.975V305.588H479.49V310.398H499V370.303H458.968V303.839H457.379V391Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="39" d="M409 207.961V121H370.81V139.087H377.97V144.296H370.81V222.72H369.02V144.296H365.589L365.738 123.605H318V220.839H346.792V248.042H344.852V227.206H318V287.399H344.703V272.206H346.643V293.621H318V391H329.338H365.738V294.534H367.528V370.453H407.061V366.547H409V305.92H407.21V300.711H402.585V296.225H380.208V294.199L389.607 294.344H409V279.296V259.183V220.26M409 207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409M409 207.961V220.26" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="40" d="M457.379 124H412V203.901L438.88 204.19V227.597H437.291V205.924H412V238H492.641V215.316H480.068V210.403H475.877V227.886H473.998V210.403H471.975V208.669H479.49V202.167H499V144.517H458.968V210.403H457.379V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="41" d="M502 148.243H504.003V144.491H541.351V208.851H543.211V124H588V140.595H585.854V148.387H586.855V165.271H587.857V206.83H561.384V238H502V215.922H504.146V209.139H527.185V228.187H528.902V206.975H525.897V202.357H502V148.243Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="42" d="M632.233 124H591.806L592.096 204.417H614.12V208.764H619.192V210.793H592.096H565V238.323H590.937V256H654.692H707V201.809H686.714V200.65H684.831V208.764H685.845V216.443H678.31V215.574H652.953V209.633H678.31V208.764H681.498V124H634.116V211.517H632.233V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="43" d="M590.524 269.692V258H707V312.808H686.154V298.923H653.062V304.915H678.428V305.792H681.78V391H588.628V374.338H593.731V366.592H592.856V349.346H588.628V305.792H593.731V297.9H586.004V305.792H586.733V366.592H586.004V374.338H586.879V391H543V322.892H574.488V320.554H570.989V309.592H569.24V320.554H547.373V299.946H570.989V269.692H590.524Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                            </svg>
                            <svg class="planirovca_item_svg et_5 anime" width="722" height="511" viewBox="0 0 722 511" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" fill="white" fill-opacity="0.01"/>
                              <path d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" fill="white" fill-opacity="0.01"/>
                              <path d="M370.81 121H409V207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409V259.183V279.296V294.344H389.607L380.208 294.199V296.225H402.585V300.711H407.21V305.92H409V366.547H407.061V370.453H367.528V294.534H365.738V391H329.338H318V293.621H346.643V272.206H344.703V287.399H318V227.206H344.852V248.042H346.792V220.839H318V123.605H365.738L365.589 144.296H369.02V222.72H370.81V144.296H377.97V139.087H370.81V121Z" fill="white" fill-opacity="0.01"/>
                              <path opacity="0.01" d="M14 1H1V10" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M1 501L1 510H14" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M708 510H721V501" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M721 10V1L708 1" stroke="#0BD8D5"/>
                              <path class="planirovca_item_path" data-room="44" d="M38.8092 312.456H18V258H70.5324V281.797H99.6362V280.045H76.7897V258H110.987V281.797H112.733V258H134.561V269.825H154.206V300.046H182V317.711H155.952V310.266H154.206V322.237H150.568V324.135H182V391H138.199V374.065H139.072V366.473H138.199V305.594H138.926V298.148H131.505V305.594H136.016V349.392H132.232V366.473H131.359V374.065H136.161V391H86.685V304.864H112.296V303.112H84.7933V372.021H74.7524V374.211H84.7933V391H43.6114V373.919H46.3762V366.765H45.7941V349.392H43.6114V305.302H46.3762V304.864H71.9876V298.732H46.3762V298.148H39.1003V305.302H39.9734V312.456H38.8092Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="45" d="M91.0369 124H43.6066L43.7521 140.808H46.6619V148.342H46.0799V165.15H43.7521V170.946H44.4795V208.474H46.6619V209.344H72.2684V219.921H69.9406V215.284H46.6619V216.299H38.8053V208.474H39.6783V201.809H18V256H70.2316V232.092H95.6926V234.266H72.5594V256H134.393V237.164H138.031V238.033H151.998H160V210.793H139.195V216.299H131.338V210.793H105.295V208.474H112.279V203.693H133.375V165.005H132.357V148.198H131.775V140.663H133.375V124H93.2193V211.372H91.0369V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="46" d="M181.571 123.751H137V140.403H139.143V147.933H138.429V165.02H137.143V206.939H163.571V238H182.714V233.946H223V215.909H220.857V208.605H197.925V223.864H196.143V206.868H199.143V202.089H222.714V147.933H221V140.403H223V121H186.857V138.955H193.286V144.458H183.571V208.895H181.571V123.751Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="47" d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="48" d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="49" d="M457.379 391H412V310.398L438.88 310.106V286.494H437.291V308.357H412V276H492.641V298.883H480.068V303.839H475.877V286.203H473.998V303.839H471.975V305.588H479.49V310.398H499V370.303H458.968V303.839H457.379V391Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="50" d="M409 207.961V121H370.81V139.087H377.97V144.296H370.81V222.72H369.02V144.296H365.589L365.738 123.605H318V220.839H346.792V248.042H344.852V227.206H318V287.399H344.703V272.206H346.643V293.621H318V391H329.338H365.738V294.534H367.528V370.453H407.061V366.547H409V305.92H407.21V300.711H402.585V296.225H380.208V294.199L389.607 294.344H409V279.296V259.183V220.26M409 207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409M409 207.961V220.26" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="51" d="M457.379 124H412V203.901L438.88 204.19V227.597H437.291V205.924H412V238H492.641V215.316H480.068V210.403H475.877V227.886H473.998V210.403H471.975V208.669H479.49V202.167H499V144.517H458.968V210.403H457.379V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="52" d="M502 148.243H504.003V144.491H541.351V208.851H543.211V124H588V140.595H585.854V148.387H586.855V165.271H587.857V206.83H561.384V238H502V215.922H504.146V209.139H527.185V228.187H528.902V206.975H525.897V202.357H502V148.243Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="53" d="M632.233 124H591.806L592.096 204.417H614.12V208.764H619.192V210.793H592.096H565V238.323H590.937V256H654.692H707V201.809H686.714V200.65H684.831V208.764H685.845V216.443H678.31V215.574H652.953V209.633H678.31V208.764H681.498V124H634.116V211.517H632.233V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="54" d="M590.524 269.692V258H707V312.808H686.154V298.923H653.062V304.915H678.428V305.792H681.78V391H588.628V374.338H593.731V366.592H592.856V349.346H588.628V305.792H593.731V297.9H586.004V305.792H586.733V366.592H586.004V374.338H586.879V391H543V322.892H574.488V320.554H570.989V309.592H569.24V320.554H547.373V299.946H570.989V269.692H590.524Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                            </svg>
                            <svg class="planirovca_item_svg et_6 anime" width="722" height="511" viewBox="0 0 722 511" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" fill="white" fill-opacity="0.01"/>
                              <path d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" fill="white" fill-opacity="0.01"/>
                              <path d="M370.81 121H409V207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409V259.183V279.296V294.344H389.607L380.208 294.199V296.225H402.585V300.711H407.21V305.92H409V366.547H407.061V370.453H367.528V294.534H365.738V391H329.338H318V293.621H346.643V272.206H344.703V287.399H318V227.206H344.852V248.042H346.792V220.839H318V123.605H365.738L365.589 144.296H369.02V222.72H370.81V144.296H377.97V139.087H370.81V121Z" fill="white" fill-opacity="0.01"/>
                              <path opacity="0.01" d="M14 1H1V10" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M1 501L1 510H14" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M708 510H721V501" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M721 10V1L708 1" stroke="#0BD8D5"/>
                              <path class="planirovca_item_path" data-room="55" d="M38.8092 312.456H18V258H70.5324V281.797H99.6362V280.045H76.7897V258H110.987V281.797H112.733V258H134.561V269.825H154.206V300.046H182V317.711H155.952V310.266H154.206V322.237H150.568V324.135H182V391H138.199V374.065H139.072V366.473H138.199V305.594H138.926V298.148H131.505V305.594H136.016V349.392H132.232V366.473H131.359V374.065H136.161V391H86.685V304.864H112.296V303.112H84.7933V372.021H74.7524V374.211H84.7933V391H43.6114V373.919H46.3762V366.765H45.7941V349.392H43.6114V305.302H46.3762V304.864H71.9876V298.732H46.3762V298.148H39.1003V305.302H39.9734V312.456H38.8092Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="56" d="M91.0369 124H43.6066L43.7521 140.808H46.6619V148.342H46.0799V165.15H43.7521V170.946H44.4795V208.474H46.6619V209.344H72.2684V219.921H69.9406V215.284H46.6619V216.299H38.8053V208.474H39.6783V201.809H18V256H70.2316V232.092H95.6926V234.266H72.5594V256H134.393V237.164H138.031V238.033H151.998H160V210.793H139.195V216.299H131.338V210.793H105.295V208.474H112.279V203.693H133.375V165.005H132.357V148.198H131.775V140.663H133.375V124H93.2193V211.372H91.0369V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="57" d="M181.571 123.751H137V140.403H139.143V147.933H138.429V165.02H137.143V206.939H163.571V238H182.714V233.946H223V215.909H220.857V208.605H197.925V223.864H196.143V206.868H199.143V202.089H222.714V147.933H221V140.403H223V121H186.857V138.955H193.286V144.458H183.571V208.895H181.571V123.751Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="58" d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="59" d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="60" d="M457.379 391H412V310.398L438.88 310.106V286.494H437.291V308.357H412V276H492.641V298.883H480.068V303.839H475.877V286.203H473.998V303.839H471.975V305.588H479.49V310.398H499V370.303H458.968V303.839H457.379V391Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="61" d="M409 207.961V121H370.81V139.087H377.97V144.296H370.81V222.72H369.02V144.296H365.589L365.738 123.605H318V220.839H346.792V248.042H344.852V227.206H318V287.399H344.703V272.206H346.643V293.621H318V391H329.338H365.738V294.534H367.528V370.453H407.061V366.547H409V305.92H407.21V300.711H402.585V296.225H380.208V294.199L389.607 294.344H409V279.296V259.183V220.26M409 207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409M409 207.961V220.26" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="62" d="M457.379 124H412V203.901L438.88 204.19V227.597H437.291V205.924H412V238H492.641V215.316H480.068V210.403H475.877V227.886H473.998V210.403H471.975V208.669H479.49V202.167H499V144.517H458.968V210.403H457.379V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="63" d="M502 148.243H504.003V144.491H541.351V208.851H543.211V124H588V140.595H585.854V148.387H586.855V165.271H587.857V206.83H561.384V238H502V215.922H504.146V209.139H527.185V228.187H528.902V206.975H525.897V202.357H502V148.243Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="64" d="M632.233 124H591.806L592.096 204.417H614.12V208.764H619.192V210.793H592.096H565V238.323H590.937V256H654.692H707V201.809H686.714V200.65H684.831V208.764H685.845V216.443H678.31V215.574H652.953V209.633H678.31V208.764H681.498V124H634.116V211.517H632.233V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="65" d="M590.524 269.692V258H707V312.808H686.154V298.923H653.062V304.915H678.428V305.792H681.78V391H588.628V374.338H593.731V366.592H592.856V349.346H588.628V305.792H593.731V297.9H586.004V305.792H586.733V366.592H586.004V374.338H586.879V391H543V322.892H574.488V320.554H570.989V309.592H569.24V320.554H547.373V299.946H570.989V269.692H590.524Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                            </svg>
                            <svg class="planirovca_item_svg et_7 anime" width="722" height="511" viewBox="0 0 722 511" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" fill="white" fill-opacity="0.01"/>
                              <path d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" fill="white" fill-opacity="0.01"/>
                              <path d="M370.81 121H409V207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409V259.183V279.296V294.344H389.607L380.208 294.199V296.225H402.585V300.711H407.21V305.92H409V366.547H407.061V370.453H367.528V294.534H365.738V391H329.338H318V293.621H346.643V272.206H344.703V287.399H318V227.206H344.852V248.042H346.792V220.839H318V123.605H365.738L365.589 144.296H369.02V222.72H370.81V144.296H377.97V139.087H370.81V121Z" fill="white" fill-opacity="0.01"/>
                              <path opacity="0.01" d="M14 1H1V10" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M1 501L1 510H14" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M708 510H721V501" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M721 10V1L708 1" stroke="#0BD8D5"/>
                              <path class="planirovca_item_path" data-room="66" d="M38.8092 312.456H18V258H70.5324V281.797H99.6362V280.045H76.7897V258H110.987V281.797H112.733V258H134.561V269.825H154.206V300.046H182V317.711H155.952V310.266H154.206V322.237H150.568V324.135H182V391H138.199V374.065H139.072V366.473H138.199V305.594H138.926V298.148H131.505V305.594H136.016V349.392H132.232V366.473H131.359V374.065H136.161V391H86.685V304.864H112.296V303.112H84.7933V372.021H74.7524V374.211H84.7933V391H43.6114V373.919H46.3762V366.765H45.7941V349.392H43.6114V305.302H46.3762V304.864H71.9876V298.732H46.3762V298.148H39.1003V305.302H39.9734V312.456H38.8092Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="67" d="M91.0369 124H43.6066L43.7521 140.808H46.6619V148.342H46.0799V165.15H43.7521V170.946H44.4795V208.474H46.6619V209.344H72.2684V219.921H69.9406V215.284H46.6619V216.299H38.8053V208.474H39.6783V201.809H18V256H70.2316V232.092H95.6926V234.266H72.5594V256H134.393V237.164H138.031V238.033H151.998H160V210.793H139.195V216.299H131.338V210.793H105.295V208.474H112.279V203.693H133.375V165.005H132.357V148.198H131.775V140.663H133.375V124H93.2193V211.372H91.0369V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="68" d="M181.571 123.751H137V140.403H139.143V147.933H138.429V165.02H137.143V206.939H163.571V238H182.714V233.946H223V215.909H220.857V208.605H197.925V223.864H196.143V206.868H199.143V202.089H222.714V147.933H221V140.403H223V121H186.857V138.955H193.286V144.458H183.571V208.895H181.571V123.751Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="69" d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="70" d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="71" d="M457.379 391H412V310.398L438.88 310.106V286.494H437.291V308.357H412V276H492.641V298.883H480.068V303.839H475.877V286.203H473.998V303.839H471.975V305.588H479.49V310.398H499V370.303H458.968V303.839H457.379V391Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="72" d="M409 207.961V121H370.81V139.087H377.97V144.296H370.81V222.72H369.02V144.296H365.589L365.738 123.605H318V220.839H346.792V248.042H344.852V227.206H318V287.399H344.703V272.206H346.643V293.621H318V391H329.338H365.738V294.534H367.528V370.453H407.061V366.547H409V305.92H407.21V300.711H402.585V296.225H380.208V294.199L389.607 294.344H409V279.296V259.183V220.26M409 207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409M409 207.961V220.26" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="73" d="M457.379 124H412V203.901L438.88 204.19V227.597H437.291V205.924H412V238H492.641V215.316H480.068V210.403H475.877V227.886H473.998V210.403H471.975V208.669H479.49V202.167H499V144.517H458.968V210.403H457.379V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="74" d="M502 148.243H504.003V144.491H541.351V208.851H543.211V124H588V140.595H585.854V148.387H586.855V165.271H587.857V206.83H561.384V238H502V215.922H504.146V209.139H527.185V228.187H528.902V206.975H525.897V202.357H502V148.243Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="75" d="M632.233 124H591.806L592.096 204.417H614.12V208.764H619.192V210.793H592.096H565V238.323H590.937V256H654.692H707V201.809H686.714V200.65H684.831V208.764H685.845V216.443H678.31V215.574H652.953V209.633H678.31V208.764H681.498V124H634.116V211.517H632.233V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="76" d="M590.524 269.692V258H707V312.808H686.154V298.923H653.062V304.915H678.428V305.792H681.78V391H588.628V374.338H593.731V366.592H592.856V349.346H588.628V305.792H593.731V297.9H586.004V305.792H586.733V366.592H586.004V374.338H586.879V391H543V322.892H574.488V320.554H570.989V309.592H569.24V320.554H547.373V299.946H570.989V269.692H590.524Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                            </svg>
                            <svg class="planirovca_item_svg et_8 anime" width="722" height="511" viewBox="0 0 722 511" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" fill="white" fill-opacity="0.01"/>
                              <path d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" fill="white" fill-opacity="0.01"/>
                              <path d="M370.81 121H409V207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409V259.183V279.296V294.344H389.607L380.208 294.199V296.225H402.585V300.711H407.21V305.92H409V366.547H407.061V370.453H367.528V294.534H365.738V391H329.338H318V293.621H346.643V272.206H344.703V287.399H318V227.206H344.852V248.042H346.792V220.839H318V123.605H365.738L365.589 144.296H369.02V222.72H370.81V144.296H377.97V139.087H370.81V121Z" fill="white" fill-opacity="0.01"/>
                              <path opacity="0.01" d="M14 1H1V10" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M1 501L1 510H14" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M708 510H721V501" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M721 10V1L708 1" stroke="#0BD8D5"/>
                              <path class="planirovca_item_path" data-room="77" d="M38.8092 312.456H18V258H70.5324V281.797H99.6362V280.045H76.7897V258H110.987V281.797H112.733V258H134.561V269.825H154.206V300.046H182V317.711H155.952V310.266H154.206V322.237H150.568V324.135H182V391H138.199V374.065H139.072V366.473H138.199V305.594H138.926V298.148H131.505V305.594H136.016V349.392H132.232V366.473H131.359V374.065H136.161V391H86.685V304.864H112.296V303.112H84.7933V372.021H74.7524V374.211H84.7933V391H43.6114V373.919H46.3762V366.765H45.7941V349.392H43.6114V305.302H46.3762V304.864H71.9876V298.732H46.3762V298.148H39.1003V305.302H39.9734V312.456H38.8092Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="78" d="M91.0369 124H43.6066L43.7521 140.808H46.6619V148.342H46.0799V165.15H43.7521V170.946H44.4795V208.474H46.6619V209.344H72.2684V219.921H69.9406V215.284H46.6619V216.299H38.8053V208.474H39.6783V201.809H18V256H70.2316V232.092H95.6926V234.266H72.5594V256H134.393V237.164H138.031V238.033H151.998H160V210.793H139.195V216.299H131.338V210.793H105.295V208.474H112.279V203.693H133.375V165.005H132.357V148.198H131.775V140.663H133.375V124H93.2193V211.372H91.0369V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="79" d="M181.571 123.751H137V140.403H139.143V147.933H138.429V165.02H137.143V206.939H163.571V238H182.714V233.946H223V215.909H220.857V208.605H197.925V223.864H196.143V206.868H199.143V202.089H222.714V147.933H221V140.403H223V121H186.857V138.955H193.286V144.458H183.571V208.895H181.571V123.751Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="80" d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="81" d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="82" d="M457.379 391H412V310.398L438.88 310.106V286.494H437.291V308.357H412V276H492.641V298.883H480.068V303.839H475.877V286.203H473.998V303.839H471.975V305.588H479.49V310.398H499V370.303H458.968V303.839H457.379V391Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="83" d="M409 207.961V121H370.81V139.087H377.97V144.296H370.81V222.72H369.02V144.296H365.589L365.738 123.605H318V220.839H346.792V248.042H344.852V227.206H318V287.399H344.703V272.206H346.643V293.621H318V391H329.338H365.738V294.534H367.528V370.453H407.061V366.547H409V305.92H407.21V300.711H402.585V296.225H380.208V294.199L389.607 294.344H409V279.296V259.183V220.26M409 207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409M409 207.961V220.26" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="84" d="M457.379 124H412V203.901L438.88 204.19V227.597H437.291V205.924H412V238H492.641V215.316H480.068V210.403H475.877V227.886H473.998V210.403H471.975V208.669H479.49V202.167H499V144.517H458.968V210.403H457.379V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="85" d="M502 148.243H504.003V144.491H541.351V208.851H543.211V124H588V140.595H585.854V148.387H586.855V165.271H587.857V206.83H561.384V238H502V215.922H504.146V209.139H527.185V228.187H528.902V206.975H525.897V202.357H502V148.243Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="86" d="M632.233 124H591.806L592.096 204.417H614.12V208.764H619.192V210.793H592.096H565V238.323H590.937V256H654.692H707V201.809H686.714V200.65H684.831V208.764H685.845V216.443H678.31V215.574H652.953V209.633H678.31V208.764H681.498V124H634.116V211.517H632.233V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="87" d="M590.524 269.692V258H707V312.808H686.154V298.923H653.062V304.915H678.428V305.792H681.78V391H588.628V374.338H593.731V366.592H592.856V349.346H588.628V305.792H593.731V297.9H586.004V305.792H586.733V366.592H586.004V374.338H586.879V391H543V322.892H574.488V320.554H570.989V309.592H569.24V320.554H547.373V299.946H570.989V269.692H590.524Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                            </svg>
                            <svg class="planirovca_item_svg et_9 anime" width="722" height="511" viewBox="0 0 722 511" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" fill="white" fill-opacity="0.01"/>
                              <path d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" fill="white" fill-opacity="0.01"/>
                              <path d="M370.81 121H409V207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409V259.183V279.296V294.344H389.607L380.208 294.199V296.225H402.585V300.711H407.21V305.92H409V366.547H407.061V370.453H367.528V294.534H365.738V391H329.338H318V293.621H346.643V272.206H344.703V287.399H318V227.206H344.852V248.042H346.792V220.839H318V123.605H365.738L365.589 144.296H369.02V222.72H370.81V144.296H377.97V139.087H370.81V121Z" fill="white" fill-opacity="0.01"/>
                              <path opacity="0.01" d="M14 1H1V10" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M1 501L1 510H14" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M708 510H721V501" stroke="#0BD8D5"/>
                              <path opacity="0.01" d="M721 10V1L708 1" stroke="#0BD8D5"/>
                              <path class="planirovca_item_path" data-room="88" d="M38.8092 312.456H18V258H70.5324V281.797H99.6362V280.045H76.7897V258H110.987V281.797H112.733V258H134.561V269.825H154.206V300.046H182V317.711H155.952V310.266H154.206V322.237H150.568V324.135H182V391H138.199V374.065H139.072V366.473H138.199V305.594H138.926V298.148H131.505V305.594H136.016V349.392H132.232V366.473H131.359V374.065H136.161V391H86.685V304.864H112.296V303.112H84.7933V372.021H74.7524V374.211H84.7933V391H43.6114V373.919H46.3762V366.765H45.7941V349.392H43.6114V305.302H46.3762V304.864H71.9876V298.732H46.3762V298.148H39.1003V305.302H39.9734V312.456H38.8092Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="89" d="M91.0369 124H43.6066L43.7521 140.808H46.6619V148.342H46.0799V165.15H43.7521V170.946H44.4795V208.474H46.6619V209.344H72.2684V219.921H69.9406V215.284H46.6619V216.299H38.8053V208.474H39.6783V201.809H18V256H70.2316V232.092H95.6926V234.266H72.5594V256H134.393V237.164H138.031V238.033H151.998H160V210.793H139.195V216.299H131.338V210.793H105.295V208.474H112.279V203.693H133.375V165.005H132.357V148.198H131.775V140.663H133.375V124H93.2193V211.372H91.0369V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="90" d="M181.571 123.751H137V140.403H139.143V147.933H138.429V165.02H137.143V206.939H163.571V238H182.714V233.946H223V215.909H220.857V208.605H197.925V223.864H196.143V206.868H199.143V202.089H222.714V147.933H221V140.403H223V121H186.857V138.955H193.286V144.458H183.571V208.895H181.571V123.751Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="91" d="M226 121H263.351V139.087H256.348V144.296H266.415V222.72H268.311V123.605H315V220.839H286.841V244.424H288.738V227.206H315V255.421H226V220.26H244.967V215.63L251.825 215.775V223.588H253.575V213.749H244.967V209.119H227.897V207.961H226V121Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="92" d="M315 259.183V287.399H288.884V270.325H286.987V293.621H315V391H303.911H268.311V292.029H266.561V370.453H227.897V366.547H226V305.92H227.751V305.341H244.967V300.711H253.721V291.161H251.97V298.974H244.967V294.344H226V281.032H253.721V279.296H226V259.183H315Z" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="93" d="M457.379 391H412V310.398L438.88 310.106V286.494H437.291V308.357H412V276H492.641V298.883H480.068V303.839H475.877V286.203H473.998V303.839H471.975V305.588H479.49V310.398H499V370.303H458.968V303.839H457.379V391Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="94" d="M409 207.961V121H370.81V139.087H377.97V144.296H370.81V222.72H369.02V144.296H365.589L365.738 123.605H318V220.839H346.792V248.042H344.852V227.206H318V287.399H344.703V272.206H346.643V293.621H318V391H329.338H365.738V294.534H367.528V370.453H407.061V366.547H409V305.92H407.21V300.711H402.585V296.225H380.208V294.199L389.607 294.344H409V279.296V259.183V220.26M409 207.961H407.061V213.749H389.607V218.09H383.49V220.26H389.607H409M409 207.961V220.26" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="95" d="M457.379 124H412V203.901L438.88 204.19V227.597H437.291V205.924H412V238H492.641V215.316H480.068V210.403H475.877V227.886H473.998V210.403H471.975V208.669H479.49V202.167H499V144.517H458.968V210.403H457.379V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="96" d="M502 148.243H504.003V144.491H541.351V208.851H543.211V124H588V140.595H585.854V148.387H586.855V165.271H587.857V206.83H561.384V238H502V215.922H504.146V209.139H527.185V228.187H528.902V206.975H525.897V202.357H502V148.243Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="97" d="M632.233 124H591.806L592.096 204.417H614.12V208.764H619.192V210.793H592.096H565V238.323H590.937V256H654.692H707V201.809H686.714V200.65H684.831V208.764H685.845V216.443H678.31V215.574H652.953V209.633H678.31V208.764H681.498V124H634.116V211.517H632.233V124Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
                              <path class="planirovca_item_path" data-room="98" d="M590.524 269.692V258H707V312.808H686.154V298.923H653.062V304.915H678.428V305.792H681.78V391H588.628V374.338H593.731V366.592H592.856V349.346H588.628V305.792H593.731V297.9H586.004V305.792H586.733V366.592H586.004V374.338H586.879V391H543V322.892H574.488V320.554H570.989V309.592H569.24V320.554H547.373V299.946H570.989V269.692H590.524Z" fill="white" fill-opacity="0.01" stroke="black" stroke-width="0.593876"/>
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
                  style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                  style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    var curs_dollar = <?= json_encode($curs); ?>;

     var CV = <?= json_encode($array); ?>;
    var CV_etaj = <?= json_encode($array_1); ?>;
// var CV = [{"id":"1", "vznos":"30","room":"3","etaj":"1","bron":"0","sold":"0","square":"90.6","price":"1000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"2","room":"2","etaj":"1","bron":"0","sold":"1","square":"72","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"3","room":"1","etaj":"1","bron":"0","sold":"0","square":"42.92","price":"2090000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"4","room":"1","etaj":"1","bron":"0","sold":"0","square":"42.92","price":"2090000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"5","room":"2","etaj":"1","bron":"0","sold":"1","square":"69","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"6","room":"2","etaj":"1","bron":"0","sold":"1","square":"65.3","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"7","room":"1","etaj":"1","bron":"0","sold":"0","square":"46.3","price":"2250000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"8","room":"3","etaj":"2","bron":"0","sold":"1","square":"90.6","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"9","room":"2","etaj":"2","bron":"1","sold":"0","square":"72","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"10","room":"1","etaj":"2","bron":"0","sold":"0","square":"42.92","price":"2150000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"11","room":"1","etaj":"2","bron":"0","sold":"0","square":"42.92","price":"2150000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"12","room":"2","etaj":"2","bron":"0","sold":"1","square":"69","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"13","room":"2","etaj":"2","bron":"0","sold":"1","square":"65.3","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"14","room":"1","etaj":"2","bron":"0","sold":"0","square":"46.3","price":"2300000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"15","room":"3","etaj":"3","bron":"0","sold":"1","square":"90.6","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"16","room":"2","etaj":"3","bron":"0","sold":"0","square":"72","price":"3500000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"17","room":"1","etaj":"3","bron":"1","sold":"0","square":"42.92","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"18","room":"1","etaj":"3","bron":"1","sold":"0","square":"42.92","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"19","room":"2","etaj":"3","bron":"1","sold":"0","square":"69","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"20","room":"2","etaj":"3","bron":"1","sold":"0","square":"65.3","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"21","room":"1","etaj":"3","bron":"0","sold":"1","square":"46.3","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"22","room":"3","etaj":"4","bron":"0","sold":"0","square":"90.6","price":"4300000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"23","room":"1","etaj":"4","bron":"0","sold":"0","square":"72","price":"3500000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"24","room":"1","etaj":"4","bron":"0","sold":"1","square":"42.92","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"25","room":"1","etaj":"4","bron":"0","sold":"1","square":"42.92","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_4.png'","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"26","room":"2","etaj":"4","bron":"0","sold":"1","square":"69","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"27","room":"2","etaj":"4","bron":"0","sold":"1","square":"65.3","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"28","room":"1","etaj":"4","bron":"0","sold":"0","square":"46.3","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"29","room":"3","etaj":"5","bron":"0","sold":"1","square":"90.6","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"30","room":"2","etaj":"5","bron":"0","sold":"0","square":"72","price":"3500000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"31","room":"1","etaj":"5","bron":"0","sold":"0","square":"42.92","price":"2150000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"32","room":"1","etaj":"5","bron":"0","sold":"1","square":"42.92","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"33","room":"2","etaj":"5","bron":"1","sold":"0","square":"69","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"34","room":"2","etaj":"5","bron":"0","sold":"1","square":"65.3","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"35","room":"1","etaj":"5","bron":"0","sold":"0","square":"46.3","price":"2250000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"36","room":"3","etaj":"6","bron":"1","sold":"0","square":"90.6","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"37","room":"2","etaj":"6","bron":"0","sold":"0","square":"72","price":"3400000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"38","room":"1","etaj":"6","bron":"0","sold":"1","square":"42.92","price":"0","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"39","room":"1","etaj":"6","bron":"0","sold":"0","square":"42.92","price":"2100000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"40","room":"2","etaj":"6","bron":"0","sold":"0","square":"69","price":"3250000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"41","room":"2","etaj":"6","bron":"1","sold":"0","square":"65.3","price":"0","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"42","room":"1","etaj":"6","bron":"1","sold":"0","square":"46.3","price":"0","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"43","room":"3","etaj":"7","bron":"0","sold":"0","square":"90.6","price":"4150000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"44","room":"2","etaj":"7","bron":"0","sold":"0","square":"72","price":"3400000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"45","room":"1","etaj":"7","bron":"0","sold":"0","square":"42.92","price":"2100000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"46","room":"2","etaj":"7","bron":"0","sold":"0","square":"42.92","price":"2100000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"47","room":"2","etaj":"7","bron":"0","sold":"0","square":"69","price":"3250000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"48","room":"2","etaj":"7","bron":"0","sold":"0","square":"65.3","price":"3500000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"49","room":"1","etaj":"7","bron":"1","sold":"0","square":"46.3","price":"0","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"50","room":"3","etaj":"8","bron":"0","sold":"0","square":"90.6","price":"3990000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"51","room":"2","etaj":"8","bron":"0","sold":"0","square":"72","price":"3250000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"52","room":"1","etaj":"8","bron":"0","sold":"0","square":"42.92","price":"2000000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"53","room":"1","etaj":"8","bron":"0","sold":"0","square":"42.92","price":"2000000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"54","room":"2","etaj":"8","bron":"0","sold":"0","square":"69","price":"3100000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"55","room":"2","etaj":"8","bron":"0","sold":"0","square":"65.3","price":"2950000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"56","room":"1","etaj":"8","bron":"0","sold":"0","square":"46.3","price":"2200000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"57","room":"3","etaj":"9","bron":"0","sold":"0","square":"90.6","price":"3990000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"58","room":"2","etaj":"9","bron":"0","sold":"0","square":"72","price":"3250000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"59","room":"1","etaj":"9","bron":"0","sold":"0","square":"42.92","price":"1990000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"60","room":"1","etaj":"9","bron":"0","sold":"0","square":"42.92","price":"1990000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"61","room":"2","etaj":"9","bron":"0","sold":"0","square":"69","price":"3100000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"62","room":"2","etaj":"9","bron":"0","sold":"0","square":"65.3","price":"2950000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"63","room":"1","etaj":"9","bron":"0","sold":"0","square":"46.3","price":"2200000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"}];
// var CV_etaj=[{kv}]

var roma__navs = document.querySelectorAll('.roma__nav');
roma__navs.forEach(roma__nav =>{
  var e = document.getElementById('btn');
  e.addEventListener('click', function() {
    if (this.className == 'on') this.classList.remove('on');
    else this.classList.add('on');
    roma__nav.classList.toggle('roma__nav-active');
    document.body.classList.toggle('body__hidden');
  
  });
})

window.addEventListener('mouseover', function(e){
  if(e.target.hasAttribute('data-etaj')){
    data_3=e.target.getAttribute('data-etaj')
    llll=document.querySelectorAll('[data-etaj="'+data_3+'"]')
    llll.forEach(e =>{
      if(e.classList.contains('content__left__block_btn')){
        e.closest('.content__left__block__li').classList.add('content__left__block__li-active')
      }
      else{
        e.style.opacity =1
      }
    })
  }
})
window.addEventListener('mouseout', function(e){
  if(e.target.hasAttribute('data-etaj')){
    data_3=e.target.getAttribute('data-etaj')
    llll=document.querySelectorAll('[data-etaj="'+data_3+'"]')
    llll.forEach(e =>{
      if(e.classList.contains('content__left__block_btn')){
        e.closest('.content__left__block__li').classList.remove('content__left__block__li-active')
      }
      else{
        e.style.opacity =0
      }
    })
  }
})
window.addEventListener('click', function(event){
  if(event.target.hasAttribute('data-lang-btn')){
    const data=event.target.getAttribute('data-lang-btn')
    let data_1= $('[data-ru]')
    let data_2= $('[data-kg]')

    if(data == 1){
      data_1.attr('data-lang', 0)
      data_2.attr('data-lang', 1)
    }
    else if(data == 2){
      data_1.attr('data-lang', 1)
      data_2.attr('data-lang', 0)
    }
  }
})


        
        
let kurs_USD=curs_dollar[0].dollar;
        let data_etaj=1;
        all_data= new Date()
        month_data= all_data.getMonth()
        year_data= all_data.getYear()
        let data_1 = 1
        window.addEventListener('click', function (event) {
          if (event.target.hasAttribute('data-etaj')) {
            l=document.querySelector('.content_li_active')
            l_1=document.querySelector('.content_path_active')
            l.classList.remove('content_li_active')
            l_1.classList.remove('content_path_active')
            data_etaj = event.target.getAttribute('data-etaj')
            llll=document.querySelectorAll('[data-etaj="'+data_etaj+'"]')
            llll.forEach(e =>{
              if(e.classList.contains('content__left__block_btn')){
                e.closest('.content__left__block__li').classList.add('content_li_active')
              }else{
                e.classList.add('content_path_active')
              }
            })

            
            ll=document.querySelectorAll('.planirovca_item_svg')
            ll.forEach(a =>{
              a.classList.add('anime')
              b=Number(data_etaj)+1
              console.log(b)
              if(a.classList.contains('et_'+b)){
                a.classList.remove('anime')
              }
            })





          return data_etaj;
          
        }
        if (event.target.hasAttribute('data-shtorka-x')) {
            $('.shtorka').css('display','none')
            document.querySelector('body').classList.remove('body')
        }
                  if(CV[data_1].vznos==100){
            document.querySelector('.info__right__block_vzno_sum').setAttribute('disabled','disabled')
          }else{
            document.querySelector('.info__right__block_vzno_sum').removeAttribute('disabled','disabled')
          }
        if (event.target.hasAttribute('data-room')) {
          data_1 = event.target.getAttribute('data-room')
          const info_kart=`
          ${-month_data+23+'&nbsp;'}<div class="lang" data-ru data-lang="0"> месяцев</div><div class="lang" data-kg data-lang="1"> ай</div>
          `
          const info_kart1=`
          <div class="lang" data-ru data-lang="0">перв.взн</div><div class="lang" data-kg data-lang="1">башкы төлөм</div>${'&nbsp'+CV[data_1].vznos+'%'}
          `
          window.scrollTo(0,0)
          const infoCart = `<img src="${CV[data_1].image3D}" alt="">`
            const infoCart1 = `<img src="${CV[data_1].image}" alt="">`
            document.querySelector('.shtorka__left__img img').remove()
            document.querySelector('.shtorka__rght__img img').remove()
            document.querySelector('.shtorka__left__img a').insertAdjacentHTML("beforeend", infoCart);
            document.querySelector('.shtorka__rght__img a').insertAdjacentHTML("beforeend", infoCart1);
            $('.shtorka').css('display','block')
            $('.shtoka__info__left__li_etag').html(Number(data_etaj)+1)
            $('.shtoka__info__left__li_room').html(CV[data_1].room)
            $('.shtoka__info__left__li_scale').html(CV[data_1].square+' m²')
            $('.shtoka__info__left__li_price').html(Math.floor(CV[data_1].price)+' $')
            document.querySelector('.info__right__block input').value = Math.floor((CV[data_1].price*kurs_USD)*CV[data_1].square)            
            document.querySelector('.info__right__block_vzno_sum').value = Math.floor((CV[data_1].price*kurs_USD)*CV[data_1].square/100*(CV[data_1].vznos))  
                      
            document.querySelector('#info__right__block_month').value = Math.floor(((CV[data_1].price*kurs_USD)*CV[data_1].square-((((CV[data_1].price*kurs_USD)*CV[data_1].square/100*(CV[data_1].vznos)))))/23-month_data)
            document.querySelector('[data-info_month]').innerHTML=info_kart;
            document.querySelector('[data-info_vzno]').innerHTML =info_kart1;
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
        calculator_input_month=document.querySelector('#info__right__block_month')
        calculator_input_vznos=document.querySelector('.info__right__block_vzno_sum')
        calculator_kol_vo_month=document.querySelector('.info__right__block_month')
        data_inp_vznos=document.querySelector('.info__right__block_vzno_sum');
        if (event.target.hasAttribute('data-raschet-btn-ru')){
          // data_inp_vznos.value='';
          if(data_inp_vznos.value<((CV[data_1].price*kurs_USD)*CV[data_1].square/100*(CV[data_1].vznos)-1)){
            alert('Вы ввели число меньше '+ CV[data_1].vznos+"%!!"+' Введите число больше чем '+ Math.floor((CV[data_1].price*kurs_USD)*CV[data_1].square/100*(CV[data_1].vznos))+ "сом")
          }
          if(data_inp_vznos.value>(CV[data_1].price*kurs_USD)*CV[data_1].square){
            // data_inp_vznos.value='';
            alert('Вы ввели слишком много')
          }
          // if(data_inp_vznos.value){

          // }
          else{
            calk_square = CV[data_1].square
            input_month = -month_data+23;
            p = (CV[data_1].price*kurs_USD)*CV[data_1].square;
            vznos = calculator_input_vznos.value;
            m = (p-vznos) / input_month
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
        if(e.target.hasAttribute('data-room')){
            let data_5 = document.querySelector('[data-indicator_span_room]')
            let data_6 = document.querySelector('[data-indicator_span_square]')
            let data_7 = document.querySelector('[data-indicator_span_price]')
            data_5.innerHTML=CV[data_10].room +"-комнат";
            data_6.innerHTML=CV[data_10].square+'&#178;'
            data_7.innerHTML=CV[data_10].price+' $'
            el1.classList.add('follow-cursor_active') 
        }else {
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
  .print_screan{
    position: absolute;
    top: 0;
    left: 0;
    display: none;
  }
  @media print {
    html, body{
      height: 297mm;
      width: 210mm;
    }
    .calculator__headr{margin-top: 200px;}
    .content {
      margin-top: -100px;
    }
    .shtorka{
      height: 1800px!important;
    }
}   

@media print {
.shtorka_div_button, .shtorka__rght__btn, .wrapper, footer, .b24-widget-button-wrapper, .nav- , footer, .left, .glavnoe_content, [data-lang="1"],.do-footer, .calculator__content_button, [data-b24-crm-button-cont] {
display: none!important;
}
.print_screan{
display: block;
}
.calculator__otvet input{
border-color: var(--content);
}
.shtorka__left{
  margin-top: -30px;
}
.shtorka__rght img,
.shtorka__left img{
  width: 620px;
}
.shtoka__info__left {
    margin: 70px 0 0;
}
[data-raschet-btn-ru]{
  display: none;
}


}

@media (max-width:800px){
  .content__left__block_btns {
    width: 100%;
    left: 0;
    left: 0;
    margin: auto;
    bottom: -35%;
}
    
    .content__left__block_btns::after{
        left: 0;
        right: 0;
        margin: 0 auto;
        top: auto;
        bottom: 3.5px;
        width: 100%;
        height: 3px;

    }
    .content__left__block__ul{
        width: 80%;
        left: 0;
        right: 0;
    }

    .content__left__block__ul{
        flex-direction: row;
        height: auto;
        margin-bottom: 0px;
    }
    .content__left__block__li {
        width: auto;
        display: block;
    }
    .content__left__block_btn {
        width: 10px !important;
        height: 10px !important;
    }
    .content__left__block_3d{
        z-index: 10;
    }
    
}

@media (max-width:450px){

    .content__left__block{
        margin-top: 0px;
    }
    .content__block__item__header_p{
        font-size: 22px;
    }
}

@media (max-width:230px){
    .content__block__item__header_p{
        font-size: 18px;
    }
    
}


@media (max-width:350px){
    .content__left__block_btns{
        height: 350px;
    }
    .content__left__block__li-active .content__left__block_btn{
        transform: scale(2); 
    } 
    .content_li_active .content__left__block_btn{
        transform: scale(2); 
    } 
}

@media (max-width:300px){
    .content__left__block_btns{
        height: 300px;
    }
}
@media (max-width:666px){
  .content__left__block_btns{
    bottom: -25%;
  }
  .content__block {
    flex-direction: column;
    height: auto;
    row-gap: 100px;
}
}
</style>
</html>