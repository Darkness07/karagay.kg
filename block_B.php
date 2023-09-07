// <?php
//  $dbh = new PDO('mysql:host=176.126.165.65; port=3306; dbname=user105050_planirovka_a;', 'user105050_root', 'nJ9xZ9rK2u');
// $array = [];
//
//  foreach($dbh->query('SELECT * from planirovka_b') as $row) {
//  if ($query = $dbh->query("SELECT * FROM `planirovka_b`")){
//      $array = $query->fetchAll(PDO::FETCH_ASSOC);
//  } else{
//      print_r ($db->errorInfo);
//  };
//}
 

 $dbh = new PDO('mysql:host=localhost; dbname=user105050_planirovka_a;', 'root', '');


 foreach ($dbh->query('SELECT * from planirovka_b') as $row) {
  if ($query = $dbh->query("SELECT * FROM `planirovka_b`")) {
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
    <link rel="stylesheet" href="./new/block_B.css">
    <link rel="stylesheet" href="./new/block_B_media.css">
    <link rel="icon" href="./images/logo-title.png" type="image/png">
    <title>Блок Б</title>

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
                <p>Блок <span>"Б"</span></p>
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
                          <img src="./images/block/Б.png" alt="" class="content__left__block_3d_img">
                          <svg class="content__left__block_3d__svg" width="702" height="702" viewBox="0 0 702 702" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-etaj="8" class="filter__btn content__left__block_3d_path_9" d="M613 273.5L199.5 212.5L183 218L161 215.5L114.5 237.5L116.5 176L163.5 142.5V138L184.5 142.5V139.5L202 127L289.5 144.5L312.5 131.5L341 137.5V163L352 158.5L447 177.5V183.5L465.5 187V183.5L470.5 182.5L480.5 185L507.5 175.5L527 179.5L527.5 202L540.5 198L611 213L613 273.5Z" fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-opacity="0.01" stroke-width="1.5"/>
                            <path data-etaj="7" class="filter__btn content__left__block_3d_path_8" d="M613 273.5L199.5 212.5L183 218L161 215.5L114.5 237.5L113 279L161 257.5L182 260L198.5 256.5L614 303.5L613 273.5Z" fill="#19BBB9" fill-opacity="0.5"/>
                            <path data-etaj="6" class="filter__btn content__left__block_3d_path_7" d="M198.5 256.5L614 303.5L615 335L197.5 300.5C192.167 301.333 181.4 303 181 303C180.6 303 166.5 301.667 159.5 301L111.5 317L113 279L161 257.5L182 260L198.5 256.5Z" fill="#19BBB9" fill-opacity="0.5"/>
                            <path data-etaj="5" class="filter__btn content__left__block_3d_path_6" d="M197.5 300.5L615 335L616 366.5L196.5 346L179.5 347.5L158.5 347L109.5 360L111.5 317L159.5 301C166.5 301.667 180.6 303 181 303C181.4 303 192.167 301.333 197.5 300.5Z" fill="#19BBB9" fill-opacity="0.5"/>
                            <path data-etaj="4" class="filter__btn content__left__block_3d_path_5" d="M616 366.5L196.5 346L179.5 347.5L158.5 347L109.5 360L108 392L155.5 384.5H179L195.5 381.5L616.5 393L616 366.5Z" fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-opacity="0.01" stroke-width="1.5"/>
                            <path data-etaj="3" class="filter__btn content__left__block_3d_path_4" d="M616.5 393L195.5 381.5L179 384.5H155.5L108 392L106.5 436.5L154.5 433.5H177.5H194.5L618 430L616.5 393Z" fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-opacity="0.01" stroke-width="1.5"/>
                            <path data-etaj="2" class="filter__btn content__left__block_3d_path_3" d="M177.5 433.5H194.5L618 430.037L618.5 462L193 481H186H153L105 483L106.5 436.5L154.5 433.5H177.5Z" fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-opacity="0.01" stroke-width="1.5"/>
                            <path data-etaj="1" class="filter__btn content__left__block_3d_path_2" d="M193 481L618.5 462L619.5 495L193 531L175 525L151.5 526H103L105 483L153 481H186H193Z" fill="#19BBB9" fill-opacity="0.5" stroke="#0BD8D5" stroke-opacity="0.01" stroke-width="1.5"/>
                            <path data-etaj="0" class="filter__btn content__left__block_3d_path_1 content_path_active" d="M193 531L619.5 495L621 531L190.5 581.5L175 571.5L150 577.5L102 555.5L103 526H151.5L175 525L193 531Z" fill="#19BBB9" fill-opacity=".5" stroke="#0BD8D5" stroke-opacity="0.01" stroke-width="1.5"/>
                            <path d="M613 273.5L199.5 212.5L183 218L161 215.5L114.5 237.5L113 279L161 257.5L182 260L198.5 256.5L614 303.5L613 273.5ZM613 273.5L611 213" stroke="#0BD8D5" stroke-opacity="0.01" stroke-width="1.5"/>
                            <path d="M613 273.5L614 303.5M614 303.5L198.5 256.5L182 260L161 257.5L113 279L111.5 317L159.5 301C166.5 301.667 180.6 303 181 303C181.4 303 192.167 301.333 197.5 300.5L615 335L614 303.5Z" stroke="#0BD8D5" stroke-opacity="0.01" stroke-width="1.5"/>
                            <path d="M614 303.5L615 335M615 335L197.5 300.5C192.167 301.333 181.4 303 181 303C180.6 303 166.5 301.667 159.5 301L111.5 317L109.5 360L158.5 347L179.5 347.5L196.5 346L616 366.5L615 335Z" stroke="#0BD8D5" stroke-opacity="0.01" stroke-width="1.5"/>
                            <path d="M14 1H1V14" stroke="#0BD8D5"/>
                            <path d="M1 688L1 701H14" stroke="#0BD8D5"/>
                            <path d="M688 701H701V688" stroke="#0BD8D5"/>
                            <path d="M701 14V1L688 1" stroke="#0BD8D5"/>
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

      // ***********************************************************************************************************************//
   
    if(event.target.hasAttribute('data-bron_KV')){
      form_wrapper.classList.add('show');
    }
    if(event.target.hasAttribute('data-close-form')){
      form_wrapper.classList.remove('show');
    }
      // ***********************************************************************************************************************//
      
      
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
      
      
      // ***********************************************************************************************************************//
      
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
        fetch('https://karagay.bitrix24.kz/rest/67/h82kihgg5n6x24fk/crm.contact.add', {
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
            COMMENTS:`Блок: Б > Этадж: ${Number(data_etaj) + 1} > плошадь ${CV[data_1].square + ' m²'} | ${CV[data_1].room} комнаты`,
            UF_CRM_1693401463:"Б",
            UF_CRM_1693590597: Number(data_etaj) + 1, // Можете заполнить значениями
            UF_CRM_1693590626: CV[data_1].room, // Можете заполнить значениями
            UF_CRM_1693736225: CV[data_1].square + ' m²', // Можете заполнить значениями
          }
        };
        
        // Отправка запроса на создание сделки через веб-хук
        fetch('https://karagay.bitrix24.kz/rest/67/h82kihgg5n6x24fk/crm.deal.add', {
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
// ***********************************************************************************************************************//

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
      margin-left:50px !important;
    }
    .shtorka__right__img{
      margin-top: 120px !important;
      margin-left: 70px !important;
      
    }
  }
</style>
</html>