<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubServices extends Model
{
    use HasFactory;
    protected $table = 'sub-services';
    protected $fillable = ['name','profile_pic','service_id','content','composition','packing'];

    public function test()
    {
       return $this->hasMany('App\Models\Services','service_id');   
    }

    /*public function availabiltiy()
    {
       return $this->hasMany('App\Models\Availability','user_id');   
    }


    public function getPermissions()
    {
       return $this->belongsToMany('App\Models\Permission','default_permission_ids');   
    }*/
}
