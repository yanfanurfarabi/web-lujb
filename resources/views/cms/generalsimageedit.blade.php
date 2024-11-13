{{-- @dd($generalimage) --}}
@extends('dashboardindex')

@section('content')
    <div class="DashboardContainer">
        <div class="InnerDashboard">
        
    <div class="Card">
        <div class="InnerCard">
            <p class="big bold">Edit</p>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('generalimage.update', $image->id) }} " method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="Card">
            <label for="name" class="edittitle">Name</label>
            <input type="text" class="editlabel" id="name" name="name" value="{{ old('name', $image->name) }} " required>
        </div>

        <div class="Card">
            <label for="image" class="edittitle">Image</label>
            @if ($image->image)
            <p class="semibold">Current Image : <img src=" {{ asset('storage/img/' . $image->image) }} " alt="" width="300"> </p>
            @endif
            <div class="gap-20"></div>
            <input type="file" class="" name="image" id="image">
        </div>

        <div class="Card">
            <label for="isActive" class="edittitle">isActive</label>
            <input type="text" class="editlabel" id="isActive" name="isActive" value="{{ old('name', $image->isActive) }} " required>
        </div>

        <button type="submit" class="Button">Update</button>
    </form>

        </div>
    </div>
    
    </div>
</div>


@endsection