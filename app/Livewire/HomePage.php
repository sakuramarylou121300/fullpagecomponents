<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

// this is from folder layout then file name app.blade.php
#[Layout('layout.app')]
class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page');
    }
}
