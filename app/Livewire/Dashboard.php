<?php

namespace App\Livewire;

use Livewire\Component;

#[\Livewire\Attributes\Title('IJK-UNSADA | Dashboard')]
#[\Livewire\Attributes\Layout('layouts.app')]

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard');
    }
}
