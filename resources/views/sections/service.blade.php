			<!-- === SERVICE === -->

            <section class="service">
				<h1 class="title" data-aos-offset="200" data-aos="flip-up">{{__('words.service')}}</h1>

				<div class="service__inner">
					@if (!empty($services))
						

					@foreach ($services as $service)
					<div class="service__card" data-aos-duration="1000" data-aos-offset="100" data-aos="fade-left">
						<div class="service__img">
							<img src="{{Voyager::image($service->image)}}" alt="service">
						</div>
							<div class="service__info">
								<h3 class="service__title">{{$service['title_'.\App::getLocale()]}}</h3>
								<p class="service__text text">{{$service['description_'.\App::getLocale()]}}</p>
								<button class="btn service__btn">{{__('words.more')}}</button>
							</div>
						</div>
					@endforeach
					@else
						<h1>Not Services</h1>
					@endif
				</div>
			</section> 
			