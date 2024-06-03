<?php

namespace App\Livewire;

use App\Enums\Roles;
use App\Models\CauseDetail;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Campaigns extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $accountOpen = false;
    public $statusOpen = false;
    public $paymentOpen = false;
    public $accountData;
    public $activeModal = false;
    public $activeRenameModal = false;

    public $title;
    public $search;
    public $payment_method;
    public $status = 'all';
    public $id;
    public $editId;
    public $causeDetails;


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
        $this->accountOpen = false;
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

    public function openRenameModal($id)
    {
        $this->editId = $id;
        $causeDetails = CauseDetail::find($id);
        $this->activeRenameModal = true;
        return view('livewire.campaign.campaigns-rename-modal', [
            'editId' => $this->editId, 'title' => $causeDetails->title,
        ]);
    }

    public function closeRenameModal()
    {
        $this->activeRenameModal = false;
    }

    public function goToEdit($id)
    {
        dd("Edit");
        $this->redirect('/campaigns/' . $id . '/create');
    }

    public function cloneCampaign($id)
    {
        $causeDetails = CauseDetail::find($id);
        $clone = $causeDetails->replicate(); 
        $clone->title = $clone->title." COPY";
        $clone->save();
        $clone_id = $clone->id;
        
        $this->flash('success', 'Campaign Cloned Successfully');
        $this->redirect('/campaigns/' . $clone_id . '/create');
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
             //'title' => 'required',
            'title' => 'required|unique:cause_details,title,',
        ]);
        $data['account_id'] = auth()->user()->id;
        $data['code'] = Str::upper(Str::random(10));

        $causeDetails = CauseDetail::create($data);

        $this->flash('success', 'Camaign Created Successfully', [], '/campaigns/' . $causeDetails->id . '/create');
    }

    public function save(){
       // dd($this->title,$this->editId);
        $this->validate([
            'title' => 'required|unique:cause_details,title,',
        ]);

        CauseDetail::where('id',$this->editId)->update([
            'title' => $this->title
        ]);

        $this->alert('success', 'Updated Successfully');

        //$this->causeDetailData->update([
           // 'title' => $this->title,
        //]);

        $this->alert('success', 'Updated Successfully');
    }

    #[Title('Campaigns')]
    public function render()
    {
        $userAccounts = CauseDetail::
            where(function ($query) {
                $query->where('title', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('code', 'LIKE', '%' . $this->search . '%');
                // ->orWhere('account_name', 'LIKE', '%' . $this->search . '%')
            });
        if (Roles::ACCOUNT->value == auth()->user()->roles) {
            $userAccounts = $userAccounts->where('account_id', auth()->user()->id);
        } else {
            $userAccounts = $userAccounts->whereIn('account_id', $this->accounts);
        }
        if ($this->status != 'all') {
            $userAccounts = $userAccounts->where('status', $this->status);
        }
        if ($this->payment_method != '') {
            $userAccounts = $userAccounts->where('payment_method', $this->payment_method);
        }

        $campaigns = $userAccounts->paginate(10);

        return view('livewire.campaigns', [
            'campaigns' => $campaigns,
        ]);
    }
}
