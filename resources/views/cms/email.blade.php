{{-- @dd($datas) --}}

@extends('dashboardindex')

@section('content')

<div class="Container">
    <div class="gap-20"></div>
        <h1 class="center black">General Data</h3>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">

        {{-- <button type="button" class="Button-Add white" onclick="window.location.href='{{ route('generaldata.create') }}'">Add New</button> --}}

        <div class="Card">
            <div class="InnerCard">

                <table id="form">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($email as $key => $emails)
                            
                            <tr>
                                <td>{{ $key + 1 }} </td>
                                <td>{{ $emails->name }} </td>
                                <td>{{ $emails->email }} </td>
                                <td>{{ $emails->subject }}</td>
                                <td>{{ $emails->message }}</td>
                                <td>
                                    {{-- <button type="button" class="Button-Edit" onclick="window.location.href='{{ route('email.edit', $emails->id) }}'">Edit</button> --}}
                                    <div class="gap-20"></div>
                                    {{-- <form action="{{ route('generaldata.destroy', $data->id) }} " method="POST"> --}}
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