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
                <a href="/dashboard/generaldata" class="semibold no-underline">Edit</a>
            </div>
        </div>

        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Generals Image</p>
                <a href="/dashboard/generalimage" class="semibold no-underline">Edit</a>
            </div>
        </div>

        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Banners</p>
                <a href="/dashboard/banner" class="semibold no-underline">Edit</a>
            </div>
        </div>

        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Products</p>
                <a href="/dashboard/product" class="semibold no-underline">Edit</a>
            </div>
        </div>


        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Product Category</p>
                <a href="/dashboard/productcategory" class="semibold no-underline">Edit</a>
            </div>
        </div>


        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Footer</p>
                <a href="/dashboard/footer" class="semibold no-underline">Edit</a>
            </div>
        </div>


    </div>
</div>


@endsection