@extends('index')

@section('content')

<div class="BannerCanvas">
    <div class="ActiveBanner"></div>
</div>

<div class="Container">
    <div class="InnerContainer">
    <div class="InnerContent align-center">
        <div class="ContainerBanner">
        <img src="img/banner-test.png" alt="" class="ContainerImage">
    </div>
        <div class="ContainerContent">
            <h3 class="xl bold black">Title</h3>
            <div class="ContainerList">
                <p class="black small reguler">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Laudantium, quo est. Laborum obcaecati qui
                    amet non nemo consequuntur quibusdam animi repudiandae
                    necessitatibus delectus cupiditate, veniam dolorem quod debitis
                    expedita praesentium?</p>
                </div>
                <div class="ContainerLink"><a href="/product" class="Button white small semibold">Read More</a></div>
            </div>
    </div>
</div>
</div>

<div class="Container">
    <div class="InnerContainer">
    <div class="InnerContent align-center">
        <div class="ContainerContent">
            <h3 class="xl bold black">Title</h3>
            <div class="ContainerList">
                <p class="black small reguler">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Laudantium, quo est. Laborum obcaecati qui
                    amet non nemo consequuntur quibusdam animi repudiandae
                    necessitatibus delectus cupiditate, veniam dolorem quod debitis
                    expedita praesentium?</p>
                </div>
                <div class="ContainerLink"><a href="/product" class="Button white small semibold">Read More</a></div>
            </div>
            <div class="ContainerBanner">
            <img src="img/banner-test.png" alt="" class="ContainerImage">
        </div>
    </div>
</div>
</div>

@endsection