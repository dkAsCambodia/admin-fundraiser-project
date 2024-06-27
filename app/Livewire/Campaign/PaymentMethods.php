<?php

namespace App\Livewire\Campaign;

use App\Models\CauseDetail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class PaymentMethods extends Component
{
    use LivewireAlert;
    public $camPage = 'payment-methods';
    public $sideBarType = 'payment-methods';

    public $causeDetailData;
    public $payment_method;

    public function mount(CauseDetail $causeDetail)
    {
        $this->causeDetailData = $causeDetail;

        if(!empty($causeDetail->payment_method)){
            $this->payment_method = $causeDetail->payment_method;
        }
    }

    public function save(){
        $this->validate([
            'payment_method' => 'required',
        ]);
        $this->causeDetailData->update([
            'payment_method' => $this->payment_method,
        ]);

        $this->alert('success', 'Updated Successfully');
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.payment-methods');
    }
}
