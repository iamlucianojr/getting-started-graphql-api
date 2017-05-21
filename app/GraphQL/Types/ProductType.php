<?php

namespace App\GraphQL\Type;

use App\Product;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProductType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Products',
        'description' => 'A type Product',
        'model' => Product::class
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The id of product'
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'The title of product'
            ],
            'price' => [
                'type' => Type::int(),
                'description' => 'The price of product'
            ],
            'description' => [
                'type' => Type::string(),
                'description' => 'The description of product'
            ],
            'products_images' => [
                'type' => Type::listOf(GraphQL::type('products_images')),
                'description' => 'The images of product',
            ],
            'users' => [
                'type' => GraphQL::type('users'),
                'description' => 'The user of product'
            ]
        ];
    }
}
