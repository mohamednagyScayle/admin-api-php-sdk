<?php

namespace AboutYou\Cloud\AdminApi\Models;

/**
 * @property string $status Phases of order e.g: cancelled , delivered
 * @property OrderDetailedStatus $detailedStatus
 */
class OrderStatus extends ApiObject
{
    protected $defaultValues = [
    ];

    protected $classMap = [
        'detailedStatus' => \AboutYou\Cloud\AdminApi\Models\OrderDetailedStatus::class,
    ];

    protected $collectionClassMap = [
    ];

    protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}
