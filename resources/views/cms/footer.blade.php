{{-- @dd($footer) --}}

@extends('dashboardindex')

@section('content')

<div class="Container">
    <div class="gap-20"></div>
        <h1 class="center black">Footer</h3>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">
        <button type="button" class="Button-Add white" onclick="window.location.href='{{ route('footer.create') }}'">Add New</button>

        <div class="Card">
            <div class="InnerCard">

                <table id="form">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Value</th>
                            <th>isActive</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($footer as $footers)
                            
                            <tr>
                                <td>{{ $footers->name }} </td>
                                <td>{{ $footers->value }} </td>
                                <td>
                                    <button type="button"><a href="{{ route('footer.edit', $footers->id) }}" class="small">Edit</a></button>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>


    </div>
</div>


@endsection