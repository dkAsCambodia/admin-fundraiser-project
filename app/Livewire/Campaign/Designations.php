<?php

namespace App\Livewire\Campaign;

use App\Models\CauseDetail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class Designations extends Component
{
    use LivewireAlert;
    public $camPage = 'designations';
    public $sideBarType = 'designations';

    public $causeDetailData;
    public $designations;

    public function mount(CauseDetail $causeDetail)
    {
        $this->causeDetailData = $causeDetail;

        if(!empty($causeDetail->designations)){
            $this->designations = $causeDetail->designations;
        }
    }

    public function save(){
        $this->validate([
            'designations' => 'required',
        ]);
        $this->causeDetailData->update([
            'designations' => $this->designations,
        ]);

        $this->alert('success', 'Updated Successfully');
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.designations');
    }
}
