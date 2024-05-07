<?php

namespace App\Livewire\Campaign;

use App\Models\CauseDetail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

use Livewire\Attributes\Validate;

class Setting extends Component
{
    use LivewireAlert;
    public $camPage = 'setting';
    public $sideBarType = 'setting';
    public $causeDetailData;

    #[Rule('required')]
    public $title;
    public $setEndDate = false;

    #[Rule('required_if:setEndDate,true')]
    public $endDate;

    public function mount(CauseDetail $causeDetail)
    {
        $this->causeDetailData = $causeDetail;

        $this->title = $causeDetail->title;
        if(!empty($causeDetail->end_date)){
            $this->endDate = $causeDetail->end_date; 
            $this->setEndDate = true;
        }
    }

    public function save(){
        $data = $this->validate();

        $this->causeDetailData->update([
            'title' => $data['title'],
            'end_date' => $data['endDate'], 
        ]);

        $this->alert('success', 'Updated Successfully');
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.setting');
    }
}
