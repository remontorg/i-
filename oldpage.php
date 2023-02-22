<?php


if(isset($_POST['cbi-phone']) && isset($_POST['submit']) && empty($_COOKIE["ORDER"])) {
  setcookie ("ORDER", 1,time()+300);
  echo "<div class=\"res\">Ваша заявка успешно отправлена! Мы вам перезвоним!</div>";
  sendSMS("+79143109535","Номер клиента: ".$_POST['cbi-phone']);
} elseif(isset($_POST['submit']) ) {
  echo "<div class=\"res err\">Вы уже отправляли заявку!</div>";
}
?>
<!DOCTYPE HTML>
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
<meta name="google-site-verification" content="E3nBi-mvgv9Tc1jAKGnU9RRxj2dwaeBsKmcIcGAVO_Y" />
<title><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/c/m.css">
<link rel="icon" href="<?php bloginfo('template_url'); ?>/i/favicon.ico"></link>
<script src="<?php bloginfo('template_url'); ?>/j/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/j/jquery.maskedinput.min.js" type="text/javascript"></script>
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42332128-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-42332128-8');
  gtag('config', 'AW-939103785');

</script>
</head>
<body>
	<img src="<?php bloginfo('template_url'); ?>/i/padlock.png" id="imglock" />
	<div class="w1000" id="head">
		<h1><?php the_title(); ?></h1>
		<div id="wrap-serv">
			<div id="ab-h2">Открываем <b>98%</b> замков любого типа, без повреждения двери, за <b>7</b> минут</div>
			<ul id="service" style="display: none;">
				<li>Вскрытие замков всех типов</li>
				<li>Открытие дверей, сейфов и автомобилей</li>
				<li>Замена, ремонт и установка замков</li>
				<li>Работаем круглосуточно</li>
			</ul>
		</div>
	</div>
</div>
<div class="w100" id="callback">
    <div class="w1000">
        <p>Закажите звонок, и через 3 минуты свободный мастер свяжется с вами</p>
        <form method="POST" id="forms" action="<?php echo $_SERVER["REQUEST_URI"]; ?>"
        onsubmit="yaCounter36741230.reachGoal('ORDER'); gtag_report_conversion(); return true;"
        >
          <input type="text" id="cbi-phone" name="cbi-phone" placeholder="+7" />
          <button id="send-cb" type="submit" name="submit" class="btn gr-grn">Заказать звонок</button>
        </form>
    </div>
</div>
<div class="w100" id="menu">
	<div class="w1000">
		<ul>
      <li><a href="<?php bloginfo('url'); ?>" class="" title="Вскрытие замков в Хабаровске"><img src="<?php bloginfo('template_url'); ?>/i/vskrytie-zamkov.png" title="Вскрытие замков" /><br/>Вскрытие замков</a></li>
      <li><a href="<?php echo get_page_link(10); ?>" class="" title="Вскрытие дверей в Хабаровске"><img src="<?php bloginfo('template_url'); ?>/i/vskrytie-dverej.png" title="Вскрытие дверей" /><br/>Вскрытие дверей</a></li>
			<li><a href="<?php echo get_page_link(12); ?>" class="" title="Вскрытие автомобилей в Хабаровске"><img src="<?php bloginfo('template_url'); ?>/i/vskrytie-avto.png" title="Вскрытие автомобилей" /><br/>Вскрытие авто</a></li>
			<li><a href="<?php echo get_page_link(15); ?>" class="" title="Вскрытие сейфов в Хабаровске"><img src="<?php bloginfo('template_url'); ?>/i/vskrytie-sejfov.png" title="Вскрытие сейфов" /><br/>Вскрытие сейфов</a></li>
			<li><a href="<?php echo get_page_link(17); ?>" class="" title="Установка и замена замков в Хабаровске"><img src="<?php bloginfo('template_url'); ?>/i/ustanovka-zamkov.png" title="Замена замков" /><br/>Замена замков</a></li>
			<li><a href="<?php echo get_page_link(21); ?>"><img src="<?php bloginfo('template_url'); ?>/i/key.png"/><br/>Изготовление ключей</a></li>
			<li><a href="<?php echo get_page_link(23); ?>"><img src="<?php bloginfo('template_url'); ?>/i/zmk.png"/><br/>Ремонт замков</a></li>
		</ul>
	</div>
