@extends('layout')

@section('title', 'User '.$user->name)

@section('content')
    <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Back to users</a>

    <div class="card mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ID: {{ $user->id }}</li>
            <li class="list-group-item">Name: {{ $user->name }}</li>
            <li class="list-group-item">Email: {{ $user->email }}</li>
            <li class="list-group-item">Created: {{ $user->created_at->format('d/m/y H:i:s') }}</li>
            <li class="list-group-item">Updated: {{ $user->updated_at->format('d/m/y H:i:s') }}</li>
        </ul>
    </div>

    <a type="button" class="btn btn-warning mt-3" href="{{ route('users.edit', $user) }}">Edit</a>

@endsection
