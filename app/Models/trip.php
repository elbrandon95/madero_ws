<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trip extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'name','description','currency_code','timezone','starts_at',
                           'ends_at','amount','pu_latitude', 'pu_longitude', 'pu_address', 
                           'do_latitude', 'do_longitude', 'do_address'] ;

}
