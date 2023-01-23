<?php

namespace RajTechnologies\Tools\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseRepository implements EloquentRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getQuery()
    {
        return $this->model::query();
    }

    /**
     * @return Collection
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param array $attributes
     *
     * @return Model
     */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    /**
     * @param int $id
     * @param array $with
     * @param array $params
     * @return Model
     */
    public function find(int $id, array $with = [], array $params = []): ?Model
    {
        return $this->model->with($with)->findOrFail($id);;
    }


    /**
     * @param int $id
     * @return Model|null
     */
    public function findWithTrash(int $id): ?Model
    {
        return $this->model::query()->withTrashed()->find($id);
    }


    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id)
    {
        return $this->model::query()->find($id)->delete();
    }


    /**
     * @param int $id
     * @param array $attributes
     * @return Model
     */
    public function update(int $id, array $attributes)
    {
        $model = $this->find($id);
        return $model->update($attributes);
    }

    /**
     * @param int $id
     * @param array $attributes
     * @return Model
     */
    public function updateAndGet(int $id, array $attributes)
    {
        $model = $this->find($id);
        $model->update($attributes);
        $newModel = $this->find($id);
        return $newModel;
    }
}