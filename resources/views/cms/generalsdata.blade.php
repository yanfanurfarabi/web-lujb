{{-- @dd($data) --}}

@extends('dashboardindex')

@section('content')

<div class="Container"> 
        <h1 class="center black">General Data</h3>
</div>

<div class="DashboardContainer">
    <div class="InnerDashboard">

        <div class="Card">
            <div class="InnerCard">

                <p class="big bold">Page Home </p>
                @foreach ($datas as $data)
                {{-- <form action=" " method="POST" class="DashboardForm"  enctype="multipart/form-data"> --}}
                    <form action="{{ route('datas.update' ,  $data) }}" method="POST" class="DashboardForm"  enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}
                    <p class="medium bold">{{ $data->name }} </p>
                    <input type="text" value="{{ $data->value  }} " id="title" class="black">
                    
                    
                    {{-- <input type="text" value="{{ $title }} " id="title" class="black"> --}}
                    <a href="{{ route('datas.update', $data->id) }}" class="big black">Edit</a>
                    @endforeach
                    <label for="value">Value</label>
                    <input type="text" name="value" id="value" placeholder="Content Home Edit..." class="black">
                    
                    <label for="ContentHome">Content Title</label>
                    <input type="text" name="" id="ContentHome" placeholder="Content Home Edit..." class="black">
                    
                    <label for="ContentHome">Content Body</label>
                    <input type="text" name="" id="ContentHome" placeholder="Content Home Edit..." class="black">
                    
                    <button type="submit" class="ButtonFile white">Edit</button>
                </form>
            </div>
        </div>
        
        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Page Services</p>
                <form action="" class="DashboardForm">
                    <label for="HeadlineHome">Headline Home</label>
                    <input type="text" id="HeadlineHome" placeholder="Headline Home Edit..." class="black">
                    <label for="ContentHome">Content Home</label>
                    <input type="text" name="" id="ContentHome" placeholder="Content Home Edit..." class="black">
                    <button type="submit" class="ButtonFile white">Edit</button>
                </form>
            </div>
        </div>

        <div class="Card">
            <div class="InnerCard">
                <p class="big bold">Page Profile</p>
                <form action="" class="DashboardForm">
                    <label for="HeadlineHome">Headline Home</label>
                    <input type="text" id="HeadlineHome" placeholder="Headline Home Edit..." class="black">
                    <label for="ContentHome">Content Home</label>
                    <input type="text" name="" id="ContentHome" placeholder="Content Home Edit..." class="black">
                    <button type="submit" class="ButtonFile white">Edit</button>
                </form>
            </div>
        </div>

    </div>
</div>


@endsection