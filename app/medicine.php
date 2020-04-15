<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    protected $table='medicine';
    protected $fillable =['description','link','medicineprice'];
    public $timestamps = false;
}
