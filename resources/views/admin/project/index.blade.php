@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
        <a class="btn" href=" {{ route('adminprojects.create') }}">Crea il tuo post</a>
        @if (session()->has('message'))
            <div class="alert alert-success mb-3 mt-3">
                {{ session()->get('message') }}
            </div>
        @endif
        @foreach ($projects as $project)
            <div class="my_row">
                <section class="left"> <a
                        href="{{ route('adminprojects.show', $project->slug) }}">{{ $project->nome_progetto }}</a> </section>
                <section class="right">
                    <section class="edit"><a href="{{ route('adminprojects.edit', $project->slug) }}"><i
                                class="fa-regular fa-pen-to-square"></i></a></section>
                    <section class="delete">
                        <form action="{{ route('adminprojects.destroy', $project->slug) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </section>
                </section>
            </div>
        @endforeach
        <form action="{{ route('adminprojects.store') }}" method="POST">
            @csrf
            <button type="submit">vai</button>
        </form>

    </div>
@endsection
