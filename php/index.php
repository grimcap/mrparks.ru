<?

$stage =  $_GET['stage'];

if($stage){
	if($stage != 'esipovo' && $stage != 'puschino'){
		$stage = 'korolev';
	}

	if($stage == 'korolev'){
		$stageData = [
			'name' => 'Королев',
			'title' => 'Королев - индустриальный парк для развития науки и инноваций',
			'description' => 'Инвестируйте в индустриальный парк Королев. Находится в Московской области',
			'selK' => ' -selected',
			'h2' => ' - уникальная площадка, представляющая собой гибрид индустриального парка и&nbsp;технопарка, расположенная в 7 км от Москвы',
			'map_lat' => '55.937129', 
			'map_lon' => '37.847606',
			'price_rent' => '300',
			'price_buy' => '3500',
			'' => '',
		];

	} else if($stage == 'esipovo'){
		$stageData = [
			'name' => 'Есипово',
			'title' => 'Есипово - индустриальный парк с лучшей инфраструктурой для бизнеса.',
			'description' => 'Инвестируйте в индустриальный парк Есипово. Находится в Московской области',
			'selE' => ' -selected',
			'h2' => ' - индустриальный парк с готовой инфраструктурой и отличной транспортной доступностью. Расположен в Солнечногорском районе и занимает земли промышленного назначения.',
			'map_lat' => '56.079717',
			'map_lon' => '37.092698',
			'price_rent' => '7500',
			'price_buy' => '1400',
		];
	} else {
		$stageData = [
			'name' => 'Пущино',
			'title' => 'Пущино - индустриальный парк и центр притяжения науки и новых открытий',
			'description' => 'Инвестируйте в индустриальный парк Пущино. Находится в Московской области',
			'selP' => ' -selected',
			'h2' => ' - уникальный индустриальный парк, который объединяет инвесторов, желающих занять свое место в фармацевтической гонке. Расположен в Серпуховском районе.',
			'map_lat' => '54.815105',
			'map_lon' => '37.600645',
			'price_rent' => '16,5',
			'price_buy' => '81',
		];
	}
} else {
	$stageData = [
		'name' => 'КРМО',
		'title' => 'Индустриальные парки Московской области',
		'description' => 'Инвестируйте в индустриальные парки московской области. Государственная поддержка инвесторов. Корпорация развития Московской области.',
		'sel' => ' -selected',
	];
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="<?=$stageData['description']?>" />
	<meta name="keywords" content="" />
	<title><?=$stageData['title']?></title>

	<link rel="shortcut icon" href="img/favicon.png">
	<link rel="stylesheet" href="/css/main.css" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M83SGW3');</script>
<!-- End Google Tag Manager -->
</head>
<body class="<? if($stage) {echo 'stage '.$stage;} else {echo 'main';}?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M83SGW3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="watermark"><?=$stageData['name']?></div>

<section class="section-menu"><div class="w">
	<div class="logo">
		<a class="logo" href="http://mrparks.ru/"><img src="img/logo.png" alt="Инвестирование в парки Московской области" title="Инвестирование в парки Московской области"></a>
	</div>
	<div class="center">
		<div class="info">
			<a class="email -ico" href="mailto:invest@mosregco.ru">invest@mosregco.ru</a>
			<div class="time -ico">Пн - Пт с 9:00 до 18:00</div>
		</div>
		<div class="menu">
			<a class="itm<?=$stageData['sel']?>" href="/">Главная</a>
			<a class="itm<?=$stageData['selK']?>" href="/korolev">Королев</a>
			<a class="itm<?=$stageData['selE']?>" href="/esipovo">Есипово</a>
			<a class="itm<?=$stageData['selP']?>" href="/puschino">Пущино</a>
		</div>
	</div>
	<div class="callback">
		<a class="phone" href="tel:+74952807984">+7 495 280-79-84</a>
		<div>
			<div class="link js-popUp-open" for="popUp-req">Заказать звонок</div>
			<a class="lang" href="/en/<?=$stage?>">EN</a>
		</div>
	</div>
</div></section>


<?
if (!$stage){
	include 'p_main.php';
} else {
	include 'p_stage.php';
}
?>


<section class="section-footer"><div class="w">
	<div class="logo">
		<a class="img" href="http://mrparks.ru/"><img src="img/logo_btm.png" alt="Инвестирование в парки Московской области" title="Инвестирование в парки Московской области"></a>
	</div>
	<div class="center">
		<div class="menu">
			<a class="itm<?=$stageData['selK']?>" href="/korolev">Королев</a>
			<a class="itm<?=$stageData['selE']?>" href="/esipovo">Есипово</a>
			<a class="itm<?=$stageData['selP']?>" href="/puschino">Пущино</a>
		</div>
		<div class="info">
			<div class="email -ico">invest@mosregco.ru</div>
			<div class="time -ico">Пн - Пт с 9:00 до 18:00</div>
			<a class="phone -ico" href="tel:+74952807984">+7 495 280-79-84</a>
		</div>
	</div>
	<div class="contacts">
		<div class="adr">г. Москва, ул. Кулакова, д.&nbsp;20, корп.1, БЦ&nbsp;«Орбита-2», корп. Альфа, 6&nbsp;этаж</div>
		<div class="socs_cont">
			<div class="hdr">Мы в социальных сетях:</div>
			<div class="socs">
				<a class="soc -fb" href="https://www.facebook.com/mosregco" target="_blank"></a>
				<a class="soc -it" href="https://www.instagram.com/invest_in_moscow_region/" target="_blank"></a>
				<a class="soc -yt" href="https://www.youtube.com/channel/UCqNlSzlXYbUtzmaa63DDNZA/videos" target="_blank"></a>
			</div>
		</div>
	</div>
	<div class="cr">© 2020  Корпорация развития Московской области. Авторские права защищены</div>
</div></section>


<section class="popUpCont" id="popUp-req">
	<div class="popUp">
		<div class="popUp-close"></div>
		<h2>Оформите заявку</h2>
		<div class="subttl">и мы проведем для вас личную консультацию</div>
		<form class="form" enctype="multipart/form-data" method="post">
			<input class="input -name" name="name" placeholder="Введите ваше имя"/>
			<input class="input -phone" name="phone" placeholder="Введите ваш телефон"/>
			<div class="policy">Нажимая на кнопку «Заказать консультацию», я подтверждаю, что ознакомлен и согласен с <a href="/ppolicy.html">«Политикой конфиденциальности»</a> данного сайта и&nbsp;даю согласие на&nbsp;обработку персональных данных</div>
			<button class="button -info">Отправить</button>
		</form>
		<div class="msg-suc">Спасибо за заявку! <br>Мы свяжемся с вами <br>в&nbsp;ближайшее время.</div>
	</div>
</section>

<?
if($stage) echo '<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>';
?>
<script src="/js/forms.js"></script>
<script src="/js/main.js"></script>

</body>
</html>