<?php

namespace App\GraphQL\Type;

use App\ProductImage;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProductsImagesType extends GraphQLType
{
    protected $attributes = [
        'name' => 'ProductsImages',
        'description' => 'A type product images',
        'model' => ProductImage::class
    ];

    public function fields()
    {
        return [
            'product_id' => [
                'type' => Type::int(),
                'description' => 'The product id of product'
            ],
            'image' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The image of product'
            ]
        ];
    }
}