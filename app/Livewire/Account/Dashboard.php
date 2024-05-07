<?php

namespace App\Livewire\Account;

use App\Enums\Roles;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    public $sideBarType = 'dashboard';
    public $totalAccount = 0;

    #[Title('Accounts')]

    public function mount()
    {
        $this->labels = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"];

        $this->dataset = [65, 59, 20, 81, 56, 55, 40];

        $this->totalAccount = User::where('roles', Roles::ACCOUNT->value)->where('status', 1)->count();
    }

    public function render()
    {
        return view('livewire.account.dashboard');
    }
}
