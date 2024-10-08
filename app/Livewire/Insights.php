<?php

namespace App\Livewire;

use App\Enums\Roles;
use App\Models\CauseDetail;
use App\Models\TransactionDetail;
use App\Models\Transaction;
use App\Models\User;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Livewire\Component;
use Livewire\Attributes\Title;

class Insights extends Component
{
    public $lineActive = "DonationsUSD";

    public $startDate, $endDate, $dateSpanData;
    public $lineChartDonationLabels, $lineChartDonationDatasetSum, $lineChartDonationDatasetCount;
    public $barChartDonationHourLabels, $barChartDonationHourDatasetSum, $barChartDonationHourDatasetCount;
    public $barChartDonationDayLabels, $barChartDonationDayDatasetSum, $barChartDonationDayDatasetCount;
            
    public $accountData, $campaignData;
    public $accounts = [];
    public $campaigns = [];

    public $accountOpen = false;
    public $campaignOpen = false;
    public $frequencyOpen = false;
    public $designationOpen = false;
    public $designationData;

    public $accountView = true;
    

    public function openAccount()
    {
        $this->campaignOpen = false;
        $this->designationOpen = false;
        $this->frequencyOpen = false;
        if ($this->accountOpen === true) {
            $this->accountOpen = false;
        } else {
            $this->accountOpen = true;
        }
    }

    public function openCampaign()
    {
        $this->accountOpen = false;
        $this->designationOpen = false;
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
        $this->designationOpen = false;
        if ($this->frequencyOpen === true) {
            $this->frequencyOpen = false;
        } else {
            $this->frequencyOpen = true;
        }
    }

    public function openDesignation()
    {
        $this->accountOpen = false;
        $this->campaignOpen = false;
        $this->frequencyOpen = false;
        if ($this->designationOpen === true) {
            $this->designationOpen = false;
        } else {
            $this->designationOpen = true;
        }
    }

    public function mount()
    {
        $queryAccount = User::where('status', 1)->where('is_admin', 1);
        $queryCampaign = CauseDetail::where('status', 1);

        $this->accountData = $queryAccount->select('id', 'account_name')->get();
        $this->accounts = $queryAccount->pluck('id');

        if (Roles::ACCOUNT->value == auth()->user()->roles) {
            $this->accountView = false;
            $queryCampaign = $queryCampaign->where('account_id', auth()->user()->id);
            $this->accounts = auth()->user()->id;
        }
        $this->campaignData = $queryCampaign->select('id', 'title')->get();
        
        $this->campaigns = $queryCampaign->pluck('id');

        $this->designationData = $queryCampaign->select('id','selected_designation')->whereNotNull('selected_designation')->get()->unique('selected_designation');

        $this->getDataPerMounth();
        $this->getDataPerHour();
        $this->getDataPerDay();
    }
    public function getDataPerMounth()
    {
        $startDate = now()->startOfYear();
        $endDate = now()->endOfYear();

        $dataCount = Trend::query(
            TransactionDetail::
                where(
                    function ($query) {
                        if (Roles::ACCOUNT->value == auth()->user()->roles) {
                            $query->where('account_id', auth()->user()->id);
                        } else {
                            $query->whereIn('account_id', $this->accounts);
                        }
                        return $query;
                    }
                )
        )->between(
                start: $startDate,
                end: $endDate,
            )
            ->perMonth()
            ->count();

        $dataSum = Trend::query(
            TransactionDetail::
                where(
                    function ($query) {
                        if (Roles::ACCOUNT->value == auth()->user()->roles) {
                            $query->where('account_id', auth()->user()->id);
                        } else {
                            $query->whereIn('account_id', $this->accounts);
                        }
                        return $query;
                    }
                )
        )
            ->between(
                start: $startDate,
                end: $endDate,
            )
            ->perMonth()
            ->sum('amount');

        $this->lineChartDonationLabels = $dataCount->map(fn(TrendValue $value) => date('M', strtotime($value->date)));
        $this->lineChartDonationDatasetSum = $dataSum->map(fn(TrendValue $value) => $value->aggregate);
        $this->lineChartDonationDatasetCount = $dataCount->map(fn(TrendValue $value) => $value->aggregate);
        //dd($this->lineChartDonationLabels,$this->lineChartDonationDatasetSum,$this->lineChartDonationDatasetCount);
        // 'labels' => $pendingData->map(fn (TrendValue $value) => date('F',strtotime($value->date))),
    }
    public function getDataPerDay()
    {
        $startDate = now()->startOfWeek();
        $endDate = now()->endOfWeek();

        $dataCount = Trend::query(
            TransactionDetail::
                where(
                    function ($query) {
                        if (Roles::ACCOUNT->value == auth()->user()->roles) {
                            $query->where('account_id', auth()->user()->id);
                        } else {
                            $query->whereIn('account_id', $this->accounts);
                        }
                        return $query;
                    }
                )
        )->between(
                start: $startDate,
                end: $endDate,
            )
            ->perDay()
            ->count();

        $dataSum = Trend::query(
            TransactionDetail::
                where(
                    function ($query) {
                        if (Roles::ACCOUNT->value == auth()->user()->roles) {
                            $query->where('account_id', auth()->user()->id);
                        } else {
                            $query->whereIn('account_id', $this->accounts);
                        }
                        return $query;
                    }
                )
        )
            ->between(
                start: $startDate,
                end: $endDate,
            )
            ->perDay()
            ->sum('amount');


        $this->barChartDonationDayLabels = $dataCount->map(fn(TrendValue $value) => date('l', strtotime($value->date)));
        $this->barChartDonationDayDatasetSum = $dataSum->map(fn(TrendValue $value) => $value->aggregate);
        $this->barChartDonationDayDatasetCount = $dataCount->map(fn(TrendValue $value) => $value->aggregate);

        // dd($this->barChartDonationHourLabels);
    }
    public function getDataPerHour()
    {
        $startDate = now()->startOfDay();
        $endDate = now()->endOfDay();

        $dataCount = Trend::query(
            TransactionDetail::
                where(
                    function ($query) {
                        if (Roles::ACCOUNT->value == auth()->user()->roles) {
                            $query->where('account_id', auth()->user()->id);
                        } else {
                            $query->whereIn('account_id', $this->accounts);
                        }
                        return $query;
                    }
                )
        )->between(
                start: $startDate,
                end: $endDate,
            )
            ->perHour()
            ->count();

        $dataSum = Trend::query(
            TransactionDetail::
                where(
                    function ($query) {
                        if (Roles::ACCOUNT->value == auth()->user()->roles) {
                            $query->where('account_id', auth()->user()->id);
                        } else {
                            $query->whereIn('account_id', $this->accounts);
                        }
                        return $query;
                    }
                )
        )
            ->between(
                start: $startDate,
                end: $endDate,
            )
            ->perHour()
            ->sum('amount');


        $this->barChartDonationHourLabels = $dataCount->map(fn(TrendValue $value) => date('H a', strtotime($value->date)));
        $this->barChartDonationHourDatasetSum = $dataSum->map(fn(TrendValue $value) => $value->aggregate);
        $this->barChartDonationHourDatasetCount = $dataCount->map(fn(TrendValue $value) => $value->aggregate);

        // dd($this->barChartDonationHourLabels);
    }

