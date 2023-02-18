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
                       value="{{ old('name', isset($user) ? $user->name : null) }}"
                       class="form-control" placeholder="Name" aria-label="name" name="name">
                @error('name')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input
                    value="{{ old('email', isset($user) ? $user->email : null) }}"
                    type="text" class="form-control" placeholder="Email" aria-label="email" name="email">
                @error('email')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                @if($user)
                    <button type="submit" class="btn btn-success">Update</button>
                @else
                    <button type="submit" class="btn btn-success">Create</button>
                @endif
            </div>
        </div>
    </form>
@endsection
