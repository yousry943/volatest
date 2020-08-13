<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class withdrow_bank extends Model
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
        return $this->belongsTo(user_bank_account::class);
    }


    public function get_user()
    {
        return $this->belongsTo(user_bank_account::class);
    }
}
