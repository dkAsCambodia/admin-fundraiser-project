<?php

namespace App\Livewire\Campaign;

use App\Models\CauseDetail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

class Action extends Component
{
    use LivewireAlert;

    public $camPage = 'action';

    public $causeDetailData;

    public function mount(CauseDetail $causeDetail)
    {
        $this->causeDetailData = $causeDetail;
    }

    public function delete(){
        $this->causeDetailData->delete();

        $this->flash('warning', 'Deleted Successfully', [], '/campaigns');
    }
    public function disable(){
        $this->causeDetailData->update([
            'status' => 0,
        ]);

        $this->alert('warning', 'Disabled Successfully');
    }
    public function enable(){
        $this->causeDetailData->update([
            'status' => 1,
        ]);

        $this->alert('success', 'Enabled Successfully');
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.action');
    }
}
