<?php

namespace App\Livewire\Campaign;

use App\Common\UploadCertificate;
use App\Models\CauseDetail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class CampaignPhoto extends Component
{

    use LivewireAlert;

    use WithFileUploads;

    public $causeDetailData;

    public $camPage = 'setting';
    public $isType = 'photo';
    public $sideBarType = 'campaign-photo';

    public $photo;

    public $video;

    public $logo;
    public function mount(CauseDetail $causeDetail)
    {
        $this->causeDetailData = $causeDetail;
       // $this->video = $causeDetail->video;
    }

    public function save(){
        // $validated = $this->validate([
        //     'photo' => $this->causeDetailData->photo != null ? '' : 'required|image|max:1024',
        //     'video' => $this->causeDetailData->video != null && $this->video != '' ? '' : 'max:1000000|file|mimetypes:video/mp4,video/mpeg,video/x-matroska'
        // ]);
        $validated = $this->validate([
            'photo' => '',
            'video' => '',
            'logo' => '',
        ]);
        // dd($validated);
        $this->causeDetailData->update([
            'photo' => $validated['photo'] ? UploadCertificate::upload('campaignPhoto', $validated['photo'], 'public') : $this->causeDetailData->photo,
            'video' => $validated['video'] ? UploadCertificate::upload('campaignVideo', $validated['video'], 'public') : $this->causeDetailData->video,
            'logo' => $validated['logo'] ? UploadCertificate::upload('campaignPhoto', $validated['logo'], 'public') : $this->causeDetailData->logo,
        ]);

        $this->alert('success', 'Campaign Gallery Updated Successfully');
    }

    #[Title('Campaigns')]
    public function render()
    {
        return view('livewire.campaign.campaign-photo');
    }
}
