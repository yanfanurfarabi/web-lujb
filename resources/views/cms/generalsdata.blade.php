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
                        {{-- @if (is_object($data) && @isset($data->value))
                            <td>{{ $data->value }} </td>
                        @else
                            <td>Data tidak Valid</td>
                            @endif --}}
                            
                            <tr>
                                <td>{{ $data->name }} </td>
                                <td>{{ $data->value }} </td>
                                <td>
                                    <a href="{{ route('datas.edit', $data->id) }}" class="small">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


    </div>
</div>


@endsection