<?php
// app/Repositories/EloquentRepository.php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class EloquentRepository implements EloquentRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $item = $this->model->find($id);

        if ($item) {
            $item->update($data);
            return $item;
        }

        return null;
    }

    public function delete($id)
    {
        $item = $this->model->find($id);

        if ($item) {
            $item->delete();
            return true;
        }

        return false;
    }
}
