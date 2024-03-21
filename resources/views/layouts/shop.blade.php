@extends('layouts.master')
@section('hero')
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
                </div>
            </div>
            <div class="col-lg-7">
                
            </div>
        </div>
@endsection
@section('content')
<div class="pt-3">
    <div class='d-flex'>
        @foreach ($images as $item)
            <div class="card contentcard" style="width:15rem;margin-left:1.5rem;border:none">
                <img class="card-img-top" src="{{$item['image']}}" alt="Card image cap" style="width:200px; height:200px; object-fit: cover;border:none">
                <div class="card-body">
                    <h6>{{$item['name']}}</h6>
                    <div class=d-flex>
                        <p class="card-text">{{$item['price']}} | </p>
                        <p class="card-text">{{$item['discount']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="pt-3">
    <div class='d-flex'>
        @foreach ($images as $item)
            <div class="card" style="width:15rem;margin-left:1.5rem;border:none">
                <img class="card-img-top" src="{{$item['image']}}" alt="Card image cap" style="width:200px; height:200px; object-fit: cover;border:none">
                <div class="card-body">
                    <h6>{{$item['name']}}</h6>
                    <div class=d-flex>
                        <p class="card-text">{{$item['price']}} | </p>
                        <p class="card-text">{{$item['discount']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
