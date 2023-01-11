@extends('layouts.app')

@section('content')
    <div class="container-md">
        <form action="{{ route('adminprojects.update', $project->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mt-4 mb-4">
                <label for="nome_progetto">Nome Progetto</label>
                <input type="text" class="form-control" id="nome_progetto" name="nome_progetto" aria-describedby="emailHelp"
                    placeholder="Nome progetto" value="{{ old('nome_progetto', $project->nome_progetto) }}">

            </div>
            <div class="form-group mb-4">
                <label for="descrizione">Descrizione del progetto</label>
                <input type="text" class="form-control" id="descrizione" name="descrizione"
                    placeholder="Scrizione progetto"value="{{ old('descrizione', $project->descrizione) }}">
            </div>
            <div class="form-group mb-4">
                <label for="collaboratori">Collaboratori</label>
                <input type="text" class="form-control" id="collaboratori" name="collaboratori"
                    placeholder=" Eventuali collaboratori" value="{{ old('collaboratori', $project->collaboratori) }}">
                <small>Lasciare vuoto nel caso di progetto singolo</small>
            </div>
            <div class="form-group mb-4">
                <label for="autore">Autore del progetto</label>
                <input type="text" class="form-control" id="autore" name="autore" placeholder="Autore"
                    value="{{ old('autore', $project->autore) }}">
            </div>
            <div class="form-group mb-4">
                <label for="data_inizio_progetto">Data inizio progetto</label>
                <input type="text" class="form-control" id="data_inizio_progetto" name="data_inizio_progetto"
                    placeholder="Data di inizio progetto"
                    value="{{ old('data_inizio_progetto', $project->data_inizio_progetto) }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
@endsection
