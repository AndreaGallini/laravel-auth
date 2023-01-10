@extends('layouts.app')
@section('content')
    <div class="container-fluid mt-3">
        <h1 class="my_portfolio_name">Andrea Gallini Portfolio</h1>
        <div class="main_welcome container-xl">
            @foreach ($projects as $project)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->nome_progetto }}</h5>
                        <p class="card-text">{{ $project->descrizione }}.</p>
                        <a href="{{ route('register') }}" class="btn btn-primary">Scopri di più</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
