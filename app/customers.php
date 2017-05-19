<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $table='customers';
    protected $fillable=['id','firstName','lastName','phoneNumber'];
}