    #[Title('Insights')]
    public function render()
    {
        $totalTransaction = TransactionDetail::where('status', 'success')
            ->whereBetween(\DB::raw('DATE(created_at)'), [$this->startDate, $this->endDate])->sum('amount');
        $totalGoal = CauseDetail::where('status', '1')
            ->whereBetween(\DB::raw('DATE(created_at)'), [$this->startDate, $this->endDate])->sum('goal');
        $totalDonate = TransactionDetail::where('status', 'success')
            ->whereBetween(\DB::raw('DATE(created_at)'), [$this->startDate, $this->endDate])->count();

        $RecurringAmount = Transaction::where('frequency', 'monthly')->sum('total_amount');  
        $RecurringCount = Transaction::where('frequency', 'monthly')->count();
        $RecurringAvg = Transaction::where('frequency', 'monthly')->avg('total_amount');
        $RecurringMedian = Transaction::where('frequency', 'monthly')->pluck('total_amount')->median(); 
       
        $OnetimeAmount = Transaction::where('frequency', 'once')->sum('total_amount');  
        $OnetimeCount = Transaction::where('frequency', 'once')->count();      
        $OnetimeAvg = Transaction::where('frequency', 'once')->avg('total_amount'); 
        $OnetimeMedian = Transaction::where('frequency', 'once')->pluck('total_amount')->median();           

        return view('livewire.insights', [
            'totalDonate' => $totalDonate,
            'totalTransaction' => $totalTransaction,
            'totalGoal' => $totalGoal,
            'RecurringAmount' => $RecurringAmount,
            'RecurringCount' => $RecurringCount,
            'RecurringAvg' => floor($RecurringAvg),
            'OnetimeCount' => $OnetimeCount,
            'OnetimeAmount' => $OnetimeAmount,
            'OnetimeCount' => $OnetimeCount,
            'OnetimeAvg' => floor($OnetimeAvg),
            'RecurringMedian' => $RecurringMedian,
            'OnetimeMedian' => $OnetimeMedian
        ]);
    }
}
