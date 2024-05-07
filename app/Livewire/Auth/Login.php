<?php

namespace App\Livewire\Auth;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

use Redirect;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\BusDispatches\Jobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\AuthAccess\Authorizes\Requests;
use Illuminate\Foundation\Auth\Access\Authorizes\Resources;
use Illuminate\Html\HtmlServiceProvider;
use Livewire\Attributes\Rule;

class Login extends Component
{
    use LivewireAlert;

    // #[Rule('required|email:rfc,dns')]
    #[Rule('required')]
    public $email;

    #[Rule('required|min:8|max:20|regex:/^[\w]*$/')]
    public $password;

    public function doLogin(){
        $validator = $this->validate();
          if (Auth::attempt($validator)) {
                return Redirect::to('insights');
            } else {
                $this->alert('error', 'These credentials do not match our records.');
            }
    }

    public function doLogout(){
        Auth::logout();
        return Redirect::to('login');
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.auth');
    }
}
