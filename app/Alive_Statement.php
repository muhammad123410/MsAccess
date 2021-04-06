<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alive_Statement extends Model
{
    protected $fillable = [
        'Client_id','Name_in_Austrilia','Authority_issue_date',
        // 'Auth_Id',
        'Country_Name','Authority_register_Number','Authority_Name','File',
    ];
}
