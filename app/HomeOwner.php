<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeOwner extends Model
{
    //
    protected $table = 'tbl_home_owner_detail';
    protected $guarded = [
    	'id',
    	'created_at',
    	'updated_at'
           
    ];
    protected $fillable = ['unique_id','first_name','last_name','age','education','speaciality','gender','family_religion' ,'caste','mother_language', 'father_name', 'mother_name', 'grandfather_name', 'permanent_residence', 'province',    'district','municipality'  ,  'village' ,    'ward'];
}


//'disability','disabled_identity_card','disabled_identity_type',  