<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GTM extends Model
{
    public $table = "g_t_m_s";
    use HasFactory;
    protected $guarded = ['id'];
}
