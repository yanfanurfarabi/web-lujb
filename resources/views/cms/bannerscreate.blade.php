{{-- @dd($datas) --}}
@extends('dashboardindex')

@section('content')
    <div class="DashboardContainer">
        <div class="InnerDashboard">
        
    <div class="Card">
        <div class="InnerCard">
            <p class="big bold">Create Banner</p>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('banner.store') }} " method="POST" enctype="multipart/form-data">
        @csrf

        <div class="Card">
            <label for="name" class="edittitle">Name : </label>
            <input type="text" class="editlabel" name="name" required>
        </div>
        
        <div class="Card">
            <label for="BannerCategory" class="edittitle">Banner Category</label>
            {{-- <input type="text" class="editlabel" id="name" name="name" value="{{ old('spec', $product->category) }}" required> --}}
            <select id="BannerCategory" name="BannerCategory" class="select w-full max-w-xs">
                <option disabled selected>Select Category</option>
                <option>Service</option>
                <option>About Us</option>
                <option>Contact Us</option>
                <option>Product</option>
              </select>
        </div>

        <div class="Card">
            <label for="image" class="edittitle">Banner Image : </label>
            <input type="file" name="image" id="image">
        </div>

        <button type="submit" class="Button">Update</button>
    </form>

        </div>
    </div>
    
    </div>
</div>


@endsection