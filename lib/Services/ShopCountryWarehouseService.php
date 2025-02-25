<?php

namespace AboutYou\Cloud\AdminApi\Services;

use AboutYou\Cloud\AdminApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

class ShopCountryWarehouseService extends AbstractService
{
    /**
     * @param string $shopKey
     * @param string $countryCode
     * @param \AboutYou\Cloud\AdminApi\Models\ShopCountryWarehouse $model the model to create or update
     * @param array $options additional options like limit or filters
     *
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
     *
     * @return \AboutYou\Cloud\AdminApi\Models\ShopCountryWarehouse
     */
    public function create($shopKey, $countryCode, $model, $options = [])
    {
        return $this->request(
            'post',
            $this->resolvePath('/shops/%s/countries/%s/warehouses', $shopKey, $countryCode),
            $options,
            [],
            \AboutYou\Cloud\AdminApi\Models\ShopCountryWarehouse::class,
            $model
        );
    }

    /**
     * @param string $shopKey
     * @param string $countryCode
     * @param \AboutYou\Cloud\AdminApi\Models\Identifier $shopCountryWarehouseIdentifier
     * @param \AboutYou\Cloud\AdminApi\Models\ShopCountryWarehouse $model the model to create or update
     * @param array $options additional options like limit or filters
     *
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
     *
     * @return \AboutYou\Cloud\AdminApi\Models\ShopCountryWarehouse
     */
    public function update($shopKey, $countryCode, $shopCountryWarehouseIdentifier, $model, $options = [])
    {
        return $this->request(
            'put',
            $this->resolvePath('/shops/%s/countries/%s/warehouses/%s', $shopKey, $countryCode, $shopCountryWarehouseIdentifier),
            $options,
            [],
            \AboutYou\Cloud\AdminApi\Models\ShopCountryWarehouse::class,
            $model
        );
    }

    /**
     * @param string $shopKey
     * @param string $countryCode
     * @param \AboutYou\Cloud\AdminApi\Models\Identifier $shopCountryWarehouseIdentifier
     * @param array $options additional options like limit or filters
     *
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
     */
    public function delete($shopKey, $countryCode, $shopCountryWarehouseIdentifier, $options = [])
    {
        $this->request(
            'delete',
            $this->resolvePath('/shops/%s/countries/%s/warehouses/%s', $shopKey, $countryCode, $shopCountryWarehouseIdentifier),
            $options,
            [],
            null,
            null
        );
    }
}
