<?php

namespace App\Livewire;

use App\Enums\Roles;
use App\Models\CauseDetail;
use App\Models\Transaction;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Donations extends Component
{
    use WithPagination;

    public $accountData, $campaignData;
    public $startDate, $endDate, $dateSpanData;
    public $accounts = [];
    public $campaigns = [];
    public $statusOpen = false;

    public $accountOpen = false;
    public $campaignOpen = false;

    public $title;
    public $transactionId;
    public $status = 'all';
    public $id;

    public $accountView = true;

    public function openAccount()
    {
        $this->campaignOpen = false;
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

    public function openCampaign()
    {
        $this->accountOpen = false;
        if ($this->campaignOpen === true) {
            $this->campaignOpen = false;
        } else {
            $this->campaignOpen = true;
        }
    }

    public function goToView($id)
    {
        $transaction = Transaction::where(['id' => $id])->first();
        $main_trans_id = base64_encode($transaction->main_transaction_id);
        $this->redirect('/donation/' . $main_trans_id);
    }

    public function mount()
    {
        $queryAccount = User::where('status', 1)->where('is_admin', 1);
        $queryCampaign = CauseDetail::where('status', 1);

        $this->accountData = $queryAccount->select('id', 'account_name')->get();
        $this->accounts = $queryAccount->pluck('id');

        if(Roles::ACCOUNT->value == auth()->user()->roles){
            $this->accountView = false;
            $queryCampaign = $queryCampaign->where('account_id', auth()->user()->id);
            $this->accounts = auth()->user()->id;
        }
        $this->campaignData = $queryCampaign->select('id', 'title')->get();

        $this->campaigns = $queryCampaign->pluck('id');

    }

    #[Title('Donations')]
    public function render()
    {
        $donation = Transaction::where(function ($query) {
            $query->where('transaction_id', 'LIKE', '%' . $this->transactionId . '%')->where('status', 'success')->whereNull('upsell_campaignId');
                // ->orWhere('account_name', 'LIKE', '%' . $this->search . '%')
        })->with(['userDetail:id,name', 'accountDetail:id,account_name', 'causeDetail:id,title']);

        if ($this->status != 'all') {
            $donation = $donation->where('status', $this->status);
        }

        $donation->whereBetween(\DB::raw('DATE(created_at)'), [$this->startDate, $this->endDate])->orderby('id', 'desc')->get();

        // $donation = Transaction::where(function ($query) {
        //     $query->where('transaction_id', 'LIKE', '%' . $this->transactionId . '%');
        //         // ->orWhere('account_name', 'LIKE', '%' . $this->search . '%')
        // })
        // ->whereNotNull('main_transaction_id') // Add this line
        // ->with(['userDetail:id,name', 'accountDetail:id,account_name', 'causeDetail:id,title'])
        // ->whereBetween(\DB::raw('DATE(created_at)'), [$this->startDate, $this->endDate])
        // ->get();
    

        if(Roles::ACCOUNT->value == auth()->user()->roles){
            $donation = $donation->where('account_id', auth()->user()->id);
        }else{
            $donation = $donation->whereIn('account_id', $this->accounts);
        }
        $donation = $donation->whereIn('cause_detail_id', $this->campaigns);

        $donationData = $donation->paginate(10);

        return view('livewire.donations', [
            'donationData' => $donationData,
        ]);
    }
}
