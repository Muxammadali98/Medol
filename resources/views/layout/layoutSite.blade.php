<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="images/logo.webp" type="image/x-icon">
		<link rel="stylesheet" href="css/style.min.css" />
		<link rel="stylesheet" href="css/main.min.css" />
		<title>@yield('title')</title>
	</head>
	<body>

		<aside class="sidebar">
			<div class="sidebar__inner">
				<img class="sidebar__close" src="images/x-btn.webp" alt="x btn">

				<div class="header__item">
					<img class="header__icon" src="images/location.svg" alt="header icon">
					<div class="header__info">{{!empty($contact)?$contact['address_'.\App::getLocale()]:''}}</div>
				</div>

				<div class="header__item">
					<img class="header__icon" src="images/phone.svg" alt="header icon">
					<div class="header__info">
						<a class="header__phone" href="tel:+998712766253">{{!empty($contact)?$contact->phone1:''}}</a>
						<a class="header__phone" href="tel:+998712766254">{{!empty($contact)?$contact->phone2:''}}</a>
					</div>
				</div>

				<a class="header__item" href="#">
					<img class="header__icon" src="images/search.svg" alt="header icon">
					Search
				</a>
				<div class="header__icon header__icon_block">
					<img src="images/facebook.svg" alt="header icon">
					<span>{{ __('words.facebook') }}</span>
				</div>
			</div>
		</aside>

		<header class="header">
			<div class="container">
				<div class="header__top">
					
				<div class="header__item header__location">
					<img class="header__icon" src="images/location.svg" alt="header icon">
					<div class="header__info">{{!empty($contact)?$contact['address_'.\App::getLocale()]:''}}</div>
				</div>

				<div class="header__item header__phones">
					<img class="header__icon" src="images/phone.svg" alt="header icon">
					<div class="header__info">
						<a class="header__phone" href="tel:+998712766253">{{!empty($contact)?$contact->phone1:''}}</a>
						<a class="header__phone" href="tel:+998712766254">{{!empty($contact)?$contact->phone2:''}}</a>
					</div>
				</div>

				<a href="/" class="logo"><img src="images/logo.webp" alt="logo"></a>


				<img class="header__icon header__search" src="images/search.svg" alt="header icon">
				<a href="{{!empty($contact)?$contact->facebook:''}}">
					<div class="header__icon header__icon_block header__facebook">
						<img src="images/facebook.svg" alt="header icon">
						<span>{{__('words.facebook')}}</span>
					</div>
				</a>
	
	
					<div class="header-dropdown">
						<?php
						if(\App::getLocale() == 'ru'){?>
							<div class="header-dropdown__active">
							<img class="header-icon" src="images/russia.webp" alt="flag">
							<span>Русский</span>
							</div>
						<?php } elseif(\App::getLocale() == 'uz'){?>
								<li class="header-dropdown__active">
								<img class="header-icon" src="images/uzbekistan.webp" alt="flag">
								<span>O'zbek</span>
								</li>
						<?php }else{ ?>
								<li class="header-dropdown__active">
									<img class="header-icon" src="images/united-kingdom.webp" alt="flag">
									<span>Enlish</span>
								</li>
						<?php }	?>
						<ul class="header-dropdown__list">
							<a href="/lang/ru" 
							<?= \App::getLocale()=='ru'?'style="display: none;"' : ' class="header-dropdown__item"';?>>
								<img class="header-icon" src="images/russia.webp" alt="flag">
								<span>Русский</span>
							</a>
							<a href="/lang/uz"
							<?= \App::getLocale()=='uz'?'style="display: none;"' : ' class="header-dropdown__item"';?>>
								<img class="header-icon" src="images/uzbekistan.webp" alt="flag">
								<span>O'zbek</span>
							</a>
							<a href="/lang/en"
							<?= \App::getLocale()=='en'?'style="display: none;"' : ' class="header-dropdown__item"';?>>
								<img class="header-icon" src="images/united-kingdom.webp" alt="flag">
								<span>Enlish</span>
							</a>
							
						</ul>
						<img class="header-dropdown__arrow" src="images/arrow-down.svg" alt="arrow">
						
					</div>

					<div class="header-btn">
						<div class="header-btn__line"></div>
						<div class="header-btn__line"></div>
						<div class="header-btn__line"></div>
					</div>
	
				</div>
				<nav class="header__menu">
					<a class="header__link" href="#">{{__('words.shop')}}</a>
					<a class="header__link active" href="#">{{__('words.about')}}</a>
					<a class="header__link" href="#">{{__('words.products')}}</a>
					<a class="header__link" href="#">{{__('words.service')}}</a>
					<a class="header__link" href="#">{{__('words.promotons')}}</a>
					<a class="header__link" href="#">{{__('words.feedbake')}}</a>
				</nav>

				
                @yield('slider')

				<div class="header-dots">
					<div class="header-dots__item"></div>
					<div class="header-dots__item active"></div>
					<div class="header-dots__item"></div>
				</div>
			</div>
		</header>

		<div class="container">
            @yield('content')
		</div>
		 <footer class="footer">
			<div class="container">
				<div class="footer__top">
					<div class="footer__start">
						<div class="footer-contact">
							<h3 class="footer__title">{{__('words.contact')}}</h3>
							<div class="footer-contact__box">
								<div class="footer-contact__item">
									<img class="footer__icon" src="images/location.svg" alt="footer icon">
									<div class="footer__infos">{{!empty($contact)?$contact['address_'.\App::getLocale()]:''}}</div>
								</div>
								<div class="footer-contact__item">
									<img class="footer__icon" src="images/message.svg" alt="footer icon">
									<a class="footer__infos" href="mailto:info@medol.uz">{{!empty($contact)?$contact->email:''}}</a>
								</div>
							</div>
							<div class="footer-contact__box">
								<div class="footer-contact__phone">
									<img class="footer__icon" src="images/phone.svg" alt="header icon">
									<div class="footer__infos">
										<a class="footer__phone" href="tel:+998712766253">{{!empty($contact)?$contact->phone1:'';}}</a>
										<a class="footer__phone" href="tel:+998712766254">{{!empty($contact)?$contact->phone2:''}}</a>
									</div>
								</div>
								<button class="btn">Оставить заявку</button>
							</div>
						</div>
						<div class="footer__info">
							<img src="images/logo.webp" alt="footer logo">
							<p class="text">{{__('words.our_goal')}}</p>
						</div>
					</div>
					<div class="footer__end">
						<div class="footer__item">
							<h3 class="footer__title">{{__('words.about')}}</h3>
							<ul class="footer__list">
								<li><a class="footer__link" href="#">{{__('words.story')}}</a></li>
								<li><a class="footer__link" href="#">{{__('words.partner')}}</a></li>
								<li><a class="footer__link" href="#">{{__('words.jobs')}}</a></li>
							</ul>
						</div>
	
						<div class="footer__item">
							<h3 class="footer__title">{{__('words.products')}}</h3>
							<ul class="footer__list">
								@if (!empty($products))
									
								
								@foreach ($products as $product)
									
								<li><a class="footer__link" href="#" style="text-transform: lowercase ">{{$product['title_'.\App::getLocale()]}}</a></li>
								@endforeach
								@else
									<li><a class="footer__link" href="#" style="text-transform: lowercase ">Not Products</a></li>
								@endif
					
							</ul>
						</div>
						<div class="footer__item">
							<h3 class="footer__title">{{__('words.service')}}</h3>
							<ul class="footer__list">
								@if (!empty($services))
									
							
								@foreach ($services as $service)
									
								<li><a class="footer__link" href="#" style="text-transform: lowercase " >{{ $service['title_'.\App::getLocale()]}}</a></li>
								@endforeach
								@else
								<li><a class="footer__link" href="#" style="text-transform: lowercase ">Not Services</a></li>

								@endif
							</ul>
						</div>
					</div>
				</div>
				<div class="footer__bottom">
					<span>© 2021 ООО «Medical Online Services»</span>
					<span>{{__('words.deweloper')}}: <a href="mailto:turgunaliyev.98@gmail.com">turgunaliyev.98@gmail.com</a></span>
					<span>{{__('words.design')}}: <a href="mailto:damingues92@gmail.com">damingues92@gmail.com</a></span>
				</div>
			</div>
		</footer>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="js/libs.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>
