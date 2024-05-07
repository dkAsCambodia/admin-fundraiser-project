<?php

namespace App\Livewire\Auth;

use Auth;
use Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

class PersonalProfile extends Component
{
    use LivewireAlert;
    public $currentPassword, $name, $accountName, $email, $password, $confirmPassword;
    public $openModel = [];
    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->accountName = Auth::user()->account_name;
        $this->email = Auth::user()->email;
    }

    public function openModalEmailPassword($e)
    {
        $this->openModel[$e] = 'block';
    }

    public function closeModalEmailPassword($e)
    {
        $this->openModel[$e] = 'none';
    }
    public function updateProfile(): void
    {
        $validated = $this->validate([
            'name' => 'required|max:30|regex:/^[\pL\s]+$/u',
            'accountName' => 'required|max:60|regex:/^[\pL\s]+$/u',
        ]);

        $datas = [
            'name' => $validated['name'],
            'account_name' => $validated['accountName'],
        ];

        Auth::user()->update($datas);
        $this->alert('success', 'Account Updated Successfully');
    }

    public function updateEmail(): void
    {
        $validated = $this->validate([
            'email' => 'required|email:rfc,dns|unique:users,email,' . Auth::user()->id,
        ]);

        $datas = [
            'email' => $validated['email'],
        ];

        Auth::user()->update($datas);

        $this->alert('success', 'Email Updated Successfully');
        $this->closeModalEmailPassword('email');

    }
    public function updatePassword(): void
    {
        $validated = $this->validate([
            'currentPassword' => 'required',
            'password' => 'required|min:8|max:20|regex:/^[\w]*$/',
            'confirmPassword' => 'required|min:8|max:20|same:password',
        ]);

        if (Hash::check($validated['currentPassword'], Auth::user()->password)) {
            $datas = [
                'password' => $validated['password'],
                'raw_password' => $validated['password'],
            ];

            Auth::user()->update($datas);

            $this->alert('success', 'Password Updated Successfully');
            $this->closeModalEmailPassword('password');
        } else {
            $this->alert('warning', 'Current Password is wrong!');
        }

    }

    #[Title('Personal Profile')]
    public function render()
    {
        return view('livewire.auth.personal-profile');
    }
}
