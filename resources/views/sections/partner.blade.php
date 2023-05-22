			<!-- === PARTNER === -->

            <section class="partner">
				<h1 class="title" data-aos-offset="200" data-aos="flip-up">{{__('words.partner')}}</h1>

				<div class="partner__slider">
					@if (!empty($partners))
						
			
					<div class="partner__item">
						@foreach ($partners as $partner)
						<a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="{{$partner->url}}"><img src="{{Voyager::image($partner->image)}}" alt="partner img"></a>
						@endforeach
					</div>
					<div class="partner__item">
						@foreach ($partners as $partner)
						<a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="{{$partner->url}}"><img src="{{Voyager::image($partner->image)}}" alt="partner img"></a>
						@endforeach
					</div>
					<div class="partner__item">
						@foreach ($partners as $partner)
						<a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="{{$partner->url}}"><img src="{{Voyager::image($partner->image)}}" alt="partner img"></a>
						@endforeach
					</div>
					@else
						<h1>Not Partners</h1>
					@endif
				</div>
				 
			</section> 