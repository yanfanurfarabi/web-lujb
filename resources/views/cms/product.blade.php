{{-- @dd($datas) --}}

@extends('dashboardindex')

@section('content')

<div class="Container">
    <div class="gap-20"></div>
        <h1 class="center black">Products</h3>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">
       <button> <a href="{{ route('product.create') }}">Add New</a></button>
        <div class="Card">
            <div class="InnerCard">

                <table id="form">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Specification</th>
                            <th>Product Image</th>
                            <th>sortOrder</th>
                            <th>is Active</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($product as $prod)
                            
                            <tr>
                                <td>{{ $prod->name }} </td>
                                <td>{{ $prod->desc }} </td>
                                <td>{{ $prod->spec }} </td>
                                @if ($prod->bannerimage != "")
                                <td> <img src="{{ asset('storage/img/'. $prod->bannerimage) }}" alt="image" width= "300px"></td>
                                @endif
                                <td>{{ $prod->sortOrder }} </td>
                                <td>{{ $prod->isActive }} </td>
                                <td>
                                    <button type="button"><a href="{{ route('product.edit', $prod->id)}}" class="">Edit</a></button>
                                    <div class="gap-20"></div>
                                    <form action="{{ route('product.destroy', $prod->id) }} " method="POST">
                                        @csrf   
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                                
                            </tr>
                            
                            
                            @endforeach
                        </tbody>
                    </table>
                    
                    

    </div>
</div>


@endsection