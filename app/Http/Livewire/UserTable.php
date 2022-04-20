<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    protected $listeners = ['userStore' => 'render'];

    public function render()
    {
        $users = User::latest()->get();

        return view('livewire.user-table', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        session()->flash('success', 'User deleted successfully!');
    }
}
