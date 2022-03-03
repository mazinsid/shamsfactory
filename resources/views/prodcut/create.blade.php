@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add new Product') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('category Arabic') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="category_ar" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('category English') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="category_en" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name Arabic') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name_ar" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name English') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name_en" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('detiles Arabic') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="detiles_ar" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('detiles English') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="detiles_en" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('image') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="file" class="form-control " name="image" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
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
