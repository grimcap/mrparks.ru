<section class="section-top"><div class="ww">
	<div class="w phase1 stopper">
		<div class="txt">
			<?
				if($stage == 'korolev'){echo '
					<h1>Korolev <br>technopark</h1>
					<div class="subtxt">
						<h2>Perfect site for innovative and high&#8209;tech production</h2>
						<p>Space: <b>17 ha</b> <br>Highway: <b>7 km</b> to MKAD, M8 highway <br>Airport: <b>39 km to SVO</b> <br><b>Innovation & technology center</b> within&nbsp;the park</p>
					</div>
				';} else if($stage == 'esipovo'){echo '
					<h1>Esipovo <br>industrial park</h1>
					<div class="subtxt">
						<h2>A unique industrial site with infrastructure</h2>
						<p>Space: <b>287.7 ha</b> <br>Highway: <b>m10, 32 km</b> to MKAD <br>Airport: <b>30 km to SVO</b> <br>Anchor resident: <b>Mercedes-Benz</b></p>
					</div>
				';} else {echo '
					<h1>Puschino <br>industrial&nbsp;park</h1>
					<div class="subtxt">
						<h2>Center for science and new discoveries</h2>
						<p>Space: <b>63 ha</b> <br>Highway: <b>m10, 96 km</b> to MKAD <br><b>14</b> science institutes <br><b>30% of Russian research</b> in bio pharmacy, biology, genetic engineering, biophysics</p>
					</div>
				';}
			?>
			<div class="button js-popUp-open" for="popUp-req">To know more</div>
		</div>
		<div class="map" id="map">
			<div class="layers">
				<img src="/img/stages/<?=$stage?>-map2.png" alt="">
			</div>
		</div>
	</div>
</div></section>


<section class="section-text -bg">
	<div class="watermark"><?=$stageData['name']?></div>
	<div class="w">
		<h2 class="txt -b"><strong><?=$stageData['name']?></strong><?=$stageData['h2']?></h2>
		<div class="button js-spoilerToggle" for="spoiler-map" data-alttext="Hide the map">Show the map</div>
		
		<div class="spoilerCont" id="spoiler-map"><div class="spoiler">
			<div class="liveMap" id="liveMap" data-lat="<?=$stageData['map_lat']?>" data-long="<?=$stageData['map_lon']?>"></div>
		</div>
	</div>
</section>

<?
if($stage == 'korolev'){echo '
<section class="section-text"><div class="w">
	<strong>Innovation & Technology center is going to be built within the park</strong><br>
	<div class="txt">Being located close to Moscow, techno park can provide its residents educated and experienced personnel. Dual education system is available. Cafes, stores, gas stations, hotels and housing constructions are in a close distance.</div>
	<div class="button js-spoilerToggle" for="spoiler-info" data-alttext="Hide description">Show description</div>
	<div class="spoilerCont" id="spoiler-info"><div class="spoiler">
		<div class="cols info">
			<div class="col">
				<ul>
					<li class="ttl">Infrastructure</li>
					<li><b>Electricity</b><span>17 MW</span></li>
					<li><b>Water supply</b><span>418 m<sup>3</sup>/h</span></li>
					<li><b>Road system</b><span>Yes</span></li>
					<li><b>Sewage system</b><span>Yes, central</span></li>
					<li><b>Cleaning service</b><span>Yes</span></li>
					<li><b>Urgent repair service</b><span>Yes</span></li>
					<li><b>Water intake facility</b><span>Yes</span></li>
				</ul>
			</div>
			<div class="col">
				<ul>
					<li class="ttl">Personnel</li>
					<li><b>Moscow (7 km to MKAD)</b><span>13M people</span></li>
					<li><b>Korolev</b><span>186 480</span></li>
				</ul>
				<ul>
					<li class="ttl">To become a resident</li>
					<li><b>Registration in Moscow Region</b><span>Yes</span></li>
					<li><b>Sanitary protection zone</b><span>within the land plot</span></li>
				</ul>
			</div>
		</div>
	</div></div>
</div></section>
';} else if($stage == 'esipovo'){echo '
<section class="section-text"><div class="w">
	<strong>The park has transport system so that personnel can easily reach it.</strong><br>
	<div class="txt">Cafes, stores, gas stations, hotels are in a close distance. Construction of housing units for personnel of the park is also planned. Option of the dual education system for residents.</div>
	<div class="button js-spoilerToggle" for="spoiler-info" data-alttext="Hide description">Show description</div>
	<div class="spoilerCont" id="spoiler-info"><div class="spoiler">
		<div class="cols info">
			<div class="col">
				<ul>
					<li class="ttl">Infrastructure</li>
					<li><b>Electricity</b><span>55 MW</span></li>
					<li><b>Gas supply</b><span>9000 m<sup>3</sup>/h</span></li>
					<li><b>Water supply</b><span>4000 m<sup>3</sup>/d</span></li>
					<li><b>Waste treatment facilities</b><span>Yes</span></li>
					<li><b>Sewage system</b><span>Yes</span></li>
					<li><b>Medical room</b><span>Yes</span></li>
					<li><b>Water intake facility</b><span>Yes</span></li>
					<li><b>Cleaning service</b><span>Yes</span></li>
					<li><b>Urgent repair service</b><span>Yes</span></li>
				</ul>
			</div>
			<div class="col">
				<ul>
					<li class="ttl">Personnel</li>
					<li><b>Moscow (32km to MKAD)</b><span>13M people</span></li>
					<li><b>Solnechnogorsk (12 km)</b><span>138 764</span></li>
				</ul>
				<ul>
					<li class="ttl">To become a resident</li>
					<li><b>Registration in Moscow Region</b><span>Yes</span></li>
					<li><b>Sanitary protection zone</b><span>within the land plot</span></li>
				</ul>
				<ul>
					<li class="ttl">State support</li>
					<li><b>Benefit tax reduction</b><span>4.5% for 5-7 years</span></li>
					<li><b>Property tax rate (0 -1.5%)</b><span>for 5-8 years</span></li>
				</ul>
			</div>
		</div>
	</div></div>
</div></section>
';} else {echo '
<section class="section-text"><div class="w">
	<strong>A place prepared for high-tech pharmaceutical enterprises</strong><br>
	<div class="txt">Companies will be located in a close distance to 14 Pushchino science institutes. Sanitary protection zone up to 300 meters. An industrial cluster with an opportunity for partial supply to it’s participants; 100% of payed taxes refund. Reimbursement of equipment and software expenses.</div>
	<div class="button js-spoilerToggle" for="spoiler-info" data-alttext="Hide description">Show description</div>
	<div class="spoilerCont" id="spoiler-info"><div class="spoiler">
		<div class="cols info">
			<div class="col">
				<ul>
					<li class="ttl">Infrastructure</li>
					<li><b>Electricity</b><span>10 MW</span></li>
					<li><b>Gas supply</b><span>8100 m<sup>3</sup>/h</span></li>
					<li><b>Water supply</b><span>7700 m<sup>3</sup>/d</span></li>
					<li><b>Sewage</b><span>Yes</span></li>
				</ul>
				<ul class="cols-3">
					<li class="ttl">Special conditions</li>
					<li><b>Buyout</b><span>Standard rub</span><span>Benefits rub</span></li>
					<li><b>1 m2</b><span>3,62</span><span>16,5</span></li>
					<li><b>1 ha</b><span>362 000</span><span>164 550</span></li>
					<li><b>1 m2</b><span541></span><span>81</span></li>
					<li><b>1 ha</b><span>5 413 068</span><span>811 960</span></li>
				</ul>
			</div>
			<div class="col">
				<ul>
					<li class="ttl">Personnel</li>
					<li><b>Moscow (96 km to MKAD)</b><span>13M people</span></li>
					<li><b>Serpukhov)</b><span>126 729</span></li>
				</ul>
				<ul>
					<li class="ttl">To become a resident</li>
					<li><b>Registration in Moscow Region</b><span>Yes</span></li>
					<li><b>Sanitary protection zone</b><span>300 m</span></li>
				</ul>
			</div>
		</div>
	</div></div>
</div></section>
';}
?>


<section class="section-stage -origins"><div class="w">
	<h2>Two types <br>of localisation</h2>
	<div class="cols">
		<a class="col" href="#">
			<h3 class="ttl">RENT</h3>
			<h4 class="txt">Industrial and office units are ready for your business</h4>
			<div class="price">from <?=$stageData['price_rent']?> rub/m<sup>2</sup></div>
			<div class="buttons"><div class="button -call js-popUp-open" for="popUp-req">Consultation</div></div>
		</a>
		<a class="col" href="#">
			<h3 class="ttl">LAND PLOT BUY&nbsp;OUT</h3>
			<h4 class="txt">Best conditions for industrial land buy out</h4>
			<div class="price">from <?=$stageData['price_buy']?> rub/m<sup>2</sup></div>
			<div class="buttons"><div class="button -call js-popUp-open" for="popUp-req">Consultation</div></div>
		</a>
	</div>
</div></section>


<section class="section-text -bg"><div class="w">
	<div class="bgImg"><img src="/img/stages/<? if($stage == 'korolev') {echo 'korolev-logo.png';} else {echo 'bg-coffee.png';} ?>" alt=""></div>
	<h2>Let's have a cup of coffee and <br>discuss your project</h2>
	<div class="txt">You can apply for a meeting with personal manager via phone number: <a class="bigTel" href="tel:+74952807984"><img src="/img/stages/ico-phone_big.png" alt="">+7 495 280 7984</a></div>
	<div class="txt -b">Address: &nbsp;&nbsp;&nbsp;<img src="/img/stages/ico-map_big.png" alt="" class="bigAddr">&nbsp;Orbita business center, 6th floor. 20, Kulakova str., Moscow</div>
</div></section>


<?
if($stage == 'korolev'){echo '
<section class="section-text -bigPic"><div class="w">
	<h2>Innovation & <br>Technology cente</h2>
	<strong>ITC is going to be a unique site in the city. 4 types of floors will be inside: industrial, laboratory, administrative and offices.</strong>
	<div class="cols">
		<div class="col"><img src="/img/stages/itc-info-en.png" alt="Привлекаем инвесторов в Королев" title="Привлекаем инвесторов в Королев"></div>
		<div class="col">
			<ul>
				<li><strong>Our mission:</strong>
				<li><b>to create conditions</b> for SME enterprises in high&#8209;tech&nbsp;sphere
				<li><b>to implement programs</b> on innovation development 
				<li><b>international exchange</b> of experience on innovations and&nbsp;technology
				<li><b>to give opportunityх</b> to create new innovations enterprises and to support the&nbsp;existent&nbsp;ones
				<li><b>to organise collaboration</b> between business and science&nbsp;units
			</ul>
		</div>
	</div>
</div></section>
';}
?>


<section class="section-text"><div class="w">
	<h2>We'll take care <br>of everything</h2>
	<strong>We are Moscow Region Development Corporation, we work with investors and help them on each step of their localisation process.</strong>
	<div class="cols">
		<div class="col"><img src="/img/stages/photo-fence.jpg" alt=""></div>
		<div class="col">
			<ul>
				<li><b>We organise meetings</b> between residents of industrial park and government as well as bank representatives
				<li><b>Making market analysis</b> in order to find  growth points for your business
				<li><b>We save your money</b> using tax incentives and support measures instruments
				<li><b>We help you</b> to get initial- permissive documentation
				<li><b>We can provide</b> infrastructure for your enterprise and find business partner
				<li><b>Providing</b> cadastral and geodetic surveys
			</ul>
		</div>
	</div>
	<a class="txt" href="https://drive.google.com/file/d/1EEQQZAcoZ6nOuyOugnDLu0Zjmn7yDDlW/view" target="_blank">To know more from our presentation</a>
</div></section>


<section class="section-stage"><div class="w">
	<h2>Check out more <br>industrial sites</h2>
	<div class="cols">
		<?
		if($stage == 'esipovo' || $stage == 'puschino'){ echo '
		<a class="col" href="/en/korolev">
			<div class="img_bg"><img src="/img/stage-kor.jpg" alt=""></div>
			<h3 class="ttl">KOROLEV</h3>
			<h4 class="txt">Technopark Korolev: doing business and innovations of a wide range</h4>
			<ul>
				<li><span class="img"><img src="/img/stage-road.png" alt=""></span><b>7 km to MKAD</b>, <br>M8 highway</li>
				<li><span class="img"><img src="/img/stage-rus.png" alt=""></span><b>The largest Russian science city</b> - source of highly intellectual personnel</li>
				<li><span class="img"><img src="/img/stage-lamp.png" alt=""></span><b>Innovation & Technology center</b> within the technopark</li>
			</ul>
			<div class="buttons"><div class="button">To know more</div></div>
		</a>';}

		if($stage == 'korolev' || $stage == 'puschino'){ echo '
		<a class="col" href="/en/esipovo">
			<div class="img_bg"><img src="/img/stage-esi.jpg" alt=""></div>
			<h3 class="ttl">ESIPOVO</h3>
			<h4 class="txt">Esipovo industrial park is&nbsp;a&nbsp;great place with a developed infrastructure for your plant</h4>
			<ul>
				<li><span class="img"><img src="/img/stage-fork.png" alt=""></span>Gas, water supply, electricity</li>
				<li><span class="img"><img src="/img/stage-road.png" alt=""></span><b>32 km to MKAD</b>, <br>M10 highway</li>
				<li><span class="img"><img src="/img/stage-mers.png" alt=""></span><b>Become a neighbour</b> of Mercedes-Benz plant</li>
			</ul>
			<div class="buttons"><div class="button">To know more</div></div>
		</a>';} 

		if($stage == 'korolev' || $stage == 'esipovo'){ echo '
		<a class="col" href="/en/puschino">
			<div class="img_bg"><img src="/img/stage-pus.jpg" alt=""></div>
			<h3 class="ttl">PUSHCHINO</h3>
			<h4 class="txt">Industrial park where you can transfer potential of a pharmaceutical company to the next level</h4>
			<ul>
				<li><span class="img"><img src="/img/stage-road.png" alt=""></span><b>96 km to MKAD</b>, <br>M2 highway</li>
				<li><span class="img"><img src="/img/stage-med.png" alt=""></span><b>Sanitary protection zones up to 300 m</b> <br>(good option for big pharmaceutical enterprises)</li>
				<li><span class="img"><img src="/img/stage-uni.png" alt=""></span><b>14 science institutes </b></li>
			</ul>
			<div class="buttons"><div class="button">To know more</div></div>
		</a>';
		} ?>
	</div>
</div></section>