<div>
    <div class="card">
        <div class="card-header">Form</div>
        <div class="card-body">
            @include('includes.alert')
            <form wire:submit.prevent="store">
                <div class="form-group mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control @error('name')
                        is-invalid
                    @enderror" wire:model="name">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control @error('email')
                        is-invalid
                    @enderror" wire:model="email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control @error('password')
                        is-invalid
                    @enderror" wire:model="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>