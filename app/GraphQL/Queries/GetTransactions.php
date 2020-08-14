<?php

namespace App\GraphQL\Queries;

class GetTransactions
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver

    return transactions_request::where('user_id','=',$args['search'])->get();

    }
}
