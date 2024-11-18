{{-- @dd($image) --}}

@extends('dashboardindex')

@section('content')

<div class="Container">
    <div class="gap-20"></div>
        <h1 class="center black">Client</h3>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">
        <button type="button" class="Button-Add white" onclick="window.location.href='{{ route('client.create') }}'">Add New</button>
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
                        @foreach($client as $clients)
                            
                            <tr>
                                <td>{{ $clients->name }}</td>
                                @if ($clients->image != "")
                                <td> <img src="{{ asset('storage/img/'. $clients->image) }}" alt="image" width= "100"></td>
                                @endif
                                <td>{{ $clients->isActive }}</td>
                                <td>
                                    <button type="button" class="Button-Edit" onclick="window.location.href='{{ route('client.edit', $clients->id) }}'">Edit</button>
                                    <div class="gap-20"></div>
                                    <form action="{{ route('client.destroy', $clients->id) }} " method="POST">
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