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
    }

    public function save(){
        $data = $this->validate();

        $this->causeDetailData->update([
            'suggested_amounts' => $data['suggestedAmount'],
            'default_amount' => $data['defaultAmount'],
        ]);

        $this->alert('success', 'Suggested Amounts Updated Successfully');
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.suggested-amounts');
    }
}
