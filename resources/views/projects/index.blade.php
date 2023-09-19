@extends('layouts.projectsLayout')


@section('title', 'Indice Progetti')


@section('main_content')
    <div>
        <div class = "grid grid-cols-4">
        @foreach ($projects as $project)
                <div class = "p-4 border border-red-500">
                    {{ $project->id }}
                </div>  
        @endforeach
         </div>
    </div>
@endsection