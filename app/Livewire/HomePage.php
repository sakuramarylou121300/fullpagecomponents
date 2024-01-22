<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;


// this is from folder layout then file name app.blade.php
// instead of defining these layout everytime we add layout, we only need to use this: php artisan livewire:publish --config
// #[Layout('layout.app')]
// #[Title('Hello Youtube')]
#[Title('test')]
class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page');
    }
}
