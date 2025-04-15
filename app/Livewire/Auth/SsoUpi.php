<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Browser;
use Auth;
class SsoUpi extends Component
{
    public function render()
    {
        return view('livewire.auth.sso-upi');
    }
    //$userCode = '197608272009121001';
    public function mount()
    {
        $userCode = '197608272009121001';
        $userCode = cas()->user();
        if (is_null(User::where('sso', $userCode)->first())){
            if (strlen($userCode) > 7){
                $user = User::create([
                    'sso' => $userCode,
                ]);
                $user->addRole('staff');

                if(!is_null($user->staff)){
                    User::where('sso', $userCode)->update([
                        'name' => $user->staff->code,
                    ]);

                    Staff::where('sso', $userCode)->update([
                        'user_id' => $user->id,
                    ]);
                }
            }else{

                $user = User::create([
                    'name' => 's'.$userCode,
                    'sso' => $userCode,
                ]);
                $user->addRole('student');
            }
        }

        $user = User::where('sso', $userCode)->first();


        if(($user->email == null || $user->email == "")){
            return redirect()->route('arsys.auth.email',['userCode' => $userCode]);
        }

        Auth::login($user);
        return redirect()->route('dashboard');
        /*if(strlen(Auth::user()->sso) > 7){
            return redirect()->route('staff');
            /*if(Browser::isMobile()){
                return redirect()->route('mobile.idx');
            }else{
                return redirect()->route('dashboard');
            }
            */
            /*if (!function_exists('is_mobile')) {
                function is_mobile()
                {
                    $session = app()->make('Illuminate\Contracts\Session\Session');
                    return $session->get('mobile') == true;
                }
            }
            if (!function_exists('is_desktop')) {
                function is_desktop()
                {
                    $session = app()->make('Illuminate\Contracts\Session\Session');
                    return $session->get('mobile') == false;
                }
                return redirect()->route('dashboard');
            }


        }else{
            return redirect()->route('student');
        }*/

    }
}




