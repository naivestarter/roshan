<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseDetail extends Model
{
    //
    protected $table = 'tbl_house_detail';
    protected $guarded = [
    	'id',
    	'created_at',
    	'updated_at'
           
    ];
    protected $fillable = ['house_id','area','structure','roof_type' ,	'earthquake_resistant' ,	'ownership' ,	'storey_count' ,	'rented' ,	'rented_room_count' ,	'rented_person_count' ,	'monthly_rent' ,  'owner_id'];
}


