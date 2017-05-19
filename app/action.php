<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class action extends Model
{
    protected $table='action';
   	protected $fillable=['id','customerId','userId','action','note'];
}
