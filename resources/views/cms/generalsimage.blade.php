{{-- @dd($image) --}}

@extends('dashboardindex')

@section('content')

<div class="Container">
    <div class="gap-20"></div>
        <h1 class="center black">General Image</h3>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">
        <button type="button" class="Button-Add white" onclick="window.location.href='{{ route('generalimage.create') }}'">Add New</button>
        <div class="Card">
            <div class="InnerCard">

                <table id="form">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
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
                                <td>{{ $img->isActive }}</td>
                                <td>
                                    <button type="button" class="Button-Edit" onclick="window.location.href='{{ route('generalimage.edit', $img->id) }}'">Edit</button>
                                    <div class="gap-20"></div>
                                    <form action="{{ route('generalimage.destroy', $img->id) }} " method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="Button-Delete white" onclick="return confirm('Yakin ingin hapus?')">Delete</button>
                                    </form>

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