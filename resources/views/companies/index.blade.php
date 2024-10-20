@extends('layouts.app')

@section('title', 'Companies')

@section('content')
    @include('partials.buttons', ['resource' => 'companies'])
    <h1>Companies</h1>
    <div class="row">
        @foreach($companies as $company)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $company->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $company->industry }}</h6>
                        <p class="card-text">{{ $company->description }}</p>
                        <p class="card-text"><strong>Location:</strong> {{ $company->location }}</p>
                        <p class="card-text"><strong>Founded At:</strong> {{ $company->founded_at }}</p>
                        <p class="card-text"><strong>Website:</strong> <a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></p>
                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST" class="d-inline">
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