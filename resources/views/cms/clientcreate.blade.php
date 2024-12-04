{{-- @dd($datas) --}}
@extends('dashboardindex')

@section('content')
    <div class="DashboardContainer">
        <div class="InnerDashboard">
        
    <div class="Card">
        <div class="InnerCard">
            <p class="big bold">Create Client</p>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('client.store') }} " method="POST" enctype="multipart/form-data">
        @csrf

        <div class="Card">
            <label for="name" class="edittitle">Name : </label>
            <input type="text" class="editlabel" name="name" required>
        </div>

        <div class="Card">
            <label for="image" class="edittitle">Banner Image : </label>
            <input type="file" name="image" id="image">
        </div>

        {{-- <div class="Card">
            <label for="isActive" class="edittitle">is Active : </label>
            <input type="number" name="isActive" id="isActive">
        </div> --}}

        <button type="submit" class="Button">Update</button>
    </form>

        </div>
    </div>
    
    </div>
</div>


@endsection