{{-- @dd($datas) --}}

@extends('dashboardindex')

@section('content')

<div class="Container">
    <div class="gap-20"></div>
        <h1 class="center black">General Data</h3>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">

        <button type="button" class="Button-Add white" onclick="window.location.href='{{ route('generaldata.create') }}'">Add New</button>

        <div class="Card">
            <div class="InnerCard">

                <table id="form">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Value</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($datas as $data)
                            
                            <tr>
                                <td>{{ $data->name }} </td>
                                <td>{{ $data->value }} </td>
                                <td>
                                    <button type="button" class="Button-Edit" onclick="window.location.href='{{ route('generaldata.edit', $data->id) }}'">Edit</button>
                                    <div class="gap-20"></div>
                                    <form action="{{ route('generaldata.destroy', $data->id) }} " method="POST">
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


@endsection