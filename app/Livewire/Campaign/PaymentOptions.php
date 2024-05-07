<?php

namespace App\Livewire\Campaign;

use App\Models\CauseDetail;
use Livewire\Attributes\Title;
use Livewire\Component;

class PaymentOptions extends Component
{
    public $camPage = 'setting';
    public $sideBarType = 'payment-methode';

    public $causeDetailData;

    public function mount(CauseDetail $causeDetail)
    {
        $this->causeDetailData = $causeDetail;
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.payment-options');
    }
}
