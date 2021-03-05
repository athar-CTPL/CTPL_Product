<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class AdminRepository implements AdminRepositoryInterface
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
}
