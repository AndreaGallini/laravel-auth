@extends()

@foreach ($projects as $project)
    <h1>{{ project->nome_progetto }}</h1>
    <p>edit</p>
@endforeach
