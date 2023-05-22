			<!-- === COMPANY === -->

            <section class="company">
				<h1 class="title" data-aos-offset="200" data-aos="flip-up">{{__('words.about')}}</h1>

				<div class="company__inner">
					<div class="company__wrapper" data-aos-offset="100" data-aos-duration="1000" data-aos="zoom-in">
						<div class="company__circle company__circle_1">
							<div class="company__circle company__circle_2">
								<div class="company__circle company__circle_3">
									<img class="company__logo" src="{{!empty($about)?Voyager::image($about->image):''}}" alt="logo">
								</div>
							</div>
						</div>
					</div>
	
					<div class="company__content" data-aos-offset="100" data-aos-duration="1000" data-aos="fade-right">
						<img class="company__content-logo" src="{{!empty($about)?Voyager::image($about->image):''}}" alt="logo">
						<p class="company__text text">{{!empty($about)?$about['description_'.\App::getLocale()]:''}}</p>
	
						<button class="btn">{{__('words.learn_more')}}</button>
					</div>
				</div>


			</section> 