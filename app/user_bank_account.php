<?php

namespace App;

use App\User;
use App\Bank;
use App\currency_account;
use App\type_account;
use Illuminate\Database\Eloquent\Model;

class user_bank_account extends Model
{
    //

    protected $fillable = [
        'user_id',
        'bank_id',
        'currency_id',
        'type_account_id',
        'account_name',
        'total_deposit',
        'status',



    ];

    public function get_user()
    {
          return $this->belongsTo('App\User', 'user_id');
    }

    public function get_bank()
    {
          return $this->belongsTo('App\Bank', 'bank_id');
    }

    public function get_currency()
    {

        return $this->belongsTo('App\currency_account', 'currency_id');

    }
    public function get_type_account()
    {
        return $this->belongsTo('App\type_account', 'type_account_id');

    }

    public function get_deposit()
    {
      return $this->hasMany('App\deposit_bank','id_user_bank_account' ,'id');

    }


    public function get_withdrow_bank()
    {
      return $this->hasMany('App\withdrow_bank','id_user_bank_account' ,'id');

    }


    public function transactions_request()
    {
      return $this->hasMany('App\transactions_request','from_user_bank_account_id' ,'id');



    }


}
