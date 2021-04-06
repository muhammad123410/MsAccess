<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Full_Authorities extends Model
{
    protected $fillable = [
        'Client_id','Name_in_Austrilia','Authority_issue_date',
        'Name_in_Kurdistan','Authority_register_Number','Authority_Name','Created_by','File',
        // 'Auth_Id',
        'Place_of_issue',
    ];
}
