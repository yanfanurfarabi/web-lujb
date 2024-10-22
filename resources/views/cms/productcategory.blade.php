{{-- @dd($datas) --}}

@extends('dashboardindex')

@section('content')

<div class="Container">
    <div class="gap-20"></div>
        <h1 class="center black">Products</h3>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">

        <div class="Card">
            <div class="InnerCard">

                <table id="form">
                    <thead>
                        <tr>
                            <th>Product Category</th>
                            <th>sortOrder</th>
                            <th>is Active</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($productcat as $pct)
                            
                            <tr>
                                <td>{{ $pct->category }} </td>
                                <td>{{ $pct->sortOrder }} </td>
                                <td>{{ $pct->isActive }} </td>
                                <td>
                                    <button type="button"><a href="{{ route('productcategory.edit', $pct->id)}}" class="">Edit</a></button>

                                    <div class="gap-20"></div>

                                    <form action="{{ route('productcategory.destroy', $pct->id) }} " method="POST">
                                        @csrf   
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                                
                            </tr>
                            
                            
                            @endforeach
                        </tbody>
                    </table>
                    
                    <a href="{{ route('productcategory.create') }}">Add New</a>

    </div>
</div>


@endsection