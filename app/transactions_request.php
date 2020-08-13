<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transactions_request extends Model
{
    //
    protected $fillable = [
        'user_id',
        'from_user_bank_account_id',
        'to_user_bank_account_id',
        'amount',
        'date'


    ];


    public function get_to_user_bank_account_id(){

       return $this->belongsTo('App\user_bank_account', 'to_user_bank_account_id');
     }

  
}
