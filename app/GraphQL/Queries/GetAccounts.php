<?php

namespace App\GraphQL\Queries;
use App\user_bank_account;
class GetAccounts
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $total_deposit = user_bank_account::where('id','=',$args['search'])->get();
        return $total_deposit->total_deposit;
    }
}
