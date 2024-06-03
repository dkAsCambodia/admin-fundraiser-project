<?php

use App\Livewire\Account\Dashboard;
use App\Livewire\Account\Table;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\PersonalProfile;
use App\Livewire\Campaign\Action;
use App\Livewire\Campaign\CampaignDetail;
use App\Livewire\Campaign\CampaignPhoto;
use App\Livewire\Campaign\Create;
use App\Livewire\Campaign\Currency;
use App\Livewire\Campaign\CustomFields;
use App\Livewire\Campaign\PaymentMethods;
use App\Livewire\Campaign\Setting;
use App\Livewire\Campaign\Frequencies;
use App\Livewire\Campaign\SuggestedAmounts;
use App\Livewire\Campaign\CampaignUpsells;
use App\Livewire\Campaign\TermsAndConditions;
use App\Livewire\Campaigns;
use App\Livewire\CampaignsArchive;
use App\Livewire\Donations;
use App\Livewire\DonationUpsells;
use App\Livewire\Insights;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['guest']], function() {
    Route::get('/', function () {
        return redirect('login');
    });
    Route::get('/login', Login::class)->name('login');
    Route::get('/forgot-password', ForgotPassword::class);
});


Route::group(['middleware' => ['auth']], function() {
    Route::get('/sign-out', [Login::class, 'doLogout']);
    Route::get('/insights', Insights::class);
    Route::get('/donations', Donations::class);
    Route::get('/donation/{MainTransactionId}', DonationUpsells::class);
    Route::get('/campaigns', Campaigns::class);
    Route::get('/campaigns-archive', CampaignsArchive::class);
    Route::get('/campaigns/{causeDetail}/create', Create::class);
    Route::get('/campaigns/{causeDetail}/setting', Setting::class);
    Route::get('/campaigns/{causeDetail}/frequencies', Frequencies::class);
    Route::get('/campaigns/{causeDetail}/action', Action::class);
    Route::get('/campaigns/{causeDetail}/payment-methods', PaymentMethods::class);
    Route::get('/campaigns/{causeDetail}/currency', Currency::class);
    Route::get('/campaigns/{causeDetail}/suggested-amounts', SuggestedAmounts::class);
    Route::get('/campaigns/{causeDetail}/campaign-upsells', CampaignUpsells::class);
    Route::get('/campaigns/{causeDetail}/terms-and-conditions', TermsAndConditions::class);
    Route::get('/campaigns/{causeDetail}/custom-fields', CustomFields::class);

    Route::get('/campaigns/{causeDetail}/campaign-photo', CampaignPhoto::class);
    Route::get('/campaigns/{causeDetail}/campaign-detail', CampaignDetail::class);

    Route::group(['middleware' => ['auth.superAdmin']], function() {
        Route::get('/account/dashboard', Dashboard::class);
        Route::get('/account/create', \App\Livewire\Account\Create::class);
        Route::get('/account/{user}/edit', \App\Livewire\Account\Create::class);
        Route::get('/account/table', Table::class);
        Route::get('/setting/personal', PersonalProfile::class);
    });
});
