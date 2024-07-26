<?php

namespace App\Livewire\Campaign;

use App\Models\CauseDetail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use DB;
use Illuminate\Database\Query\Expression;
use Illuminate\Http\Request;

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
        $selected_designation = $causeDetail->selected_designation;

        if(!empty($causeDetail->designations)){
            $this->designations = $causeDetail->designations;
        }
        $updatedValue = $this->causeDetailData->fresh()->designations;
        $this->stringValue = $updatedValue ? (string) $updatedValue : '';
    }

    public function save(){
        
        $this->validate([
            'billingRate' => '',
        ]);

        $this->causeDetailData->update(['selected_designation' => $this->selected_designation,]);

        if($this->causeDetailData->designations == null)
        {
             $this->causeDetailData->update(['designations' => $this->billingRate,]);
        }
        else
        {
            if($this->billingRate != null)
            {
                $this->causeDetailData
                ->update(['designations'=>DB::raw("CONCAT(designations,',".$this->billingRate."')")]);
                $updatedValue = $this->causeDetailData->fresh()->designations;
                $this->stringValue = $updatedValue ? (string) $updatedValue : '';
            }
        }

        $this->alert('success', 'Updated Successfully');
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.designations');
    }
}
