<?php
namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Transaction;

class DonationUpsells extends Component
{
    public $MainTransactionId;
    public $upsellTransactionsList;
    public $TotalTransactionAmount;
    public $recordCount;

    public $title;
    #[Title('Donations')]

    public function mount()
    {
        // Fetch records where main_transaction_id is 1
        $this->upsellTransactionsList = Transaction::where(['main_transaction_id' => base64_decode($this->MainTransactionId), 'status' => 'success'])->get();
        $this->recordCount = $this->upsellTransactionsList->count();
        // Calculate total amount
        $this->TotalTransactionAmount = $this->upsellTransactionsList->sum('total_amount'); 

    }

    public function render()
    {
        return view('livewire.donation-upsells');
    }
}
