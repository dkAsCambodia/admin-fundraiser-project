<?php

namespace App\Livewire\Campaign;

use App\Models\CauseDetail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class CampaignDetail extends Component
{
    use LivewireAlert;

    public $causeDetailData;

    public $camPage = 'setting';
    public $sideBarType = 'campaign-detail';

    #[Rule('required')]
    public $shortDetails, $pageContent;

    public function mount(CauseDetail $causeDetail)
    {
        $this->causeDetailData = $causeDetail;

        if(!empty($causeDetail->short_details)){
            $this->shortDetails = $causeDetail->short_details;
        }
        if(!empty($causeDetail->page_content)){
            $this->pageContent = $causeDetail->page_content;
        }
    }
    public function save(){
        $data = $this->validate();

        // dd($data);
        $this->causeDetailData->update([
            'short_details' => $data['shortDetails'],
            'page_content' => $data['pageContent'],
        ]);

        $this->alert('success', 'Updated Successfully');
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.campaign-detail');
    }
}
