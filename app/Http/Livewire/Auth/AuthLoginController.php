<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class AuthLoginController extends Component
{
    public $username, $password;

    public function render()
    {
        return view('livewire.auth.auth-login-controller');
    }
    public function login()
    {
    }
}
