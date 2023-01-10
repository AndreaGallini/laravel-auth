@foreach ($projects as $project)
    <h1><a href="{{ route('adminprojects.show', $project->slug) }}">{{ $project->nome_progetto }}</a></h1>
@endforeach
