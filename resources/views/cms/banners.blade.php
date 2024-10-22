{{-- @dd($banner) --}}

@extends('dashboardindex')

@section('content')

<div class="Container"> 
    <div class="gap-20"></div>
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
                                <td>
                                    <a href="{{ route('banner.edit', $banners->id) }}" class="small">Edit</a>

                                    <form action="{{ route('banner.destroy', $banners->id) }} " method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Yakin ingin hapus?')">Delete</button>
                                    </form></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <a href="{{ route('banner.create') }}">Add New</a>
    </div>
</div>


@endsection