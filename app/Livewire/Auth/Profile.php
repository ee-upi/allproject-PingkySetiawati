<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Mary\Traits\Toast;

class Profile extends Component
{
    use Toast;
    public $oldPassword;
    public $newPassword;
    public $confirmPassword;

    public function render()
    {
        return view('livewire.auth.profile');
    }

    public function updateProfile(){
        $this->validate([
            'newPassword' => 'required|min:8',
            'confirmPassword' => 'required|same:newPassword'
        ]);
        User::where('id', auth()->user()->id)->update([
            'password' => Hash::make($this->newPassword),
        ]);
        $this->toast(
            type: 'success',
            title: 'Password has been updated!',
            description: null,                  // optional (text)
            position: 'toast-top toast-center',    // optional (daisyUI classes)
            icon: 'o-information-circle',       // Optional (any icon)
            css: 'alert-success',                  // Optional (daisyUI classes)
            timeout: 3000,                      // optional (ms)
            redirectTo: null                    // optional (uri)
        );
        return redirect()->route('home');
    }
}
