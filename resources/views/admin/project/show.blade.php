@extends('layouts.app')
@section('content')
    <div class="container-xl  my_container_show vh-100">
        <div class="my_card ">
            <div class="my_title">
                <h2>{{ $project->nome_progetto }}</h2>
            </div>
            <div class="my_desc">
                <p> Data inizio progetto : {{ $project->data_inizio_progetto }}</p>
                <p> {{ $project->autore }}</p>
                @if ($project->collaboratori == '')
                @else
                    <p>{{ $project->collaboratori }}</p>
                @endif
                <p>{{ $project->descrizione }}</p>
            </div>
        </div>
        <button class="hover_btn btn btn-primary "><a class="button_a" href="{{ route('adminprojects.index') }}">Torna alla
                lista dei
                progetti</a></button>
    </div>
@endsection
