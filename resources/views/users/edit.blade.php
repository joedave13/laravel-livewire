@extends('layouts.app')

@push('styles')
@livewireStyles
@endpush

@section('content')
<div class="container">
    <div class="mb-4">
        <a href="{{ route('user.index') }}" class="btn btn-danger my-3">
            Kembali
        </a>
    </div>
    <div class="row mb-4">
        <div class="col-md-6">
            @livewire('user-edit', ['user' => $user])
        </div>
    </div>
</div>
@endsection

@push('scripts')
@livewireScripts
@endpush