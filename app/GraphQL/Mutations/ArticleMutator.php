<?php

namespace App\GraphQL\Mutations;

use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class ArticleMutator
{
    /**
     * Return a value for the field.
     *
     * @param  null  $rootValue
     * @param  mixed[]  $args
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context 
     * @return mixed
     */
    public function __invoke($rootValue, array $args, GraphQLContext $context)
    {
        $article = new \App\Article($args);
        $context->user()->articles()->save($article);

        return $article;
    }
}
