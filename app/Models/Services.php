<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = ['name','parent_category','image'];

    public function category_products()
    {
       return $this->hasMany('App\Models\SubServices','service_id');   
    }

}
