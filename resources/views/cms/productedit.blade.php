{{-- @dd($datas) --}}
@extends('dashboardindex')

@section('content')
    <div class="DashboardContainer">
        <div class="InnerDashboard">
        
    <div class="Card">
        <div class="InnerCard">
            <p class="big bold">Edit Product</p>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('product.update', $product->id) }} " method="POST">
        @csrf
        @method('PUT')

        <div class="Card">
            <label for="name" class="edittitle">Name</label>
            <input type="text" class="editlabel" id="name" name="name" value="{{ old('name', $product->name) }} " required>
        </div>

        <div class="Card">
            <label for="desc" class="edittitle">Description</label>
            <textarea class="editlabel textarea" name="value">{{ old('desc', $product->desc) }}</textarea>
        </div>

        <div class="Card">
            <label for="spec" class="edittitle">Specification</label>
            <textarea class="editlabel textarea" name="spec">{{ old('spec', $product->spec) }}</textarea>
        </div>

        <div class="Card">
            <label for="sortOrder" class="edittitle">Sort Order</label>
            <input type="text" class="editlabel" id="sortOrder" name="sortOrder" value="{{ old('sortOrder', $product->sortOrder) }} " required>
        </div>

        <div class="Card">
            <label for="isActive" class="edittitle">isActive</label>
            <input type="text" class="editlabel" id="isActive" name="isActive" value="{{ old('isActive', $product->isActive) }} " required>
        </div>

        <div class="Card">
            <label for="bannerimage" class="edittitle">Product Image</label>
            @if ($product->bannerimage)
            <p class="semibold">Current Image : <img src=" {{ asset('storage/img/'. $product->bannerimage) }} " alt="" width="300px"> </p>
            @endif
            <div class="gap-20"></div>
            <input type="file" class="" name="imagbannerimagee" id="bannerimage">
        </div>

        <button type="submit" class="Button">Update</button>
    </form>

        </div>
    </div>
    
    </div>
</div>


@endsection