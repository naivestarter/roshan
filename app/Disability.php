<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disability extends Model
{
    //
    protected $table = 'tbl_disabled_person';
    protected $guarded = [
    	'id',
    	'created_at',
    	'updated_at'
           
    ];
    protected $fillable = ['disabled_identity_type','owner_id'];
}
