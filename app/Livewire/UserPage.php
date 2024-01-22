<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\User;

// this is from folder layout then file name app.blade.php
// #[Layout('layout.app')]
#[Title('User Page')]
class UserPage extends Component
{
    // public $user;
    public User $user;

    // public function mount(User $user){
    //     $this->user = $user;
    // }
    // public function render()
    // {
    //     return view('livewire.user-page')->layout('layout.app')->title('Youtube');
    // }

    public function render()
    {
        return view('livewire.user-page')->title($this->user->name);
    }
}
