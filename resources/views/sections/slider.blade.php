<div class="header__slider">
    @if (!empty($slides))					
        @foreach ($slides as $slide)
        <div class="header__slide">
            <div class="header__content">
                <h1 class="header__title">{{ $slide['title_'.\App::getLocale()]}}</h1>
                <p class="header__text">{{ $slide['description_'.\App::getLocale()]}}</p>
                <button class="btn">{{__('words.more')}}</button>
            </div>
            <img class="header__img" src="{{Voyager::image($slide->image)}}" alt="header img">
        </div>
        @endforeach
    @else
        <h1>Not Slides</h1>
    @endif
</div>