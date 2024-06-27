<?php

namespace App\Livewire\Campaign;

use App\Models\CauseDetail;
use Livewire\Attributes\Title;
use Livewire\Component;

class Create extends Component
{
    public $camPage = 'create';

    public $causeDetailData;

    public function mount(CauseDetail $causeDetail)
    {
        $this->causeDetailData = $causeDetail;
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.create');
    }
}
