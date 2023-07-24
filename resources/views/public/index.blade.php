@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h1 class="mt-2 py-1 text-white rounded bg-secondary">Portfolio</h1>
            <div class="mt-4">
                <ul class="p-0">
                    @foreach ($projects as $project)
                        <li class="list-unstyled my-4">
                            <a class="text-decoration-none py-1 px-3 text-white rounded bg-primary"
                                href="{{ route('show', $project->id) }}">
                                {{ ucfirst($project->name) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
