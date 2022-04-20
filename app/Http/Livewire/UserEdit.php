<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{
    public $user_id;
    public $name;
    public $email;

    public function mount($user)
    {
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function render()
    {
        return view('livewire.user-edit');
    }

    public function update()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:users,email,' . $this->user_id]
        ]);

        User::where('id', $this->user_id)->update([
            'name' => $this->name,
            'email' => $this->email
        ]);

        $this->user_id = null;
        $this->name = null;
        $this->email = null;

        return redirect()->route('user.index')->with('success', 'User updated successfully!');
    }
}
