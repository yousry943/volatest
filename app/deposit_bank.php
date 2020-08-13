<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  App\user_bank_account;
class deposit_bank extends Model
{
    //

    protected $fillable = [

        'user_id',
        'id_user_bank_account',
        'amount',
        'date'


    ];

    public function get_user_bank_account()
    {
    return $this->belongsTo('App\user_bank_account', 'id_user_bank_account');
    }


    public function get_user()
    {
        return $this->belongsTo(user_bank_account::class);
    }
}
