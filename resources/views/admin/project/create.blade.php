@extends('layouts.app')

@section('content')
    <div class="container-md">
        <h2>Aggiungi il tuo progetto</h2>
        <form action="{{ route('adminprojects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-4 mb-4">
                <label for="nome_progetto">Nome Progetto</label>
                <input type="text" class="form-control" id="nome_progetto" name="nome_progetto" aria-describedby="emailHelp"
                    placeholder="Nome progetto">
                @error('nome_progetto')
                    <div class="innvalid-feedback">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group mb-4">
                <label for="descrizione">Descrizione del progetto</label>
                <input type="text" class="form-control" id="descrizione" name="descrizione"
                    placeholder="Scrizione progetto">
            </div>
            <div class="form-group mb-4">
                <label for="collaboratori">Collaboratori</label>
                <input type="text" class="form-control" id="collaboratori" name="collaboratori"
                    placeholder=" Eventuali collaboratori">
                <small>Lasciare vuoto nel caso di progetto singolo</small>
            </div>
            <div class="form-group mb-4">
                <label for="autore">Autore del progetto</label>
                <input type="text" class="form-control" id="autore" name="autore" placeholder="Autore">
            </div>
            <div class="form-group mb-4">
                <label for="data_inizio_progetto">Data inizio progetto</label>
                <input type="text" class="form-control" id="data_inizio_progetto" name="data_inizio_progetto"
                    placeholder="Data di inizio progetto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
@endsection
