@extends('layout')

@section('title', isset($user) ? 'Update '.$user->name : 'Create user')

@section('content')
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to users</a>
    <form method="POST"
          @if(isset($user))
            action="{{ route('users.update', $user) }}"
          @else
            action="{{ route('users.store') }}"
          @endif
          class="mt-3">
        @csrf
        @isset($user)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input type="text"
                       value="{{ isset($user) ? $user->name : null }}"
                       class="form-control" placeholder="Name" aria-label="name" name="name">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input
                    value="{{ isset($user) ? $user->email : null }}"
                    type="text" class="form-control" placeholder="Email" aria-label="email" name="email">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>
    </form>
@endsection
