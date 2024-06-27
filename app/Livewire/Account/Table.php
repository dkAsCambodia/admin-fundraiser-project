<?php

namespace App\Livewire\Account;

use App\Enums\Roles;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use LivewireAlert;
    use WithPagination;
    public $sideBarType = 'table';
    public $search;
    public $statusOpen = false;
    public $status = 'all';

    public function openStatus()
    {
        if ($this->statusOpen === true) {
            $this->statusOpen = false;
        } else {
            $this->statusOpen = true;
        }
    }

    public function changeStatus(User $user){
        $user->update(['status' => !$user->status]);
        if(!$user->status){
            $this->alert('success', 'Status Disabled Successfully');
        }else{
            $this->alert('success', 'Status Activated Successfully');
        }
    }

    #[Title('Accounts')]
    public function render()
    {
        $userAccounts = User::where('roles', Roles::ACCOUNT->value)
            ->where(function ($query) {
                $query->where('account_id', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('account_name', 'LIKE', '%' . $this->search . '%');
            });

        if($this->status != 'all'){
            $userAccounts = $userAccounts->where('status', $this->status);
        }

        $userAccounts = $userAccounts->orderBy('id', 'DESC')->paginate(10);

        return view('livewire.account.table', [
            'userAccounts' => $userAccounts,
        ]);
    }
}
