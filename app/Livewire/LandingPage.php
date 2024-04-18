<?php

namespace App\Livewire;

use Livewire\Component;

#[\Livewire\Attributes\Title('IJK-UNSADA')]
#[\Livewire\Attributes\Layout('layouts.home')]

class LandingPage extends Component
{
    public function render()
    {
        return view('livewire.landing-page');
    }
}
