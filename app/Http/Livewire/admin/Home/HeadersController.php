<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HeadersController extends Component
{
    public $userAdmin;
    public function render()
    {
        $this->userAdmin = auth('web')->user();
        return view(
            'livewire.admin.home.headers-controller',
            [
                'user' => $this->userAdmin,
            ]
        );
    }
    public function redirectToMyProfile()
    {
        return to_route('home.profile');
    }
    public function logout(Request $req)
    {
        Auth::guard('web')->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('auth.login');
    }
}
