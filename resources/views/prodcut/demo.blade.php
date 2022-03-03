@extends('layouts.app')

@section('content')
    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card w-auto h-auto">
                <div class="card-header">  
                    
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <form action="{{route('demo.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <input type="hidden" name="product_id" value="{{$product_id}}">
                                    <input type="file"  name="image"
                                           class="bg-gray-100 border-2
                                                w-full p-4 rounded-lg" >
                                </div>
                                <button type="submit" class="btn btn-success">Add image</button>
                        </form>
                    </div>
                </div>
                   
                <div class="card-body ">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif   
 
    @foreach($demos as $demo)
        <div class="mb-4">
    <div class="gallery">
            <img style="width: 100% ; height: 100%"  src="{{ asset('storage/'.$demo->image)}}" alt="Cinque Terre" width="600" height="400">
            <form method="post" action="{{route('demo.destroy',$demo)}}">

                @csrf
                @method('DELETE')
                <button >حزف</button>
            </form>
    </div>
           
        </div>
    @endforeach


    @endsection