</div>
<div class="w100" id="contact">
    <div class="w1000">
        <a class="phone gr-orn" onclick="gtag_report_conversion('tel:+74212666112'); return false;">тел.666-112</a>
        <span id="alltime"><img src="<?php bloginfo('template_url'); ?>/i/24-7-icon.png" /><i>круглосуточно</i></span>
        <span id="free-master">Сейчас свободны<br/><b>4</b> из 6 мастеров</span>
    </div>
</div>
<h1 class="assosiation"><center><i>Хабаровская ассоциация вскрытия замков и дверей</i></center></h1>
<div id="message">У наших мастеров - руки из плеч :)</div>
<div class="w100" id="about-short">
	<div class="w1000">
    <img src="<?php bloginfo('template_url'); ?>/i/door-master.png" alt="Вскрытие замков Хабаровск" />
		<p>Мы <b>вскрываем замки</b> любой сложности <b>без повреждений</b>, не взламывая двери. По вашей просьбе мастер может осуществить замену замка на новый, того же типа или с более секретным механизмом.</p>
		<p>Для вскрытия замка необходимо иметь при себе или внутри помещения <b>документ</b>, подтверждающий право собственности или договор аренды с печатями.</p>
		<p>Мастер прибудет к вам в течение <b>30-40 минут</b> после вызова. <b>5</b> опытных мастеров дежурят по Хабаровску 24 часа.</p>
	</div>
</div>
<div class="w100" id="benf">
	<div class="w1000">
		<ul id="benefits">
			<li><img src="<?php bloginfo('template_url'); ?>/i/Exercise-50.png" /> <i>Мастер приедет в течение 30 минут</i></li>
			<li><img src="<?php bloginfo('template_url'); ?>/i/Unlock-50.png" /> <i>Открываем замки любой сложности</i></li>
			<li><img src="<?php bloginfo('template_url'); ?>/i/Door-50.png" /> <i>Вскрываем двери без повреждения</i></li>
			<li><img src="<?php bloginfo('template_url'); ?>/i/Good_Quality-50.png" /> <i>Гарантия качества выполненных работ</i></li>
		</ul>
	</div>
</div>    

<div class="w100" id="indicators">
	<div class="w1000">
		<ul>
			<li><i>4 376</i><b>вскрытых <br/>замков</b></li>
			<li><i>14</i><b>лет <br/>работы</b></li>
			<li><i>5</i><b>опытных <br/>мастеров</b></li>
		</ul>
	</div>
</div>
	<div class="w100" id="cont3">
		<div class="w1000">
			<h2><?php the_field('заголовок_текста_1'); ?></h2>
			<?php the_field('текст_1'); ?>
		</div>
	</div>	
	<?php ?>
		<div class="w100" id="cont3">
			<div class="w1000">
				<div class="txt">
					<h2>Мы предоставляем услуги:</h2>
					<?php the_field('текст_3'); ?>
				</div>
				<div class="txt">
					<h2><?php the_field('заголовок_текста_2'); ?></h2>
					<?php the_field('текст_2'); ?>
				</div>
				<div class="txt" style="padding: 1em 0 1em 1em;">
					<h2>Цены на вскрытие замков в Хабаровске</h2>
					<table id="price" style="display: none;">
									</table>
					<p>Цена на услугу может быть как выше, так и ниже той, что озвучена по телефону, так как всё зависит от сложности замка, расположения двери и других параметров. Конечная стоимость озвучивается мастером выполняющим работу</p>
					</div>
			</div>
		</div>
	<?php ?>
