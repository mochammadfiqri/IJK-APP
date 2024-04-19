<?php

namespace App\Livewire;

use Livewire\Component;

#[\Livewire\Attributes\Title('IJK-UNSADA | Account')]
#[\Livewire\Attributes\Layout('layouts.app')]

class Account extends Component
{
    public function render()
    {
        return view('livewire.account');
    }
}
