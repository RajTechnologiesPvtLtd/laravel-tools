<?php

namespace RajTechnologies\Tools\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
* Interface EloquentRepositoryInterface
* @package App\Repositories
*/
interface EloquentRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all();

    /**
    * @param array $attributes
    * @return Model
    */
    public function create(array $attributes): Model;

    /**
     * @param int $id
     * @param array $with
     * @param array $params
     * @return Model
     */
    public function find(int $id, array $with = [], array $params = []): ?Model;

    /**
     * @param int $id
     * @return Model|null
     */
    public function findWithTrash(int $id): ?Model;


    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);


    /**
     * @param int $id
     * @param array $attributes
     * @return mixed
     */
    public function update(int $id, array $attributes);



    /**
     * @param int $id
     * @param array $attributes
     * @return mixed
     */
    public function updateAndGet(int $id, array $attributes);
}
