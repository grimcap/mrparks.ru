<?

$stage =  $_GET['stage'];

if($stage){
	if($stage != 'esipovo' && $stage != 'puschino'){
		$stage = 'korolev';
	}

	if($stage == 'korolev'){
		$stageData = [
			'name' => 'Korolev',
			'title' => 'Korolev technopark',
			'description' => 'Korolev technopark - Perfect site for innovative and high-tech production',
			'selK' => ' -selected',
			'h2' => ' - is a unique place, hybrid of industrial park and techno park, located 7 km away from Moscow',
			'map_lat' => '55.937129', 
			'map_lon' => '37.847606',
			'price_rent' => '300',
			'price_buy' => '3500',
			'' => '',
		];

	} else if($stage == 'esipovo'){
		$stageData = [
			'name' => 'Esipovo',
			'title' => 'Esipovo industrial park',
			'description' => 'Esipovo - A unique industrial site with infrastructure',
			'selE' => ' -selected',
			'h2' => ' - industrial park with infrastructure and great transport accessibility. Located on industrial land in Solnechnogorsky district',
			'map_lat' => '56.079717',
			'map_lon' => '37.092698',
			'price_rent' => '7500',
			'price_buy' => '1400',
		];
	} else {
		$stageData = [
			'name' => 'Puschino',
			'title' => 'Puschino industrial park',
			'description' => 'Puschino - Center for science and new discoveries',
			'selP' => ' -selected',
			'h2' => ' - a place uniting investors, willing to take it’s place in a pharmaceutical run. Located in Serpukhovskoy district',
			'map_lat' => '54.815105',
			'map_lon' => '37.600645',
			'price_rent' => '16,5',
			'price_buy' => '81',
		];
	}
} else {
	$stageData = [
		'name' => 'MRDC',
		'title' => 'Start your business in Moscow Region industrial park',
		'description' => 'Profitable investment: state support, tax incentives, infrastructure',
		'sel' => ' -selected',
	];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="<?=$stageData['description']?>" />
	<meta name="keywords" content="" />
	<title><?=$stageData['title']?></title>

	<link rel="shortcut icon" href="/img/favicon.png">
	<link rel="stylesheet" href="/css/main.css" />
</head>
<body class="en <? if($stage) {echo 'stage '.$stage;} else {echo 'main';}?>">
<div class="watermark"><?=$stageData['name']?></div>

<section class="section-menu"><div class="w">
	<div class="logo">
		<a class="logo" href="https://mrparks.ru/"><img src="/img/logo-en.png" alt="" title=""></a>
	</div>
	<div class="center">
		<div class="info">
			<a class="email -ico" href="mailto:invest@mosregco.ru">invest@mosregco.ru</a>
			<div class="time -ico">M - Fr, 9.00 am - 06.00 pm</div>
		</div>
		<div class="menu">
			<a class="itm<?=$stageData['sel']?>" href="/en/">HOME</a>
			<a class="itm<?=$stageData['selK']?>" href="/en/korolev">KOROLEV</a>
			<a class="itm<?=$stageData['selE']?>" href="/en/esipovo">ESIPOVO</a>
			<a class="itm<?=$stageData['selP']?>" href="/en/puschino">PUSHCHINO</a>
		</div>
	</div>
	<div class="callback">
		<a class="phone" href="tel:+74952807984">+7 495 280-79-84</a>
		<div>
			<div class="link js-popUp-open" for="popUp-req">Request a call</div>
			<a class="lang" href="/<?=$stage?>">РУС</a>
		</div>
	</div>
</div></section>


<?
if (!$stage){
	include 'p_main_en.php';
} else {
	include 'p_stage_en.php';
}
?>


<section class="section-footer"><div class="w">
	<div class="logo">
		<a class="img" href="http://mrparks.ru/"><img src="img/logo_btm-en.png" alt="" title=""></a>
	</div>
	<div class="center">
		<div class="menu">
			<a class="itm<?=$stageData['selK']?>" href="/en/korolev">KOROLEV</a>
			<a class="itm<?=$stageData['selE']?>" href="/en/esipovo">ESIPOVO</a>
			<a class="itm<?=$stageData['selP']?>" href="/en/puschino">PUSHCHINO</a>
		</div>
		<div class="info">
			<div class="email -ico">invest@mosregco.ru</div>
			<div class="time -ico">M - Fr, 9.00 am - 06.00 pm</div>
			<a class="phone -ico" href="tel:+74952807984">+7 495 280-79-84</a>
		</div>
	</div>
	<div class="contacts">
	<div class="adr">Orbita business center, 6th floor. 20, Kulakova&nbsp;str.,&nbsp;Moscow</div>
		<div class="socs_cont">
			<div class="hdr">Social media</div>
			<div class="socs">
				<a class="soc -fb" href="https://www.facebook.com/mosregco" target="_blank"></a>
				<a class="soc -it" href="https://www.instagram.com/invest_in_moscow_region/" target="_blank"></a>
				<a class="soc -yt" href="https://www.youtube.com/channel/UCqNlSzlXYbUtzmaa63DDNZA/videos" target="_blank"></a>
			</div>
		</div>
	</div>
	<div class="cr">© 2020  Moscow Region Development Corporation, 2020. All&nbsp;rights reserved.</div>
</div></section>


<section class="popUpCont" id="popUp-req">
	<div class="popUp">
		<div class="popUp-close"></div>
		<h2>Submit <br>your request</h2>
		<div class="subttl">for a personal consultation</div>
		<form class="form" enctype="multipart/form-data" method="post">
			<input class="input -name" name="name" placeholder="Name"/>
			<input class="input -phone" name="phone" placeholder="Phone"/>
			<div class="policy">By clicking the button «Send» I agree and confirm for being informed with <a href="/ppolicy.html">«Privacy policy»</a> of this web-site and I consent to processing of my personal data</div>
			<button class="button -info">SEND</button>
		</form>
		<div class="msg-suc">Thanks for the application! <br>We will contact you as soon as possible!</div>
	</div>
</section>

<?
if($stage) echo '<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>';
?>
<script src="/js/forms.js"></script>
<script src="/js/main.js"></script>

</body>
</html>