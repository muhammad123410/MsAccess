<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Limited_Authorities extends Model
{
    protected $fillable = [
        // 'Auth_Id',
        'Client_id','Name_in_Austrilia','Name_in_Kurdistan',
        'Property_Type','Property_resisted_No','Place_of_property','Authority_issue_date','Authority_register_Number',
        'Authority_Name','Created_by','File','Property_No'
    ];
}
