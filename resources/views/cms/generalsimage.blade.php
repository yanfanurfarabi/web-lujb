{{-- @dd($image) --}}

@extends('dashboardindex')

@section('content')

<div class="Container">
    <div class="gap-20"></div>
        <h1 class="center black">General Image</h3>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">

        <div class="Card">
            <div class="InnerCard">

                <table id="form">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>link</th>
                            <th>is Active</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($image as $img)
                            
                            <tr>
                                <td>{{ $img->name }}</td>
                                @if ($img->image != "")
                                <td> <img src="{{ asset('storage/img/'. $img->image) }}" alt="image" width= "300"></td>
                                @endif
                                <td>{{ $img->link }}</td>
                                <td>{{ $img->isActive }}</td>
                                <td>
                                    <a href="{{ route('image.edit', $img->id) }}" class="small">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


    </div>
</div>

    </div>
</div>

@endsection