@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">

        @foreach ($projects as $project)
            <div class="my_row">
                <section class="left"> <a
                        href="{{ route('adminprojects.show', $project->slug) }}">{{ $project->nome_progetto }}</a> </section>
                <section class="right">
                    <section class="edit"><a href="{{ route('adminprojects.edit', $project->slug) }}"><i
                                class="fa-regular fa-pen-to-square"></i></a></section>
                    <section class="delete"><a href=""><i class="fa-solid fa-trash"></i></a></section>
                </section>
            </div>
        @endforeach


    </div>
@endsection
