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

                    <form method="POST" action="{{ route('count.update' , $counts->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('home.team work') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" value="{{$counts->team_work}}" class="form-control" name="team_work">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('home.Experience') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" value="{{$counts->experience}}" class="form-control " name="experience">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('home.TOTAL CLIENTS') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" value="{{$counts->clients}}" class="form-control " name="clients">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('home.AWARD WON') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" value="{{$counts->award_won}}" class="form-control " name="award_won">
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
