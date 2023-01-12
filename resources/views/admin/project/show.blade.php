@extends('layouts.admin')
@section('adminContent')
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
                    <p> Collaboratori : {{ $project->collaboratori }}</p>
                @endif
                <p>{{ $project->descrizione }}</p>
                <img class="mb-3 show_img
                " src="{{ asset('storage/' . $project->img) }}">
                <button class="btn btn-primary mb-4"><a class="button_a"
                        href="https://github.com/AndreaGallini/{{ $project->slug }}" target="_blank">vai al
                        codice del progetto</a></button>
            </div>
        </div>
        <a class=" hover_btn btn btn-primarybutton_a" href="{{ route('adminprojects.index') }}">Torna alla
            lista dei
            progetti</a>
    </div>
@endsection
