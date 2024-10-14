{{-- @dd($generalimage) --}}
@extends('dashboardindex')

@section('content')
    <div class="DashboardContainer">
        <div class="InnerDashboard">
        
    <div class="Card">
        <div class="InnerCard">
            <p class="big bold">Edit Banner</p>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('banner.update', $banner->id) }} " method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="Card">
            <label for="name" class="edittitle">Name</label>
            <input type="text" class="editlabel" id="name" name="name" value="{{ old('name', $banner->name) }} " required>
        </div>

        <div class="Card">
            <label for="BannerCategory" class="edittitle">Banner Category</label>
            <input type="text" class="editlabel" id="BannerCategory" name="BannerCategory" value="{{ old('BannerCategory', $banner->BannerCategory) }} " required>
        </div>

        <div class="Card">
            <label for="value" class="edittitle">Image</label>
            @if ($banner->image)
            <p class="semibold">Current Image : <img src=" {{ asset('storage/images/' . $banner->image) }} " alt=""> </p>
            @endif
            <input type="file" class="" name="image" id="image">
        </div>

        <button type="submit" class="Button">Update</button>
    </form>

        </div>
    </div>
    
    </div>
</div>


@endsection