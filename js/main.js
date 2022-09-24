function g(props){
	return document.querySelectorAll(props);
}

document.addEventListener('DOMContentLoaded', function() {

g('.js-spoilerToggle').forEach(function(toggler){
	toggler.onclick = function(t){
		let newalttxt = toggler.innerHTML;
		toggler.innerHTML = toggler.dataset.alttext;
		toggler.dataset.alttext = newalttxt;
		//toggler.innerHTML = toggler.getAttribute('for')
		g('#' + toggler.getAttribute('for'))[0].classList.toggle('-shown')
	}
})


// == popUp
document.querySelectorAll('.popUp').forEach(function(el){
	el.onclick = function(e){e.stopPropagation()}
})
document.querySelectorAll('.popUpCont').forEach(function(el){
	el.onclick = function(){el.classList.remove('-shown')}
})
document.querySelectorAll('.popUp-close').forEach(function(el){
	el.onclick = function(){el.closest('.popUpCont').classList.remove('-shown')}
})


// == PopUp Open
document.querySelectorAll('.js-popUp-open').forEach(function(el){
	el.onclick = function(e){
		e.preventDefault();
		document.querySelector('#'+el.getAttribute('for')).classList.add('-shown');
	}
})




// == Forms
g('.form').forEach(function(form){
	console.log(form)
	let maskN = IMask(form.querySelector('.input.-name'), {mask: /^[А-яA-z0-9 ]+$/});
	let phoneMask =  document.body.classList.contains('en') ? '+0 (000) 000-00-00' : '+{7} (000) 000-00-00';
	let maskP = IMask(form.querySelector('.input.-phone'), {mask: phoneMask});
console.log(phoneMask)
	let validatortop = new FormValidator(form, [
		{
			name: 'name',
			rules: 'required|min_length[2]',
		},{
			name: 'phone',
			rules: 'required|min_length[18]',
		}
	], function(errors,e) {
		console.log(errors)
		form_validate(errors, form, e);
	});
})

function form_validate(errors, form, e){
	e.preventDefault();
	console.log(form)
	console.log(errors)
	
	form.querySelectorAll('.input').forEach(function(el){
		el.classList.remove('-err');
	})

	if(errors.length > 0){
		errors[0].element.classList.add('-err');
	} else {
		// Форма ок
		let formId = form.id || form.closest('.popUpCont').id;

		// Получаем данные формы
		let data = Array.from(
			new FormData(form),
			e => e.map(encodeURIComponent).join('=')
		).join('&');


		fetch('backend.php', {
			method: 'post',
			headers: {
				"Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
			},
			body: data
		})
		.then(response => response.text())
		.then(result => {
			if(result == 'success'){

				console.info('Message sending result: '+ result);
				form.closest('.popUp').classList.add('-sended');
				setTimeout(()=>{
					form.closest('.popUpCont').classList.remove('-shown');
					form.closest('.popUp').classList.remove('-sended');
				},3000)

			} else {
				console.error('Request failed', result);
				alert('Что-то пошло не так! Пожалуйста, перезвоните нам!')
			}
		})

	}
}


// == Infos
if(g('.faq')[0])(
g('.faq .que').forEach(function(el){
	el.onclick = function(e){
		g('.faq .que').forEach(function(el){
			el.classList.remove('-selected');
		})
		g('.faq .ans').forEach(function(el){
			el.classList.remove('-shown');
		})

		let ansId = e.target.parentNode.getAttribute('for').charAt(4);

		el.classList.add('-selected');
		console.log(g('#ans-'+ansId)[0])
		g('#ans-' + ansId)[0].classList.add('-shown');
	}
})
)


// == Map
function doAnim(){
	if(window.getComputedStyle(g('#map')[0])['display'] != 'none') {
		g('.section-top .phase1')[0].classList.remove('stopper');
		setTimeout(function(){
			g('.section-top .phase1')[0].classList.remove('phase1');

			g('#map .l').forEach(function(l,n){
				setTimeout(function(){
					l.classList.add('-shown');
				}, 550*n)
			})
		}, 2500)
	} else {
		g('.section-top .w')[0].classList.remove('-animated');
	}
}
if(g('.-animated')[0]) doAnim();


let liveMap = g('#liveMap')[0];
if(liveMap){
	ymaps.ready(function () {
		var myMap = new ymaps.Map('liveMap', {
				center: [liveMap.dataset.lat, liveMap.dataset.long],
				zoom: 14,
				controls: ['smallMapDefaultSet']
			});

		myMap.behaviors.disable('scrollZoom');

		// метка
		var myPlacemark = new ymaps.Placemark([liveMap.dataset.lat, liveMap.dataset.long], {}, {
			iconLayout: 'default#image',
			iconImageHref: './img/stages/marker.png',
			iconImageSize: [106, 120],
			iconImageOffset: [-53,-112]
		});

		myMap.geoObjects.add(myPlacemark)
	});
}

}, false);