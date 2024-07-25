<?php

namespace App\Livewire\Campaign;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\CauseDetail;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Title;
use Livewire\Component;

class SuggestedAmounts extends Component
{

    use LivewireAlert;

    public $camPage = 'setting';
    public $sideBarType = 'suggested-amounts';
    #[Rule('')]
    public $impactAmount1, $impactAmount2, $impactAmount3, $impactDesc1, $impactDesc2, $impactDesc3;

    public $causeDetailData;

    #[Rule('required')]
    public $defaultAmount;

    #[Validate(['suggestedAmount.*' => 'required'])]
    public $suggestedAmount = [
        'one' => '',
        'two' => '',
        'three' => '',
        'four' => '',
        'five' => '',
        'six' => '',
    ];

    public function mount(CauseDetail $causeDetail)
    {
        $this->causeDetailData = $causeDetail;
        if(!empty($causeDetail->suggested_amounts)){
            $this->suggestedAmount = $causeDetail->suggested_amounts;
        }
        if(!empty($causeDetail->default_amount)){
            $this->defaultAmount = $causeDetail->default_amount;
        }

        if(!empty($causeDetail->impactAmount1)){
            $this->impactAmount1 = $causeDetail->impactAmount1;
        }
        if(!empty($causeDetail->impactAmount2)){
            $this->impactAmount2 = $causeDetail->impactAmount2;
        }
        if(!empty($causeDetail->impactAmount3)){
            $this->impactAmount3 = $causeDetail->impactAmount3;
        }

        if(!empty($causeDetail->impactDesc1)){
            $this->impactDesc1 = $causeDetail->impactDesc1;
        }
        if(!empty($causeDetail->impactDesc2)){
            $this->impactDesc2 = $causeDetail->impactDesc2;
        }
        if(!empty($causeDetail->impactDesc3)){
            $this->impactDesc3 = $causeDetail->impactDesc3;
        }
    }

    public function save(){
        $data = $this->validate();
        // dd($data['impactAmount3']);
        $this->causeDetailData->update([
            'suggested_amounts' => $data['suggestedAmount'],
            'default_amount' => $data['defaultAmount'],
            'impactAmount1' => $data['impactAmount1'],
            'impactAmount2' => $data['impactAmount2'],
            'impactAmount3' => $data['impactAmount3'],
            'impactDesc1' => $data['impactDesc1'],
            'impactDesc2' => $data['impactDesc2'],
            'impactDesc3' => $data['impactDesc3'],
        ]);

        $this->alert('success', 'Suggested Amounts Updated Successfully');
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.suggested-amounts');
    }
}
