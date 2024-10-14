{{-- @dd($banner) --}}

@extends('dashboardindex')

@section('content')

<div class="Container"> 
        <h1 class="center black">Banners Content</h3>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">

        <div class="Card">
            <div class="InnerCard">

                <table id="form">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>BannerCategory</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($banner as $banners)
                            
                            <tr>
                                <td>{{ $banners->name }}</td>
                                @if ($banners->image != "")
                                <td> <img src="{{ asset('storage/img/'. $banners->image) }}" alt="image" width= "800"></td>
                                @endif
                                <td>{{ $banners->BannerCategory }}</td>
                                <td><a href="{{ route('banner.edit', $banners->id) }}" class="small">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


    </div>
</div>


@endsection