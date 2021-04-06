<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retirement_Authorities extends Model
{
    protected $fillable = [
        // 'Auth_Id',
        'Client_id','Name_in_Austrilia','Name_in_Kurdistan',
        'Mother_Full_Name','Retirement_Type','Retirement_Id_No','Retirement_Date_of_Issue','Name_of_the_Bank','Authority_issue_date','Country_Name',
        'Authority_register_Number','Authority_Name','Created_by','File','Place_of_issue',
    ];
}
