{{-- @dd($footer) --}}
@extends('dashboardindex')

@section('content')
    <div class="DashboardContainer">
        <div class="InnerDashboard">
        
    <div class="Card">
        <div class="InnerCard">
            <p class="big bold">Edit Footer</p>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('footer.update', $footer->id) }} " method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="Card">
            <label for="name" class="edittitle">Name</label>
            <input type="text" class="editlabel" id="name" name="name" value="{{ old('name', $footer->name) }} " required>
        </div>

        <div class="Card">
            <label for="value" class="edittitle">Value</label>
            <input type="text" class="editlabel" id="value" name="value" value="{{ old('value', $footer->value) }} " required>
        </div>

        <button type="submit" class="Button">Update</button>
    </form>

        </div>
    </div>
    
    </div>
</div>


@endsection