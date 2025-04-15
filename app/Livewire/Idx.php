<?php

namespace App\Livewire;

use App\Http\Middleware\DetectMobile;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Idx extends Component
{
    public function render()
    {
        return view('livewire.idx');
    }
    public function mount()
    {
        if(is_null(Auth::user())){
            return redirect()->route('sso.upi');
        }
    }
}
