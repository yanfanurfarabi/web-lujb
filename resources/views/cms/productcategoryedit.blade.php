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
    
    <form action="{{ route('productcategory.update', $productcat->id) }} " method="POST">
        @csrf
        @method('PUT')

        <div class="Card">
            <label for="sortOrder" class="edittitle">Sort Order</label>
            <input type="text" class="editlabel" id="sortOrder" name="sortOrder" value="{{ old('sortOrder', $productcat->sortOrder) }} " required>
        </div>

        <div class="Card">
            <label for="isActive" class="edittitle">isActive</label>
            <input type="text" class="editlabel" id="isActive" name="isActive" value="{{ old('isActive', $productcat->isActive) }} " required>
        </div>

        <button type="submit" class="Button">Update</button>
    </form>

        </div>
    </div>
    
    </div>
</div>


@endsection