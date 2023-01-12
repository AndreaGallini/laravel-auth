@extends('layouts.admin')
@section('adminContent')
    <div class="container-xl   vh-100">
        <h1>{{ $category->name }}</h1>
        @foreach ($category->projects as $project)
            <p><a href="{{ route('adminprojects.show', $project->slug) }}">{{ $project->nome_progetto }}</a></p>
        @endforeach
    </div>
    <a class=" hover_btn btn btn-primarybutton_a" href="{{ route('adminprojects.index') }}">Torna alla
        lista dei
        progetti</a>
    </div>
@endsection
