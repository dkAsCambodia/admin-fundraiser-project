<?php
namespace App\Livewire\Campaign;
use Livewire\Component;

use App\Models\CauseDetail;
use App\Models\User;
use App\Models\Upsell;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

class CampaignUpsells extends Component
{
    use LivewireAlert;
    public $causeDetailData;
    public $camPage = 'setting';
    public $sideBarType = 'campaign-upsells';

    public $usersWithProducts = [];
    public $upsells;
    public $campaignUpsellIds = [];

    #[Rule('required')]
    public $campaign_upsellId = [];

    public $orders = [];

    

    public function mount(CauseDetail $causeDetail)
    {
        $this->causeDetailData = $causeDetail;

        // if(!empty($causeDetail->id)){
        //     $this->campaign_upsellId = 'volvo';
        // }

        //  // Fetch users with status 1 who have associated products
        $users = User::where('is_admin', 1)->has('cause_details')->get();
        foreach ($users as $user) {
            // Store user id, name, and their products with id and name in array
            $this->usersWithProducts[$user->id] = [
                'user_id' => $user->id,
                'user_name' => $user->name,
                'products' => $user->cause_details->reject(function ($cause_detail) {
                    return $cause_detail->id === $this->causeDetailData->id; // Exclude cause_detail with ID 9
                })->map(function ($cause_detail) {
                    return [
                        'id' => $cause_detail->id,
                        'title' => $cause_detail->title,
                    ];
                }),
            ];
        }

        $this->upsellsData();
       //for campaign id list
        $this->campaignUpsellIds = $this->upsells->pluck('campaign_upsellId')->toArray();
       
        

    }    
    public function upsellsData(){
        $this->upsells = Upsell::where('mainCampaign_id', $this->causeDetailData->id)->with('causeDetail')->orderBy('order', 'ASC')->get(['id', 'campaign_upsellId', 'order']);

        foreach ($this->upsells as $upsell) {
            $this->orders[$upsell->id] = $upsell->order;
        }

        $this->campaign_upsellId =  $this->upsells->pluck('campaign_upsellId')->toArray();
    }

    public function updateOrder($Id)
    {
        // dd($Id . ' '. $this->orders[$Id]);
        $upsell = Upsell::where('id', $Id)->first();
        if ($upsell) {
            $upsell->order = $this->orders[$Id];
            $upsell->save();
        }
        $this->upsellsData();
        $this->alert('success', 'Campaign Upsells Updated Successfully');
    }

    public function save(){
        $data = $this->validate();
            $count= count($data['campaign_upsellId']);
            Upsell::where('mainCampaign_id', $this->causeDetailData->id)->delete();
            for($i=0; $i<$count; $i++){

                Upsell::create([
                    'mainCampaign_id' => $this->causeDetailData->id,
                    'campaign_upsellId' => $data['campaign_upsellId'][$i],
                    'order' => $i,
                ]);
            }

        $this->upsellsData();
        $this->alert('success', 'Campaign Upsells Updated Successfully');

        
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.campaign-upsells');
    }

}
