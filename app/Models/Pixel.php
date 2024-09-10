<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PIXEL extends Model
{
    public $table = "p_i_x_e_l_s";
    use HasFactory;
    protected $guarded = ['id'];
}
