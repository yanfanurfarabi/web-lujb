@extends('index')

@section('content')

<style>

    </style>

<div class="BannerCanvas">
    <div class="ActiveBanner"></div>
</div>

<div class="Container">
    <div class="gap-20"></div>
    <p class="xl black bold center">Specialized In Petrol Station <br> Equipment Products and Installation</p>
    <div class="gap-20"></div>
</div>

<div class="Container">
    {{-- <div class="InnerContainer"> --}}
        <div class="ProductNavigation">
            <p class="black big bold center">Our Core Products</p>
            <div class="gap-20"></div>
            <div class="NavigationList1">
                <a href="/product" class="Navigation1"></a>
            </div>
            <div class="NavigationList2">
                <a href="/product" class="Navigation2"></a>
                <a href="/product" class="Navigation3"></a>
                <a href="/product" class="Navigation4"></a>
            </div>
            <div class="NavigationList3">
                <a href="/product" class="Navigation5"></a>
                <a href="/product" class="Navigation6"></a>
            </div>
        {{-- </div> --}}
    </div>
</div>

<div class="Container">
    <div class="InnerContainer">
    <div class="InnerContent align-center">
        <div class="ContainerBanner">
        <img src="img/why_us.jpeg" alt="" class="ContainerImage">
    </div>
        <div class="ContainerContent">
            <h3 class="xl bold black">Title</h3>
            <div class="ContainerList">
                <p class="black small reguler">Body</p>
                </div>
                <div class="ContainerLink"><a href="/product" class="Button white small semibold center">Read More</a></div>
            </div>
    </div>
</div>
</div>

{{-- <div class="Container">
    <div class="FullContainer">
        <div class="InnerContent align-center">
            <div class="CategoryContainer">
                <p class="xl black bold center">Our Products</p>
                <div class="gap-20"></div>
                <div class="ProductCategoryContainer">

                    <a href="/product" class="CategoryCard">
                        <div class="CategoryCardTitle">
                            <p class="small semibold center">Sanki Fuel Dispenser</p>
                        </div>
                    </a>

                    <a href="/product" class="CategoryCard">
                        <div class="CategoryCardTitle">
                            <p class="small semibold center">Guihe Automatic <br>
                            Tank Gauge</p>
                        </div>
                    </a>

                    <a href="/product" class="CategoryCard">
                        <div class="CategoryCardTitle">
                            <p class="small semibold center">Dantec <br>
                            composite Hose</p>
                        </div>
                    </a>

                    <a href="/product" class="CategoryCard">
                        <div class="CategoryCardTitle"> 
                            <p class="small semibold center">Halock Polyethlyene
                                Flexible Pipes</p>
                        </div>
                    </a>

                    <a href="/product" class="CategoryCard">
                        <div class="CategoryCardTitle">
                            <p class="small semibold center">Liquid Control Positive
                                Displacement Flowmeters</p>
                        </div>
                    </a>

                    <a href="/product" class="CategoryCard">
                        <div class="CategoryCardTitle">
                            <p class="small semibold center none">Goldensite Aluminium
                                Composite Panel</p>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="Container">
    <div class="FullContainer">
        <div class="InnerContainer align-center">
                <p class="xl black bold center">Menu</p>
                <p class="small black semibold center">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Optio eligendi dicta iusto debitis tenetur!
                    Perspiciatis, dolore necessitatibus quisquam laudantium impedit
                    voluptas ducimus non vitae blanditiis soluta dolores asperiores
                    repellat dignissimos!</p>
            <div class="MenuContainer">
                
                <a href="/product" class="MenuCard">
                    <div class="CardTitle">
                        <p class="big black bold center">Product</p>
                    </div>
                </a>

                <a href="/profile" class="MenuCard">
                    <div class="CardTitle">
                        <p class="big black bold center">About Us</p>
                    </div>
                </a>

                <a href="/profile" class="MenuCard">
                    <div class="CardTitle">
                        <p class="big black bold center">Contact</p>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div> --}}

<div class="Container">
    <div class="InquiryContainer">
        <div class="Inquiry">
            <p class="black big semibold">Interested with our services?</p>
        </div>
        <div class="white Button">Inquiry</div>
    </div>
</div>

@endsection