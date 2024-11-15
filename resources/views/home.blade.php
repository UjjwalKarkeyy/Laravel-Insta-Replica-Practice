@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3 p-5" style="width: 20%">
            <img src="https://ebranch.lili.org/tetons/wp-content/uploads/sites/22/2016/08/Free-Code-Camp.png"
                class="rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div class="pb-3">
                <h1 style="font-size: 20px">{{ Auth::user()->name }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-3 font-bold">
                ujjwal.org.com
            </div>

            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas expedita eaque reiciendis ullam odio quos
                at eligendi minima dolorem? Corrupti!
            </div>

            <div class="font-bold"><a href="https://www.instagram.com" style="color: #00008B;">www.ujjwal.org.com</a>
            </div>
        </div>
    </div>

    <div class="row pt-0" style="margin-left: 160px;">
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1gH-yH1DeBp7cG7SqJch1eLvG-yd1hZiRwA&s"
                class="w-100 h-100">
        </div>
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnjawP8lz_O88Rk6tq6Ohrtj5EJr8bkU9WAg&s"
                class="w-100 h-100">
        </div>
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOp8oeR4ao6_K8of6VI907JJzQ1_4eQ2K4vw&s"
                class="w-100 h-100">
        </div>
    </div>
</div>

@endsection