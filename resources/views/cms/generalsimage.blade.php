{{-- @dd($generalimages) --}}

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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($generalimage as $generalimages)
                            
                            <tr>
                                <td>{{ $generalimages->name }}</td>
                                <td> <img src="{{ asset('storage/images'. $generalimages->image) }}" alt=""></td>
                                <td>{{ $generalimages->link }}</td>
                                {{-- <td>{{ $data->value }}</td> --}}
                                <td>
                                    <a href="{{ route('generalimage.edit', $generalimages->id) }}" class="small">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


    </div>
</div>


@endsection