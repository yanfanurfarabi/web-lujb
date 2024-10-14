{{-- @dd($datas) --}}

@extends('dashboardindex')

@section('content')

<div class="Container">
    <div class="gap-20"></div>
        <h1 class="center black">General Data</h3>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">

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
                                    <button type="button"><a href="{{ route('edit', $data->id)}}" class="">Edit</a></button>
                                        
                                    <form action="{{ route('destroy', $data->id) }} " method="POST">
                                        @csrf   
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Yakin ingin hapus?')">Delete</button>
                                    </form>
                                </td>
                                
                            </tr>
                            
                            
                            @endforeach
                        </tbody>
                    </table>
                    
                    <a href="{{ route('create') }}">Add New</a>

    </div>
</div>


@endsection