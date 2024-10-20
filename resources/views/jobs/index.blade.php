@extends('layouts.app')

@section('title', 'Jobs')

@section('content')
    @include('partials.buttons', ['resource' => 'jobs'])
    <h1>Jobs</h1>
    <div class="row">
        @foreach($jobs as $job)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $job->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $job->company->name }}</h6>
                        <p class="card-text">{{ $job->description }}</p>
                        <p class="card-text"><strong>Salary:</strong> {{ $job->salary }}</p>
                        <p class="card-text"><strong>Location:</strong> {{ $job->location }}</p>
                        <p class="card-text"><strong>Category:</strong> {{ $job->category->name }}</p>
                        <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection