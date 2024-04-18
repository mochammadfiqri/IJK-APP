<?php

namespace App\Livewire\Auth;

use Livewire\Component;

#[\Livewire\Attributes\Title('IJK-UNSADA | Register')]
#[\Livewire\Attributes\Layout('layouts.auth')]

class Register extends Component
{
    public function render()
    {
        return view('livewire.auth.register');
    }
}
