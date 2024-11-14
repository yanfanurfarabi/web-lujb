{{-- @dd($datas) --}}
@extends('dashboardindex')

@section('content')
    <div class="DashboardContainer">
        <div class="InnerDashboard">
        
    <div class="Card">
        <div class="InnerCard">
            <p class="big bold">Create New Product</p>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('product.store') }} " method="POST" enctype="multipart/form-data">
        @csrf

        <div class="Card">
            <label for="name" class="edittitle">Name : </label>
            <input type="text" class="editlabel" name="name" required>
        </div>

        <div class="Card">
            <label for="desc" class="edittitle">Description : </label>
            <textarea class="editlabel textarea" name="desc" required></textarea>
        </div>
        
        <div class="Card">
            <label for="spec" class="edittitle">Specification : </label>
            <textarea class="editlabel textarea" name="spec" required></textarea>
        </div>

        <div class="Card">
            <label for="category" class="edittitle">Category</label>
            {{-- <input type="text" class="editlabel" id="name" name="name" value="{{ old('spec', $product->category) }}" required> --}}
            <select id="category" name="category" class="select w-full max-w-xs">
                <option disabled selected>Select Category</option>
                <option>Fuel Pump</option>
                <option>Red Robe</option>
                <option>Guihe ATG</option>
                <option>Dantec Composite Hose</option>
                <option>LCP Flowmeters</option>
                <option>Halock Polythlyene Flexible Pipes</option>
              </select>
        </div>

        <div class="Card">
            <label for="sortOrder" class="edittitle">sortOrder : </label>
            <input type="text" class="editlabel" name="sortOrder" required>
        </div>

        <div class="Card">
            <label for="isActive" class="edittitle">isActive : </label>
            <input type="text" class="editlabel" name="isActive" required>
        </div>

        <div class="Card">
            <label for="bannerimage" class="edittitle">Product Image : </label>
            <input type="file" name="bannerimage" id="bannerimage">
        </div>

        <button type="submit" class="Button">Update</button>
    </form>

        </div>
    </div>
    
    </div>
</div>


@endsection