<?php

namespace App\Repositories\Contracts;

interface BaseRepositoryInterface
{
    /**
     * Retrieve all data of repository
     */
    public function all();

    /**
     * Find data by id
     */
    public function find($id);

    /**
     * Save a new entity in repository
     */
    public function create(array $input);
    
    public function update($id, array $input);

    public function delete($id);
}
