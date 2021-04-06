<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'Client_Name','Address','Contact_Number','file',
        'Type_of_Iraqi','Iraqi_Document_number','Type_of_Australian_id','Australian_Id_No','Date_of_issue','Created_by','Authority',
        // 'Client_id'
    ];
    public function alive_statements(){
        return $this->hasMany(Alive_Statement);
    }
    public function full_authorities(){
        return $this->hasMany(Full_Authorities);
    }
    public function limited_authorities(){
        return $this->hasMany(Limited_Authorities);
    }
    public function retirement_authorities(){
        return $this->hasMany(Retirement_Authorities);
    }
}
