<?php
namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Transaction;
use App\Models\User;
use PDF;
use Stevebauman\Location\Facades\Location;

class DonationUpsells extends Component
{
    public $MainTransactionId;
    public $upsellTransactionsList;
    public $TotalTransactionAmount;
    public $recordCount;
    public $UserDetails;
    public $Ipaddress;
    public $Location;


    public $title;
    #[Title('Donations')]

    public function mount()
    {
        // Fetch records where main_transaction_id is 1
        $this->upsellTransactionsList = Transaction::where(['main_transaction_id' => base64_decode($this->MainTransactionId), 'status' => 'success'])->get();
        $this->recordCount = $this->upsellTransactionsList->count();
        // Calculate total amount
        $this->TotalTransactionAmount = $this->upsellTransactionsList->sum('total_amount'); 
        
        $this->UserDetails = User::where(['id' => $this->upsellTransactionsList[0]->user_id, 'status' => 1])->get();

        $ip= request()->ip()=='127.0.0.1' ? '103.246.195.106' : request()->ip();
        // India IP Address : 103.246.195.106  for testing 103.146.44.34, US 130.58.218.30
        $position = \Location::get($ip);
        $this->Ipaddress = $position->ip;
        $this->Location = $position->countryName;
    }

    public function downloadPdf()
    {
        // Data to pass to the PDF view
        
        $data = ['title' => 'Official donation receipt', 
                    'name' => $this->UserDetails[0]->name, 
                    'donation_amount' => $this->upsellTransactionsList[0]->total_amount,
                    'designation' => $this->upsellTransactionsList[0]->causeDetail->selected_designation,
                    'donation_date' => $this->upsellTransactionsList[0]->causeDetail->created_at,
                    'receipt_number' => $this->upsellTransactionsList[0]->transaction_id,
                    'date_issued' => $this->upsellTransactionsList[0]->causeDetail->updated_at,
                    'email' => $this->UserDetails[0]->email,
                    'campaign' => $this->upsellTransactionsList[0]->causeDetail->title,
                 ];

        // Load a view to render into PDF
        $pdf = PDF::loadView('pdf.my-pdf-view', $data);

        // Download the generated PDF
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, 'Donation_receipt.pdf');
    }

    public function render()
    {
        return view('livewire.donation-upsells');
    }
}
