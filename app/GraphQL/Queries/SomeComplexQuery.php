<?php

namespace App\GraphQL\Queries;
use App\Models\Tag;
class SomeComplexQuery
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return Tag::where('name','=',$args['search'])->get();
    }
}
