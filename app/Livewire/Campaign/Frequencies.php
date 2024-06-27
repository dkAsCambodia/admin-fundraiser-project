<?php

namespace App\Livewire\Campaign;

use App\Models\CauseDetail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class Frequencies extends Component
{
    use LivewireAlert;
    public $camPage = 'frequencies';
    public $sideBarType = 'frequencies';
    public $causeDetailData;

    public $default_frequency;
    public $second_frequency;

    public function mount(CauseDetail $causeDetail)
    {
        $this->causeDetailData = $causeDetail;

        if(!empty($causeDetail->default_frequency)){
            $this->default_frequency = $causeDetail->default_frequency;
        }
        if(!empty($causeDetail->second_frequency)){
            $this->second_frequency = $causeDetail->second_frequency;
        }
    }

    public function save(){
        $this->validate([
            'default_frequency' => 'required',
        ]);
        $this->causeDetailData->update([
            'default_frequency' => $this->default_frequency,
            'second_frequency' => $this->second_frequency,
        ]);

        $this->alert('success', 'Updated Successfully');
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.frequencies');
    }
}
