<?php


namespace App\Repositories;


interface RepositoryInterface
{
    public function get($id);

    public function getAll();

    public function update($id,array $attribute);

    public function create(array $attribute);

    public function delete($id);
}
