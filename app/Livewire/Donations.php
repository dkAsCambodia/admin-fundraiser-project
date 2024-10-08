<?php

namespace App\Livewire;

use App\Enums\Roles;
use App\Models\CauseDetail;
use App\Models\Transaction;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\Exports\DonationsExport;
use Stevebauman\Location\Facades\Location;

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
    public $frequencyOpen = false;

    public $title;
    public $transactionId;
    public $status = 'all';
    public $default_frequency = 'all';
    public $id;

    public $accountView = true;

    public function openAccount()
    {
        $this->campaignOpen = false;
        $this->frequencyOpen = false;
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
        $this->frequencyOpen = false;
        $this->campaignOpen = false;
        if ($this->statusOpen === true) {
            $this->statusOpen = false;
        } else {
            $this->statusOpen = true;
        }
    }

    public function openCampaign()
    {
        $this->accountOpen = false;
        $this->statusOpen = false;
        $this->frequencyOpen = false;
        if ($this->campaignOpen === true) {
            $this->campaignOpen = false;
        } else {
            $this->campaignOpen = true;
        }
    }

    public function openFrequency()
    {
        $this->accountOpen = false;
        $this->campaignOpen = false;
        $this->statusOpen = false;
        if ($this->frequencyOpen === true) {
            $this->frequencyOpen = false;
        } else {
            $this->frequencyOpen = true;
        }
    }

    public function goToView($id)
    {
        $transaction = Transaction::where(['id' => $id])->first();
        $main_trans_id = base64_encode($transaction->main_transaction_id);
        $this->redirect('/donation/' . $main_trans_id);
    }

    public function export()
    {
        // Fetch data to be exported
       // $transactions = Transaction::all();
        $transactions = Transaction::with(['userDetail.informations', 'accountDetail:id,account_name', 'causeDetail:id,title'])->get();
        $ip= request()->ip()=='127.0.0.1' ? '103.246.195.106' : request()->ip();
        $position = \Location::get($ip);
        $Ipaddress = $position->ip;
        $Location = $position->countryName;

        // Create a CSV file
        $fileName = 'Transaction.csv';
        $filePath = storage_path('app/public/' . $fileName);
        
        $file = fopen($filePath, 'w');

        // Add CSV headers
        //fputcsv($file, ['ID', 'Transaction_ID', 'Futrure_payment_id', 'Amount', 'Frequency', 'Gateway_name', 'Message', 'Currency', 'Status', 'Time_zone', 'Date']);
          fputcsv($file,[
            'Subaccount ID',
            'Subaccount Name',
            'Subaccount Code',
            'Donation ID',
            'Donation Status',
            'Donation Date',
            'Success Date',
            'Failed Date',
            'Donation Frequency',
            'Recurring ID',
            'Installment',
            'Designation ID',
            'Designation Code',
            'Designation Name',
            'Donation Comment',
            'Campaign ID',
            'Campaign Code',
            'Campaign Name',
            'Element ID',
            'Element Type',
            'Element Name',
            'Supporter ID',
            'Supporter First Name',
            'Supporter Last Name',
            'Supporter Email',
            'Phone No',
            'On Behalf of', 
            'Anonymus Donation',
            'Terms',
            'Mailing address line 1',
            'Mailing address line 2',
            'Mailing City',
            'Mailing Zip/Postal',
            'Mailing State/Region',
            'Mailing Country Code',
            'Mailing Country',
            'Supporter IP Address',
            'Supporter IP Geolocation',
            'Supporter Employer',
            'Payment ID',
            'Payment Processor',
            'Payment Method',
            'Credit Card Type',
            'Credit Card Last 4',
            'Credit Card Expiration Date',
            'Credit Card Expiration Month',
            'Credit Card Expiration Year',
            'Converted Donation Amount',
            'Donation Amount',
            'Donation Currency',
            'Donation Amount Before Fees Covered Option',
            'Converted Donation Amount Before Fees Covered Option',
            'Converted Payout Amount',
            'Payout Amount',
            'Payout Currency',
            'Converted Payment Processing Fee',
            'Payment Processing Fee',
            'Payment Processing Fee Currency',
            'Converted Platform Fee',
            'Platform Fee',
            'Platform Fee Currency',
            'Supporter Covered Fee',
            'Converted Refund Amount',
            'Refund Amount',
            'Refund Amount Currency',
            'Refund Date',
            'Donation Source',
            'Donation Page URL',
            'Tribute ID',
            'Tribute Type',
            'Tribute Honoree',
            'Tribute From',
            'Tribute Message',
            'Tribute Sharing',
            'Tribute Recipient First Name',
            'Tribute Recipient Last Name',
            'Tribute Email',
            'Tribute Address Line 1',
            'Tribute Address Line 2',
            'Tribute City',
            'Tribute Zip/Postal',
            'Tribute State/Region',
            'Tribute Country Code',
            'Tribute Country',
            'UTM Campaign Source',
            'UTM Campaign Medium',
            'UTM Campaign Name',
            'UTM Campaign Term',
            'UTM Campaign Content',
            'Donation Record Url',
            'Created By User ID',
            'Created By User First Name',
            'Created By User Last Name',
            'Created By User Email',
            'Mailing List',
          ]);
        // Add rows to the CSV
        foreach ($transactions as $transaction) 
        {
            //fputcsv($file, [$transaction->id, $transaction->transaction_id, $transaction->future_payment_custId, $transaction->total_amount, $transaction->frequency, $transaction->gateway_name, $transaction->message, $transaction->currency, $transaction->status, $transaction->payment_timezone, $transaction->created_at->format('M d, Y, h:i A')]);
            fputcsv($file, [
            @$transaction->userDetail->account_id,
            @$transaction->userDetail->account_name,
            @$transaction->userDetail->id,
            $transaction->transaction_id,
            $transaction->status,
            $transaction->created_at->format('M d, Y, h:i A'),
            $transaction->created_at->format('M d, Y, h:i A'),
            '-',
            $transaction->frequency,
            '-',
            '-',
            $transaction->id,
            @$transaction->causeDetail->selected_designation,
            @$transaction->causeDetail->selected_designation,
            $transaction->message,
            @$transaction->causeDetail->id,
            @$transaction->causeDetail->code,
            @$transaction->causeDetail->title,
            '-',
            '-',
            '-',
            @$transaction->userDetail->id,
            @$transaction->userDetail->name,
            @$transaction->userDetail->name,
            @$transaction->userDetail->email,
            @$transaction->userDetail->email,
            @$transaction->userDetail->informations->mobile,
            '-',
            @$transaction->userDetail->informations->donate_anonymously,
            '-',
            @$transaction->userDetail->informations->address,
            @$transaction->userDetail->informations->address,
            @$transaction->userDetail->informations->city,
            @$transaction->userDetail->informations->zip,
            @$transaction->userDetail->informations->state,
            @$transaction->userDetail->informations->mobile_country_code,
            @$transaction->userDetail->informations->country,
            $Ipaddress,
            $Location,
            '-',
            $transaction->transaction_id,
            '-',
            $transaction->gateway_name,
            $transaction->gateway_name,
            $transaction->card_number,
            $transaction->exp_month,
            $transaction->exp_month,
            $transaction->exp_year,
            $transaction->total_amount,
            $transaction->total_amount,
            $transaction->currency,
            $transaction->total_amount,
            $transaction->total_amount,

            $transaction->total_amount,
            $transaction->total_amount,
            $transaction->currency,
            $transaction->total_amount,
            $transaction->total_amount,
            $transaction->currency,
            $transaction->total_amount,
            $transaction->total_amount,
            $transaction->currency,
            $transaction->total_amount,
            $transaction->total_amount,
            $transaction->currency,
            $transaction->total_amount,
            $transaction->total_amount,
            $transaction->total_amount,
            $transaction->currency,
            $transaction->created_at->format('M d, Y, h:i A'),
            'Checkout Modal',
            'https://partners.getmoredonations.org/campaign/stories/FUNFNELWZYV/?form=FUNFNELWZYV&utm_source=google&utm_medium=cpc&utm_campaign=21645248628&utm_content=711709094562&cid=CjwKCAjwodC2BhAHEiwAE67hJLh8SNbmj-u9pMjTxA39M_C_XRJA3XOYG0OZnerkIbJFOizkICpDpRoC_sEQAvD_BwE',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            '-',
            ]);
        }

        // Close the file
        fclose($file);

        // Return the file as a response for download
        return Response::download($filePath)->deleteFileAfterSend(true);
    }

    public function excel_export()
    {
        $export = new DonationsExport();
        $filePath = $export->export();

        // Return the file as a response for download
        return Response::download($filePath)->deleteFileAfterSend(true);
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
            $query->where('transaction_id', 'LIKE', '%' . $this->transactionId . '%');
                // ->orWhere('account_name', 'LIKE', '%' . $this->search . '%')
        })->with(['userDetail:id,name', 'accountDetail:id,account_name', 'causeDetail:id,title']);

        if ($this->status != 'all') {
            $donation = $donation->where('status', $this->status);
        }

        if ($this->default_frequency != 'all') {
            $donation = $donation->where('frequency', $this->default_frequency);
        }

        //$donation->whereBetween(\DB::raw('DATE(created_at)'), [$this->startDate, $this->endDate])->orderby('id', 'desc')->get();
            $donation->orderby('id', 'desc')->get();

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
