@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card w-auto h-auto">
                <div class="card-header">  <a href="{{route('news.create')}}" >Add news</a>
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
                             <th scope="col">title</td>
                             <th scope="col">detailes</td>
                             <th scope="col">image</td>
                             <th scope="col">update</td>
                             <th scope="col">delete</td>
                             </thead>
                             <tbody>
                        @foreach($newss as $news)
                        <tr>
                         
                            <td>{{ $news->title_en}}</td>
                            <td>{{ $news->detiles_en }}</td>
                            <td class="w-25"><img style="width: 60% ; height: 0%"  class="img-responsive food1" src="{{ asset('storage/'.$news->image)}}"></td>
                            <td>  <a href="{{route('news.edit',$news)}}" class="btn btn-primary">update</a></td>
                                <td>
                                    <form action="{{route('news.destroy',$news->id)}}" method="post">
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
