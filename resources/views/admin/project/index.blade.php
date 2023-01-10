@foreach ($projects as $project)
    <h1><a href="{{ route('adminprojects.show', $project->id) }}">{{ $project->nome_progetto }}</a></h1>
@endforeach
