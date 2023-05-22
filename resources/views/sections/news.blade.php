			<!-- === NEWS === -->

            <section class="news">
				<h1 class="title" data-aos-offset="200" data-aos="flip-up">{{__('words.new')}}</h1>
				<main class="news__slider">
					@if (!empty($news))

					@foreach ($news as $new)
						
					<div class="news__item" data-aos-offset="100" data-aos="flip-left">
						<img class="news__img" src="{{Voyager::image($new->image)}}" alt="news img">
						<h3 class="news__title">{{$new['title_'.\App::getLocale()]}}</h3>
						<div class="news__date">{{$new['date']}}</div>
						<p class="news__text">{{$new['description_'.\App::getLocale()]}}</p>
						<button class="news__btn btn">{{__('words.more')}}</button>
					</div>
					@endforeach
											
					@else
						<h1>Not News</h1>
					@endif
			
				</main>

				<div class="news__links">
					<a class="link" href="#">{{__('words.view_news')}} </a>
					<a class="link" href="#">{{__('words.view_news')}}</a>
				</div>
			</section> 
			