<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public string $email, $password;
    public ?string $loginError = null;

    public function attemptLogin()
    {
        if(
            auth()->attempt([
                'email' => $this->email,
                'password' => $this->password
            ])
        ) {
            $this->redirect('/');
            return;
        }
        $this->loginError = "Incorrect email or password!";
    }

    public function render()
    {
        return view('livewire.login');
    }
}
