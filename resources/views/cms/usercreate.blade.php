{{-- @dd($datas) --}}
@extends('dashboardindex')

@section('content')
    <div class="DashboardContainer">
        <div class="InnerDashboard">
        
    <div class="Card">
        <div class="InnerCard">
            <p class="big bold">Create</p>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('user.store') }} " method="POST">
        @csrf

        <div class="Card">
            <label for="name" class="edittitle">Name : </label>
            <input type="text" class="editlabel" name="name" required>
        </div>

        <div class="Card">
            <label for="email" class="edittitle">Email : </label>
            <input type="text" class="editlabel" name="email" required>
        </div>

        <div class="Card">
            <label for="password" class="edittitle">Password : </label>
            <input type="password" class="editlabel" name="password" required>
        </div>



        <button type="submit" class="Button">Update</button>
    </form>

        </div>
    </div>
    
    </div>
</div>


@endsection