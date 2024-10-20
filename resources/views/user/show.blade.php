@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Profile</div>

                <div class="card-body">
                    <h5 class="card-title">{{ $user->username }}</h5>
                    <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                     <p class="card-text"><strong>Role:</strong> {{ $user->role }}</p>
                    <a href="{{ route('users.editProfile', $user->id) }}" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection