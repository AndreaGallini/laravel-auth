@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">


                        {{ __('You are logged in!') }}

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="button">
                <button class=" hover_btn btn btn-primary mt-5"><a class="button_a"
                        href="{{ route('adminprojects.index') }}">Vai alla
                        lista
                        dei miei
                        progetti</a>
                </button>
            </div>

        </div>
    </div>
@endsection
