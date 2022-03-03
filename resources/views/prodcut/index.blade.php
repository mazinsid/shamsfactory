@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card w-auto h-auto">
                <div class="card-header">  <a href="{{route('products.create')}}" >Add Product</a>
                </div>
                   
                <div class="card-body ">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif   
                              <table class="table border">
                                <thead>
                                    <tr>
                                      
                                            <th scope="col">catogery</td>
                             <th scope="col">product name</td>
                             <th scope="col">detailes</td>
                             <th scope="col">image</td>
                             <th scope="col">images</td>
                             <th scope="col">update</td>
                             <th scope="col">delete</td>
                             </thead>
                             <tbody>
                        @foreach($products as $product)
                        <tr>
                         
                            <td>{{ $product->category_id}}</td>
                            <td>{{ $product->name_en }}</td>
                            <td>{{ $product->detiles_en }}</td>
                            <td class="w-25"><img style="width: 60% ; height: 0%"  class="img-responsive food1" src="{{ asset('storage/'.$product->image)}}"></td>
                            <td>  <a href="{{route('demo',$product)}}" class="btn btn-primary">all images</a></td>
                            <td>  <a href="{{route('product.edit',$product)}}" class="btn btn-primary">update</a></td>
                                <td>
                                    <form action="{{route('product.destroy',$product->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">delete</button>
                                    </form>
                                </td>   </tr>
                         @endforeach
                    </tbody>
                  </table>   
            </div>
        </div>
    </div>
</div>
</div>

@endsection
