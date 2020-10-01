<?php

namespace AboutYou\Cloud\AdminApi\Models;

/**
 * @property int $id The id of the product created by Backbone Core.
 * @property string[] $problems If product is in problem state, the reasons are listed here.
 * @property string $referenceKey A key that uniquely identifies the product (e.g. a shirt in a specific color) within the tenant's ecosystem.
 * @property array $name The localized product name. At least the base language that is configured in Backbone Core is mandatory.
 * @property Master $master The master the product is attached to.
 * @property string $state The state of the product determined by the state evaluation process.
 * @property string[][] $categories The products category path. Sorted from root to leaf.
 * @property SimpleAttribute[]|SimpleAttributeList[]|LocalizedAttribute[]|LocalizedAttributeList[]|AdvancedAttribute[]|AdvancedAttributeList[] $attributes A list of attributes attached to the product.
 * @property ProductVariant[] $variants A list of product variants attached to the product.
 * @property ProductImage[] $images A list of product images attached to the product.
 */
class Product extends ApiObject
{
    protected $defaultValues = [
        'state' => 'live',
    ];

    protected $classMap = [
		'master' => \AboutYou\Cloud\AdminApi\Models\Master::class,
    ];

    protected $collectionClassMap = [
        'variants' => \AboutYou\Cloud\AdminApi\Models\ProductVariant::class,
        'images' => \AboutYou\Cloud\AdminApi\Models\ProductImage::class,
    ];

    protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
        'attributes' => [
            'discriminator' => 'type',
            'mapping' => [
                    'simple' => \AboutYou\Cloud\AdminApi\Models\SimpleAttribute::class,
                    'simpleList' => \AboutYou\Cloud\AdminApi\Models\SimpleAttributeList::class,
                    'localizedString' => \AboutYou\Cloud\AdminApi\Models\LocalizedAttribute::class,
                    'localizedStringList' => \AboutYou\Cloud\AdminApi\Models\LocalizedAttributeList::class,
                    'advanced' => \AboutYou\Cloud\AdminApi\Models\AdvancedAttribute::class,
                    'advancedList' => \AboutYou\Cloud\AdminApi\Models\AdvancedAttributeList::class,
            ]
        ],
    ];
}