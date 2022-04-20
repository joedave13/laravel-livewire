@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('user.index') }}" class="btn btn-danger my-3">
        Kembali
    </a>

    <div class="form-group mb-3">
        <label>Name</label>
        <input type="text" class="form-control" value="{{ $user->name }}" readonly>
    </div>
    <div class="form-group mb-3">
        <label>Email</label>
        <input type="text" class="form-control" value="{{ $user->email }}" readonly>
    </div>
</div>
@endsection