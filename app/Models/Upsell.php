<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upsell extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function causeDetail()
    {
        return $this->belongsTo(CauseDetail::class, 'campaign_upsellId', 'id');
    }
}
