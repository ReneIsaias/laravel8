@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <hr><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                Componente Livewire
            </div>
            <div class="card-body text-center">
                <livewire:contador />
            </div>
        </div>
    </div>
    <hr><hr><br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header">
                POST
            </div>
            <div class="card-body text-center">
                <livewire:post-component />
            </div>
        </div>
    </div>
</div>
@endsection
