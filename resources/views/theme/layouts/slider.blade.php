@if(count($sliders)>0)
    @set($e, 0)
    @foreach($sliders as $slider)
        @if($slider->enabled)
            @set($e, 1)
        @endif
    @endforeach
    @if($e == 1)
        <div class="container-fluid">
            <div class="row">
                <div class="swiper-container home-slider">
                    <div class="swiper-wrapper">
                        @foreach($sliders as $slider)
                            @if($slider->enabled)
                                <div class="swiper-slide" data-cover="/uploads/{{$slider->img}}" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="460px">
                                    {!! $slider->html !!}
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev d-none d-sm-flex" id="home-slider-prev"><i class="material-icons md-3">keyboard_arrow_left</i></div>
                    <div class="swiper-button-next d-none d-sm-flex" id="home-slider-next"><i class="material-icons md-3">keyboard_arrow_right</i></div>
                </div>
            </div>
        </div>
    @endif
@endif
