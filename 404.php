<?php
if(isset($_POST['cbi-phone']) && isset($_POST['submit']) && empty($_COOKIE["ORDER"])) {
  setcookie ("ORDER", 1,time()+300);
  echo "<div class=\"res\">Ваша заявка успешно отправлена! Мы вам перезвоним!</div>";
  sendSMS("+79143109535","Новый клиент. Тел: ".$_POST['cbi-phone']);
} elseif(isset($_POST['submit']) ) {
  echo "<div class=\"res err\">Вы уже отправляли заявку!</div>";
}
?>
<!DOCTYPE HTML>
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
	<title><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/c/m.css">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/i/favicon.ico"></link>
	<script src="<?php bloginfo('template_url'); ?>/j/jquery.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/j/jquery.maskedinput.min.js" type="text/javascript"></script>
</head>

<body>
	<div id="message" class="error">404! Страница не найдена!</div>
	<div class="w100 error" id="about-short">
		<div class="w1000">
			<img src="<?php bloginfo('template_url'); ?>/i/Cancel-100.png" alt="Вскрытие замков Хабаровск" />
			<p>Это могло произойти по следующим причинам:<br />
			- страница была удалена или переименована,<br />
			- страница никогда не существовала,<br />
			- у Вас была неправильная ссылка. <br /><br />
			<b>Что делать в этом случае?</b><br />
			- перейдите на <a href="<?php echo get_settings('home'); ?>">Главную страницу</a><br />
			- воспользуйтесь Поиском,<br />
			- сообщите Админу о битой ссылке. Спасибо!</p>
		</div>
	</div>

	<div class="w100 error" id="quest"><p>Потеряли ключ? Сломался замок? Заклинило дверь? – Звоните нам тел.666-112</p></div>
	<div class="w100" id="citys">
2009-<? echo date('Y'); ?> «Vzlom-zamkov27.ru» Хабаровск
</div>
	<a href="tel:+7(4212)666-112" id="call-now"></a>
	
	<script type="text/javascript">
		$(function(){
			$('#cbi-phone').mask("+7 (999) 999-9999");
		});
	</script>
</body>
</html>