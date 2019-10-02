<?php


namespace App\Repositories;

abstract class BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->getModel();
    }

    abstract protected function setModel();

    protected function getModel()
    {
        $this->model = app()->make($this->setModel());
    }

    public function get($id)
    {
        return $this->model->find($id);
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function update($id, array $attribute)
    {
        // TODO: Implement update() method.
    }

    public function create(array $attribute)
    {
        // TODO: Implement create() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }


}
