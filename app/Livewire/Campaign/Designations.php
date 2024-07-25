<?php

namespace App\Livewire\Campaign;

use App\Models\CauseDetail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use DB;
use Illuminate\Database\Query\Expression;

class Designations extends Component
{
    use LivewireAlert;
    public $camPage = 'designations';
    public $sideBarType = 'designations';

    public $causeDetailData;
    public $designations;
    public $billingRate;
    public $stringValue;
    public $selected_designation;

    public function mount(CauseDetail $causeDetail)
    {
        $this->causeDetailData = $causeDetail;

        if(!empty($causeDetail->designations)){
            $this->designations = $causeDetail->designations;
        }
        $updatedValue = $this->causeDetailData->fresh()->designations;
        $this->stringValue = $updatedValue ? (string) $updatedValue : '';
    }

    public function save(){
        //dd($this->selected_designation);
        $this->validate([
            'billingRate' => 'required',
        ]);

        $this->causeDetailData->update(['selected_designation' => $this->selected_designation,]);

        if($this->causeDetailData->designations == null)
        {
             $this->causeDetailData->update(['designations' => $this->billingRate,]);
        }
        else
        {
            $this->causeDetailData
            ->update(['designations'=>DB::raw("CONCAT(designations,',".$this->billingRate."')")]);
            $updatedValue = $this->causeDetailData->fresh()->designations;
            $this->stringValue = $updatedValue ? (string) $updatedValue : '';
        }

        $this->alert('success', 'Updated Successfully');
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.designations');
    }
}
