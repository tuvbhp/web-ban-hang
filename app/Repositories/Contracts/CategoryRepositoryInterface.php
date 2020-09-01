<?php
namespace App\Repositories\Contracts;


interface CategoryRepositoryInterface extends  BaseRepositoryInterface
{
    public function getAllCategory();
    public function store(array $input);
    public function update( $input, $id);
}
