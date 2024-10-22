{{-- @dd($datas) --}}
@extends('dashboardindex')

@section('content')
    <div class="DashboardContainer">
        <div class="InnerDashboard">
        
    <div class="Card">
        <div class="InnerCard">
            <p class="big bold">Create New Product Category</p>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('productcategory.store') }} " method="POST" enctype="multipart/form-data">
        @csrf

        <div class="Card">
            <label for="category" class="edittitle">Category : </label>
            <input type="text" class="editlabel" name="category" required>
        </div>

        <div class="Card">
            <label for="isActive" class="edittitle">is Active : </label>
            <input type="text" class="editlabel" name="isActive" required>
        </div>
        
        <div class="Card">
            <label for="sortOrder" class="edittitle">Sort Order : </label>
            <input type="text" class="editlabel" name="sortOrder" required>
        </div>

        <button type="submit" class="Button">Update</button>
    </form>

        </div>
    </div>
    
    </div>
</div>


@endsection