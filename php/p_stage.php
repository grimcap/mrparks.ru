<section class="section-top"><div class="ww">
	<div class="w phase1 stopper">
		<div class="txt">
			<?
				if($stage == 'korolev'){echo '
					<h1>Технопарк Королев</h1>
					<div class="subtxt">
						<h2>Крупнейший парк для инновационный и высокотехнологичных производств</h2>
						<p>Площадь: <b>17 Га</b> <br>Подьездная дорога: <b>М8 7 км</b> от МКАД <br>39 км до аэропорта: <b>Шереметьево</b> <br><b>ИТЦ</b> на территории</p>
					</div>
				';} else if($stage == 'esipovo'){echo '
					<h1>Индустриальный <br>парк Есипово</h1>
					<div class="subtxt">
						<h2>Уникальная площадка с готовой инфраструктурой</h2>
						<p>Площадь: <b>287,8 Га</b> <br>Подьездная дорога: <b>М10 32 км</b> от МКАД <br>30 км до аэропорта: <b>Шереметьево</b> <br>Якорный резидент: <b>Мерседес-Бенц</b></p>
					</div>
				';} else {echo '
					<h1>Индустриальный <br>парк Пущино</h1>
					<div class="subtxt">
						<h2>Центр притяжения науки и новых открытий</h2>
						<p>Площадь: <b>63 Га</b> <br>Подьездная дорога: <b>М2 96 км</b> от&nbsp;МКАД <br> <b>14 НИИ</b><br>30% российских исследований в&nbsp;области молякулярной биологии, генной инженерии, клеточной биологии, биофизики проходят здесь!</p>
					</div>
				';}
			?>
			<div class="button js-popUp-open" for="popUp-req">Узнать больше</div>
		</div>
		<div class="map" id="map">
			<div class="layers">
				<img src="/img/stages/<?=$stage?>-map1.png" alt="">
			</div>
		</div>
	</div>
</div></section>


<section class="section-text -bg">
	<div class="watermark"><?=$stageData['name']?></div>
	<div class="w">
		<h2 class="txt -b"><strong><?=$stageData['name']?></strong><?=$stageData['h2']?></h2>
		<div class="button js-spoilerToggle" for="spoiler-map" data-alttext="Скрыть карту">Показать на карте</div>
		
		<div class="spoilerCont" id="spoiler-map"><div class="spoiler">
			<div class="liveMap" id="liveMap" data-lat="<?=$stageData['map_lat']?>" data-long="<?=$stageData['map_lon']?>"></div>
		</div>
	</div>
</section>

<?
if($stage == 'korolev'){echo '
<section class="section-text"><div class="w">
	<strong>На территории парка будет построен иновационно-технологический центр (ИТЦ)</strong><br>
	<div class="txt">Близость к Москве обеспечит компетентные кадры, в городе действует система дуального образования. Кафе, магазины, заправки, гостиницы находятся в ближайщем доступе. Жилищные комплексы построены и находятся недалеко от парка.</div>
	<div class="button js-spoilerToggle" for="spoiler-info" data-alttext="Свернуть характеристики">Развернуть характеристики</div>
	<div class="spoilerCont" id="spoiler-info"><div class="spoiler">
		<div class="cols info">
			<div class="col">
				<ul>
					<li class="ttl">Инфраструктура</li>
					<li><b>Электроснабжение</b><span>17 MBт</span></li>
					<li><b>Водоснабжение</b><span>418 м<sup>3</sup>/ч</span></li>
					<li><b>Сеть обустроенных дорог</b><span>Да</span></li>
					<li><b>Система канализации</b><span>Центральная канализация</span></li>
					<li><b>Клининговые услуги (вывоз&nbsp;мусора)</b><span>Да</span></li>
					<li><b>Сервис по быстрому реагированию на&nbsp;ремонт</b><span>Да</span></li>
					<li><b>Водозаборный узел (питьевая&nbsp;вода)</b><span>Центральный водопровод</span></li>
				</ul>
			</div>
			<div class="col">
				<ul>
					<li class="ttl">Кадры</li>
					<li><b>Москва (7 км от МКАД)</b><span>13 млн жителей</span></li>
					<li><b>Королев</b><span>186 480 чел.</span></li>
				</ul>
				<ul>
					<li class="ttl">Требования  к резиденту</li>
					<li><b>Регистрация компании в&nbsp;Московской области</b><span>Да</span></li>
					<li><b>Санитарно - защитная зона</b><span>В границах участка</span></li>
				</ul>
			</div>
		</div>
	</div></div>
</div></section>
';} else if($stage == 'esipovo'){echo '
<section class="section-text"><div class="w">
	<strong>В парке развиты транспортные схемы для доставки персонала на объект.</strong><br>
	<div class="txt">
	Кафе, магазины, заправки, гостиницы находятся в ближайшем доступе. Близость к Москве обеспечит компетентные кадры, в городе действует система дуального образования.</div>
	<div class="button js-spoilerToggle" for="spoiler-info" data-alttext="Свернуть характеристики">Развернуть характеристики</div>
	<div class="spoilerCont" id="spoiler-info"><div class="spoiler">
		<div class="cols info">
			<div class="col">
				<ul>
					<li class="ttl">Инфраструктура</li>
					<li><b>Электроснабжение</b><span>55 MBт</span></li>
					<li><b>Газоснабжение</b><span>9000 м<sup>3</sup>/час</span></li>
					<li><b>Водоснабжение</b><span>4000 м<sup>3</sup>/сутки</span></li>
					<li><b>Очистные сооружения</b><span>Да</span></li>
					<li><b>Система канализации</b><span>Да</span></li>
					<li><b>Кабинет первой мед. помощи на&nbsp;территории парка</b><span>Да</span></li>
					<li><b>Водозаборный узел (питьевая&nbsp;вода)</b><span>Да</span></li>
					<li><b>Клининговые услуги (вывоз&nbsp;мусора)</b><span>Да</span></li>
					<li><b>Сервис по быстрому реагированию на&nbsp;ремонт</b><span>Да</span></li>
				</ul>
			</div>
			<div class="col">
				<ul>
					<li class="ttl">Кадры</li>
					<li><b>Москва (32 км от МКАД)</b><span>13 млн жителей</span></li>
					<li><b>Солнечногорск (12 км)</b><span>138 764 чел.</span></li>
				</ul>
				<ul>
					<li class="ttl">Требования  к резиденту</li>
					<li><b>Регистрация компании в&nbsp;Московской области</b><span>Да</span></li>
					<li><b>Санитарно - защитная зона</b><span>В границах участка</span></li>
				</ul>
				<ul>
					<li class="ttl">Особые условия</li>
					<li><b>Снижение ставки по налогу на прибыль </b><span>на 4.5% на срок <br>от 5 до 7 лет</span></li>
					<li><b>Льготная ставка (0-1.5%) по налогу на имущество</b><span>на срок от <br>5 до 8 лет</span></li>
				</ul>
			</div>
		</div>
	</div></div>
</div></section>
';} else {echo '
<section class="section-text"><div class="w">
	<strong>Подготовлены все условия для размещения высокотехнологичных фармацевтических предприятий</strong><br>
	<div class="txt">Компании будут сосредоточены вокруг четырнадцати крупных научных центров, расположенных рядом с Пущино. Санитарно-защитная зона до 300 (!) метров. Планируется создание производственного кластера, внутри которого возможны взаимопоставки частей продукции; возврат 100% уплаченных налогов; компенсация ряда расходов по приобретению оборудования</div>
	<div class="button js-spoilerToggle" for="spoiler-info" data-alttext="Свернуть характеристики">Развернуть характеристики</div>
	<div class="spoilerCont" id="spoiler-info"><div class="spoiler">
		<div class="cols info">
			<div class="col">
				<ul>
					<li class="ttl">Инфраструктура</li>
					<li><b>Электроснабжение</b><span>10 MBт</span></li>
					<li><b>Газоснабжение</b><span>8100 м<sup>3</sup>/час</span></li>
					<li><b>Водоснабжение</b><span>7700 м<sup>3</sup>/сутки</span></li>
					<li><b>Система канализации</b><span>Центральная канализация</span></li>
				</ul>
				<ul class="cols-3">
					<li class="ttl">Особые условия</li>
					<li><b>Выкуп</b><span>Стандарт ₽</span><span>Льгота ₽</span></li>
					<li><b>1 м2</b><span>3,62</span><span>16,5</span></li>
					<li><b>1 Га</b><span>362 000</span><span>164 550</span></li>
					<li><b>1 м2</b><span541></span><span>81</span></li>
					<li><b>1 Га</b><span>5 413 068</span><span>811 960</span></li>
				</ul>
			</div>
			<div class="col">
				<ul>
					<li class="ttl">Кадры</li>
					<li><b>Москва (96 км от МКАД)</b><span>13 млн жителей</span></li>
					<li><b>Серпухов (24 км)</b><span>126 729 чел.</span></li>
				</ul>
				<ul>
					<li class="ttl">Требования  к резиденту</li>
					<li><b>Регистрация компании в&nbsp;Московской области</b><span>Да</span></li>
					<li><b>Санитарно - защитная зона</b><span>300 м</span></li>
				</ul>
			</div>
		</div>
	</div></div>
</div></section>
';}
?>

<section class="section-stage -origins"><div class="w">
	<h2>Предлагаем два вида <br>размещения производства</h2>
	<div class="cols">
		<a class="col js-popUp-open" for="popUp-req" href="#">
			<h3 class="ttl">Аренда помещений</h3>
			<h4 class="txt">Производственные и офисные помещения подготовлены для сдачи в&nbsp;аренду под ваш бизнес.</h4>
			<div class="price">от <?=$stageData['price_rent']?> руб за 1 м<sup>2</sup></div>
			<div class="buttons"><div class="button -call js-popUp-open" for="popUp-req">Консультация</div></div>
		</a>
		<a class="col js-popUp-open" for="popUp-req" href="#">
			<h3 class="ttl">Выкуп земельных участков</h3>
			<h4 class="txt">Лучшие условия для покупки земли промышленного назначения.</h4>
			<div class="price">от <?=$stageData['price_buy']?> руб за 1 м<sup>2</sup></div>
			<div class="buttons"><div class="button -call js-popUp-open" for="popUp-req">Консультация</div></div>
		</a>
	</div>
</div></section>


<section class="section-text -bg"><div class="w">
	<div class="bgImg"><img src="/img/stages/<? if($stage == 'korolev') {echo 'korolev-logo.png';} else {echo 'bg-coffee.png';} ?>" alt=""></div>
	<h2>Обсудим ваш проект <br>за чашечкой кофе?</h2>
	<div class="txt">Назначьте встречу с личным менеджером, позвонив по&nbsp;номеру: <a class="bigTel" href="tel:+74952807984"><img src="/img/stages/ico-phone_big.png" alt="">+7 495 280 7984</a></div>
	<div class="txt -b">Ждем вас по адресу: &nbsp;&nbsp;&nbsp;<img src="/img/stages/ico-map_big.png" alt="" class="bigAddr">&nbsp;г.Москва, ул.Кулакова, д.20, корп.1, БЦ "Орбита-2", корп. Альфа, 6 этаж</div>
</div></section>


<?
if($stage == 'korolev'){echo '
<section class="section-text -bigPic"><div class="w">
	<h2>Инновационно-<br>технологический центр</h2>
	<strong>В Королеве будет построен единственный в своем роде ИТЦ. Внутри него предусмотрено четыре типа этажей: производственный, лабораторный,  административный, офисный.</strong>
	<div class="cols">
		<div class="col"><img src="/img/stages/itc-info.jpg" alt="Привлекаем инвесторов в Королев" title="Привлекаем инвесторов в Королев"></div>
		<div class="col">
			<ul>
				<li><strong>ИТЦ ставит перед собой следующие задачи:</strong>
				<li><b>Создание условий для развития</b> субъектов малого и среднего предпринимательства в научно-технической сфере
				<li><b>Разработка программ развития</b> и поддержки для инновационных предприятий
				<li><b>Обеспечение международного</b> трансфера инновациями и технологиями
				<li><b>Создание новых инновационных</b> предприятий и поддержка существующих
				<li><b>Организация взаимодействия</b> научно-образовательных организаций и бизнеса
			</ul>
		</div>
	</div>
</div></section>
';}
?>


<section class="section-text"><div class="w">
	<h2>Все заботы <br>берем на себя!</h2>
	<strong>Мы - Корпорация развития Московской области. Привлекаем инвесторов и помогаем на всех этапах.</strong>
	<div class="cols">
		<div class="col"><img src="/img/stages/photo-fence.jpg" alt=""></div>
		<div class="col">
			<ul>
				<li><b>Организуем и проведем</b> встречи резидентов с представителями гос.власти и банков
				<li><b>Проведем анализ рынка</b> и найдем точки роста для бизнеса
				<li><b>Подберем стратегию</b> выхода на рынок Московской области
				<li><b>Сохраним ваши деньги</b>, используя льготы и меры поддержки
				<li><b>Поможем с согласованием</b> и получением исходно-разрешительной документации
				<li><b>Подключим</b> к подготовленной  инфраструктуре и поможем найти бизнес-партнера
				<li><b>Проведем</b> кадастровые и геодезические работы
			</ul>
		</div>
	</div>
	<a class="txt" href="https://drive.google.com/file/d/1EEQQZAcoZ6nOuyOugnDLu0Zjmn7yDDlW/view">Узнайте больше из презентации</a>
</div></section>


<section class="section-stage"><div class="w">
	<h2>Посмотрите другие <br>наши объекты</h2>
	<div class="cols">
		<?
		if($stage == 'esipovo' || $stage == 'puschino'){ echo '
		<a class="col" href="korolev">
			<div class="img_bg"><img src="/img/stage-kor.jpg" alt=""></div>
			<h3 class="ttl">Королев</h3>
			<h4 class="txt">Технопарк Королев: занимайтесь бизнесом и&nbsp;инновациями любых масштабов</h4>
			<ul>
				<li><span class="img"><img src="/img/stage-road.png" alt=""></span><b>Подьездная дорога</b>, <br> М8 7 км от МКАД</li>
				<li><span class="img"><img src="/img/stage-rus.png" alt=""></span><b>Крупнейший Наукоград в России</b> - интеллектуальный ресурс страны</li>
				<li><span class="img"><img src="/img/stage-lamp.png" alt=""></span><b>Инновационно-технологический центр</b> на территории парка</li>
			</ul>
			<div class="buttons"><div class="button">Подробнее</div></div>
		</a>';}

		if($stage == 'korolev' || $stage == 'puschino'){ echo '
		<a class="col" href="esipovo">
			<div class="img_bg"><img src="/img/stage-esi.jpg" alt=""></div>
			<h3 class="ttl">Есипово</h3>
			<h4 class="txt">Индустриальный парк Есипово — идеальное место с готовой инфраструктурой для&nbsp;вашего завода</h4>
			<ul>
				<li><span class="img"><img src="/img/stage-fork.png" alt=""></span><b>Подведены газ, вода, электричество</b></li>
				<li><span class="img"><img src="/img/stage-road.png" alt=""></span><b>Подьездная дорога</b>, <br>М10 32 км от МКАД</li>
				<li><span class="img"><img src="/img/stage-mers.png" alt=""></span><b>Добрый сосед</b> — завод Мерседес-Бенц</li>
			</ul>
			<div class="buttons"><div class="button">Подробнее</div></div>
		</a>';} 

		if($stage == 'korolev' || $stage == 'esipovo'){ echo '
		<a class="col" href="puschino">
			<div class="img_bg"><img src="/img/stage-pus.jpg" alt=""></div>
			<h3 class="ttl">Пущино</h3>
			<h4 class="txt">Индустриальный парк Пущино: выведите свой фармацевтический потенциал на новый уровень</h4>
			<ul>
				<li><span class="img"><img src="/img/stage-road.png" alt=""></span><b>Подьездная дорога</b><br> М2 96 км от МКАД</li>
				<li><span class="img"><img src="/img/stage-med.png" alt=""></span><b>Санитарно-защитная зона до 300м.</b><br> Подходит для крупных фармацевтических предприятий</li>
				<li><span class="img"><img src="/img/stage-uni.png" alt=""></span><b>14 научно-исследовательских институтов</b> на&nbsp;территории</li>
			</ul>
			<div class="buttons"><div class="button">Подробнее</div></div>
		</a>';
		} ?>
	</div>
</div></section>