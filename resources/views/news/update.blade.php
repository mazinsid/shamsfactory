@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('update news') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('news.update' ,$newss) }}" enctype="multipart/form-data">
                        @csrf       
                        @method('PUT')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('title Arabic') }}</label>

                            <div class="col-md-6">
                                <input id="name" value="{{$newss->title_ar}}" type="text" class="form-control " name="title_ar">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('title English') }}</label>

                            <div class="col-md-6">
                                <input id="name" value="{{$newss->title_en}}" type="text" class="form-control " name="title_en">
                            </div>
                        </div>
                      <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('detiles Arabic') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" value="{{$newss->detiles_ar}}"  class="form-control " name="detiles_ar">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('detiles English') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" value="{{$newss->detiles_en}}"  class="form-control " name="detiles_en">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('image') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="file" class="form-control " name="image">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
