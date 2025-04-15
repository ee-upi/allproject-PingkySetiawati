<?php

namespace App\Livewire;

use Livewire\Component;
use Auth;
use Session;
class Logout extends Component
{
    public function render()
    {
        return view('livewire.logout');
    }

    public function mount()
    {
        Auth::user()->logout;
        Session::flush();
        //cas()->logout();
        return redirect('/');
    }
}
