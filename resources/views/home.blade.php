@extends('layouts.app')

@section('content')
<div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="{{url('/')}} ">
                                <button class="btn btn-light">
                                    <i class="fas fa-home"></i><br>
                                    Home
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
