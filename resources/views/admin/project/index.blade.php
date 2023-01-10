@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
        @foreach ($projects as $project)
            <div class="button mb-4">
                <button class=" hover_btn btn btn-primary "><a class="button_a"
                        href="{{ route('adminprojects.show', $project->slug) }}">{{ $project->nome_progetto }}</a>
                </button>
            </div>
        @endforeach


    </div>
@endsection
