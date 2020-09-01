<?php

namespace App\Repositories\Contracts;

interface BaseRepositoryInterface
{
    /**
     * Retrieve all data of repository
     */
    public function all($columns = ['*']);

    /**
     * Find data by id
     */
    public function find($id, $columns = ['*']);

    /**
     * Save a new entity in repository
     */
    public function create(array $input);

    public function delete($id);
}
