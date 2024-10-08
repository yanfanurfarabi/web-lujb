@extends('dashboardindex')

@section('content')

<div class="Container"> 
        <h1 class="center black">Home Page</h3>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">

        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Home Banner</p>
                <form action="" class="DashboardForm">
                    <label for="HomeBanner">Banner</label>
                    <input type="file" id="HomeBanner" placeholder="Choose File">
                    <div class="gap-20"></div>
                    <label for="ContentHome">Content Home</label>
                    <input type="text" name="" id="ContentHome" placeholder="Sementengsayur ini ada 2" class="black">
                </form>
            </div>
        </div>

        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Content Home</p>
                <form action="" class="DashboardForm">
                    <label for="HeadlineHome">Headline Home</label>
                    <input type="text" id="HeadlineHome" placeholder="Headline Home Edit..." class="black">
                    <label for="ContentHome">Content Home</label>
                    <input type="text" name="" id="ContentHome" placeholder="Sementengsayur ini ada 2" class="black">
                </form>
            </div>
        </div>

        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Content Home</p>
                <form action="" class="DashboardForm">
                    <label for="HeadlineHome">Headline Home</label>
                    <input type="text" id="HeadlineHome" placeholder="Headline Home Edit..." class="black">
                    <label for="ContentHome">Content Home</label>
                    <input type="text" name="" id="ContentHome" placeholder="Sementengsayur ini ada 2" class="black">
                </form>
            </div>
        </div>

    </div>
</div>


@endsection