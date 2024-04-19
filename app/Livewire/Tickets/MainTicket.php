<?php

namespace App\Livewire\Tickets;

use Livewire\Component;

#[\Livewire\Attributes\Title('IJK-UNSADA | Tickets')]
#[\Livewire\Attributes\Layout('layouts.app')]

class MainTicket extends Component
{
    public function render()
    {
        return view('livewire.tickets.main-ticket');
    }
}
