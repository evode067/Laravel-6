<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history extends Model
{
            protected $table='history';
    protected $fillable =['date','description','link'];
    public $timestamps = false;
}
