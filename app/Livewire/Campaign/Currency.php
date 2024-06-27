<?php

namespace App\Livewire\Campaign;

use App\Models\CauseDetail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class Currency extends Component
{
    use LivewireAlert;

    public $camPage = 'setting';
    public $sideBarType = 'currency';

    public $causeDetailData;

    #[Rule('required')]
    public $goal;

    public function mount(CauseDetail $causeDetail)
    {
        $this->causeDetailData = $causeDetail;
        if(!empty($causeDetail->goal)){
            $this->goal = $causeDetail->goal;
        }
    }

    public function save(){
        $data = $this->validate();

        $this->causeDetailData->update($data);

        $this->alert('success', 'Goal Updated Successfully');
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.currency');
    }
}
