			<!-- === PRODUCTS === -->

            <section class="products">
				<h1 class="title" data-aos-offset="200" data-aos="flip-up">{{__('words.products')}}</h1>
				<main class="products__inner">
					@if (!empty($products))
						

					@foreach ($products as $product)
						<div class="products__item" data-aos-offset="100" data-aos="zoom-out">
							<img class="products__img" src="{{Voyager::image($product->image)}}" alt="products img">
							<h3 class="products__title">{{ $product['title_'.\App::getLocale()]}}</h3>
							<button class="btn">{{__('words.view')}}</button>
						</div>
					@endforeach

					@else
						<h1>Not Products</h1>
					@endif
				</main>

				<a class="link" href="#">{{__('words.go_catalog')}}</a>
			</section> 
			