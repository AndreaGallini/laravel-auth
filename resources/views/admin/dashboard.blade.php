@extends('layouts.admin')

@section('adminContent')
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

        </div>

    </div>
    <div class="projects_dashboard mx-5 mt-3">
        <h2>Benvenuto {{ Auth::user()->name }}</h2>
        <p> Numero di progetti pubblicati : {{ $last_project }}</p>
        <a class="btn btn-primary mb-5 mt-5" href=" {{ route('adminprojects.create') }}">Crea un nuovo post</a>
    </div>
    </div>
@endsection
