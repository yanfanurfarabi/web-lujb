@extends('dashboardindex')

@section('content')

<div class="Container"> 
        <h1 class="center black">Dashboard</h1>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">

        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Generals Data</p>
                <button type="button" class="Button-Edit" onclick="window.location.href='/dashboard/generaldata'">View</button>
            </div>
        </div>

        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Generals Image</p>
                <button type="button" class="Button-Edit" onclick="window.location.href='/dashboard/generalimage'">View</button>
            </div>
        </div>

        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Generals Image</p>
                <button type="button" class="Button-Edit" onclick="window.location.href='/dashboard/client'">View</button>
            </div>
        </div>

        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Banners</p>
                <button type="button" class="Button-Edit" onclick="window.location.href='/dashboard/banner'">View</button>
            </div>
        </div>

        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Products</p>
                <button type="button" class="Button-Edit" onclick="window.location.href='/dashboard/product'">View</button>
            </div>
        </div>


        {{-- <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Product Category</p>
                <a href="/dashboard/productcategory" class="semibold no-underline">Edit</a>
            </div>
        </div> --}}


        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Footer</p>
                <button type="button" class="Button-Edit" onclick="window.location.href='/dashboard/footer'">View</button>
            </div>
        </div>


    </div>
</div>


@endsection