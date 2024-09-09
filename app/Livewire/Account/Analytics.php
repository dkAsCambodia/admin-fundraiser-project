<?php

namespace App\Livewire\Account;

use Livewire\Attributes\Title;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use App\Models\GTM;
use App\Models\Pixel;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Analytics extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $sideBarType = 'analytics';
    public $activeGmtModal = false;
    public $activeMetaModal = false;
    public $gtm_container;
    public $gtm_container_data;

    public $pixel_id;
    public $access_token;
    public $token_event = false;
    public $status = true;
    public $pixel_data;

    public function openGmtModal()
    {
        $this->activeGmtModal = true;
    }

    public function closeModal()
    {
        $this->activeGmtModal = false;
        $this->activeMetaModal = false;
    }

    public function openMetaModal()
    {
        $this->activeMetaModal = true;
    }

    public function mount(GTM $gtm_container_data, Pixel $pixel_data){
            $this->gtm_container_data = GTM::all();
            $this->pixel_data = Pixel::all();
    }

    public function delete($id){
        GTM::where('id', $id)->delete();
        $this->flash('warning', 'Deleted Successfully', [], '/account/analytics');
    }

    public function delete_pixel($id){
        Pixel::where('id', $id)->delete();
        $this->flash('warning', 'Deleted Successfully', [], '/account/analytics');
    }

    public function addPixel()
    {
        $validated = $this->validate([
            'pixel_id' => 'required',
            'access_token' => 'required',
            'token_event' => '',
            'status' => '',
        ]);

        $datas = [
            'pixel_id' => $validated['pixel_id'],
            'access_token' => $validated['access_token'],
            'token_event' => $validated['token_event'],
            'status' => $validated['status'],
        ];

        Pixel::create($datas);
        $this->alert('success', 'Meta Pixel ID was Created Successfully');
        return redirect()->to('/account/analytics');

    }

    public function addGTM()
    {
        $validated = $this->validate([
            'gtm_container' => 'required',
        ]);

        $datas = [
            'gtm_container' => $validated['gtm_container'],
        ];

            GTM::create($datas);
            $this->alert('success', 'Google Tag was Created Successfully');
            return redirect()->to('/account/analytics');
    }

    #[Title('Accounts')]
    public function render()
    {
        return view('livewire.account.analytics');
    }
}
