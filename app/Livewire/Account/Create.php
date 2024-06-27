<?php

namespace App\Livewire\Account;

use Livewire\Attributes\Title;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{

    use LivewireAlert;
    use WithFileUploads;


    public $sideBarType = 'create';

    public $name, $accountName, $email, $password, $confirmPassword, $roles, $userId, $userData;

    public function mount(User $user){
        if(!empty($user->toArray())){
            $this->name = $user->name;
            // $this->accountId = $user->account_id;
            $this->accountName = $user->account_name;
            $this->email = $user->email;
            $this->roles = $user->roles;
            $this->password = $user->raw_password;
            $this->confirmPassword = $user->raw_password;
            $this->userId = $user->id;
            $this->userData = $user;
        }
    }

    public function addAccount(): void
    {
        $validated = $this->validate([
            'name' => 'required|max:30|regex:/^[\pL\s]+$/u',
            // 'accountId' => 'required|unique:users,account_id,'.$this->userId,
            'accountName' => 'required|max:60|regex:/^[\pL\s]+$/u',
            'email' => 'required|email:rfc,dns|unique:users,email,'.$this->userId,
            'roles' => 'required',
            'password' => 'required|min:8|max:20|regex:/^[\w]*$/',
            'confirmPassword' => 'required|min:8|max:20|same:password',
        ]);

        $datas = [
            'name' => $validated['name'],
            // 'account_id' => $validated['accountId'],
            'account_name' => $validated['accountName'],
            'email' => $validated['email'],
            'is_admin' => 1,
            'roles' => $validated['roles'],
            'password' => $validated['password'],
            'raw_password' => $validated['password'],
        ];

        if($this->userId){
            $this->userData->update($datas);

            $this->alert('success', 'Account Updated Successfully');
        }else{
            User::create($datas);

            $this->alert('success', 'Account Created Successfully');
        }

    }

    #[Title('Accounts')]
    public function render()
    {
        return view('livewire.account.create');
    }
}
