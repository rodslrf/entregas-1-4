@extends('adminlte::page')
@section('title', 'Home')
@section('content_header')
    <h1>Biblioteca Mango's</h1>
@stop


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Biblioteca Mango') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Sua biblioteca') }}
                    </div>
                </div>  
            </div>
        </div>
    </div>
@endsection
