<?php

namespace AboutYou\Cloud\AdminApi\Models;

/**
 * @property string $name The attribute name.
 * @property string $type The attribute type. In this case always simple.
 * @property string|int|bool $value The attribute value. In this case always an String, Integer or Boolean.
 * @property bool $isLocked Specifies if the attribute was locked via the Cloud Panel.
 * @property array $shopSpecific Used to override the attribute value for a specific Shop.
 */
class SimpleAttribute extends ApiObject
{
    protected $defaultValues = [
        'type' => 'simple',
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
    ];

    protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}