<div class="w100" id="how-it-work">
    <div class="w1000">
        <ul>
            <li><img src="<?php bloginfo('template_url'); ?>/i/Treatment_Plan-100.png" /><p>Позвоните нам и объясните диспетчеру вашу проблему</p></li>
            <li><img src="<?php bloginfo('template_url'); ?>/i/Timer-100.png" /><p>Встречайте специалиста через 30-40 минут после вызова</p></li>
            <li><img src="<?php bloginfo('template_url'); ?>/i/Security_Checked-100.png" /><p>Замок открыт без повреждений и применения грубой силы</p></li>
        </ul>
    </div>
</div>
<?php /*
<div class="w100" id="lockpick">
    <div class="w1000">
	<?php if(!is_page(61)){ ?>
        <h3><?php the_field('заголовок_текста_3'); ?></h3>
        <span id="wiki">
            <img src="<?php bloginfo('template_url'); ?>/i/<?php echo get_the_ID(); ?>.png" alt="Вскрытие замков в Хабаровске" />
        </span>
        <?php the_field('текст_3'); ?>
	<?php } else {echo ddsg_create_sitemap();} ?>
    </div>
</div>
*/ ?>
<div class="w100" id="quest">
  <p>Потеряли ключ? Сломался замок? Заклинило дверь?</p>
  <div style="margin: 20px 0; font-size: 22px; text-align: center; float: none;">
    <p>г. Хабаровск ул. Стрельникова, д. 22</p>
    <p style="margin-bottom: 15px; margin-top:5px; font-size:20px;">тел. +7 (4212) 666-112</p>
    <p>г. Хабаровск ул. Краснореченская, д. 73</p>
    <p style="margin-top: 5px; font-size: 20px;">тел. +7 (909) 823-61-12</p>
    <p style="margin-top: 15px; font-size: 20px;">Мы в <a href="https://yandex.ru/profile/63227142735">Яндексе</a></p>
  </div>
</div>

<div class="w100" id="citys">
2009-<? echo date('Y'); ?> «Vzlom-zamkov27.ru» Хабаровск
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(92515961, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/92515961" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- HoverSignal -->
<script type="text/javascript" >
(function (d, w) {
var n = d.getElementsByTagName("script")[0],
s = d.createElement("script"),
f = function () { n.parentNode.insertBefore(s, n); };
s.type = "text/javascript";
s.async = true;
s.src = "https://app.hoversignal.com/Api/SignalScript/9de8ec91-faaa-442c-907e-0ea5df9c70f4";
if (w.opera == "[object Opera]") {
d.addEventListener("DOMContentLoaded", f, false);
} else { f(); }
})(document, window);
</script>
<!-- /Hoversignal -->
<a href="//scroogefrog.com/en/"><img src="//stat.clickfrog.ru/img/clfg_ref/icon_0.png" alt="the best adware and spyware removal software"></a><div id="clickfrog_counter_container" style="width:0px;height:0px;overflow:hidden;"></div><script type="text/javascript">(function(d, w) {var clickfrog = function() {if(!d.getElementById('clickfrog_js_container')) {var sc = document.createElement('script');sc.type = 'text/javascript';sc.async = true;sc.src = "//stat.clickfrog.ru/c.js?r="+Math.random();sc.id = 'clickfrog_js_container';var c = document.getElementById('clickfrog_counter_container');c.parentNode.insertBefore(sc, c);}};if(w.opera == "[object Opera]"){d.addEventListener("DOMContentLoaded",clickfrog,false);}else {clickfrog();}})(document, window);</script><noscript><div style="width:0px;height:0px;overflow:hidden;"><img src="//stat.clickfrog.ru/no_script.php?img" style="width:0px; height:0px;" alt=""/></div></noscript><script type="text/javascript">var clickfrogru_uidh='0403a3ae93bada44dc48755ac18e0d1c';</script>
</body>
</html>