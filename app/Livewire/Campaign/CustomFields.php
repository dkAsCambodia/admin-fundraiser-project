<?php

namespace App\Livewire\Campaign;

use App\Models\CauseDetail;
use Livewire\Attributes\Title;
use Livewire\Component;

class CustomFields extends Component
{
    public $camPage = 'setting';
    public $sideBarType = 'custom-fields';

    public $causeDetailData;

    public function mount(CauseDetail $causeDetail)
    {
        $this->causeDetailData = $causeDetail;
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.custom-fields');
    }
}
