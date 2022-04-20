<div>
    @include('includes.alert')
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $key => $value)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->created_at }}</td>
                <td>
                    <a href="{{ route('user.show', $value->id) }}" class="badge bg-info">Detail</a>
                    <a href="{{ route('user.edit', $value->id) }}" class="badge bg-warning">Edit</a>
                    <button wire:click="destroy({{ $value->id }})" class="btn badge bg-danger">Delete</button>
                </td>
            </tr>
            @empty

            @endforelse
        </tbody>
    </table>
</div>