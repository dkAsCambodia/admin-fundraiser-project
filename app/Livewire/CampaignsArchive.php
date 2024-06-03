<?php

namespace App\Livewire;

use App\Enums\Roles;
use App\Models\CauseDetail;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class CampaignsArchive extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $accountOpen = false;
    public $statusOpen = false;
    public $accountData;
    public $activeModal = false;
    public $paymentOpen = false;

    public $title;
    public $search;
    public $status = 'all';

    public $accounts = [];

    public $accountView = true;

    public function openAccount()
    {
        $this->statusOpen = false;
        if ($this->accountOpen === true) {
            $this->accountOpen = false;
        } else {
            $this->accountOpen = true;
        }
    }

    public function openStatus()
    {
        $this->accountOpen = false;
        if ($this->statusOpen === true) {
            $this->statusOpen = false;
        } else {
            $this->statusOpen = true;
        }
    }

    public function openPayment()
    {
        $this->statusOpen = false;
        if ($this->paymentOpen === true) {
            $this->paymentOpen = false;
        } else {
            $this->paymentOpen = true;
        }
    }

    public function openModal()
    {
        $this->activeModal = true;
    }

    public function closeModal()
    {
        $this->activeModal = false;
    }

    public function goToEdit($id)
    {
        $this->redirect('/campaigns/' . $id . '/create');
    }

    public function mount()
    {
        $queryAccount = User::where('status', 1)->where('is_admin', 1);

        $this->accounts = $queryAccount->pluck('id');

        if (Roles::ACCOUNT->value == auth()->user()->roles) {
            $queryAccount = $queryAccount->where('id', auth()->user()->id);
            $this->accountView = false;
            $this->accounts = auth()->user()->id;
        }
        $this->accountData = $queryAccount->select('id', 'account_name')->get();
    }

    public function saveCamaign()
    {
        $data = $this->validate([
            'title' => 'required',
        ]);
        $data['account_id'] = auth()->user()->id;

        $causeDetails = CauseDetail::create($data);

        $this->flash('success', 'Camaign Created Successfully', [], '/campaigns/' . $causeDetails->id . '/create');
    }

    #[Title('CampaignsArchive')]
    public function render()
    {
        $campaignArchive= CauseDetail::
        where(function ($query) {
            $query->where('title', 'LIKE', '%' . $this->search . '%');
            $query->where('status', 0);
        });
           
        $campaigns = $campaignArchive->paginate(10);

        return view('livewire.campaigns-archive', [
            'campaigns' => $campaigns,
        ]);
    }
}
