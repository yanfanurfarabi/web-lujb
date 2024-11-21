{{-- @dd($datas) --}}

@extends('dashboardindex')

@section('content')

<div class="Container">
    <div class="gap-20"></div>
        <h1 class="center black">User</h3>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">
        <button type="button" class="Button-Add white" onclick="window.location.href='{{ route('user.create') }}'">Add New</button>
        <div class="Card">
            <div class="InnerCard">

                <table id="form">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($users as $key => $user)
                            
                            <tr>
                                <td>{{ $key + 1 }} </td>
                                <td>{{ $user->name }} </td>
                                <td>{{ $user->email }} </td>
                                <td>{!! $user->password !!} </td>
                                <td>
                                    <button type="button" class="Button-Edit" onclick="window.location.href='{{ route('user.edit', $user->id)}}'">Edit</button>
                                    <div class="gap-20"></div>
                                    <form action="{{ route('user.destroy', $user->id) }} " method="POST">
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