<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

#[\Livewire\Attributes\Title('IJK-UNSADA | Login')]
#[\Livewire\Attributes\Layout('layouts.auth')]

class Login extends Component
{
    #[\Livewire\Attributes\Rule('required', 'email')]
    public string $email = '';

    #[\Livewire\Attributes\Rule('required')]
    public string $password = '';

    public function login() {

        $throttleKey = strtolower($this->email) . '|' . request()->ip();

        if (RateLimiter::tooManyAttempts($throttleKey, 5)){
            $this->addError('email',__('auth.throttle', [
                'seconds' => RateLimiter::availableIn($throttleKey)
            ]));
            return null;
        }
        
        // if (Auth::attempt($this->validate())) {
        //     return redirect()->route('dashboard');
        // }
        $user = User::where('email', $this->email)->first();
        
        if (Auth::attempt($this->validate())) {
            RateLimiter::hit($throttleKey);
            return redirect('/dashboard')->with([
                'toast_type' => 'success',
                'toast_message' => 'Selamat datang '. $user->nama,
            ]);
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
