<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ничто не заменит ваш iPhone. Кроме нового iPhone.");


?>


<style type="text/css">

  body { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale; }

  #content { padding: 0; position: relative; background: none; background-color: #fff; }

  @font-face {
    font-family: 'Graphik LC Web';
    src: url('/promo/graphik/Graphik-Semibold-Cy-Web.eot');
    src: url('/promo/graphik/Graphik-Semibold-Cy-Web.eot?#iefix') format('embedded-opentype'),
    url('/promo/graphik/Graphik-Semibold-Cy-Web.woff2') format('woff2'),
    url('/promo/graphik/Graphik-Semibold-Cy-Web.woff') format('woff');
    font-weight: 600;
    font-style: normal;
    font-stretch: normal;
  }

  @font-face {
    font-family: 'Graphik LC Web';
    src: url('/promo/graphik/Graphik-Medium-Cy-Web.eot');
    src: url('/promo/graphik/Graphik-Medium-Cy-Web.eot?#iefix') format('embedded-opentype'),
    url('/promo/graphik/Graphik-Medium-Cy-Web.woff2') format('woff2'),
    url('/promo/graphik/Graphik-Medium-Cy-Web.woff') format('woff');
    font-weight:  500;
    font-style:   normal;
    font-stretch: normal;
  }

  @font-face {
    font-family: 'Graphik LC Web';
    src: url('/promo/graphik/Graphik-Regular-Cy-Web.eot');
    src: url('/promo/graphik/Graphik-Regular-Cy-Web.eot?#iefix') format('embedded-opentype'),
    url('/promo/graphik/Graphik-Regular-Cy-Web.woff2') format('woff2'),
    url('/promo/graphik/Graphik-Regular-Cy-Web.woff') format('woff');
    font-weight: 400;
    font-style: normal;
    font-stretch: normal;
  }
  @font-face {
    font-family: 'Graphik LC Web';
    src: url('/promo/graphik/Graphik-Light-Cy-Web.eot');
    src: url('/promo/graphik/Graphik-Light-Cy-Web.eot?#iefix') format('embedded-opentype'),
    url('/promo/graphik/Graphik-Light-Cy-Web.woff2') format('woff2'),
    url('/promo/graphik/Graphik-Light-Cy-Web.woff') format('woff');
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
  }
  @font-face {
    font-family: 'Graphik LC Web';
    src: url('/promo/graphik/Graphik-Extralight-Cy-Web.eot');
    src: url('/promo/graphik/Graphik-Extralight-Cy-Web.eot?#iefix') format('embedded-opentype'),
    url('/promo/graphik/Graphik-Extralight-Cy-Web.woff2') format('woff2'),
    url('/promo/graphik/Graphik-Extralight-Cy-Web.woff') format('woff');
    font-weight:  200;
    font-style:   normal;
    font-stretch: normal;
  }


  /* CLEARFIX */
  .cf:before, .cf:after { content: " "; display: table; }
  .cf:after { clear: both; }

  /* SOCIAL */
  .social-networks-sharing { margin: 50px 0; display: block; width: 100%; }

  body.no-js .social-networks-sharing { display: none; }

  .social-networks-sharing h3 { font-family: 'Graphik LC Web', Helvetica, Arial, sans-serif; font-size: 12pt; font-weight: normal; color: #666; line-height: 1.3; display: block; text-align: center; margin: 0 auto; margin-bottom: 18px; }

  .social-networks-sharing .pluso { display: block; width: auto; margin: 0 auto; text-align: center; }

  #header div#white-line { }

  /* BODY */
  .h-blockpromo { width: 980px; }

  /* INTRO */
  .h-intro {
    width: 980px;
    height: 544px;
    position: relative;
    overflow: hidden;
    background: #c1d26d url("/promo/trade-in/images/h-intro-bg.jpg") 0 0 no-repeat;
    background-size: 980px auto;
    box-sizing: border-box;
    color: #fff;
    text-align: center;
    padding: 0 50px 0 485px;
  }
  .h-intro__icon { margin: 97px 0 30px;}
  .h-intro__title { font: 500 40px/48px 'Graphik LC Web', Helvetica, Arial, sans-serif; letter-spacing: -1px; margin: 30px 0;}
  .h-intro__descr { font: 400 20px/28px 'Graphik LC Web', Helvetica, Arial, sans-serif; }

  /* PRODUCT INFO */
  .h-product {
    width: 980px;
    height: 690px;
    position: relative;
    overflow: hidden;
    background: #414141;
    background-size: 980px auto;
    box-sizing: border-box;
    color: #fff;
    text-align: center;
  }
  .h-product__descr {font: 400 14px/20px 'Graphik LC Web', Helvetica, Arial, sans-serif; }
  .h-product__icon {margin: 20px 0 15px;}
  .h-product__nav {font: 400 14px/20px 'Graphik LC Web', Helvetica, Arial, sans-serif; padding:20px 0 50px; position: relative; display: block; cursor: pointer; }
  .h-product__nav:hover {opacity: .7;}
  .h-product__nav::after { display: block; width: 26px; height: 14px;
    background: transparent url("/promo/trade-in/images/icon-arrow.png") 0 0 no-repeat; content: ' '; position: absolute; top:60px; left: 50%; margin-left: -13px;
  background-size: 26px auto;}
  .h-product__nav.active::after { display: block; width: 26px; height: 14px;
    background: transparent url("/promo/trade-in/images/icon-arrow.png") 0 -14px no-repeat; content: ' '; position: absolute; top:60px; left: 50%; margin-left: -13px;
    background-size: 26px auto;}

  .h-product-iphone-se { background: #c3d37b; height: 650px;}
  .h-product-iphone6s { background: #eececa; height: 650px;}

  /* iphone 8 */
  .h-product-iphone-8 { background: #faf1ed; height: 690px;}
  .h-product-iphone-8 .h-product__descr { color: #d9a080; }
  .h-product-iphone-8 .h-product__img { margin: 55px auto 25px; }
  .h-product-iphone-8 .h-product__nav {color: #d9a080;}

  .h-product-iphone-8 .h-product__nav::after { display: block; width: 26px; height: 14px;
    background: transparent url("/promo/trade-in/images/icon-arrow-8.png") 0 0 no-repeat; content: ' '; position: absolute; top:60px; left: 50%; margin-left: -13px;
    background-size: 26px auto;}
  .h-product-iphone-8 .h-product__nav.active::after { display: block; width: 26px; height: 14px;
    background: transparent url("/promo/trade-in/images/icon-arrow-8.png") 0 -14px no-repeat; content: ' '; position: absolute; top:60px; left: 50%; margin-left: -13px;
    background-size: 26px auto;}


  /* PRODUCT ITEM */
  .h-product-itemgroup { width: 742px; margin: 0 auto; overflow: hidden; box-sizing: border-box; }
  .h-product-item { width: 371px; float: left; color: #505050; text-align: left; }
  .h-product-item__title {font: 500 25px/20px 'Graphik LC Web', Helvetica, Arial, sans-serif;}
  .h-product-item__title a {color: #505050; text-decoration: none; }
  .h-product-item__descr {font: 400 14px/20px 'Graphik LC Web', Helvetica, Arial, sans-serif; margin: 25px 0;}
  .h-product-item__storage-title {font: 500 15px/20px 'Graphik LC Web', Helvetica, Arial, sans-serif;}
  .h-product-item__storage {font: 400 14px/20px 'Graphik LC Web', Helvetica, Arial, sans-serif; margin: 25px 0 50px; color: #5dc572; }
  .h-product-item__storage a {color: #5dc572; text-decoration: none; margin: 0 20px;}
  .h-product-item__storage a:hover {opacity: .85;}
  .h-product-item__storage a:first-child {margin-left: 0;}


  .h-footer { width: 732px; margin: 30px auto; font: 400 12px/15px 'Graphik LC Web', Helvetica, Arial, sans-serif; color: #000000;}
  .h-footer a  {color: #000000;}
</style>


<div class="h-blockpromo">

  <!-- +++++ INTRO +++++ -->
  <div class="h-intro">
    <div class="h-intro__icon"><img src="/promo/trade-in/images/icon-intro.png" alt="" width="108"></div>
    <div class="h-intro__title">Ничто не заменит<br>ваш iPhone. Кроме<br>нового iPhone.</div>
    <div class="h-intro__descr">Обменяйте свой iPhone на скидку<br>при покупке нового.</div>
  </div>
  <!-- +++++ INTRO end +++++ -->



  <!-- +++++ PRODUCT INFO +++++ -->
  <div class="h-product h-product-iphone-8">
    <div class="h-product__img"><a href="/promo/apple/iphone-8/"><img src="/promo/trade-in/images/bg-iphone8.png" alt="" width="307"></a></div>
    <div class="h-product__descr">Новое поколение iPhone. Передняя и&nbsp;задняя панели выполнены из&nbsp;самого прочного стекла,<br>когда-либо созданного для iPhone, а&nbsp;рамка&nbsp;&mdash; из&nbsp;алюминия, применяемого в&nbsp;аэрокосмической<br>отрасли. iPhone 8&nbsp;и&nbsp;iPhone 8&nbsp;Plus заряжаются без проводов. Защищены от&nbsp;воды и&nbsp;пыли. И&nbsp;ещё<br>iPhone 8&nbsp;и&nbsp;iPhone 8&nbsp;Plus поддерживают дополненную реальность в&nbsp;играх и&nbsp;приложениях.<br>iPhone 8&nbsp;и&nbsp;iPhone 8&nbsp;Plus&nbsp;&mdash; никогда ещё интеллект не&nbsp;был в&nbsp;такой прекрасной форме.</div>
    <div class="h-product__nav h-product__nav--iphone8"><strong>Технические характеристики iPhone 8</strong></div>
  </div>
  <!-- +++++ PRODUCT INFO end +++++ -->


  <!-- +++++ PRODUCT ITEMGROUP +++++ -->
  <div class="h-product-itemgroup h-product-itemgroup--iphone8" style="display: none;">

    <div class="h-product-item">
      <div class="h-product-item__img"><a href="/apple-iphone/iphone-8/type_iphone-8/"><img src="/promo/trade-in/images/iphone8.jpg" alt="" width="371"></a></div>
      <div class="h-product-item__title"><a href="/apple-iphone/iphone-8/type_iphone-8/">iPhone 8</a></div>
      <div class="h-product-item__descr">Дисплей Retina HD 4,7″ с технологией True Tone<br>
        Корпус из стекла и алюминия с защитой от воды<br>
        и пыли<br>
        Камера 12 Мп с записью видео <br>4K (60 кадров/с)<br>
        HD-камера FaceTime 7 Мп со вспышкой Retina Flash<br>
        Датчик идентификации Touch ID<br>
        Процессор A11 Bionic<br>
        Беспроводная зарядка</div>
      <div class="h-product-item__storage-title">Память</div>
      <div class="h-product-item__storage"><a href="/apple-iphone/type_iphone-8/hdd_64gb/">64 ГБ</a>|<a href="/apple-iphone/type_iphone-8/hdd_256gb/">256 ГБ</a></div>
    </div>

    <div class="h-product-item">
      <div class="h-product-item__img"><a href="/apple-iphone/type_iphone-8-plus/"><img src="/promo/trade-in/images/iphone8plus.jpg" alt="" width="371"></a></div>
      <div class="h-product-item__title"><a href="/apple-iphone/type_iphone-8-plus/">iPhone 8 Plus</a></div>
      <div class="h-product-item__descr">Дисплей Retina HD 5,5″ с технологией True Tone<br>
        Корпус из стекла и алюминия с защитой от воды<br>
        и пыли<br>
        Двойная камера 12 Мп с записью видео <br>4K (60 кадров/с)<br>
        HD-камера FaceTime 7 Мп со вспышкой Retina Flash<br>
        Датчик идентификации Touch ID<br>
        Процессор A11 Bionic<br>
        Беспроводная зарядка</div>
      <div class="h-product-item__storage-title">Память</div>
      <div class="h-product-item__storage"><a href="/apple-iphone/type_iphone-8-plus/hdd_64gb/">64 ГБ</a>|<a href="/apple-iphone/type_iphone-8-plus/hdd_256gb/">256 ГБ</a></div>
    </div>

  </div>
  <!-- +++++ PRODUCT ITEMGROUP end +++++ -->




  <!-- +++++ PRODUCT INFO +++++ -->
  <div class="h-product">
    <div class="h-product__img"><a href="/promo/apple/iphone-7/"><img src="/promo/trade-in/images/bg-iphone7.png" alt="" width="307"></a></div>
    <div class="h-product__descr">В iPhone 7 все важнейшие аспекты iPhone значительно улучшены. Это принципиально новая<br>система камер для фото- и видеосъёмки. Максимально мощный и экономичный аккумулятор<br>iPhone. Стереодинамики с богатым звучанием. Самый яркий и разноцветный из всех<br>дисплеев iPhone. Защита от брызг и воды. И его внешние данные впечатляют не менее,<br>чем внутренние возможности. Всё это iPhone 7.</div>
    <div class="h-product__nav h-product__nav--iphone7"><strong>Технические характеристики iPhone 7</strong></div>
  </div>
  <!-- +++++ PRODUCT INFO end +++++ -->


  <!-- +++++ PRODUCT ITEMGROUP +++++ -->
  <div class="h-product-itemgroup h-product-itemgroup--iphone7" style="display: none;">

    <div class="h-product-item">
      <div class="h-product-item__img"><a href="/apple-iphone/type_iphone-7/"><img src="/promo/trade-in/images/iphone7.jpg" alt="" width="371"></a></div>
      <div class="h-product-item__title"><a href="/apple-iphone/type_iphone-7/">iPhone 7</a></div>
      <div class="h-product-item__descr">Процессор A10 Fusion<br>
        Сопроцессор движения М10<br>
        Камера 12 Мп с диафрагмой ƒ/1.8<br>
        Запись видео с разрешением 4K<br>
        Дисплей Retina 4,7″ 1334x750 пикс.<br>
        Датчик идентификации Touch ID</div>
      <div class="h-product-item__storage-title">Память</div>
      <div class="h-product-item__storage"><a href="/apple-iphone/type_iphone-7/hdd_32gb/">32 ГБ</a>|<a href="/apple-iphone/type_iphone-7/hdd_128gb/">128 ГБ</a>|<a href="/apple-iphone/type_iphone-7/hdd_256gb/">256 ГБ</a></div>
    </div>

    <div class="h-product-item">
      <div class="h-product-item__img"><a href="/apple-iphone/type_iphone-7-plus/"><img src="/promo/trade-in/images/iphone7plus.jpg" alt="" width="371"></a></div>
      <div class="h-product-item__title"><a href="/apple-iphone/type_iphone-7-plus/">iPhone 7 Plus</a></div>
      <div class="h-product-item__descr">Процессор A10 Fusion<br>
        Сопроцессор движения М10<br>
        Двойная камера 12 Мп с диафрагмами ƒ/1.8 и ƒ/2.8<br>
        Запись видео с разрешением 4K<br>
        Дисплей Retina 5,5″ 1920x1080 пикс.<br>
        Датчик идентификации Touch ID</div>
      <div class="h-product-item__storage-title">Память</div>
      <div class="h-product-item__storage"><a href="/apple-iphone/type_iphone-7-plus/hdd_32gb/">32 ГБ</a>|<a href="/apple-iphone/type_iphone-7-plus/hdd_128gb/">128 ГБ</a>|<a href="/apple-iphone/type_iphone-7-plus/hdd_256gb/">256 ГБ</a></div>
    </div>

  </div>
  <!-- +++++ PRODUCT ITEMGROUP end +++++ -->


  <!-- +++++ PRODUCT INFO +++++ -->
  <div class="h-product h-product-iphone-se">
    <div class="h-product__img"><a href="/promo/apple/iphone-se/"><img src="/promo/trade-in/images/bg-iphone-se.png" alt="" width="307"></a></div>
    <div class="h-product__descr">iPhone SE — это самый мощный 4-дюймовый смартфон, который оснащается передовыми<br>камерами, отличается невероятной производительностью и выполнен в знакомом любимом<br>дизайне. Другими словами, это большой прогресс малой формы.</div>
    <div class="h-product__nav h-product__nav--iphone-se"><strong>Технические характеристики iPhone SE</strong></div>
  </div>
  <!-- +++++ PRODUCT INFO end +++++ -->

  <!-- +++++ PRODUCT ITEMGROUP +++++ -->
  <div class="h-product-itemgroup h-product-itemgroup--iphone-se" style="display: none; width:980px;height: 370px; padding-left: 495px; position: relative;">
    <div class="h-product-item">
      <div class="h-product-item__img" style="position: absolute; left: 0; top: 0;"><a href="/apple-iphone/type_iphone-se/"><img src="/promo/trade-in/images/iphone-se.jpg" alt="" width="495"></a></div>
      <div class="h-product-item__title" style="margin-top: 70px;"><a href="/apple-iphone/type_iphone-se/">iPhone SE</a></div>
      <div class="h-product-item__descr">Процессор A9 с сопроцессором М9<br>
        Камера 12 Мп<br>
        Запись видео с разрешением 4K<br>
        Дисплей Retina 4″ 1136x640 пикс.<br>
        Датчик идентификации Touch ID</div>
      <div class="h-product-item__storage-title">Память</div>
      <div class="h-product-item__storage"><a href="/apple-iphone/type_iphone-se/hdd_16gb/">16 ГБ</a>|<a href="/apple-iphone/type_iphone-se/hdd_32gb/">32 ГБ</a>|<a href="/apple-iphone/type_iphone-se/hdd_64gb/">64 ГБ</a>|<a href="/apple-iphone/type_iphone-se/hdd_128gb/">128 ГБ</a></div>
    </div>
  </div>
  <!-- +++++ PRODUCT ITEMGROUP end +++++ -->



  <!-- +++++ PRODUCT INFO +++++ -->
  <div class="h-product h-product-iphone6s">
    <div class="h-product__img"><a href="/promo/apple/iphone-6s/"><img src="/promo/trade-in/images/bg-iphone6s.png" alt="" width="307"></a></div>
    <div class="h-product__descr">iPhone 6s с дисплеем Retina HD 4,7 дюйма и технологией 3D Touch. Процессор A9<br>с 64-битной архитектурой уровня настольного компьютера. Камера 12 Мп и Live Photos.<br>Touch ID. Быстрая связь 4G LTE и Wi-Fi. Аккумулятор большой ёмкости. Плюс iOS 10 и iCloud.<br>Всё это в изящном цельном корпусе unibody.</div>
    <div class="h-product__nav h-product__nav--iphone6s"><strong>Технические характеристики iPhone 6s</strong></div>
  </div>
  <!-- +++++ PRODUCT INFO end +++++ -->

  <!-- +++++ PRODUCT ITEMGROUP +++++ -->
  <div class="h-product-itemgroup h-product-itemgroup--iphone6s" style="display: none;">

    <div class="h-product-item">
      <div class="h-product-item__img"><a href="/apple-iphone/type_iphone-6s/"><img src="/promo/trade-in/images/iphone6s.jpg" alt="" width="371"></a></div>
      <div class="h-product-item__title"><a href="/apple-iphone/type_iphone-6s/">iPhone 6s</a></div>
      <div class="h-product-item__descr">Процессор A9<br>
        Сопроцессор движения М9<br>
        Камера 12 Мп<br>
        Запись видео с разрешением 4K<br>
        Дисплей Retina 4,7″ 1334x750 пикс.<br>
        Датчик идентификации Touch ID</div>
      <div class="h-product-item__storage-title">Память</div>
      <div class="h-product-item__storage"><a href="/apple-iphone/type_iphone-6s/hdd_16gb/">16 ГБ</a>|<a href="/apple-iphone/type_iphone-6s/hdd_32gb/">32 ГБ</a>|<a href="/apple-iphone/type_iphone-6s/hdd_64gb/">64 ГБ</a>|<a href="/apple-iphone/type_iphone-6s/hdd_128gb/">128 ГБ</a></div>
    </div>

    <div class="h-product-item">
      <div class="h-product-item__img"><a href="/apple-iphone/type_iPhone-6s-plus/"><img src="/promo/trade-in/images/iphone6splus.jpg" alt="" width="371"></a></div>
      <div class="h-product-item__title"><a href="/apple-iphone/type_iPhone-6s-plus/">iPhone 6s Plus</a></div>
      <div class="h-product-item__descr">Процессор A9<br>
        Сопроцессор движения М9<br>
        Камера 12 Мп<br>
        Запись видео с разрешением 4K<br>
        Дисплей Retina 5,5″ 1920x1080 пикс.<br>
        Датчик идентификации Touch ID</div>
      <div class="h-product-item__storage-title">Память</div>
      <div class="h-product-item__storage"><a href="/apple-iphone/type_iPhone-6s-plus/hdd_16gb/">16 ГБ</a>|<a href="/apple-iphone/type_iPhone-6s-plus/hdd_32gb/">32 ГБ</a>|<a href="/apple-iphone/type_iPhone-6s-plus/hdd_128gb/">128 ГБ</a></div>
    </div>

  </div>
  <!-- +++++ PRODUCT ITEMGROUP end +++++ -->



  <div class="h-compare"><a href="/promo/apple/iphone-comparison/"><img src="/promo/trade-in/images/billboard-compare.jpg" alt="" width="980"></a></div>


  <div class="h-footer">
    Условия акции.<br>
    Срок действия акции не&nbsp;ограничен.<br>
    Акция действует при покупке в&nbsp;розничных магазинах и&nbsp;при заказе в&nbsp;интернет-магазине при условии самовывоза.<br>
    Сдать по&nbsp;акции можно iPhone 4&nbsp;и&nbsp;новее, а&nbsp;приобрести&nbsp;&mdash; iPhone 6&nbsp;и&nbsp;новее. Сдаваемый iPhone должен быть приобретен у&nbsp;авторизованного партнера компании Apple в&nbsp;России.<br>
    В&nbsp;акции могут принять участие физические лица, достигшие 18&nbsp;летнего возраста.<br>
    Чтобы узнать возможный размер скидки, нужно обратиться в&nbsp;любой розничный магазин с&nbsp;паспортом и&nbsp;с&nbsp;iPhone.<br>
    При покупке по&nbsp;акции оформление iPhone в&nbsp;рассрочку невозможно, но&nbsp;доступен кредит. Акция не&nbsp;суммируется с&nbsp;другими скидками и&nbsp;специальными предложениями. Бонусная программа действует только на&nbsp;начисление, списание бонусов недоступно.<br>
    Количество товара, участвующего в&nbsp;акции, ограничено. Компания оставляет за&nbsp;собой право на&nbsp;досрочное завершение акции.
    <br><br>
    <a target="_blank" href="/promo/trade-in/Трейд_ин_Apple_iPhone.pdf">Ознакомьтесь с&nbsp;полными условиями акции</a>.
  </div>




  <script>
    $( "div.h-product__nav--iphone8" ).click(function() {
      $('div.h-product-itemgroup--iphone8').fadeToggle( "fast", "linear" );
      $(this).toggleClass("active");
    });
    $( "div.h-product__nav--iphone7" ).click(function() {
      $('div.h-product-itemgroup--iphone7').fadeToggle( "fast", "linear" );
      $(this).toggleClass("active");
    });
    $( "div.h-product__nav--iphone-se" ).click(function() {
      $('div.h-product-itemgroup--iphone-se').fadeToggle( "fast", "linear" );
      $(this).toggleClass("active");
    });
    $( "div.h-product__nav--iphone6s" ).click(function() {
      $('div.h-product-itemgroup--iphone6s').fadeToggle( "fast", "linear" );
      $(this).toggleClass("active");
    });
  </script>






</div>


<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
