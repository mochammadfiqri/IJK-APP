<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

#[\Livewire\Attributes\Title('IJK-UNSADA | Login')]
#[\Livewire\Attributes\Layout('layouts.auth')]

class Login extends Component
{
    #[\Livewire\Attributes\Rule('required', 'email')]
    public string $email = '';

    #[\Livewire\Attributes\Rule('required')]
    public string $password = '';

    public function login() {

        if (Auth::attempt($this->validate())) {
            return redirect()->route('dashboard');
        }

        throw \Illuminate\Validation\ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
