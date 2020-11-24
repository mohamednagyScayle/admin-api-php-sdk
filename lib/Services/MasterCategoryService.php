<?php

namespace AboutYou\Cloud\AdminApi\Services;

use AboutYou\Cloud\AdminApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

class MasterCategoryService extends AbstractService
{
    /**
     * Description.
     *
     * @param array $options additional options like limit or filters
     *
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
     *
     * @return \AboutYou\Cloud\AdminApi\Models\MasterCategoryCollection
     */
    public function all($options = [])
    {
        return $this->request('get', '/master-categories', $options, \AboutYou\Cloud\AdminApi\Models\MasterCategoryCollection::class);
    }

    /**
     * Description.
     *
     * @param int $masterCategoryId
     * @param array $options additional options like limit or filters
     *
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
     *
     * @return \AboutYou\Cloud\AdminApi\Models\MasterCategory
     */
    public function get($masterCategoryId, $options = [])
    {
        return $this->request('get', $this->resolvePath('/master-categories/%s', $masterCategoryId), $options, \AboutYou\Cloud\AdminApi\Models\MasterCategory::class);
    }
}
