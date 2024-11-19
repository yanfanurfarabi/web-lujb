{{-- @dd($banner) --}}

@extends('dashboardindex')

@section('content')

<div class="Container"> 
    <div class="gap-20"></div>
        <h1 class="center black">Banners Content</h3>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">
        <button type="button" class="Button-Add white" onclick="window.location.href='{{ route('banner.create') }}'">Add New</button>
        <div class="Card">
            <div class="InnerCard">

                <table id="form">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>BannerCategory</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($banner as $key => $banners)
                            
                            <tr>
                                <td>{{ $key + 1 }} </td>
                                <td>{{ $banners->name }}</td>
                                @if ($banners->image != "")
                                <td> <img src="{{ asset('storage/img/'. $banners->image) }}" alt="image" width= "400"></td>
                                @endif
                                <td>{{ $banners->BannerCategory }}</td>
                                <td>
                                    <button type="button" class="Button-Edit" onclick="window.location.href='{{ route('banner.edit', $banners->id) }}'">Edit</button>
                                    <div class="gap-20"></div>
                                    <form action="{{ route('banner.destroy', $banners->id) }} " method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="Button-Delete white" onclick="return confirm('Yakin ingin hapus?')">Delete</button>
                                    </form></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

    </div>
</div>


@endsection