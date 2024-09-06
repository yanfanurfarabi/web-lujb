@extends('index')

@section('content')

<div class="BannerCanvas">
    <div class="ActiveBanner">
    </div>
</div>

<div class="Container">
    <div class="ListProductCategory">
        <ul class="ListCategory">
            <li class="Category small light">Fuel Pump</li>
            <li class="Category small light">Hose</li>
            <li class="Category small light">Hose Meter</li>
            <li class="Category small light">Flexible Pipes</li>
            <li class="Category small light">ATG</li>
            <li class="Category small light">Panel</li>
        </ul>
    </div>
</div>

{{-- Product --}}

<div class="Container">

    <div class="ProductContainer">

        <div class="ProductList">

            <div class="ProductCard">
                <div class="ProductImageContainer">
                    <img src="img/tatsuno1.png" alt="#tatsuno" class="ProductImage">
                 </div>
                <div class="ProductTitle">
                    <p class="black xl bold center">Sanki 1</p>
                </div>
            </div>

            <div class="ProductCard">
                <img src="img/tatsuno1.png" alt="#tatsuno" class="ProductImage">
                <div class="ProductTitle">
                    <p class="black xl bold center">Sanki 1</p>
                </div>
            </div>

            <div class="ProductCard">
                <img src="img/tatsuno1.png" alt="#tatsuno" class="ProductImage">
                <div class="ProductTitle">
                    <p class="black xl bold center">Sanki 1</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="Container">
    <div class="InquiryContainer">
        <div class="Inquiry">
            <p class="black big semibold">Interested with our services?</p>
            <div class="Button">Inquiry</div>
        </div>
    </div>
</div>

@endsection