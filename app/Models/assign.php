<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class assign extends Model
{
    protected $table='assign';
   	protected $fillable=['id','userId','customersId'];
}
