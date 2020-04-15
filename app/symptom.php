<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class symptom extends Model
{
        protected $table='symptom';
    protected $fillable =['description','link'];
    public $timestamps = false;
}
