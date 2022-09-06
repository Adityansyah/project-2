<?php

namespace App\Http\Livewire\Admin\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Component
{
    public $login_id, $password;

    public function render()
    {
        return view('livewire.auth.auth-login-controller');
    }
    public function login()
    {
        $fieldType = filter_var($this->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if ($fieldType == 'email') {
            $this->validate([
                'login_id' => 'required|email|exists:users,email',
                'password' => 'required|min:8'
            ], [
                'login_id.required' => 'Enter your email or username correctly',
                'login_id.email' => 'Invalid email address',
                'login_id.exists' => 'This email is not registered',
                'password.required' => 'Enter your password | required'
            ]);
        } else {
            $this->validate([
                'login_id' => 'required|exists:users,username',
                'password' => 'required|min:8'
            ], [
                'login_id.required' => 'Enter your username',
                'login_id.username' => 'Invalid username',
                'login_id.exists' => 'This username is not registered',
                'password.required' => 'Enter your password'
            ]);
        }

        $user  = array(
            $fieldType => $this->login_id,
            'password' => $this->password
        );
        if (Auth::guard('web')->attempt($user)) {
            $checkUser = User::where($fieldType, $this->login_id)->first();
            if ($checkUser->blocked == 1) {
                Auth::guard('web')->logout();
                return redirect()->route('auth.login')->with('failed', 'your account had been deleted');
            } else {
                return redirect()->route('home.dashboard');
                // not invoked
                if ($this->returnUrl != null) {
                    return redirect()->to($this->returnUrl);
                }
                return to_route('home.dashboard');
            }
        } else {
            session()->flash('fail', 'Invalid username,email or password');
        }
    }
}
