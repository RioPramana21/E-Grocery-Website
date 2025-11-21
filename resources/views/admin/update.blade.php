@extends('layout.layout')

@section('title', 'Starting Page')
@section('main')
<div class="container mt-5 ml-5">
    <div class="row mb-2">
        <div class="col-6">
            <div class="display-6 mb-3" style="text-decoration: underline">{{$user->first_name}} {{$user->last_name}}</div>
            <form action="{{ route('save_role', ['id'=> $user->id]) }}" method="POST">
                @csrf
                <label class="form-label" for="role_id">Role: </label>
                <select class="form-select mb-2 @error('role_id') is-invalid @enderror" id="role_id" name="role_id">
                    <option value="1" @if($user->role_id == 1) selected @endif>Admin</option>
                    <option value="2" @if($user->role_id == 2) selected @endif>User</option>
                </select>
                @error('role_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="d-flex justify-content mt-5">
                    <input type="submit" class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
