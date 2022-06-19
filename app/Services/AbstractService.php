<?php

namespace App\Services;

use Illuminate\Support\Facades\App;

abstract class AbstractService
{
    /**
     * @var \App\Repositories\AbstractRepository
     */
    protected $repo;

    /**
     * Retrieve Single Resource by complex filter.
     *
     * @param  array  $filters
     * @return \App\Repositories\AbstractRepository|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function retrieveSingleResourceBy($filters)
    {
        return $this->repo->findOneBy([], $filters);
    }

    /**
     * Retrieve Data.
     *
     * @param $id
     * @return \Illuminate\Support\Collection
     */
    public function retrieveSingleResource($id)
    {
        $item = $this->repo->findById($id);

        return $this->prepareItem($item);
    }

    /**
     * Retrieve Data.
     *
     * @param  array  $filter
     * @param  array  $with
     * @param  bool  $paginate
     * @param  int  $perPage
     * @return \Illuminate\Support\Collection
     * @throws \Exception
     */
    public function retrieveResource($filter = null, $with = [], bool $paginate = true, $perPage = 15, array $sort = [])
    {
        $filter = $filter ?? [];
        if ($paginate) {
            return $this->repo->paginate($with, $filter, $perPage, $sort);
        }

        return $this->repo->findAll($with, $filter, true, $this->orderBy());
    }

    /**
     * Make resource.
     *
     * @param  array  $requestData
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Throwable
     */
    public function makeResource($requestData = [])
    {
        $item = $this->repo->create($this->prepareRequest($requestData));

        return $this->prepareItem($item);
    }

    /**
     * Update resource.
     *
     * @param  array  $requestData
     * @param $item
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Throwable
     */
    public function updateResource($requestData, $item)
    {
        $item = $this->repo->update($item, $this->prepareRequest($requestData));

        return $this->prepareItem($item);
    }

    /**
     * Delete a resource by id
     *
     * @param $id
     * @return int
     * @throws \Throwable
     */
    public function deleteOneById($id)
    {
        return $this->repo->delete($id);
    }

    /**
     * Prepare item
     *
     * @param $item
     * @return mixed
     */
    protected function prepareItem($item)
    {
        return $item;
    }

    /**
     * Sort criteria for entity listing.
     *
     * @return array
     */
    protected function orderBy()
    {
        return [];
    }

    /**
     * Prepare request before saving
     *
     * @param  array  $request
     * @return array
     */
    protected function prepareRequest(array $request): array
    {
        return $request;
    }
}
